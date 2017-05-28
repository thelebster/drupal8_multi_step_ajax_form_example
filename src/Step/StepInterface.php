<?php

namespace Drupal\ms_ajax_form_example\Step;

/**
 * Interface StepInterface.
 *
 * @package Drupal\ms_ajax_form_example\Step
 */
interface StepInterface {

  /**
   * Gets the step.
   *
   * @returns step;
   */
  public function getStep();

  /**
   * Returns a renderable form array that defines a step.
   */
  public function buildStepFormElements();

  /**
   * Returns buttons on step.
   */
  public function getButtons();

  /**
   * Indicates if step is last step.
   */
  public function isLastStep();

  /**
   * All fields name.
   *
   * @returns array of all field names.
   */
  public function getFieldNames();

  /**
   * All field validators.
   *
   * @returns array of fields with their validation requirements.
   */
  public function getFieldsValidators();

  /**
   * Sets filled out values of step.
   */
  public function setValues($values);

  /**
   * Gets filled out values of step.
   */
  public function getValues();

}
