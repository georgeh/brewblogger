<?php

/**
 * @file
 * Brew Recipe Service Provider.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 29 August, 2015
 */

namespace BrewBlogger\Recipe;

use Silex\ServiceProviderInterface;
use Silex\Application;
class RecipeServiceProvider implements ServiceProviderInterface {
  public function register(Application $app) {
    $app['brewrecipes.controller'] = $app->share(function () use ($app) {
        return new RecipeController($app);
      });
  }
  public function boot(Application $app)
  {
  }
}
