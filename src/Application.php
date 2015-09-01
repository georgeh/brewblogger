<?php

/**
 * @file
 * BrewBlogger Application Class.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 28 August, 2015
 */

namespace BrewBlogger;
use BrewBlogger\Recipe\RecipeControllerProvider;
use BrewBlogger\Recipe\RecipeServiceProvider;
use BrewBlogger\Legacy\LegacyControllerProvider;
use BrewBlogger\Legacy\LegacyServiceProvider;
use BrewBlogger\User\UserControllerProvider;
use BrewBlogger\User\UserProvider;
use BrewBlogger\User\UserServiceProvider;
use BrewBlogger\User\UserRepository;
use Silex\Application as SilexApplication;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\SecurityServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Igorw\Silex\ConfigServiceProvider;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
use Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\KernelEvents;
class Application extends SilexApplication {
  public function __construct() {
    parent::__construct();
    $this->registerProviders($this);
    $this->registerServices($this);
    $this->registerSecurityFirewalls($this);
    $this->registerRoutes($this);
    $this->createRoutes($this);
    //$this->registerErrorListeners($this);
    $this->registerBeforeListeners($this);
    $this->registerViewListeners($this);
    $this->registerAfterListeners($this);
  }
  protected function registerAfterListeners(Application $app) {
    // Add caching headers as appropriate, including sending an HTTP 304
    // Not Modified if appropriate.  Note: This does mean that we generate
    // the whole response before deciding we don't need to send it, but
    // since there is dependent data in the response (_embedded resources)
    // we can't just use the primary resource's hash for the ETag.
    $app->after(function (Request $request, Response $response) use ($app) {
      // In debug mode, disable all caching.
      if ($app['debug']) {
        return;
      }
      $cache_lifetime = $app['cache.lifetime'] ?: 0;
      $response
        ->setTtl($cache_lifetime)
        ->setClientTtl($cache_lifetime);
      $expires = new \DateTime("now +{$cache_lifetime} seconds", new \DateTimeZone('UTC'));
      $response->setExpires($expires);
      $etag = sha1($response->getContent());
      $response->setEtag($etag);
      if ($response->isNotModified($request)) {
        $response->setNotModified();
      }
    }, 0);
  }
  protected function registerBeforeListeners(Application $app) {
  }
  protected function registerViewListeners(Application $app) {
    $app->register(new TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views',
    ));
  }
  protected function registerErrorListeners(Application $app) {
    $app->error(function (\Exception $e, $code) {
    });

  }
  protected function registerServices(Application $app) {
    $app->register(new RecipeServiceProvider());
    $app->register(new LegacyServiceProvider());
    $app->register(new UserServiceProvider());
    $app['user.repository'] = $app->share(function($app) {
      return new UserRepository($app['db']);
    });

  }
  protected function registerProviders(Application $app) {
    // Load the Generator service. Nothing is there by default, remember?
    $app->register(new UrlGeneratorServiceProvider());
    // Session Provider.
    $app->register(new SessionServiceProvider());

    // Service controllers FTW!
    $app->register(new ServiceControllerServiceProvider());
    // Load the installation-specific configuration file. This should never be in Git.
    $app->register(new ConfigServiceProvider(__DIR__ . "/../config/settings.json"));
    // Load environment-specific configuration.
    $app->register(new ConfigServiceProvider(__DIR__ . "/../config/{$app['environment']}.json"));

    // Doctrine Provider. Needs to come after config.
    $app->register(new DoctrineServiceProvider(), array(
      'db.options' => $app['database'],
    ));
  }
  protected function registerSecurityFirewalls(Application $app) {
    // Load the Security Service Provider.
    $app->register(new SecurityServiceProvider(),[
      'security.firewalls' => array(
        'default' => array(
          'pattern' => '^.*$',
          'anonymous' => TRUE,
          'form' => array('login_path' => '/user/login', 'check_path' => '/user/login_check'),
          'logout' => array('logout_path' => '/user/logout'),
          'users' => $app->share(function() use ($app) {
            return new UserProvider($app['db']);
          }),
        ),

      ),
      'security.role_hierarchy' => array(
        'ROLE_ADMIN' => 'ROLE_USER',
      ),
      'security.access_rules' => array(
        array('^/login$', 'IS_AUTHENTICATED_ANONYMOUSLY'),
        array('^/admin$', 'ROLE_ADMIN'),
        array('^/user$', 'ROLE_USER'),
        array('^.*$', 'IS_AUTHENTICATED_ANONYMOUSLY'),
      ),
    ]);
  }
  protected function registerRoutes(Application $app) {
    $app->mount('/', new RecipeControllerProvider());
    $app->mount('/', new LegacyControllerProvider());
    $app->mount('/user', new UserControllerProvider());
  }
  protected function createRoutes(Application $app) {
  }
}
