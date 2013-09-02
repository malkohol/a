
<?
include ('conn.php');
////session szinkron aszinkron mode
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



?>
<div class="row">
		<div class="large-12 columns"></div>
	<a href="index.php?lang=hun">
	<div class="large-3 columns">HUN</div></a>
		<a href="index.php?lang=eng">
	<div class="large-3 columns">ENG</div></a>
		<a href="index.php?lang=ger">
	<div class="large-3 columns">GER</div>
	</a>
		</div>
