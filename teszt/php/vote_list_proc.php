<? //PHP LOOP KEP 
            
            			include ("../script/conn.php"); 
								
								if (empty($_GET["tol"])) {
									$tol = 0;
									}else{
									$tol =	$_GET["tol"];
									} 
								
   							  $sql_score ="SELECT * FROM `sufni_uploaded_pic`"; 
 								  $result_score = mysql_query($sql_score);
							    while($score = mysql_fetch_array($result_score)){
    							$scr_id  =$score['id'];
    							$scr_img  =	$score['img']; 
    							$szavazas = 0;
    							?>
            			  <div class="vote_small_box">
           	   									 <div  class="vote_small_pic" style="height:50px;width:50px; background-image:url('http://teszt4.dentaku.hu/sufni/<? echo $scr_img ?>');"></div>                     
             									 		 <div id="vote_box_<? echo $scr_id ?>"> 
             													  <? include ("../script/conn.php"); 
															 						  $sql_vote ="SELECT * FROM `sufni_user_vote` WHERE `user_id` = '$uid' AND `pic_id` = $scr_id LIMIT 1"; 
 								  													$result_vote = mysql_query($sql_vote);
							   								 						while($vote = mysql_fetch_array($result_vote)){
    																				$vote_id  =$vote['id'];
    																						if (isset($vote_id)) {	
    																									$szavazas = 1;
    																						}
    																					
    																				}
    							
               																if ($szavazas == 1) {	?>	 
               															 		<button  style="background-color:gray;color:silver;cursor: default" id="<? echo $scr_id ?>" >Szavaztam</button>
               																			<?}
               																if ($szavazas == 0) { 	?>	 
               																	 <button  id="<? echo $scr_id ?>" onclick="vote(this.id);">Szavazás</button>
               																			<?}?>
               											</div>	
									 														<button id="<? echo $scr_img ?>" onclick="AjaxResponse(this.id);">megosztás</button>
																 	
                 		</div>
               			
               <?} ?>
               	<div id="clear"></div>	