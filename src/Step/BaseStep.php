<?php

namespace Drupal\ms_ajax_form_example\Step;

/**
 * Class BaseStep
 *
 * @package Drupal\ms_ajax_form_example\Step
 */
abstract class BaseStep implements StepInterface{

  /**
   * Multi steps of the form.
   *
   * @var StepInterface
   */
  protected $step;

  /**
   * @var array 
   */
  protected $values;

  /**
   * BaseStep constructor.
   */
  public function __construct() {
    $this->step = $this->setStep();
  }

  /**
   * {@inheritdoc}
   */
  public function getStep() {
    return $this->step;
  }

  /**
   * {@inheritdoc}
   */
  public function isLastStep() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function setValues($values) {
    $this->values = $values;
  }

  /**
   * {@inheritdoc}
   */
  public function getValues() {
   return $this->values;
  }

  /**
   * {@inheritdoc}
   */
  public function getFieldNames() {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function getFieldsValidators(){
    return array();
  }

  /**
   * Sets current step.
   */
  protected abstract function setStep();

}
