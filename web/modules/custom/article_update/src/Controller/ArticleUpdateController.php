<?php

namespace Drupal\article_update\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Returns responses for Article update routes.
 */
final class ArticleUpdateController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

  /**
   * Handles the JSON POST request.
   */
  public function voteAcceptPost(Request $request) {
    // Get the JSON data from the request.
    $json_data = json_decode($request->getContent(), TRUE);

    // Process the JSON data.
    // Example: Log the received data.
    \Drupal::logger('custom_json_controller')
      ->notice('Received JSON data: @data', ['@data' => print_r($json_data, TRUE)]);

    // Return a JSON response.
    return new JsonResponse(['message' => 'Request processed successfully']);
  }

}
