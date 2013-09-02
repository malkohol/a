<script type="text/javascript" src="js/kinetic-v3.9.3.js"></script>
<script type="text/javascript" src="js/version2.js"></script>

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

<body>

<header></header>
<input type="text" class ="system_controller" style="display:none ;" name="ses_u_id" id="ses_u_id"  value="<? echo  $user_id;?>
" size=10>
<div id="praktikerOuter">
	<div id="praktiker" class="game2">

		<div id="heading">
			<img src="img/praktikerlogo.png" alt=""></div>

		<div id="con" class="content" >

			<div id="topnav" class="panel">
				<ul class="menu">
					<li id="1" onclick="open_gear_panel(this.id);" class="null">Elektromos kisgépek</li>
					<li id="2" onclick="open_gear_panel(this.id);" class="null" >Kézi szerszámok</li>
					<li id="3" onclick="open_gear_panel(this.id);" class="selected">Kerti szerszámok</li>
				</ul>
				<div id="carousel">
					<div id="arrowleft" class="prev">
						<img src="img/arrowleft.png" alt=""></div>
					<div id="moItem1" class="scrollable" style="display: block;">
						<ul  class="items" id="img" >
							<li class="item"> <a href="#"> <img src="img/tools1/278_1_L.png" id="i1"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/308_1_L.png" id="i2"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/21181_0_G.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/21967_0_L.png.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/21971_0_L.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/22136_0_L.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/23550_0_L.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/298212.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/302258.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/311173.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/332415.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/363696.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/382725.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/8833453228062.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/8833521287198.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/8833908342814.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/8845383696414.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/8911827337246.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools1/budget-akku-grasschere-bag-36-li.png" id="i14"  /> </a> </li>

						</ul>
					</div>
					<div id="moItem2" class="scrollable" style="display: none;">
						<ul  class="items" id="img" >
							<li class="item"> <a href="#"> <img src="img/tools2/16356_1_L.png" id="i1"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools2/8840276639774.png" id="i2"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools2/8849269784606.png" id="i3"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools2/8859756462110.png.png" id="i4"  /> </a> </li>
							

						</ul>
					</div>
					<div id="moItem3" class="scrollable" style="display: none;">
						<ul  class="items" id="img" >
							<li class="item"> <a href="#"> <img src="img/tools3/19024_0_L.png" id="i1"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/98506_L.png" id="i2"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/150114_mare.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/274357.png.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/274358.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/274360.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/274361.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/274363.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/302258.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/334513.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/8834095480862.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/8838910705694.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/8849270046750.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/8932911644702.png" id="i14"  /> </a> </li>
							<li  class="item"> <a href="#"> <img src="img/tools3/budget-bbt-6643.png" id="i14"  /> </a> </li>
							
						</ul>
					</div>

					<div id="arrowright" class="next">
						<img src="img/arrowright.png" alt=""></div>

				</div>

			</div>

			<div id="content">

				<div id="container"></div>
				<div id="editor">

					<p class="clearing" ></p>

					<input type="submit" id="preview" class="button" value="Preview"/>
					<input type="submit" id="save" class="button" value="Beküldöm"/>
				</div>
			</div>
			<div id="bottomnav" class="panel">
				<div id="carousel">
					<div id="items4" class="items">
						<div  id="butor1" class="item">
							<div id="button_box" style="float:right;">
								<div id="butor1-h">off</div>
								<div style="display:none;" id="butor1-s">on</div>
								<ul  id="imga" class="">
									<li >
										<a href="#">
											<div>
												<img style="display:none;" src="img/butor11_big.png"  id="i1" />
												<div class="sample" style="background-color: #ffffff"></div>
											</div>
										</a>
									</li>
									<li >
										<a href="#">
											<div>
												<img style="display:none;"src="img/butor12_big.png"  id="i1" />
												<div class="sample" style="background-color: #c4a071"></div>
											</div>
										</a>
									</li>
									<li >
										<a href="#">
											<div>
												<img style="display:none;" src="img/butor13_big.png"  id="i1" />
												<div class="sample" style="background-color: #904c1f"></div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div style="float:left;" id="img_box">
								<img src="img/butor11.png" alt=""></div>
						</div>
						<div  id="butor2" class="item">
							<div id="button_box" style="float:right;">
								<div id="butor2-h">off</div>
								<div style="display:none;" id="butor2-s">on</div>
								<ul  id="imgb" class="">
									<li >
										<a href="#">
											<div>
												<img style="display:none;" src="img/butor21_big.png"   w id="i1" />
												<div class="sample" style="background-color: #ffffff"></div>
											</div>
										</a>
									</li>
									<li >
										<a href="#">
											<div>
												<img style="display:none;"src="img/butor22_big.png"  id="i1" />
												<div class="sample" style="background-color: #0d1112"></div>
											</div>
										</a>
									</li>
									<li >
										<a href="#">
											<div>
												<img style="display:none;" src="img/butor23_big.png"  id="i1" />
												<div class="sample" style="background-color: #904c1f"></div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div style="float:left;" id="img_box">
								<img src="img/butor21.png" alt=""></div>
						</div>

						<div  id="butor3" class="item">
							<div id="button_box" style="float:right;">
								<div id="butor3-h">off</div>
								<div style="display:none;" id="butor3-s">on</div>
								<ul  id="imgc" class="">
									<li >
										<a href="#">
											<div>
												<img style="display:none;" src="img/butor31_big.png"  id="i1" />
												<div class="sample" style="background-color: #f4fbc9"></div>
											</div>
										</a>
									</li>
									<li >
										<a href="#">
											<div>
												<img style="display:none;"src="img/butor32_big.png"  id="i1" />
												<div class="sample" style="background-color: #7b6a56"></div>
											</div>
										</a>
									</li>
									<li >
										<a href="#">
											<div>
												<img style="display:none;" src="img/butor33_big.png"  id="i1" />
												<div class="sample" style="background-color:#0f1618"></div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div style="float:left;" id="img_box">
								<img src="img/butor31.png" alt=""></div>
						</div>

					</div>

				</div>
				<!-- <div id="savebutton" class="button">Beküldöm</div>
			-->
		</div>

		<!-- content end -->
	</div>

	<script>

<? 

if (isset($_GET["back"])) {
	 $back= $_GET["back"]; 
 
 if($back== 1){
	$hatter = "img/hatter_fenyo.jpg";
	}

if($back== 2){
	$hatter = "img/hatter2.jpg";
	}
if($back == 3){
	$hatter = "img/hatter3.jpg";
	}

}else{
	
	$hatter = "img/hatter_fenyo.jpg";
	}

	?>

	window.onload = function() {
				var hat = "<?= $hatter ?>";
								var sources = {
					
										fempolc: "img/butor31_big.png",
										fapolc: "img/butor21_big.png",
										asztal: "img/butor11_big.png",
										hatter: hat
								};
								loadImages(sources, initStage);
				
						};
</script>

</div>
</div>
<body onmousedown="return false;"></body>
</html>