<?php

/**
 * @file
 * Brew Recipe Controller.
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 28 August, 2015
 */


namespace BrewBlogger\User;
use BrewBlogger\Application;
use BrewBlogger\User\BrewRecipeRepository;
use BrewBlogger\User\UserProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
class UserController {
  /**
   * @var Application
   */
  protected $app;
  public function __construct(Application $app) {
    $this->app = $app;
  }
  public function login(Request $request) {
    return $this->app['twig']->render('login.html.twig', array(
      'error' => $this->app['security.last_error']($request),
      'last_username' => $this->app['session']->get('_security.last_username'),
    ));
  }
  public function logout(Request $request) {
  }
  public function listUsers(Request $request) {
    return new JsonResponse($this->app['user.repository']->findAll());
  }
}
