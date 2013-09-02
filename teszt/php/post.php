<?php 

//check our post variable from index.php, just to insure user isn't accessing this page directly.
// You can replace this with strong functions
if(!isset($_POST["connect"])) 
{
	die();
}
else
{
	
        include_once("config.php"); //Include our configuration file.
	$score  = $_GET["score"]; 
        // redirect user to facebook login page if empty data or fresh login requires
        if (!$fbuser){
            $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$return_url, false));
            header('Location: '.$loginUrl);
        }
$user_profile = $facebook->api('/me');
        $access_token = $facebook->getAccessToken();
        $vars = array(
        'caption' => 'Prakitker!',
        'message' =>  'Prakitker',
        'name' => ' Prakitker',
        'link' => 'https://www.facebook.com/GeneratorCommunity/app_269543473165078',
        'description' => 'Prakitker',
        'picture' => 'https://teszt4.dentaku.hu/tetris/img/lglogo.png'
        );
        $result = $facebook->api('/me/feed', 'post', $vars);
}
?>
