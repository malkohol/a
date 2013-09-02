

  <div id="wbox" class="bg3">
   <? $uid = $_GET["u_id"]; ?>
    <div id="included">
      <div id="votecontainer" class="blurb main1">
       <input type="text" class ="" style="display:none ;" name="ses_u_id" id="ses_u_id"  value="<? echo $_GET["u_id"];?>" size="10"/>
         <input type="text" class ="" style="display:none;" name="helyszin" id="helyszin"  value="<? echo $_GET["helyszin"];?>" size="10"/>
        <h1>Szavazás</h1>
        <div style="margin:0 auto; width: 634px; height:120px;">
          <!-- "previous page" action -->  
          <a class="prev browse left"></a>
        
          <!-- root element for scrollable -->  
          <div class="scrollable" id="scrollable">
        
            <!-- root element for the items -->  
            <div class="items">
        
          
            <div id="vote_list_proc">
            	<?		include ("vote_list_proc.php"); ?>
							
   					 </div> 		
         	<div id="var_menu" class="">
				<? include ('../script/conn.php');
    	    	$sql_count= "SELECT COUNT(id) FROM `sufni_uploaded_pic` WHERE `aktiv` =2"; 
    	    	$result_count = mysql_query($sql_count);
    				while($count = mysql_fetch_array($result_count)){
    	 			$count_n = $count['COUNT(id)'];
    				$oszto = 15;
    				$count_num = ($count_n/$oszto)+1;
    				}
    				if ($count_n > 15 ) {?>
					
						<div id="sorszam_box" class="">
						<?
							for ($i = 1; $i <= $count_num; $i++) {?>
 							<div id="<? echo ($i*15)-15; ?>" onclick="open_vote_page(this.id)" class="sorszam_text" > - <? echo $i; ?> . oldal  </div>
						<?}?>	
						 </div> 
					
								<?}?>
					
						</div>
             </div>     
         </div>
          <!-- "next page" action -->  
          <a class="next browse right"></a>
        </div>
      </div>
    </div>


  </div>




