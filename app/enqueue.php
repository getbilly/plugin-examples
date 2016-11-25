<?php 

namespace PluginExample;

/** @var \Billy\Framework\Enqueue $enqueue */

$enqueue->admin([
	'as' => 'plugin-admin',
	'src' => Helper::assetUrl('js/admin.js')
]);