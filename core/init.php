<?php 
session_start();
$GLOBALS['config'] = array(

    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'dbname'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => '604800'
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
);

spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});
 require_once 'functions/function.php';
 if (Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))) {
     $hash = Cookie::get(Config::get('remember/cookie_name'));
     $hashcheck = DB::getInstance()->get('session', array('cookie', '=', $hash));
     if ($hashcheck->count()) {
        $user = new User($hashcheck->first()->user_id);
        $user->login();
     }
 }

 if ($lang == 'ar') {
     require_once './includes/ar.php';
 } else {
   require_once './includes/en.php';
 }
 

