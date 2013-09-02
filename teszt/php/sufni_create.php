<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script type='text/javascript' src='js/jquery.min.js'></script>
<script src="js/kinetic-v3.9.3.js"></script>
<script type="text/javascript" src="js/version1.js"></script>
<title>Html5 image editor</title>
<meta name="author" content="Chris Bloor" />
<link href="css/layout.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" />
<!-- Menu -->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie/ie.css" />
<![endif]-->
<link rel="stylesheet" href="styles/global.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mobile.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#spinner").bind("ajaxSend", function() {
		$(this).show();
	}).bind("ajaxStop", function() {
		$(this).hide();
	}).bind("ajaxError", function() {
		$(this).hide();
	});

     });
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5918573-53']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="wrapper">

  <!--header-->

  <div id="content">
  
    <div id="container" style="float:left; margin-right:40px;margin-top:10px;"> </div>
    <div id="editor">
  
      <input type="submit" id="preview" value="Preview"/>
      <input type="submit" id="save" value="Save"/>
      <p class="clearing" /></p>
      <ul id="img">
        <li><a href="#"><img src="images/kulcskeszlet.png" id="i1" alt="heart" width="106" height="118" /></a></li>
        <li><a href="#"><img src="images/balloon.png" id="i2" alt="balloon" width="106" height="118" /></a></li>
        <li><a href="#"><img src="images/furo.png" id="i14" alt="caterpilla" width="106" height="118" /></a></li>
   
      </ul>
  
  </div>

  <!--footer--> 
</div>
<!--container--> 

<script>
    $("#texts").keyup(function () {
      var value = $(this).val();
      $("p#textcount").text(value);
	  	   var fontid =  $('#fontfam').val();
		     $("p#textcount").css("font-family", fontid);
		   var color =  $('#colour').val();
             $("p#textcount").css("color", color);  
    }).keyup();
	
	    $("#colour").change(function () {
      var value = $('texts').val();
      $("p#textcount").text(value);
	  	   var fontid =  $('#fontfam').val();
		     $("p#textcount").css("font-family", fontid);
		   var color =  $('#colour').val();
             $("p#textcount").css("color", color);  
    }).keyup();
	
		    $("#fontfam").change(function () {
      var value = $('texts').val();
      $("p#textcount").text(value);
	  	   var fontid =  $('#fontfam').val();
		     $("p#textcount").css("font-family", fontid);
		   var color =  $('#colour').val();
             $("p#textcount").css("color", color);  
    }).keyup();
	
	
</script>
</body>
</html>
