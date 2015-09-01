<?php

/**
 * @file
 * Brew Recipe Controller.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 28 August, 2015
 */


namespace BrewBlogger\Recipe;
use BrewBlogger\Application;
use BrewBlogger\Recipe\RecipeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class RecipeController {
  /**
   * @var Application
   */
  protected $app;
  public function __construct(Application $app) {
    $this->app = $app;
  }
  public function listRecipes(Request $request) {
    return 'coming soon...';
  }
}
