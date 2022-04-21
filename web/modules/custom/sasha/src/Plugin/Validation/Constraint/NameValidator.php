<?php

namespace Drupal\sasha\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the UniqueInteger constraint.
 */
class NameValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($items, Constraint $constraint) {
    foreach ($items as $item) {
      if (strlen($item->value) < 2) {
        $this->context->addViolation($constraint->notValid, ['%value' => $item->value]);
      }
    }
  }

}
