<?php

/**
 * This is an auto generated file by Webiny Rest component.
 * Please do not edit this file because the changes might break your REST Api.
 *
 * @rest.class \Todo\Modules\TodoList\RestServices\Test
 * @rest.version v1.0
 * @rest.buildDate Tue, 06. Jan, 2015 00:29:40
 */

$a = array (
  'class' => '\\Todo\\Modules\\TodoList\\RestServices\\Test',
  'cacheKeyInterface' => false,
  'accessInterface' => false,
  'version' => '1.0',
  'get' => 
  array (
    'searchData/([\\w-]+)/(0|1|true|false)/' => 
    array (
      'default' => false,
      'role' => false,
      'method' => 'searchData',
      'urlPattern' => 'searchData',
      'cache' => 
      array (
        'ttl' => 0,
      ),
      'header' => 
      array (
        'cache' => 
        array (
          'expires' => 0,
        ),
        'status' => 
        array (
          'success' => 200,
          'error' => 404,
          'errorMessage' => '',
        ),
      ),
      'rateControl' => 
      array (
      ),
      'params' => 
      array (
        'number' => 
        array (
          'required' => true,
          'type' => 'string',
          'default' => NULL,
        ),
        'object' => 
        array (
          'required' => false,
          'type' => 'bool',
          'default' => '0',
        ),
      ),
    ),
  ),
);


return $a;