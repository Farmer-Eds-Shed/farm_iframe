<?php

namespace Drupal\farm_iframe\Plugin\Menu;

use Drupal\Core\Menu\MenuLinkDefault;

class FullView2MenuLink extends MenuLinkDefault {

  /**
   * {@inheritdoc}
   */
  public function getTitle() {
    $title = \Drupal::config('farm_iframe.settings')->get('iframe_2_title');
    return "$title";
  }

  public function isEnabled() {
    $en = \Drupal::config('farm_iframe.settings')->get('iframe_2_en');

    if ($en != 1) {
      return FALSE;
    }

    return TRUE;
  }

}