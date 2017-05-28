<?php

namespace Drupal\ms_ajax_form_example\Button;

use Drupal\ms_ajax_form_example\Step\StepsEnum;

/**
 * Class StepOneNextButton.
 *
 * @package Drupal\ms_ajax_form_example\Button
 */
class StepOneNextButton extends BaseButton {

  /**
   * {@inheritdoc}
   */
  public function getKey() {
    return 'next';
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#type' => 'submit',
      '#value' => t('Next'),
      '#goto_step' => StepsEnum::STEP_TWO,
    ];
  }

}
