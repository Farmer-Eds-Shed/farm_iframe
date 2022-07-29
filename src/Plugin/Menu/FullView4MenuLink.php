<?php

namespace Drupal\farm_iframe\Plugin\Menu;

use Drupal\Core\Menu\MenuLinkDefault;

class FullView4MenuLink extends MenuLinkDefault {

  /**
   * {@inheritdoc}
   */
  public function getTitle() {
    $title = \Drupal::config('farm_iframe.settings')->get('iframe_4_title');
    return "$title";
  }

  public function isEnabled() {
    $en = \Drupal::config('farm_iframe.settings')->get('iframe_4_en');

    if ($en != 1) {
      return FALSE;
    }

    return TRUE;
  }

}