<?php

/**
 * Implementation of hook_strongarm().
 */
function parrilla_de_sesiones_strongarm() {
  $export = array();
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'uuid_automatic_for_comments';
  $strongarm->value = '0';

  $export['uuid_automatic_for_comments'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'uuid_automatic_for_nodes';
  $strongarm->value = array(
    'room' => 'room',
    'schedule_item' => 'schedule_item',
    'time_slot' => 'time_slot',
    'event' => 0,
    'logo' => 0,
    'news' => 0,
    'product' => 0,
    'session' => 0,
    'sponsor' => 0,
  );

  $export['uuid_automatic_for_nodes'] = $strongarm;
  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'uuid_automatic_for_users';
  $strongarm->value = '0';

  $export['uuid_automatic_for_users'] = $strongarm;
  return $export;
}
