<?
	////session szinkron aszinkron mode
echo "reg";
	include ('conn.php');
if(empty($_SESSION['id'])) {

		session_start();
		if(isset($_GET['sess'])){
			$sess_id = $_GET['id'];
			session_start(session_id($sess_id));
			$_SESSION['id'] =$sess_id; 
			
			}
			}else{
			$sess_id =$_SESSION['id'];
	
				}
		if(isset($_SESSION['lang'])){
		$lang = $_SESSION['lang'];
			
		}
		
										$i =0;
								$sql_l ="SELECT * FROM adatlap_lang"; 
  				  		$result_l = mysql_query($sql_l);
							  while($lang_a = mysql_fetch_array($result_l)){
								$i++;
								$text_id  =$lang_a['id'];
								$text_m  =$lang_a['magyar'];
								$text_n  =$lang_a['nemet'];
								$text_a  =$lang_a['angol'];
								$result = count($lang_a);			
															$result = count($lang_a);					
								
								

$lang_text[$i][0]= $text_id; 
$lang_text[$i][1]= $text_m; 
$lang_text[$i][2]= $text_n; 
$lang_text[$i][3]= $text_a; 
		}
			if($lang== "hun"){
				$lang_var = 1;	
				}
					if($lang== "ger"){
				$lang_var = 2;	
				}		
					if($lang== "eng"){
				$lang_var = 3;	
				}	
	
	?>
	
			<div class="large-10 columns">
 <fieldset>
    <legend><? echo $lang_text[1][$lang_var] ?></legend>

	<div class="large-10 columns">

<p><? echo	$lang_text[2][$lang_var] ?> </p>


</div>
			<div class="large-10 columns">
			   <h5 class="text-center">1. <? echo	$lang_text[5][$lang_var] ?></h5>
			
			 <fieldset>
	
    <legend ><? echo	$lang_text[6][$lang_var] ?></legend>	
		<form action="/" id="data" >

		
					<div class="large-10 columns">
						<div id="question_box">
				
						<label><? echo	$lang_text[7][$lang_var] ?>	</label>
						<input id="name" name="name" value="">		
			
					<label><? echo	$lang_text[8][$lang_var] ?></label>
					<input id="country" name="country">
			
					<label><? echo	$lang_text[9][$lang_var] ?></label>
					<input id="post" name="post">

					<label><? echo	$lang_text[10][$lang_var] ?></label>
					<input id="tel" name="tel">
		
					<label><? echo	$lang_text[11][$lang_var] ?></label>
					<input id="email" name="email">
		
						<label><? echo	$lang_text[12][$lang_var] ?></label>
					<input id="pro_lvl" name="pro_lvl">
	
						<label><? echo	$lang_text[13][$lang_var] ?></label>
					<input id="skill" name="skill">
					</div>
			
				</div>	
		</form>	
		</fieldset>	
		</div>
	<div class="large-10 columns">
	<div class="large-10 columns"><a href="#" data-reveal-id="myModal"><p>teljes jogi nyilatkozatl</p></a></div>
</div>

<div class="large-10 columns">
<form class="custom">
  <label for="checkbox1">
    <input type="checkbox" id="remember" name="remember"  style="display: none;">
    <span class="custom checkbox"></span>Elfogadom a feltételeket
  </label>
</form>


			<div class="row " >
					<div class="large-10 columns">
							<div id="1" onclick="validate();" class="button small success">Kérdőív kitöltés</div>
					</div>
	 		</div>
	</div> 



 </fieldset>
	</div>
