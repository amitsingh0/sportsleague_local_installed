<?php
/**
 * @file
 * Enables modules and site configuration for a sportsleague site installation.
 */

use Drupal\contact\Entity\ContactForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter() for install_configure_form().
 *
 * Allows the profile to alter the site configuration form.
 */
function sportsleague_form_install_configure_form_alter(&$form, FormStateInterface $form_state) {
  $form['#submit'][] = 'sportsleague_form_install_configure_submit';
}

/**
 * Submission handler to sync the contact.form.feedback recipient.
 */
function sportsleague_form_install_configure_submit($form, FormStateInterface $form_state) {
  $site_mail = $form_state->getValue('site_mail');
  ContactForm::load('feedback')->setRecipients([$site_mail])->trustData()->save();
}

/**
 * Sportsleague clean alias.
 */
function _sportsleague_clean_url_alias($string) {
  return preg_replace('/\-+/', '-', strtolower(preg_replace('/[^a-zA-Z0-9_-]+/', '', str_replace(' ', '-', $string))));
}
