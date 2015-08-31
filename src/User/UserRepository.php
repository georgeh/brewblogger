<?php

/**
 * @file
 * User Repository
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 29 August, 2015
 */

namespace BrewBlogger\User;

use Doctrine\DBAL\Connection;

class UserRepository {
  private $db;
  public function __construct(Connection $db) {
    $this->db = $db;

  }
  public function findAll() {
    $users = $this->db->fetchAll('SELECT * FROM users');
    return $users;

  }
}
