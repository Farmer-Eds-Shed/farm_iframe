<?php
 
namespace Drupal\farm_iframe\Plugin\Field\FieldWidget;
 
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;
 
/**
 * Plugin implementation of the 'iframe' widget.
 *
 * @FieldWidget(
 *   id = "iframe",
 *   module = "iframe",
 *   label = @Translation("iFrame Panel URL"),
 *   field_types = {
 *     "iFrame"
 *   }
 * )
 */
class IframeWidget extends WidgetBase {
 
  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $value = isset($items[$delta]->value) ? $items[$delta]->value : '';
    $element += array(
      '#type' => 'textfield',
      '#default_value' => $value,
      '#size' => 32,
      '#maxlength' => 256,
      '#element_validate' => array(
        array($this, 'validate'),
      ),
    );
    return array('value' => $element);
  }
 
  /**
   * Validate the text field.
   */
  public function validate($element, FormStateInterface $form_state) {
    $value = $element['#value'];
    if (strlen($value) == 0) {
      $form_state->setValueForElement($element, '');
      return;
    }
  }
 
}