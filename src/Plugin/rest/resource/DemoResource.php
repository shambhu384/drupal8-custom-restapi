<?php

namespace Drupal\demo_rest_api\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\Plugin\ResourceInterface;
use Drupal\rest\ResourceResponse;

/**
  * Provides a Demo Resource
  *
  * @RestResource(
  *   id = "demo_rest",
  *   label = @Translation("Demo Rest endpoint"),
  *   uri_paths = {
  *     "canonical" = "/demo/rest"
  *   }
  * )
  */
class DemoResource extends ResourceBase {
  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    $response = ['myresponse' => 'Hello, this is a rest service response from Drupal 8'];
    return  new ResourceResponse($response);
  }
}
