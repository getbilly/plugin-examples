<?php 

/** @var  \Billy\Framework\Enqueue $enqueue */

use Illuminate\Database\Capsule\Manager as Capsule;
use PluginExample\Helper;

$version = get_option('billy_example_version');

if(is_null($version)) {
	Capsule::schema()->create('demo', function($table)
	{
    	$table->increments('id');
    	$table->string('email')->unique();
    	$table->timestamps();
	});

	add_option('billy_example_version', Helper::get('version'), '', 'yes');
}