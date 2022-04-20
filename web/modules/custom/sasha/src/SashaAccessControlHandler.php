<?php

namespace Drupal\sasha;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Defines the access control handler for the sasha entity type.
 */
class SashaAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view sasha');

      case 'update':
        return AccessResult::allowedIfHasPermissions($account, ['edit sasha', 'administer sasha'], 'OR');

      case 'delete':
        return AccessResult::allowedIfHasPermissions($account, ['delete sasha', 'administer sasha'], 'OR');

      default:
        // No opinion.
        return AccessResult::neutral();
    }

  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermissions($account, ['create sasha', 'administer sasha'], 'OR');
  }

}
