<?php
/**
 * @file
 * CiviCRM Anonymize extension.
 */

require_once 'anonymize.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function anonymize_civicrm_config(&$config) {
  _anonymize_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function anonymize_civicrm_install() {
  _anonymize_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function anonymize_civicrm_uninstall() {
  _anonymize_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function anonymize_civicrm_enable() {
  _anonymize_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function anonymize_civicrm_disable() {
  _anonymize_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string
 *   The type of operation being performed; 'check' or 'enqueue'.
 * @param $queue CRM_Queue_Queue
 *   For 'enqueue', the modifiable list of pending up upgrade tasks.
 *
 * @return mixed
 *   Based on op.
 *   For 'check', returns array(boolean) (TRUE if upgrades are pending).
 *   For 'enqueue', returns void.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function anonymize_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _anonymize_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function anonymize_civicrm_postInstall() {
  _anonymize_civix_civicrm_postInstall();
}
