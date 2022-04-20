<?php

namespace Drupal\sasha\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the sasha type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "sasha_type",
 *   label = @Translation("sasha type"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\sasha\Form\SashaTypeForm",
 *       "edit" = "Drupal\sasha\Form\SashaTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\sasha\SashaTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer sasha types",
 *   bundle_of = "sasha",
 *   config_prefix = "sasha_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/sasha_types/add",
 *     "edit-form" = "/admin/structure/sasha_types/manage/{sasha_type}",
 *     "delete-form" = "/admin/structure/sasha_types/manage/{sasha_type}/delete",
 *     "collection" = "/admin/structure/sasha_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class SashaType extends ConfigEntityBundleBase {

  /**
   * The machine name of this sasha type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the sasha type.
   *
   * @var string
   */
  protected $label;

}
