<?php

namespace Drupal\farm_iframe\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'iframe_panel' formatter.
 *
 * @FieldFormatter(
 *   id = "iframe_panel",
 *   module = "farm_iframe",
 *   label = @Translation("Displays iframe Panel"),
 *   field_types = {
 *     "farm_iframe"
 *   }
 * )
 */
class IframePanelFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = array();

    foreach ($items as $delta => $item) {
        $elements[$delta] = array(
          '#theme' => 'farm_iframe_panel_formatter',
          '#url' => $item->value
        );

    }

    return $elements;
  }

}