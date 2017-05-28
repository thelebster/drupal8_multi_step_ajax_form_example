<?php

namespace Drupal\ms_ajax_form_example\Button;

use Drupal\ms_ajax_form_example\Step\StepsEnum;

/**
 * Class StepThreeFinishButton.
 *
 * @package Drupal\ms_ajax_form_example\Button
 */
class StepThreeFinishButton extends BaseButton {

  /**
   * {@inheritdoc}
   */
  public function getKey() {
    return 'finish';
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#type' => 'submit',
      '#value' => t('Finish!'),
      '#goto_step' => StepsEnum::STEP_FINALIZE,
      '#submit_handler' => 'submitValues',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getSubmitHandler() {
    return 'submitIntake';
  }

}
