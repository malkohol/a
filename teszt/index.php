<?php
    include_once "script/fbmain.php";
 



?>
<!DOCTYPE html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
>


	<title>Praktiker Sufni szépségverseny</title>

<!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <!--  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.1.min.js"><\/script>')</script> -->

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <!-- end scripts -->

<script type="text/javascript" src="script/control.js"></script>
<script type="text/javascript" src="js/praktiker.js"></script>


<link href="css/praktiker.css" rel="stylesheet" type="text/css" />

<!-- Menu -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie/ie.css" />
<![endif]-->

<style type="text/css">
    


    
</style>

     </head>
<body>
    <!-- Prompt IE 6-8 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 9]><p class=chromeframe>Ez egy nagyon elavult böngésző!  <a href="http://browsehappy.com/">Szerencsére van megoldás, </a> vagy <a href="http://www.google.com/chromeframe/?redirect=true">a Google Chrome Frame telepítésével modernizálható még ez a böngésző is</a>. Megéri, mert kényelmesebb, gyorsabb és sokkal biztonságosabb lesz tőle!</p><![endif]-->





  <input type="text" class ="system_controller" style="display:none ;" name="ses_u_id" id="ses_u_id"  value="<? echo  $user_id;?>" size=10>
	<div id="praktikerOuter">

			<div id="content" style="min-height: 550px"> 

                   <?
                
                   
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
?>
<?

$db_id = $user_id;
	

  if(empty($us_er_id )) {
     echo "reg";
      include ('php/reg.php');
    }
  else{

    include ("php/replay.php");
  }
  } else {
   
    include ('php/like.html');
  }
}


 if(isset($_GET["site"])) {
      include ('game_design.html');
   
 }
   ?> 
  </div>

  </div>
  </div>
 
<div id="sys_m" style="display: none;">sys_m</div>  



  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34047937-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



    </body>
</html>