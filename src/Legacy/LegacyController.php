<?php

/**
 * @file
 * Brew Recipe Controller.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 28 August, 2015
 */


namespace BrewBlogger\Legacy;
use BrewBlogger\Application;
use BrewBlogger\Legacy\BrewRecipeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
class LegacyController {
  /**
   * @var Application
   */
  protected $app;
  public function __construct(Application $app) {
    $this->app = $app;
  }
  public function defaultRoute(Request $request) {
    ob_start();
    include '../index.php';
    $page = ob_get_contents();
    ob_end_clean();
    return $page;
  }
  public function login(Request $request) {
    ob_start();
    include '../includes/logincheck.inc.php';
    $page = ob_get_contents();
    ob_end_clean();
    return $page;
  }
  public function logout(Request $request) {
    session_start();
    session_destroy();
    return new RedirectResponse('/');
  }
  public function admin(Request $request) {
    ob_start();
    include '../admin/index.php';
    $page = ob_get_contents();
    ob_end_clean();
    return $page;
  }
  public function adminIcons(Request $request) {
    ob_start();
    include '../admin/includes/admin_icons.inc.php';
    $page = ob_get_contents();
    ob_end_clean();
    return $page;
  }
  public function adminUploadImage(Request $request) {
    ob_start();
    include '../admin/includes/upload_image.inc.php';
    $page = ob_get_contents();
    ob_end_clean();
    return $page;
  }
  public function exportBeerXML(Request $request) {
    ob_start();
    include '../includes/output_beer_xml.inc.php';
    $page = ob_get_contents();
    ob_end_clean();
    return $page;
  }
  public function exportCSV(Request $request) {
    ob_start();
    include '../admin/includes/excel_download.inc.php';
    $page = ob_get_contents();
    ob_end_clean();
    return $page;
  }
}
