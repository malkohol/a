<?


include ('conn.php');
////session szinkron aszinkron mode
if(empty($_SESSION['id'])) {


		if(isset($_GET['sess'])){
			$sess_id = $_GET['sess'];
			session_start(session_id($sess_id));
			$_SESSION['id'] =$sess_id; 
			$user_id= $_SESSION['user_id'] ; 
			}
			}else{
			$sess_id =$_SESSION['id'];
		
				}


if(isset($_GET['first'])){
	$first = $_GET['first'];
}else{
		$first =0;

	}
	
	
if($first == 1){
			echo "save";
			$uid  = date("YmdHis");
		
			$_SESSION['sub_p_date'] = $_POST['name']."&".$_POST['country']."&".$_POST['email']."&".$_POST['post']."&".$_POST['pro_lvl']."&".$_POST['skill']."&".$_POST['tel'];
			
			$today = date("Y-m-d");
			$namea = $_POST['name'];
			$country = $_POST['country'];
			$email = $_POST['email'];
			$post = $_POST['post'];
			$pro_lvl = $_POST['pro_lvl'];
			$skill = $_POST['skill'];
			$tel = $_POST['tel'];
		
			
			
			
			$sql_adatlap_1="INSERT INTO `adatlap_user` (`id`, `u_id`, `sess_id`, `name`, `country`, `email`, `post`, `pro_lvl`, `skill`, `tel`, `reg_date`) VALUES
			 (NULL, '$user_id', '$sess_id', '$namea', '$country', '$email', '$post', '$pro_lvl', '$skill', '$tel', '$today');";
				if (!mysql_query($sql_adatlap_1,$con))

  {
  die('Error: ' . mysql_error());
}


			$sql_adatlap_2="INSERT INTO `adatlap_data` (`id`, `user_id` ) VALUES
			 (NULL, '$user_id' );";
				if (!mysql_query($sql_adatlap_2,$con))

  {
  die('Error: ' . mysql_error());
}

}

		
if(isset($_GET['user_id'])){
$user_id = $_GET['user_id'];
	
	
	}else{
		$user_id	= $user_id;
	}
	

			 $sql_u_data ="SELECT * FROM adatlap_data WHERE `user_id` = '$user_id'"; 
			 $result_u_data = mysql_query($sql_u_data);
    	 	while($u_data = mysql_fetch_array($result_u_data)){
				$b_q_a_1  =$u_data['q_a_1'];
				$b_q_a_2  =$u_data['q_a_2'];
				$b_q_a_3  =$u_data['q_a_3'];
				$b_q_a_4  =$u_data['q_a_4'];
				$b_q_a_5  =$u_data['q_a_5'];
				$b_q_a_6  =$u_data['q_a_6'];
				echo "q1: ".$b_q_a_1."<br>";
				echo "q2: ".$b_q_a_2."<br>";
				echo "q3: ".$b_q_a_3."<br>";
				echo "q4: ".$b_q_a_4."<br>";
				echo "q5: ".$b_q_a_5."<br>";
				echo "q6: ".$b_q_a_6."<br>";
		}
if(isset($_GET['page_id'])){

			$page_id = $_GET['page_id'];
		}else{
			
}
				if($page_id == 0){
	
	
			 $sql_u_info ="SELECT * FROM adatlap_user WHERE `u_id` = '$user_id'"; 
			 $result_u_info = mysql_query($sql_u_info);
    	 	while($u_info = mysql_fetch_array($result_u_info)){
				$u_info_id  =$u_info['id'];
				$u_info_name  =$u_info['name'];
		
	}
		if(!$result_u_info){
					$page_id = 2;	
					$first = 1; 
		}else{
					$page_id = 2;	
					$first = 3;
			}
	}
	

	if($page_id == 3){
			$q_all_1_1 = $_POST['q_1_1']."&".$_POST['q_1_2'];
			$q_all_1_2 = "";
		if($_POST['q_2_1']!=""){
			$q_all_1_2 .= "&".$_POST['q_2_1'];
		}
					if($_POST['q_2_2']!=""){
			$q_all_1_2 .= "&".$_POST['q_2_2'];
		}
			if($_POST['q_2_3']!=""){
			$q_all_1_2 .= "&".$_POST['q_2_3'];
		}
			if($_POST['q_2_4']!=""){
			$q_all_1_2 .= "&".$_POST['q_2_4'];
		}

						if($_POST['q_2_5']!=""){
				$q_all_1_2 .= "&".$_POST['q_2_5'];
		}
						if($_POST['q_2_6']!=""){
				$q_all_1_2 .= "&".$_POST['q_2_6'];
		}
							if($_POST['q_2_7']!=""){
				$q_all_1_2 .= "&".$_POST['q_2_7'];
		}
							if($_POST['q_2_8']!=""){
				$q_all_1_2 .="&".$_POST['q_2_8'];
		}
							if($_POST['q_2_9']!=""){
				$q_all_1_2 .= "&".$_POST['q_2_9'];
		}
		$q_all_1_3 =$_POST['q_3_1']."&".$_POST['q_3_2'];
		$q_all_1_4 =$_POST['q_4_1']."&".$_POST['q_4_2'];
echo $q_all_1_2;
$pieces = explode("&",$q_all_1_2);

$count_p =count($pieces)-1;
echo "<br>db: ".($count_p)."<br>";
$_SESSION['meret_c'] = $count_p;
$over_q = $q_all_1_1."#".$q_all_1_2."#".$q_all_1_3."#".$q_all_1_4;
$_SESSION['a_1'] = $over_q;
			
				$sql_adatlap_3="UPDATE `adatlap_data` SET `q_a_1` = '$over_q' WHERE `user_id` =$user_id";
				if (!mysql_query($sql_adatlap_3,$con))

  {
  die('Error: ' . mysql_error());
}
}	

	if($page_id == 4){
			$q_all_4_1 = $_POST['q_1_1']."&".$_POST['q_1_2'];
			$q_all_4_2 = $_POST['q_1_1']."&".$_POST['q_1_2'];
			$q_all_4_3 =$_POST['q_1_1']."&".$_POST['q_1_2'];
			$q_all_4_4 =$_POST['q_1_1']."&".$_POST['q_1_2'];



$over_q_1 = $q_all_4_1."#".$q_all_4_2."#".$q_all_4_3."#".$q_all_4_4;
$_SESSION['a_2'] = $over_q_1;
echo $_SESSION['a_2']; 

	$sql_adatlap_3="UPDATE `adatlap_data` SET `q_a_2` = '$over_q_1' WHERE `user_id` =$user_id";
				if (!mysql_query($sql_adatlap_3,$con))

  {
  die('Error: ' . mysql_error());
}
}


	if($page_id == 5){
			$q_all_4_1 = $_POST['q_1_1']."&";
			$q_all_4_2 = $_POST['q_2_1']."&";
			$q_all_4_3 =$_POST['q_3_1']."&";
			$q_all_4_4 =$_POST['q_4_1']."&";



$over_q_3 = $q_all_4_1."#".$q_all_4_2."#".$q_all_4_3."#".$q_all_4_4;
$_SESSION['a_3'] = $over_q_3;
echo $_SESSION['a_3']; 

	$sql_adatlap_4="UPDATE `adatlap_data` SET `q_a_3` = '$over_q_3' WHERE `user_id` =$user_id";
				if (!mysql_query($sql_adatlap_4,$con))

  {
  die('Error: ' . mysql_error());
}
}

?>

		<div class="large-2 columns">
		<div id="header_box">
					<? include ('header.php'); ?>
	</div>
		</div>
<?
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
								
								

$lang_text[$i][0]= $text_id; 
$lang_text[$i][1]= $text_m; 
$lang_text[$i][2]= $text_n; 
$lang_text[$i][3]= $text_a; 
						
								
								}
	if(isset($_SESSION['lang'])){
		$lang = $_SESSION['lang'];
			
		}else{
	
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
$count =count($lang_text) ;						
					
						
								
if($page_id == 0){?>


			<div class="large-10 columns">
 <fieldset>
    <legend><? echo $lang_text[1][$lang_var] ?></legend>

	<div class="large-10 columns">

<p><? echo	$lang_text[2][$lang_var] ?> </p>
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

	  

	<?}
	//// page 1
if($page_id == 1){
?>
	

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
					<div id="2" onclick="update_user_array(this.id);" class="button small success">Következő oldal</div>
				</div>	
		</form>	
		</fieldset>	
		</div>
		
			<?}
				//// page 2
		if($page_id == 2){
?>  			<div class="">
			   		<h5 class="text-center">2. <? echo	$lang_text[5][$lang_var] ?></h5>
						<p class="text-center"><? echo	$lang_text[14][$lang_var] ?></p>	
						<form class="custom" action="/" id="data_1">
								<div class="large-10 columns">
									 <fieldset>
											<legend>2.1 <? echo	$lang_text[15][$lang_var] ?></legend>
								  		 <div class="large-4 columns">
   										   <label for="q_1_1"><input name="q_1_1" value="i" type="radio" id="q_1_1"  style="display:none;" CHECKED><span class="custom radio checked"></span> igen</label>
     										 <label for="q_1_1"><input name="q_1_1" value="n"  type="radio" id="q_1_1"  style="display:none;"><span class="custom radio"></span> nem</label>
 												</div>
												<textarea id="q_1_2" name="q_1_2" placeholder="small-12.columns"></textarea>
									</fieldset>	
								  <fieldset>
												<legend>2.2<? echo	$lang_text[18][$lang_var] ?></legend>
		  								  <div class="large-10 columns">
 													<table>
														<? 
														  for ($i = 1; $i <= 10; $i++) {
														
															 echo"<tr><td class=''>".$i.". <input id='q_2_".$i."' name='q_2_".$i."'>"."</td></tr>";
															}
														?>	
													</table>  
												</div>	
									</fieldset>		
									 <fieldset>
											<legend>2.3<? echo	$lang_text[20][$lang_var] ?></legend>
											<div class="large-2 columns">	
										   			<input type="text" id=""  id="q_3_1" name="q_3_1" > 
        							</div>	
												<div class="large-3 columns">	
										   			<p> %</p>
        							</div>	
											<div class="large-12 columns">
													<textarea  id="q_3_2" name="q_3_2" ></textarea>
										</div>
									</fieldset>		
									 <fieldset>
											<legend>2.4<? echo	$lang_text[21][$lang_var] ?></legend>
								  		 <div class="large-4 columns">
   										   <label for="radio1"><input name="q_4_1" value="i" type="radio" id="q_4_1" style="display:none;" CHECKED><span class="custom radio checked"></span> igen</label>
     										 <label for="radio1"><input name="q_4_1" value="in" type="radio" id="q_4_1" style="display:none;"><span class="custom radio"></span> nem</label>
 												</div>
 														<div class="large-12 columns">
													<textarea  id="q_4_2" name="q_4_2" ></textarea>
										</div>
									</fieldset>										
						
					<div id="3" onclick="update_user_array(this.id);" class="button small success">Következő oldal</div>	
				
					</div>
				</form>	
	
				</div>
	 
	 	<?}
	 		//// page 3
	if($page_id == 3){
?>  			<div class="">
			   		<h5 class="text-center">3. <? echo	$lang_text[5][$lang_var] ?></h5>
						<p class="text-center"><? echo	$lang_text[22][$lang_var] ?></p>	
						<form class="custom" action="/" id="data_2" >
								<div class="large-10 columns">
									
											<legend>3.1 <? echo	$lang_text[23][$lang_var] ?></legend>
											 <fieldset>
											<legend>3.2 <? echo	$lang_text[24][$lang_var] ?></legend>
								  		 <div class="large-4 columns">
   										   <label for="radio1"><input name="q_1_1" value="i" type="radio" id="q_1_1" style="display:none;" CHECKED><span class="custom radio checked"></span> igen</label>
     										 <label for="radio1"><input name="q_1_1"  value="n" type="radio" id="q_1_1" style="display:none;"><span class="custom radio"></span> nem</label>
 												</div>
												<textarea id="q_1_2" name="q_1_2" ></textarea>
									</fieldset>
									 <fieldset>
											<legend>3.3 <? echo	$lang_text[25][$lang_var] ?></legend>
								  		 <div class="large-4 columns">
   										   <label for="radio1"><input name="q_2_1" value="i" id="q_2_1" type="radio"  style="display:none;" CHECKED><span class="custom radio checked"></span> igen</label>
     										 <label for="radio1"><input name="q_2_1" value="n" id="q_2_1"  type="radio" style="display:none;"><span class="custom radio"></span> nem</label>
 												</div>
												<textarea  name="q_2_2" id="q_2_2" ></textarea>
									</fieldset>	
								 <fieldset>
											<legend>3.4 <? echo	$lang_text[26][$lang_var] ?></legend>
								  		 
													  	<div class="large-12 columns">	
								  							 	<div class="large-8 columns">	
										   								<input name="q_3_1_1" id="q_3_1_1" type="text" id="" > 
        													</div>	
								  								<div class="large-2 columns">	
								  									<input name="q_3_1_2" id="q_3_1_2" type="text" id="" ></div>	
        														<div class="large-1 columns">	<p>%	</p>	</div>	
        											</div>
        											  	<div class="large-12 columns">	
								  							 	<div class="large-8 columns">	
										   								<input name="q_3_2_1" id="q_3_2_1" type="text" id="" > 
        													</div>	
								  								<div class="large-2 columns">
								  									<input name="q_3_2_2" id="q_3_2_2" type="text" id="" >	</div>	
								  								<div class="large-1 columns">	<p>%	</p>	</div>		
        											</div>
        											  	<div class="large-12 columns">	
								  							 	<div class="large-8 columns">	
										   								<input name="q_3_3_1" id="q_3_3_1" type="text" id="" > 
        													</div>	
								  								<div class="large-2 columns">	
								  									<input name="q_3_3_2" id="q_3_3_2"  type="text" id="" >		</div>
								  											<div class="large-1 columns">	<p>%	</p>	</div>	
        											</div>
        											  	<div class="large-12 columns">	
								  							 	<div class="large-8 columns">	
										   								<input name="q_3_4_1" id="q_3_4_1" type="text" id="" > 
        													</div>	
								  								<div class="large-2 columns">	
								  									 <input name="q_3_4_2" id="q_3_4_2" type="text" id="" > 		</div>	
								  										<div class="large-1 columns">	<p>%	</p>	</div>	
        											</div>
        											  	<div class="large-12 columns">	
								  							 	<div class="large-8 columns">	
										   								<input name="q_3_5_1" id="q_3_5_2" type="text" id="" > 
        													</div>	
								  								<div class="large-2 columns">	
								  									<input name="q_3_5_2" id="q_3_5_2" type="text" id="">	</div>	
								  										<div class="large-1 columns">	<p>%	</p>	</div>	
        													</div>
									</fieldset>	
								 	 <fieldset>
											<legend>3.5 <? echo	$lang_text[27][$lang_var] ?></legend>
								  		 <div class="large-4 columns">
   										   <label for="radio1"><input name="q_4_1"  id="q_4_1" value="i"  type="radio"  style="display:none;" CHECKED><span class="custom radio checked"></span> igen</label>
     										 <label for="radio1"><input name="q_4_1"  id="q_4_1" value="n"  type="radio" style="display:none;"><span class="custom radio"></span> nem</label>
 												</div>
												<textarea   name="q_4_2"  id="q_4_2" ></textarea>
									</fieldset>										
									<fieldset>
											<legend>3.6 <? echo	$lang_text[28][$lang_var] ?></legend>
								  		
												<textarea  name="q_5_1"  id="q_5_1" ></textarea>
									</fieldset>	
					<div id="4" onclick="update_user_array(this.id);" class="button small success">Következő oldal</div>	
				
					</div>
				</form>	
	
				</div>
	 
	 	<?}	
	 	if($page_id == 4){
	 			//// page 4
?>  			<div class="">
			   		<h5 class="text-center">4. <? echo	$lang_text[5][$lang_var] ?></h5>
						<p class="text-center"><? echo	$lang_text[29][$lang_var] ?></p>	
						<form class="custom" action="/" id="data_3" >
								<div class="large-10 columns">
									 <fieldset>
											<legend>4.1 <? echo	$lang_text[30][$lang_var] ?></legend>
								  	
												<textarea  name="q_1_1"  id="q_1_1" ></textarea>
									</fieldset>	
										 <fieldset>
											<legend>4.2 <? echo	$lang_text[31][$lang_var] ?></legend>
								  	
												<textarea  name="q_2_1"  id="q_2_1" ></textarea>
									</fieldset>							
										 <fieldset>
											<legend>4.3 <? echo	$lang_text[32][$lang_var] ?></legend>
								  	
												<textarea  name="q_3_1"  id="q_3_1" ></textarea>
									</fieldset>	
										 <fieldset>
											<legend>4.4 <? echo	$lang_text[33][$lang_var] ?></legend>
								  	
												<textarea  name="q_4_1"  id="q_4_1" ></textarea>
									</fieldset>	
									
					<div id="5" onclick="update_user_array(this.id);" class="button small success">Következő oldal</div>	
				
					</div>
				</form>	
	
				</div>
	 
	 	<?}
	 		 	if($page_id == 5){
	 		 		
	 		 		$meret_c =$_SESSION['meret_c'];
	 		 			//// page 5
?>  			<div class="">
			   		<h5 class="text-center">5. <? echo	$lang_text[5][$lang_var] ?></h5>
						<p class="text-center"><? echo	$lang_text[34][$lang_var] ?></p>	
						<form class="custom" action="/" id="data" >
								<div class="large-10 columns">
									 <fieldset>
											<legend>5.1 <? echo	$lang_text[35][$lang_var] ?></legend>
								  	<table><tr>
	<? 
  for ($i = 0; $i <= $meret_c; $i++) {
 	if($i != 0){	 echo"<td class=''>".$i."0 mm<sup>2</sup>"."</td>";
 		}else{
 	 echo"<td class=''> db </td>";
 		
 		}
}
?></tr>
<?		
  for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";	
     for ($e = 1; $e <= $meret_c; $e++) {?>
   	 <? if($e ==1){ 
   	 					
   	 				$var_i = $i;
   	 						
   	 					
   	 					switch ($i) {
   					 	case 2:
       			 	$var_i = 5;
       			 	break;
       			 	case 3:
   					 	$var_i = 10;
        			break;
   						case 4:
      				$var_i = 30;
       				 break;
       				 	case 5:
      				$var_i = 80;
       				 break;
       				 		 	case 6:
      				$var_i = 120;
       				 break;
						 		 	case 7:
      				$var_i = 160;
       				 break;
       				  	case 8:
      				$var_i = 200;
       				 break;
       				 	case 9:
      				$var_i = 250;
       				 break;
       				  	case 10:
       				 	$var_i = 300;
       				 break;
						}
   	 					
   	 					echo "<td>".$var_i."</td>";
   	 					
   	 					} ?>	
   	 				  <td><input class='large-8' name='<? echo $var_i."-".$e;  ?>'></td>
     	<?}
   	  echo "</tr>";
}?>
</table>
								  	
												
									</fieldset>	
									
							 <fieldset>
											<legend>5.2 <? echo	$lang_text[38][$lang_var] ?></legend>
								  	<table>
											<tr>
												<td><? echo	$lang_text[36][$lang_var] ?></td>
												<td><? echo	$lang_text[39][$lang_var] ?></td>
											<td><? echo	$lang_text[40][$lang_var] ?></td>
											</tr>
											<tr>
												<td>	<p>10 mm</p>	</div></td>
												<td>	<input type="text" id="">	</div></td>
												<td>	<input type="text" id="">	</div></td>
											</tr>
											<tr>
													<td>	<p>20 mm</p>	</div></td>
												<td>	<input type="text" id="">	</div></td>
												<td>	<input type="text" id="">	</div></td>
											</tr>
												<tr>
													<td>	<p>20 mm</p>	</div></td>
												<td>	<input type="text" id="">	</div></td>
												<td>	<input type="text" id="">	</div></td>
											</tr>
											</table>
									</fieldset>				
											 <fieldset>
											<legend>5.3 <? echo	$lang_text[41][$lang_var] ?></legend>
								  	
												<textarea ></textarea>
									</fieldset>		
										 <fieldset>
											<legend>5.4 <? echo	$lang_text[43][$lang_var] ?></legend>
								  	
												<textarea ></textarea>
									</fieldset>	
					<div id="6" onclick="update_user_array(this.id);" class="button small success">Következő oldal</div>	
				
					</div>
				</form>	
	
				</div>
	 
	 	<?} 	//// page 6	 	
	 	if($page_id == 6){
?>  			<div class="large-10 columns">
			<h5 class="text-center">6. <? echo	$lang_text[5][$lang_var] ?></h5>
						<p class="text-center"><? echo	$lang_text[44][$lang_var] ?></p>	
			
		
			<form class="custom" action="/" id="data" >
	 <fieldset>

    <legend ><? echo	$lang_text[45][$lang_var] ?></legend>	
		
		
					 <div class="large-4 columns">
   										   <label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;" CHECKED><span class="custom radio checked"></span> igen</label>
     										 <label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;"><span class="custom radio"></span> nem</label>
 												</div>
 												 <div class="large-12 columns">
												<input >
					</div>
		
		</fieldset>	
			 <fieldset>

    <legend ><? echo	$lang_text[47][$lang_var] ?></legend>	
		
		
					 <div class="large-4 columns">
   										   <label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;" CHECKED><span class="custom radio checked"></span> igen</label>
     										 <label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;"><span class="custom radio"></span> nem</label>
 												</div>
 												 <div class="large-12 columns">
												<input >
					</div>
		
		</fieldset>	
				 <fieldset>

    <legend ><? echo	$lang_text[49][$lang_var] ?></legend>	
		<table>
				<tr>
					<td><? echo	$lang_text[50][$lang_var] ?></td>	
					<td>	<input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[51][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[52][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[53][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[54][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[55][$lang_var] ?></td>	
					<td><input </td>
				</tr>
							<tr>
					<td><? echo	$lang_text[56][$lang_var] ?></td>	
					<td>	<input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[57][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[58][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[59][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[60][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[61][$lang_var] ?></td>	
					<td><input </td>
				</tr>	
							<tr>
					<td><? echo	$lang_text[62][$lang_var] ?></td>	
					<td>	<input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[63][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[64][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[65][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[66][$lang_var] ?></td>	
					<td><input </td>
				</tr>
				<tr>
					<td><? echo	$lang_text[67][$lang_var] ?></td>	
					<td><input </td>
				</tr>
					<tr>		
					<td><? echo	$lang_text[68][$lang_var] ?></td>	
					<td><input </td>
				</tr>	
																	
			</table>
		
		
		</fieldset>
		</form>	
		</div>
	 
	 	<?}	 	if($page_id == 7){
?>  			<div class="">
			   <h5 class="text-center">7. <? echo	$lang_text[5][$lang_var] ?></h5>
				<p class="text-center"><? echo	$lang_text[69][$lang_var] ?></p>	
			 	 <fieldset>
											<legend>7.1 <? echo	$lang_text[70][$lang_var] ?></legend>
								  	
												<textarea ></textarea>
									</fieldset>	
		</div>
	 
	 	<?}
?>

	<?
	 ?>
	
