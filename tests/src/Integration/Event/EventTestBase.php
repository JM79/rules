<?php

/**
 * @file
 * Contains \Drupal\Tests\rules\Integration\Event\EventTestBase.
 */

namespace Drupal\Tests\rules\Integration\Event;

use Drupal\rules\Engine\RulesEventManager;
use Drupal\Tests\rules\Integration\RulesEntityIntegrationTestBase;

/**
 * Base class for testing Rules Event definitions.
 */
abstract class EventTestBase extends RulesEntityIntegrationTestBase {

  /**
   * The Rules event plugin manager.
   *
   * @var \Drupal\rules\Engine\RulesEventManager
   */
  protected $eventManager;

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
    $this->moduleHandler->expects($this->any())
      ->method('getModuleDirectories')
      ->willReturn(['rules' => __DIR__ . '/../../../..']);
    $this->eventManager = new RulesEventManager($this->moduleHandler);
  }

}
