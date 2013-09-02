
 

	
<input type=text name="ses_u_id" id="ses_u_id" style="display: none;"  value="<? echo $u_id;?>" size=10>

<form name="score" id="score">
</form>
<div id="score_msg" class="blurb">
<?php
 $score  = $_GET["score"]; 
 $u_id = $_GET["u_id"];

$post = 0;

include ("../script/conn.php");
$sql_user2 ="SELECT * FROM `game_users` WHERE `u_id` = '$u_id' LIMIT 0 , 30"; 
$result_user2 = mysql_query($sql_user2);
while($user2 = mysql_fetch_array($result_user2)){
$user_nev = $user2['nev'];
$user_nem = $user2['nem'];
$first = $user2['first'];
}
include ("../script/conn.php");
$t=time();
$date= (date("Y-m-d-H:i:s",$t));
$sq2="INSERT INTO game_over_scroe (use_id, time, name, date)
VALUES
('$u_id','$score' ,'$user_nev', '$date')";
if (!mysql_query($sq2,$con))
  {
  die('Error: ' . mysql_error());
  }
 
?>
	<p class="line1" style="font-weight: 700; text-transform: uppercase"> Kapcsolodási hiba !!</p><br>

	<div id="buttonWrapper">
		<input type="button" class="blackbutton" onclick="tetris.score_list();return false;" value="Tovább" />
		<br><br>
	</div>
</div>




		<div id="footer"></div>
	</div>



</div>




