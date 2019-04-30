<?php

/**
 * @file
 * Contains publisher.page.inc.
 *
 * Page callback for Publisher entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Publisher templates.
 *
 * Default template: publisher.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_publisher(array &$variables) {
  // Fetch Publisher Entity Object.
  $publisher = $variables['elements']['#publisher'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
