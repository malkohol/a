<? 
session_start();
include ('conn.php');
$_SESSION['id'] = session_id(); 
$_SESSION['user_id'] = 111111;

$local = "https://cmh-data.com/";
//session_destroy();
if(isset($_GET['lang'])){
	 $_SESSION['lang'] = $_GET['lang'];
	}else{
		 $_SESSION['lang'] = "";
		}
$wiew_mod ="site";






?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Adatlap</title>
<!-- Add jQuery library -->
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
 <link rel="stylesheet" href="<? echo $local ?>/skin/default/css/foundation.css" />
   <link rel="stylesheet" href="<? echo $local ?>/skin/default/css/site.css" />
   
     

<style>
	#ses_dat{
		position:fixed;
		top:50px;
		left:1050px;
		border:solid 1px red;
		}
	.button_self{
		width:100%;
		}
		
	</style>

<script>
function validate(){
	var sess_id = document.getElementById('sess_id').value;
var user_id = document.getElementById('user_id').value;
if (document.getElementById('remember').checked){
    
    $.ajax( {
        type: 'POST',
        url: "<? echo $local; ?>/addon/fb/adatlap.php?page_id=2&sess="+sess_id+"&user_id="+user_id+"&first=1",
        data: $("#data").serialize(),
        success: function(html) {
            $("#adatlap_box").empty().append(html);
        }
    } );    
    
    
}else{
alert(" Az adatlap kit�lt�s�hez sz�ks�ges a felt�telek elfogad�sa! ")
}
}

  function  ses_dat(){
var sess_id = document.getElementById('sess_id').value;
var user_id = document.getElementById('user_id').value;

		jQuery.ajax(
        {
            url: "<? echo $local; ?>/addon/fb/ses_dat.php?sess="+sess_id+"&fbuid="+user_id,
            success: function(html)
            {
                $("#proc").empty().append(html);
            }
        });
   
   }	
   
	function update_user_array(r) { 
var sess_id = document.getElementById('sess_id').value;
 var user_id = document.getElementById('user_id').value;  
  
    
    if(r == "2"){
    	var post = "#data";
    	}
     if(r == "3"){
    	var post = "#data_1";
    	}
      if(r == "4"){
    	var post = "#data_2";
    	}
    if(r == "5"){
    	var post = "#data_3";
    	}
    	    if(r == "6"){
    	var post = "#data_4";
    	}
    	   if(r == "7"){
    	var post = "#data_5";
    	}
    $.ajax( {
        type: 'POST',
        url: "<? echo $local; ?>/addon/fb/adatlap.php?page_id="+r+"&sess="+sess_id+"&user_id="+user_id,
        data: $(post).serialize(),
        success: function(html) {
            $("#adatlap_box").empty().append(html);
        }
    } );


    return false;


}	
	
	
</script>
</head>
<body>
<? require_once 'config.php'; 

$signed_request = $_REQUEST['signed_request'];
function parsePageSignedRequest() {
  if (isset($_REQUEST['signed_request'])) {
    $encoded_sig = null;
    $payload = null;
    list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
    $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
    $data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
    return $data;
  }
  return false;
}
if($signed_request = parsePageSignedRequest()) {
  if($signed_request->page->liked) {
echo "user id". $user_id."  like";  ;
}else{
	 $user_id = $userInfo['id'];
 $user_name = $userInfo['name'];
 $user_email = $userInfo['email'];
 $user_gender= $userInfo['gender'];
	echo "user id".$user_id." not like"; 
	}

}
?>
	<div class="row">
			<div class="large-12 columns">
				<input style="display:;" type="text" name="sess_id" id="sess_id" value="<? echo $_SESSION['id']; ?>">
				<input style="display:;" type="text" name="sess_lang" id="sess_lang" value="<? echo $_SESSION['lang']; ?>">			
				<input style="display:;" type="text" name="user_id" id="user_id" value="<? echo $_SESSION['user_id'];  ?>">	
						</div>
						<div class="large-12 columns">
						<div id="adatlap_box">


<?
echo $user;
 $log = 1;
  
         
 
                   
if($_SESSION['lang'] != ""){


				 $sql_u_info ="SELECT * FROM adatlap_user WHERE `u_id` = '$user_id'"; 
			 $result_u_info = mysql_query($sql_u_info);
    	 	while($u_info = mysql_fetch_array($result_u_info)){
				$u_info_id  =$u_info['id'];
				$u_info_name  =$u_info['name'];
			}
  if(empty($u_info_id) ) {

      include ('reg.php');
    } else{

$log=1;

$page_id = "2";
 include ('adatlap.php'); 
				
 }




	}else{
	include ('lang.php');
	}



   ?> 
   					</div>
						</div>		
	
			</div>
   


			
			
				
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<? echo $local."/skin/default";?>/js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="<? echo $local ?>/skin/default/js/foundation.min.js"></script>
  <!--
  
  <script src="/js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>