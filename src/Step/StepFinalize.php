<?php

namespace Drupal\ms_ajax_form_example\Step;

/**
 * Class StepFinalize.
 *
 * @package Drupal\ms_ajax_form_example\Step
 */
class StepFinalize extends BaseStep {

  /**
   * {@inheritdoc}
   */
  protected function setStep() {
    return StepsEnum::STEP_FINALIZE;
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function buildStepFormElements() {

    $form['completed'] = [
      '#markup' => t('You have completed the wizard, yeah!'),
    ];

    return $form;
  }

}
