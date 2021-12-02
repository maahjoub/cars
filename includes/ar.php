<?php

function lang($word) {
	static $lang = array(
		'Home' => 'الرئيسية',
		'Servises' => 'الخدمات',
		'Contact' => 'الاتصال بنا',
		'Login' => 'تسجيل الدخول ',
		'Register' => 'التسجيل',
		'Lang' => 'اللغة',
		'Ar' => 'العربية',
		'En' => 'الانجليزية'
	);
	return $lang[$word];
}