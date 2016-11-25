<?php namespace PluginExample\Controllers;

use PluginExample\View;

class AdminController
{
	public function __construct()
	{

	}

	public function menu() 
	{
		add_menu_page(
			__( 'Menu Page', 'textdomain' ),
			'Menu Page',
			'manage_options',
			'plugin-admin',
			['PluginExample\Controllers\AdminController', 'menu_render'],
			'',
			100
		);
	}

	public function menu_render() 
	{
		$title = 'Hello World';
		$content = "Hey Billy, You're so Fine";

		return View::render('@PluginExample/example.twig', [
			'title' 	=> $title,
			'content'   => $content
		]);
	}
}