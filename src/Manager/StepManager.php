<?php

namespace Drupal\ms_ajax_form_example\Manager;

use Drupal\ms_ajax_form_example\Step\StepInterface;
use Drupal\ms_ajax_form_example\Step\StepsEnum;

/**
 * Class StepManager.
 *
 * @package Drupal\ms_ajax_form_example\Manager
 */
class StepManager {

  /**
   * Multi steps of the form.
   *
   * @var \Drupal\ms_ajax_form_example\Step\StepInterface
   */
  protected $steps;

  /**
   * StepManager constructor.
   */
  public function __construct() {
  }

  /**
   * Add a step to the steps property.
   *
   * @param \Drupal\ms_ajax_form_example\Step\StepInterface $step
   *   Step of the form.
   */
  public function addStep(StepInterface $step) {
    $this->steps[$step->getStep()] = $step;
  }

  /**
   * Fetches step from steps property, If it doesn't exist, create step object.
   *
   * @param int $step_id
   *   Step ID.
   *
   * @return \Drupal\ms_ajax_form_example\Step\StepInterface
   *   Return step object.
   */
  public function getStep($step_id) {
    if (isset($this->steps[$step_id])) {
      // If step was already initialized, use that step.
      // Chance is there are values stored on that step.
      $step = $this->steps[$step_id];
    }
    else {
      // Get class.
      $class = StepsEnum::map($step_id);
      // Init step.
      $step = new $class($this);
    }

    return $step;
  }

  /**
   * Get all steps.
   *
   * @return \Drupal\ms_ajax_form_example\Step\StepInterface
   *   Steps.
   */
  public function getAllSteps() {
    return $this->steps;
  }

}
