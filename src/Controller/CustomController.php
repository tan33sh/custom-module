<?php

namespace Drupal\custom\Controller;

/**
 * CustomController Class.
 */
class CustomController {

  /**
   * To display text.
   */
  public function text() {

    return array(
    '#title' => "This is a custom module",
    '#markup' => 'Functional testing of this module.'
    );

  }

}
