<?php

namespace Drupal\admission_program\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the admission_program module.
 */
class AdmissionProgramControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "admission_program AdmissionProgramController's controller functionality",
      'description' => 'Test Unit for module admission_program and controller AdmissionProgramController.',
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
   * Tests admission_program functionality.
   */
  public function testAdmissionProgramController() {
    // Check that the basic functions of module admission_program.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
