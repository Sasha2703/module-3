<?php

namespace Drupal\sasha\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for sasha routes.
 */
class SashaController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
