<?php

/**
 * @file
 * Contains response_entity.page.inc.
 *
 * Page callback for Response entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Response templates.
 *
 * Default template: response_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_response_entity(array &$variables) {
  // Fetch ResponseEntity Entity Object.
  $response_entity = $variables['elements']['#response_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
