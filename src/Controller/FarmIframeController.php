<?php

namespace Drupal\farm_iframe\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An iframe controller.
 */
class FarmIframeController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function fullView1() {
    $iframe_1_url = \Drupal::config('farm_iframe.settings')->get('iframe_1_url');

    $build = [
      '#theme' => 'farm_iframe_full_view_1',
      '#url' => $iframe_1_url
    ];
    return $build;
  }
  
  public function fullView2() {
    $iframe_2_url = \Drupal::config('farm_iframe.settings')->get('iframe_2_url');

    $build = [
      '#theme' => 'farm_iframe_full_view_2',
      '#url' => $iframe_2_url
    ];
    return $build;
  }
  
  public function fullView3() {
    $iframe_3_url = \Drupal::config('farm_iframe.settings')->get('iframe_3_url');

    $build = [
      '#theme' => 'farm_iframe_full_view_3',
      '#url' => $iframe_3_url
    ];
    return $build;
  }
  
  public function fullView4() {
    $iframe_4_url = \Drupal::config('farm_iframe.settings')->get('iframe_4_url');

    $build = [
      '#theme' => 'farm_iframe_full_view_4',
      '#url' => $iframe_4_url
    ];
    return $build;
  }

}
