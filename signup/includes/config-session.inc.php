<?php
ini_set("session.use_only_cookies",1);
ini_set("session.use_strict_mode",1);

session_set_cookie_params([
    'lifetime'=>1800,
    'domain'=>'localhost',
    'path'=>'/',
    'secure'=>true,
    'httponly'=>true
]);
session_start();
if(!isset($_SESSION['login_session'])){
sessionRegenerateID();
}else{
$intervel = 60*30;
if(time()-$_SESSION['login_session']>$intervel){
    sessionRegenerateID();
}

}

function sessionRegenerateID(){}
session_regenerate_id(true);
$_SESSION['login_session'] = time();
?>