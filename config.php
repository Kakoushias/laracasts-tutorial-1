<?php


return [

	'database' => [

		'name' => 'mytodo',

		'username' => 'homestead',

		'password' => 'secret',

		'connection' => 'mysql:host=192.168.10.1',

		'options' => [

			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]

		]

];