<?php

namespace Drupal\ms_ajax_form_example\Step;

use Drupal\ms_ajax_form_example\Button\StepThreeFinishButton;
use Drupal\ms_ajax_form_example\Button\StepThreePreviousButton;
use Drupal\ms_ajax_form_example\Validator\ValidatorRegex;
use Drupal\ms_ajax_form_example\Validator\ValidatorRequired;

/**
 * Class StepThree.
 *
 * @package Drupal\ms_ajax_form_example\Step
 */
class StepThree extends BaseStep {

  /**
   * {@inheritdoc}
   */
  protected function setStep() {
    return StepsEnum::STEP_THREE;
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [
      new StepThreePreviousButton(),
      new StepThreeFinishButton(),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildStepFormElements() {

    $form['linkedin'] = [
      '#type' => 'textfield',
      '#title' => t('What is your LinkedIn URL?'),
      '#default_value' => isset($this->getValues()['linkedin']) ? $this->getValues()['linkedin'] : NULL,
      '#required' => FALSE,
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function getFieldNames() {
    return [
      'linkedin',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFieldsValidators() {
    return [
      'linkedin' => [
        new ValidatorRequired("Tell me where I can find your LinkedIn please."),
        new ValidatorRegex(t("I don't think this is a valid LinkedIn URL..."), '/(ftp|http|https):\/\/(.*)linkedin(.*)/'),
      ],
    ];
  }

}
