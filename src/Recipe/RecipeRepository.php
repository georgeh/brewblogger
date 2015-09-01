<?php

/**
 * @file
 * Brew Recipe Repository
 *
 * @author Samuel Leathers
 *
 * @copyright Samuel Leathers, 29 August, 2015
 */

namespace BrewBlogger\Recipe;

use BrewBlogger\recipe\Entity\Recipe;

class RecipeRepository {
  private $db;
  public function __construct(Connection $db) {
    $this->db = $db;
  }
  public function findOneByID($id) {
    return $this->db->fetchAssoc('SELECT * FROM recipes WHERE id = ?', array($id));
  }
  public function findAll() {
    $recipes = [];
    $result = $this->db->fetchAll('SELECT * FROM recipes');
    foreach ($result as $row) {
      $recipe = new Recipe($row);
      $recipes[] = $recipe;
    }
    return $recipes;
  }

}
