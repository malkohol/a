<?php
########## app ID and app SECRET (Replace with yours) #############
$appId = '269543473165078'; //Facebook App ID
$appSecret = '302b052f704c98b9e856e8ae085209fd'; // Facebook App Secret
$return_url = 'https://teszt4.dentaku.hu/sufni/index.php';
########## MySql details (Replace with yours) #############
$username = "dentakuteszt"; //Database Username
$password = "BhwInFmhsYiQEdWk"; //Database Password
$hostname = "sql"; //Mysql Hostname
$databasename = 'dentakuteszt4'; //Database Name
###################################################################

define("APPID",$appId);
define("APPSECRET",$appSecret);
define("RETURNURL",$return_url);
define("DBUSERNAME",$username);
define("DBPASSWORD",$password);
define("DBHOSTNAME",$hostname);
define("DBNAME",$databasename);

 //Call Facebook API
 if (!class_exists('FacebookApiException')) {
 require_once('inc/facebook.php' );
 }
 $facebook = new Facebook(array(
 'appId' => APPID,
 'secret' => APPSECRET,
 ));
 

 $fbuser = $facebook->getUser();
 if ($fbuser) {
 try {
 // Proceed knowing you have a logged in user who's authenticated.
 $me = $facebook->api('/me'); //user
 $uid = $facebook->getUser();
 } catch (FacebookApiException $e) {
 //echo error_log($e);
 $fbuser = null;
 }
 }
 

//Destroy facebook user session when user clicks log out
 if(isset($_GET['logout']) && $_GET['logout']==1)
 {
 $facebook->destroySession();
 die("<div>If you are not automatically redirected, <a href='".RETURNURL."'>Click Here</a>.</div><script type=\"text/javascript\">window.location='" . RETURNURL . "';</script>");
 }
?>