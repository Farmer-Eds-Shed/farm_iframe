<?php

namespace Drupal\farm_iframe\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides an iFrame settings form.
 */
class IframeSettingsForm extends ConfigFormbase {

  /**
   * Config settings.
   *
   * @var string
   */
  const SETTINGS = 'farm_iframe.settings';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'farm_iframe_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      static::SETTINGS,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateinterface $form_state) {
    $config = $this->config(static::SETTINGS);

    // Add the iframe_url option.
    $form['iframe_1_url'] = [
      '#type' => 'url',
      '#title' => $this->t('iFrame 1 URL'),
      '#default_value' => $config->get('iframe_1_url'),
    ];
	
    // Add the custom Title option.
    $form['iframe_1_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('iFrame 1 title'),
      '#default_value' => $config->get('iframe_1_title'),
	 ];
	 
    // Add enable option.
    $form['iframe_1_en'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('iframe 1 enable'),
      '#description' => $this->t('Enable iFrame 1 in the sidebar.'),
      '#default_value' => $config->get('iframe_1_en'),
	 ];
	
    // Add the iframe_url option.
    $form['iframe_2_url'] = [
      '#type' => 'url',
      '#title' => $this->t('iFrame 2 URL'),
      '#default_value' => $config->get('iframe_2_url'),
    ];
	
    // Add the custom Title option.
    $form['iframe_2_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('iFrame 2 title'),
      '#default_value' => $config->get('iframe_2_title'),
	 ];
	 
    // Add enable option.
    $form['iframe_2_en'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('iframe 2 enable'),
      '#description' => $this->t('Enable iFrame 2 in the sidebar.'),
      '#default_value' => $config->get('iframe_2_en'),
	 ];
	 
    // Add the iframe_url option.
    $form['iframe_3_url'] = [
      '#type' => 'url',
      '#title' => $this->t('iFrame 3 URL'),
      '#default_value' => $config->get('iframe_3_url'),
    ];
	
    // Add the custom Title option.
    $form['iframe_3_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('iFrame 3 title'),
      '#default_value' => $config->get('iframe_3_title'),
	 ];
	 
    // Add enable option.
    $form['iframe_3_en'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('iframe 3 enable'),
      '#description' => $this->t('Enable iFrame 3 in the sidebar.'),
      '#default_value' => $config->get('iframe_3_en'),
	 ];
	
    // Add the iframe_url option.
    $form['iframe_4_url'] = [
      '#type' => 'url',
      '#title' => $this->t('iFrame 4 URL'),
      '#default_value' => $config->get('iframe_4_url'),
    ];
	
    // Add the custom Title option.
    $form['iframe_4_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('iFrame 4 title'),
      '#default_value' => $config->get('iframe_4_title'),
	 ];
	 
    // Add enable option.
    $form['iframe_4_en'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('iframe 4 enable'),
      '#description' => $this->t('Enable iFrame 4 in the sidebar.'),
      '#default_value' => $config->get('iframe_4_en'),
	 ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->configFactory->getEditable(static::SETTINGS)
      ->set('iframe_1_url', $form_state->getValue('iframe_1_url'))
      ->set('iframe_2_url', $form_state->getValue('iframe_2_url'))
      ->set('iframe_3_url', $form_state->getValue('iframe_3_url'))
      ->set('iframe_4_url', $form_state->getValue('iframe_4_url'))
	  
	  ->set('iframe_1_title', $form_state->getValue('iframe_1_title'))
      ->set('iframe_2_title', $form_state->getValue('iframe_2_title'))
	  ->set('iframe_3_title', $form_state->getValue('iframe_3_title'))
      ->set('iframe_4_title', $form_state->getValue('iframe_4_title'))	  
	  
	  ->set('iframe_1_en', $form_state->getValue('iframe_1_en'))
	  ->set('iframe_2_en', $form_state->getValue('iframe_2_en'))
	  ->set('iframe_3_en', $form_state->getValue('iframe_3_en'))
	  ->set('iframe_4_en', $form_state->getValue('iframe_4_en'))
	  
	  ->save();
	\Drupal::service('cache.render')->invalidateAll();
    parent::submitForm($form, $form_state);
	
  }

}
