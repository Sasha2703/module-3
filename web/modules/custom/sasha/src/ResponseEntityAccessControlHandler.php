<?php

namespace Drupal\sasha;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Response entity.
 *
 * @see \Drupal\sasha\Entity\ResponseEntity.
 */
class ResponseEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\sasha\Entity\ResponseEntityInterface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished response entities');
        }

        return AccessResult::allowedIfHasPermission($account, 'view published response entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit response entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete response entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add response entities');
  }

}
