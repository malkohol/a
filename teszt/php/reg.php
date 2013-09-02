<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <!-->
<html class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/praktiker.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
	<p class="chromeframe">
		You are using an <strong>outdated</strong>
		browser. Please
		<a href="http://browsehappy.com/">upgrade your browser</a>
		or
		<a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a>
		to improve your experience.
	</p>
	<![endif]-->

	<div id="praktikerOuter">
		<div id="praktiker" class="blueplanks">
			<div id="heading">
				<img src="img/praktikerlogo.png" alt=""></div>
			<div id="content" style="min-height: 550px">

				<div id="reg" >
					<h1 class="like">
						Ahhoz, hogy a játékban részt vehess,
						<br>kérjük add meg alábbi adataid:</h1>
					<form>
						<div class="panel_elem" style="display:none">
							<label for="u_id">u_id</label>
							<input type="text" cols="20" id="u_id"  name="u_id" value="<? echo $user_id; ?>"></div>
						<div class="panel_elem">
							<label for="name">Név</label>
							<input type="text" cols="20" id="name"  name="name" value="<? echo $user_name; ?>"></div>
						<div class="panel_elem">
							<label for="cim">Cím</label>
							<input type="text" cols="20" id="cim"  name="cim" value="<? echo $user_cim; ?>"></div>
						<div class="panel_elem">
							<label for="email">E-mail</label>
							<input type="text" cols="20" id="email"  name="email" value="<? echo $user_email; ?>"></div>
						<div class="panel_elem" style="display:none">
							<label for="gender">nem</label>
							<input type="text" cols="20" id="gender"  name="gender" value="<? echo $user_gender; ?>"></div>
					</form>
					<br>
					<div class="panel_elem">
						<form>
							<label for="nem">Nem</label>

							<input type="radio" id="nem" name="browser" onclick="displayResult(this.value)"  <? if ($user_gender == female) {echo "checked"; }   ?>
							value="female">Nő
							<br>
							<input type="radio" id="nem" name="browser" onclick="displayResult(this.value)" <? if ($user_gender == male) {echo "checked"; }  else if(empty($user_gender)) {echo "checked";} ?>
							value="male">Férfi
							</form>
					</div>
					<br>
					<div class="panel_elem" class="linekorr" style="width: 400px;">
						<label for="chk1" style="width:400px; border-top: 1px solid yellow; padding-bottom: 10px; padding-top: 10px ">
							<a href="" target="_blank">
								<img src="img/adobe_pdf_icon.png" style="padding-right: 10px" alt="Letöltöm">Játékszabályzat</a>
						</label>

						<form>
							<input type="checkbox" name="chk1" id="terms">
							Elfogadom
							<br><br>
							<input type="button" id="save" class="blackbutton" name="button" value="Tovább a játékhoz" onClick="return validate(chk1);" style="width: 10em; padding-bottom: 15px; padding-top: 10px;  position: absolute; right: 00px; bottom: 80px;"></form>
					</div>

				</div>


			</div>
			<!-- content -->

		</div>
	</div>


								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
								<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
								<script src="js/plugins.js"></script>
								<script src="js/main.js"></script>

								<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
								<script>
												var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
												(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
												g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
												s.parentNode.insertBefore(g,s)}(document,'script'));
								</script>
				</body>
</html>
