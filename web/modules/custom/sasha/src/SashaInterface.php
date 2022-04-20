<?php

namespace Drupal\sasha;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a sasha entity type.
 */
interface SashaInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the sasha title.
   *
   * @return string
   *   Title of the sasha.
   */
  public function getTitle();

  /**
   * Sets the sasha title.
   *
   * @param string $title
   *   The sasha title.
   *
   * @return \Drupal\sasha\SashaInterface
   *   The called sasha entity.
   */
  public function setTitle($title);

  /**
   * Gets the sasha creation timestamp.
   *
   * @return int
   *   Creation timestamp of the sasha.
   */
  public function getCreatedTime();

  /**
   * Sets the sasha creation timestamp.
   *
   * @param int $timestamp
   *   The sasha creation timestamp.
   *
   * @return \Drupal\sasha\SashaInterface
   *   The called sasha entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the sasha status.
   *
   * @return bool
   *   TRUE if the sasha is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the sasha status.
   *
   * @param bool $status
   *   TRUE to enable this sasha, FALSE to disable.
   *
   * @return \Drupal\sasha\SashaInterface
   *   The called sasha entity.
   */
  public function setStatus($status);

}
