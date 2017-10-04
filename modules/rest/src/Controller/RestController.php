<?php

namespace Drupal\rest\Controller;

use Drupal\Core\Controller\ControllerBase;

class RestController extends ControllerBase {

    public function list()
    {
        return [
            '#theme' => 'index_page',
            '#List' => rest_list(),
          ];
    }
}

