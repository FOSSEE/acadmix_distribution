<?php

namespace Drupal\department\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the department module.
 */
class DepartmentControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "department DepartmentController's controller functionality",
      'description' => 'Test Unit for module department and controller DepartmentController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests department functionality.
   */
  public function testDepartmentController() {
    // Check that the basic functions of module department.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
