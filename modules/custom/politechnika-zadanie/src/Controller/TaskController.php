<?php

namespace Drupal\task\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Output of our JS page.
 */
class TaskController extends ControllerBase {

  public function jsPage() {

    $build = [];
    $build['content'] = [
      '#markup' => '<div>
        <p >wartość origin wynosi:</p>
        <p id="answer"></p>
      </div>',
    ];
    $build['#attached']['library'][] = 'task/extract_property';

    return $build;
  }

}
