<?php

namespace Drupal\farm_iframe\Plugin\Menu;

use Drupal\Core\Menu\MenuLinkDefault;

class FullView1MenuLink extends MenuLinkDefault {

  /**
   * {@inheritdoc}
   */
  public function getTitle() {
    $title = \Drupal::config('farm_iframe.settings')->get('iframe_1_title');
    return "$title";
  }

  public function isEnabled() {
    $en = \Drupal::config('farm_iframe.settings')->get('iframe_1_en');

    if ($en != 1) {
      return FALSE;
    }

    return TRUE;
  }
  
}