<?php

function lang($word) {
	static $lang = array(
		'Home' => 'home',
		'Servises' => 'servises',
		'Contact' => ' contact us',
		'Login' => ' log in ',
		'Register' => 'register',
		'Lang' => 'languages',
		'Ar' => 'Arabic',
		'En' => 'English'
	);
	return $lang[$word];
}