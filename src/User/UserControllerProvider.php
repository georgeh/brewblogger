<?php

/**
 * @file
 * Brew Recipe Controller Provider.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 28 August, 2015
 */

namespace BrewBlogger\User;
use Silex\ControllerProviderInterface;
use Silex\Application;
class UserControllerProvider implements ControllerProviderInterface {
  public function connect(Application $app) {
    /** @var \Silex\ControllerCollection $controllers */
    $controllers = $app['controllers_factory'];
    $controllers->get('/login', 'user.controller:login')
      ->bind('user.login');
    $controllers->get('/login_check', 'user.controller:checkLogin')
      ->bind('user.login_check');
    $controllers->get('/logout', 'user.controller:logout')
      ->bind('user.logout');
    $controllers->get('/list', 'user.controller:listUsers')
      ->bind('user.list');
    return $controllers;
  }

}
