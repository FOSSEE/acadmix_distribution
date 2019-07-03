<?php

namespace Drupal\company\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the company module.
 */
class CompanyControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "company CompanyController's controller functionality",
      'description' => 'Test Unit for module company and controller CompanyController.',
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
   * Tests company functionality.
   */
  public function testCompanyController() {
    // Check that the basic functions of module company.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
