<?php namespace PluginExample;

$loader->action([
	'method' 	=> 'admin_menu',
	'uses' 		=> [__NAMESPACE__ . '\Controllers\AdminController', 'menu']
]);
