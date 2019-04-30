<?php

namespace Drupal\book_publisher\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Publisher entities.
 *
 * @ingroup book_publisher
 */
interface PublisherInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Publisher name.
   *
   * @return string
   *   Name of the Publisher.
   */
  public function getName();

  /**
   * Sets the Publisher name.
   *
   * @param string $name
   *   The Publisher name.
   *
   * @return \Drupal\book_publisher\Entity\PublisherInterface
   *   The called Publisher entity.
   */
  public function setName($name);

  /**
   * Gets the Publisher creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Publisher.
   */
  public function getCreatedTime();

  /**
   * Sets the Publisher creation timestamp.
   *
   * @param int $timestamp
   *   The Publisher creation timestamp.
   *
   * @return \Drupal\book_publisher\Entity\PublisherInterface
   *   The called Publisher entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Publisher published status indicator.
   *
   * Unpublished Publisher are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Publisher is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Publisher.
   *
   * @param bool $published
   *   TRUE to set this Publisher to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\book_publisher\Entity\PublisherInterface
   *   The called Publisher entity.
   */
  public function setPublished($published);

}
