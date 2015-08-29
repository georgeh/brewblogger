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
class LegacyController {
  /**
   * @var Application
   */
  protected $app;
  public function __construct(Application $app) {
    $this->app = $app;
  }
  public function defaultRoute(Request $request) {
    try {
      ob_start();
      include '../index.php';
      $page = ob_get_contents();
      ob_end_clean();
    }
    catch (Exception $e) {
      var_dump($e);
    }
    return $page;
  }
}
