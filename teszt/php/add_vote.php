<?
		include ('../script/conn.php');  
		$u_id = $_GET["u_id"];
		$kep_id = $_GET["kep_id"];
		$t=time();
		$date= (date("Y-m-d-H:i:s",$t));
	  $sql_score ="INSERT INTO `user_vote` ( `id` ,`user_id` , `pic_id` , `date`)
								 VALUES ( NULL , '$u_id ', '$kep_id', '$date' );"; 
 	
 	if (!mysql_query($sql_score,$con))
  {
  die('Error: ' . mysql_error());
  }
   ?>  	
<button  style="background-color:gray;" id="" >"szavatott"</button>
