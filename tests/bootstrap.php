<?php

/**
 * This bootstrap file gets WordPress up and running so that its functions and
 * configuration are available to us during our tests.  You might want to do
 * other plugin-specific bootstrapping in this file as well.  For ideas about
 * what might be reasonable in a PHPUnit bootstrap, check out the stock WP
 * test bootstrap at:
 *
 * https://unit-tests.svn.wordpress.org/trunk/includes/bootstrap.php
 */

define( 'WP_TEST_BASE', realpath( dirname( __FILE__ ) . '/../../../../' ) );

require_once WP_TEST_BASE . '/wp-config.php';

// Composer autoloader
require dirname( __FILE__ ) . '/../vendor/autoload.php';


