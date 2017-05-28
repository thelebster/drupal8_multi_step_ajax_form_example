<?php

namespace Drupal\ms_ajax_form_example\Step;

use Drupal\ms_ajax_form_example\Button\StepOneNextButton;
use Drupal\ms_ajax_form_example\Validator\ValidatorRequired;

class StepOne extends BaseStep {

  /**
   * {@inheritdoc}
   */
  protected function setStep() {
    return StepsEnum::STEP_ONE;
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return array(
      new StepOneNextButton(),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function buildStepFormElements() {
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => t("What's your name?"),
      '#required' => FALSE,
      '#default_value' => isset($this->getValues()['name']) ? $this->getValues()['name'] : NULL,
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function getFieldNames() {
    return array(
      'name',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFieldsValidators() {
    return array(
      'name' => array(
        new ValidatorRequired("Hey stranger, please tell me your name. I would like to get to know you."),
      ),
    );
  }

}
