<?php

/**
 * @file
 * Brew Recipe Service Provider.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 29 August, 2015
 */

namespace BrewBlogger\Legacy;

use Silex\ServiceProviderInterface;
use Silex\Application;
class LegacyServiceProvider implements ServiceProviderInterface {
  public function register(Application $app) {
    $app['legacy.controller'] = $app->share(function () use ($app) {
        return new LegacyController($app);
      });
  }
  public function boot(Application $app)
  {
  }
}
