<?php

$ToDo = [
	'name' => 'ToDo',
	'struct' => [
		// subject of todo item
		'subject'		=> [
			'type'		=> 's',
			'required'	=> true,
			'date'		=> false,
			'size'		=> 255,
		],
		// optional escription of todo item
		'description'		=> [
			'type'		=> 's',
			'required'	=> false,
			'date'		=> false,
			'size'		=> 512,
		],
		// optional memo for todo item
		'memo'		=> [
			'type'		=> 't',
			'required'	=> false,
			'date'		=> false,
		],
		// boolean flag for whether the todo item is public or private
		// default is private
		'isPublic'		=> [
			'type'		=> 'i',
			'required'	=> false,
			'date'		=> false,
			'unsigned'	=> true,
			'default'	=> 0,
			'size'		=> 1,
		],
		// optional foreign key to who the todo item is assigned to
		'assigned'		=> [
			'type'		=> 'i',
			'required'	=> false,
			'date'		=> false,
			'size'		=> 11,
			'unsigned'	=> true,
			'fk'        => [
				'model' => 'User',
				'field' => 'id',
			],
		],
	],
];

?>