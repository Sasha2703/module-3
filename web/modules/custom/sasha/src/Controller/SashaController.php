<?php

namespace Drupal\sasha\Controller;

/**
 * @file
 * Provides controller functionality.
 */

use Drupal\Core\Controller\ControllerBase;
use Drupal\file\Entity\File;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides content.
 */
class SashaController extends ControllerBase {
  /**
   * For dependency injection.
   *
   * @var \Drupal\Core\Entity\EntityManagerInterface
   */
  protected $entityManager;

  /**
   * For dependency injection.
   *
   * @var \Drupal\Core\Form\FormBuilder
   */
  protected $formBuilder;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): SashaController {
    $instance = parent::create($container);
    $instance->entityManager = $container->get('entity_type.manager');
    $instance->formBuilder = $container->get('entity.form_builder');
    return $instance;
  }

  /**
   * Implements content().
   */
  public function content(): array {

    $entity = $this->entityManager
      ->getStorage('response_entity')
      ->create([
        'entity_type' => 'node',
        'entity' => 'response_entity',
      ]);

    $form = $this->formBuilder->getForm($entity, 'add');

    $response_entity = $this->entityTypeManager()
      ->getStorage('response_entity');
    $query = $response_entity->getQuery();
    $ids = $query->condition('status', 1)
      ->sort('created', 'DESC')
      ->pager(5)
      ->execute();

    $responses = $response_entity->loadMultiple($ids);

    $data = [];
    foreach ($responses as $key => $response) {
      if (!$response->getAvatar()["target_id"] == NULL) {
        $file_avatar = File::load($response->getAvatar()["target_id"]);
        $avatar_uri = $file_avatar->getFileUri();
        $avatar_is_set = TRUE;
      }
      else {
        $avatar_uri = '/modules/custom/guestbook/images/default_user.png';
        $avatar_is_set = FALSE;
      }

      if (!$response->getPicture()["target_id"] == NULL) {
        $file_picture = File::load($response->getPicture()["target_id"]);
        $picture_uri = $file_picture->getFileUri();
        $picture_is_set = TRUE;
      }
      else {
        $picture_uri = NULL;
        $picture_is_set = FALSE;
      }

      $data[$key]['id'] = $response->id();
      $data[$key]['name'] = $response->getName();
      $data[$key]['email'] = $response->getEmail();
      $data[$key]['phone'] = $response->getPhone();

      $data[$key]['avatar'] = [
        '#theme' => 'image_style',
        '#style_name' => 'wide',
        '#uri' => $avatar_uri,
        '#title' => 'avatar',
        '#width' => 50,
        '#height' => 50,
        '#isset' => $avatar_is_set,
      ];
      $data[$key]['picture'] = [
        '#theme' => 'image_style',
        '#style_name' => 'wide',
        '#uri' => $picture_uri,
        '#title' => 'picture',

        '#isset' => $picture_is_set,
      ];
      $data[$key]['text_response'] = $response->getText();
      $data[$key]['created'] = $response->getCreatedTime();
    }

    $pager = [
      '#type' => 'pager',
    ];

    $build = [
      '#theme' => 'create-response-page',
      '#responses' => $data,
      '#pager' => $pager,
      '#form' => $form,

    ];
    return $build;
  }

}
