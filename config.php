<?php
/*
 * @author: Mahmud Ahsan (http://thinkdiff.net)
 */
    //facebook application
    $fbconfig['appid' ]     = "623553027679375";
    $fbconfig['secret']     = "a7c42e57cc0d45a472eede008f936e13";
    $fbconfig['baseurl']    = "https://cmh-data.com/addon/fb/"; 

define("FACEBOOK_APP_ID", '623553027679375');
define("FACEBOOK_API_KEY", '');
define("FACEBOOK_SECRET_KEY", 'a7c42e57cc0d45a472eede008f936e13');
define("FACEBOOK_CANVAS_URL", 'https://www.facebook.com/pages/CMH-data-Community/150865338455384?ref=ts&id=150865338455384&sk=app_623553027679375');


define("FACEBOOK_PAGE_URL", 'https://www.facebook.com/pages/CMH-data-Community/150865338455384?ref=ts&id=150865338455384&sk=app_623553027679375');
define("AUTH_URL", FACEBOOK_CANVAS_URL.'auth.php');

define("DB_HOST", 'sql');
define("DB_NAME", 'dentakuteszt4');
define("DB_USER", 'dentakuteszt');
define("DB_PASSWD", 'BhwInFmhsYiQEdWk');



    //
    if (isset($_GET['request_ids'])){
        //user comes from invitation
        //track them if you need
    }
    
    $user            =   null; //facebook user uid
    try{
        include_once "facebook.php";
    }
    catch(Exception $o){
        error_log($o);
    }
    // Create our Application instance.
    $facebook = new Facebook(array(
      'appId'  => $fbconfig['appid'],
      'secret' => $fbconfig['secret'],
      'cookie' => true,
    ));

    //Facebook Authentication part
    $user       = $facebook->getUser();
    // We may or may not have this data based 
    // on whether the user is logged in.
    // If we have a $user id here, it means we know 
    // the user is logged into
    // Facebook, but we don’t know if the access token is valid. An access
    // token is invalid if the user logged out of Facebook.
    
    $app_id = FACEBOOK_APP_ID;
   
   //$canvas_page =   ;
   $canvas_page = FACEBOOK_CANVAS_URL;
   
   $auth_url = "https://www.facebook.com/dialog/oauth?client_id=" 
   . $app_id . "&redirect_uri=" . urlencode($canvas_page)."&scope=publish_stream,user_photos,email";


    $loginUrl   = $facebook->getLoginUrl(
            array(
                'scope'         => 'email,offline_access,publish_stream',
                'redirect_uri'  => $fbconfig['baseurl']
            )
    );
    
    $logoutUrl  = $facebook->getLogoutUrl();
   

    if ($user) {
      try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');
         
         $log=1;
        
      } catch (FacebookApiException $e) {
        //you should use error_log($e); instead of printing the info on browser
        
        $log=0;
     
        $user = null;
      }
    }else
        {
    echo("<script> top.location.href='" . $auth_url . "'</script>");

        }
   
    
    //if user is logged in and session is valid.
    if ($user){
        //get user basic description
        $userInfo           = $facebook->api("/$user");
        
        //Retriving movies those are user like using graph api
        try{
            $movies = $facebook->api("/$user/movies");
        }
        catch(Exception $o){
            d($o);
        }


        
        //update user's status using graph api
        //http://developers.facebook.com/docs/reference/dialogs/feed/
        if (isset($_GET['publish'])){
            try {
                $publishStream = $facebook->api("/$user/feed", 'post', array(
                 
                    )
                );
                //as $_GET['publish'] is set so remove it by redirecting user to the base url 
            } catch (FacebookApiException $e) {
                d($e);
            }
            $redirectUrl     = $fbconfig['baseurl'] . '/index.php?success=1';
            header("Location: $redirectUrl");
        }

        //update user's status using graph api
        //http://developers.facebook.com/docs/reference/dialogs/feed/
        if (isset($_POST['tt'])){
            try {
                $statusUpdate = $facebook->api("/$user/feed", 'post', array('message'=> $_POST['tt']));
            } catch (FacebookApiException $e) {
                d($e);
            }
        }

        //fql query example using legacy method call and passing parameter
        try{
            $fql    =   "select name, hometown_location, sex, pic_square from user where uid=" . $user;
            $param  =   array(
                'method'    => 'fql.query',
                'query'     => $fql,
                'callback'  => ''
            );
            $fqlResult   =   $facebook->api($param);
        }
        catch(Exception $o){
            d($o);
        }
    }
    
    function d($d){
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }

 $user_id = $user_profile['id'];
 $user_name = $user_profile['name'];
 $user_email = $user_profile['email'];
 $user_gender= $user_profile['gender'];
?>

