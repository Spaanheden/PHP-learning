<?php

$person = [

	'Age' => 31,
	'Hair' => 'Black',
	'Career' => 'It Support'


];

$person['Name'] = 'Michael';


unset ($person['Age']);

var_dump($person);

require 'index.view.php';