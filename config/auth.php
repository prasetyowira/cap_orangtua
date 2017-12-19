<?php
return [
	'guards' => [
		'orangtua' => [
			'driver' => 'session',
			'provider' => 'orangtua_users',
		],
	],
	'providers' => [
		'orangtua_users' => [
			'driver' => 'eloquent',
			'model' => \Ariwira\Orangtua\Model\OrangtuaUsers::class,
		],
	],
	'passwords' => [
		'orangtua_users' => [
			'provider' => 'orangtua_users',
			'table' => 'ot_password_resets',
			'expire' => 60,
		],
	],
];