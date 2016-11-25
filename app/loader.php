<?php namespace PluginExample;

$loader->action([
	'method' 	=> 'admin_menu',
	'uses' 		=> [__NAMESPACE__ . '\Controllers\AdminController', 'menu']
]);

$loader->action([
	'method'	=> 'admin_init',
	'uses'		=> [__NAMESPACE__.'\Controllers\AdminController', 'create_test_emails']
]);
