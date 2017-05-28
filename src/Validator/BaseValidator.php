<?php

namespace Drupal\ms_ajax_form_example\Validator;

/**
 * Class BaseValidator
 * @package Drupal\ms_ajax_form_example\Validator
 */
abstract class BaseValidator implements ValidatorInterface {

  protected $errorMessage;

  /**
   * BaseValidator constructor.
   * @param $error_message
   */
  public function __construct($error_message) {
    $this->errorMessage = $error_message;
  }

  /**
   * {@inheritdoc}
   */
  public function getErrorMessage() {
    return $this->errorMessage;
  }

}
