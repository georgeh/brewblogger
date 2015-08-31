<?php

/**
 * @file
 * Brew Recipe Service Provider.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 29 August, 2015
 */

namespace BrewBlogger\User;

use Silex\ServiceProviderInterface;
use Silex\Application;
class UserServiceProvider implements ServiceProviderInterface {
  public function register(Application $app) {
    $app['user.controller'] = $app->share(function () use ($app) {
        return new UserController($app);
      });
  }
  public function boot(Application $app)
  {
  }
}
