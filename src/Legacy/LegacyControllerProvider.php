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
    $controllers->match('/admin', 'legacy.controller:admin')
      ->bind('legacy.admin');
    $controllers->match('/admin/index.php', 'legacy.controller:admin');
    $controllers->match('/admin/includes/admin_icons.inc.php', 'legacy.controller:adminIcons');
    $controllers->match('/admin/includes/upload_image.inc.php', 'legacy.controller:adminUploadImage');
    $controllers->match('/login/check', 'legacy.controller:login')
      ->bind('legacy.login');
    $controllers->match('/logout', 'legacy.controller:logout')
      ->bind('legacy.logout');
    $controllers->match('/export/beerxml', 'legacy.controller:exportBeerXML')
      ->bind('legacy.export_beerxml');
    $controllers->match('/export/csv', 'legacy.controller:exportCSV')
      ->bind('legacy.export_csv');
    return $controllers;
  }

}
