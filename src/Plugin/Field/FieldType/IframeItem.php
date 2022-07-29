<?php
 
namespace Drupal\farm_iframe\Plugin\Field\FieldType;
 
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
 
/**
 * Plugin implementation of the 'iFrame' field type.
 *
 * @FieldType(
 *   id = "iframe",
 *   label = @Translation("Embed iframe Panel"),
 *   module = "iframe",
 *   description = @Translation("Show a panel from a iframe instance"),
 *   default_widget = "iframe",
 *   default_formatter = "iframe_panel"
 * )
 */
class IframeItem extends FieldItemBase {
  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return array(
      'columns' => array(
        'value' => array(
          'type' => 'text',
          'size' => 'tiny',
          'not null' => FALSE,
        ),
      ),
    );
  }
 
  /**
   * {@inheritdoc}
   */
  public function isEmpty() {
    $value = $this->get('value')->getValue();
    return $value === NULL || $value === '';
  }
 
  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties['value'] = DataDefinition::create('string')
      ->setLabel(t('iFrame URL'));
 
    return $properties;
  }
 
}