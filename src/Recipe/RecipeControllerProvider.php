<?php

/**
 * @file
 * Brew Recipe Controller Provider.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 28 August, 2015
 */

namespace BrewBlogger\Recipe;
use Silex\ControllerProviderInterface;
use Silex\Application;
class RecipeControllerProvider implements ControllerProviderInterface {
  public function connect(Application $app) {
    /** @var \Silex\ControllerCollection $controllers */
    $controllers = $app['controllers_factory'];
    $controllers->get('/list', 'brewrecipes.controller:listRecipes')
      ->bind('brewrecipes.list');
    return $controllers;
  }

}
