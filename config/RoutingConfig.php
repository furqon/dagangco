<?php

namespace PetakUmpet;

class RoutingConfig extends RoutingEngine {

  public function __construct()
  {
    /* routing table goes here */
    $table['frontend'] = array(
      '/' => array(   /* '/' is default route when nothing else is specified */
        self::PAGE => 'Home/index',
      ),
      'home-index' => array(
        self::PAGE => 'Home/index',
      ),
      /* if one wants to customize their 404 page, set like this */
      self::ERROR_404_ROUTE => array(
        self::PAGE => 'Error/err404',
      ),
    );

    $table['backend'] = array(
      '/' => array(   /* '/' is default route when nothing else is specified */
        self::PAGE => 'Login/index',
      ),
      'home' => array(
        self::PAGE => 'Home/index',
      ),
      'dashboard' => array(
        self::PAGE => 'Home/dashboard',
      ),
      'logout' => array(
        self::PAGE => 'Logout/index',
      ),
      'user-noaccess' => array(
        self::PAGE => 'User/noAccess',
      ),
      'home-source' => array(
        self::PAGE => 'Home/source',
      ),
      /* if one wants to customize their 404 page, set like this */
      self::ERROR_404_ROUTE => array(
        self::PAGE => 'Error/err404',
      ),
    );

    $table['admin'] = array(
      '/' => array(   /* '/' is default route when nothing else is specified */
        self::PAGE => 'Login/index',
      ),
      'home' => array(
        self::PAGE => 'Home/index',
      ),
      'dashboard' => array(
        self::PAGE => 'Home/dashboard',
      ),
      'products' => array(
        self::PAGE => 'Product/index',
      ),
      'productsource' => array(
        self::PAGE => 'Product/source',
      ),
      'configuration' => array(
        self::PAGE => 'Warung/config',
      ),
      'logout' => array(
        self::PAGE => 'Logout/index',
      ),
      'user-noaccess' => array(
        self::PAGE => 'User/noAccess',
      ),
      /* if one wants to customize their 404 page, set like this */
      self::ERROR_404_ROUTE => array(
        self::PAGE => 'Error/err404',
      ),
    );

    /* application path map */
    $map = array(
        '/' => 'frontend',
        '/backend' => 'backend',
        '/admin' => 'admin',
      );

    /* don't forget this! ;-) */
    $this->compile($table, $map);
  }

}
