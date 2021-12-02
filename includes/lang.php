<?php

if(isset($_GET['lang']))

{

$lang = $_GET['lang'];


$_SESSION['lang'] = $lang;



setcookie('lang', $lang, time() + (3600 * 24 * 30));

}

else if(isset($_SESSION['lang']))

{

$lang = $_SESSION['lang'];

}

else if(isset($_COOKIE['lang']))

{

$lang = $_COOKIE['lang'];

}

else

{

$lang = 'ar';

}

 if($lang=='ar'){

 $lang_dir = 'ar.php';

 }else if ($lang=='en') {
 $lang_dir = 'en.php';
 }
 else 
 {
 $lang_dir = 'ar.php';
 }

require_once 'includes/'.$lang_dir;

?>