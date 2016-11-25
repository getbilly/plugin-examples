<?php namespace PluginExample\Controllers;

use PluginExample\View;
use PluginExample\Models\Demo;

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
		$emails = Demo::all();

		return View::render('@PluginExample/example.twig', [
			'title' 	=> $title,
			'emails'    => $emails
		]);
	}

	public function create_test_emails()
	{
		Demo::create([
			'email' => 'example@test.com'
		]);
	}
}