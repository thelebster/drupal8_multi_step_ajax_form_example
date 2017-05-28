<?php

namespace Drupal\ms_ajax_form_example\Button;

use Drupal\ms_ajax_form_example\Step\StepsEnum;

/**
 * Class StepThreePreviousButton.
 *
 * @package Drupal\ms_ajax_form_example\Button
 */
class StepThreePreviousButton extends BaseButton {

  /**
   * {@inheritdoc}
   */
  public function getKey() {
    return 'previous';
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#type' => 'submit',
      '#value' => t('Previous'),
      '#goto_step' => StepsEnum::STEP_TWO,
      '#skip_validation' => TRUE,
    ];
  }

}
