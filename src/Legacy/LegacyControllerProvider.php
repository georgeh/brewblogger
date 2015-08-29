<?php

/**
 * @file
 * Brew Recipe Controller Provider.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 28 August, 2015
 */

namespace BrewBlogger\Legacy;
use Silex\ControllerProviderInterface;
use Silex\Application;
class LegacyControllerProvider implements ControllerProviderInterface {
  public function connect(Application $app) {
    /** @var \Silex\ControllerCollection $controllers */
    $controllers = $app['controllers_factory'];
    $controllers->match('/', 'legacy.controller:defaultRoute')
      ->bind('legacy.default');
    return $controllers;
  }

}
