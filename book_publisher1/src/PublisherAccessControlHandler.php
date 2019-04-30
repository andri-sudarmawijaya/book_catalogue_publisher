<?php

namespace Drupal\book_publisher;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Publisher entity.
 *
 * @see \Drupal\book_publisher\Entity\Publisher.
 */
class PublisherAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\book_publisher\Entity\PublisherInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished publisher entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published publisher entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit publisher entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete publisher entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add publisher entities');
  }

}
