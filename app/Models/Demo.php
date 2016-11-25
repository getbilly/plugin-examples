<?php namespace PluginExample\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Demo extends Eloquent
{
	protected $fillable = [
		'email'
	];

	public $timestamps = true;
}