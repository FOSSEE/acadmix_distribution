<?php

namespace Drupal\legal_forms1\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the legal_forms1 module.
 */
class LegalFormsControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "legal_forms1 LegalFormsController's controller functionality",
      'description' => 'Test Unit for module legal_forms1 and controller LegalFormsController.',
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
   * Tests legal_forms1 functionality.
   */
  public function testLegalFormsController() {
    // Check that the basic functions of module legal_forms1.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
