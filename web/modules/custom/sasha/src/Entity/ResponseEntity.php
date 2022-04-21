<?php

namespace Drupal\sasha\Entity;

use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityPublishedTrait;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines the Response entity.
 *
 * @ingroup sasha
 *
 * @ContentEntityType(
 *   id = "response_entity",
 *   label = @Translation("Response"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\sasha\ResponseEntityListBuilder",
 *     "views_data" = "Drupal\sasha\Entity\ResponseEntityViewsData",
 *     "translation" = "Drupal\sasha\ResponseEntityTranslationHandler",
 *
 *     "form" = {
 *       "default" = "Drupal\sasha\Form\ResponseEntityForm",
 *       "add" = "Drupal\sasha\Form\ResponseEntityForm",
 *       "edit" = "Drupal\sasha\Form\ResponseEntityForm",
 *       "delete" = "Drupal\sasha\Form\ResponseEntityDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\sasha\ResponseEntityHtmlRouteProvider",
 *     },
 *     "access" = "Drupal\sasha\ResponseEntityAccessControlHandler",
 *   },
 *   base_table = "response_entity",
 *   data_table = "response_entity_field_data",
 *   translatable = TRUE,
 *   admin_permission = "administer response entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "langcode" = "langcode",
 *     "published" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/response_entity/{response_entity}",
 *     "add-form" = "/admin/structure/response_entity/add",
 *     "edit-form" = "/admin/structure/response_entity/{response_entity}/edit",
 *     "delete-form" = "/admin/structure/response_entity/{response_entity}/delete",
 *     "collection" = "/admin/structure/response_entity",
 *   },
 *   field_ui_base_route = "response_entity.settings"
 * )
 */
class ResponseEntity extends ContentEntityBase implements ResponseEntityInterface {

  use EntityChangedTrait;
  use EntityPublishedTrait;

  /**
   * {@inheritdoc}
   */
  public function getName(): string {
    return $this->get('name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('name', $name);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getEmail() {
    return $this->get('email')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setEmail($email) {
    $this->set('email', $email);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getPhone() {
    return $this->get('phone')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setPhone($phone) {
    $this->set('phone', $phone);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getAvatar() {
    return $this->get('avatar')->getValue()[0];
  }

  /**
   * {@inheritdoc}
   */
  public function setAvatar(string $avatar) {
    $this->set('avatar', $avatar);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getPicture() {
    return $this->get('picture')->getValue()[0];
  }

  /**
   * {@inheritdoc}
   */
  public function setPicture(string $picture) {
    $this->set('picture', $picture);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getText() {
    return $this->get('text_response')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setText(string $text) {
    $this->set('text_response', $text);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    $fields = parent::baseFieldDefinitions($entity_type);

    // Add the published field.
    $fields += static::publishedBaseFieldDefinitions($entity_type);

    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('ID'))
      ->setReadOnly(TRUE);

    $fields['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('UUID'))
      ->setReadOnly(TRUE);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('Author`s name.'))
      ->setSettings([
        'max_length' => 100,
        'text_processing' => 0,
        'min_length' => 2,
      ])
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => 0,
      ])
      ->setPropertyConstraints('value', [
        'Length' => [
          'min' => 2,
          'minMessage' => t('Your name is to short. Please enter valid name.'),
          'maxMessage' => t('Your name is to long. Please enter valid name.'),
        ],
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 0,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->addConstraint('Name')
      ->setRequired(TRUE);

    $fields['email'] = BaseFieldDefinition::create('email')
      ->setLabel(t('Email'))
      ->setDescription(t('Author`s email.'))
      ->setDefaultValue('')

      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'email',
        'weight' => 1,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_email',
        'weight' => 1,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    $fields['phone'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Phone number'))
      ->setDescription(t('Author`s phone number.'))
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'tel',
        'weight' => 2,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_tel',
        'weight' => 2,
      ])
      ->setSettings([
        'pattern' => '^\+?\d{10,15}$',
        'max_length' => 13,
      ])
      ->setPropertyConstraints(
        'value', [
          'Regex' => [
            'pattern' => '/[+]380[0-9]{9}/',
            'message' => t('Your number mobile is not valid. Please enter the valid tel number'),
          ],
        ]
      )
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    $fields['avatar'] = BaseFieldDefinition::create('image')
      ->setLabel(t('User avatar'))
      ->setDefaultValue('modules/custom/sasha/images/image-not-found.png')
      ->setSettings([
        'file_directory' => 'public://avatar',
        'alt_field_required' => FALSE,
        'file_extensions' => 'png jpg jpeg',
        'max_filesize' => 2 * 1024 * 1024,
      ])
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'default',
        'weight' => 3,
      ])
      ->setDisplayOptions('form', [
        'label' => 'hidden',
        'type' => 'image_image',
        'weight' => 3,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(FALSE);

    $fields['picture'] = BaseFieldDefinition::create('image')
      ->setLabel(t('Response picture'))
      ->setDescription(t('Review picture for review.'))
      ->setSettings([
        'file_directory' => 'public://picture',
        'alt_field_required' => FALSE,
        'file_extensions' => 'png jpg jpeg',
        'max_filesize' => 5 * 1024 * 1024,
      ])
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'default',
        'weight' => 4,
      ])
      ->setDisplayOptions('form', [
        'label' => 'hidden',
        'type' => 'image_image',
        'weight' => 4,
      ])

      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    $fields['text_response'] = BaseFieldDefinition::create('string_long')
      ->setLabel(t('Message'))
      ->setDescription(t('The review text.'))
      ->setSettings([
        'text_processing' => 0,
      ])
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => 5,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 5,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    $fields['status']->setDescription(t('A boolean indicating show the Response is published.'))
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => -3,
      ]);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    return $fields;
  }

}
