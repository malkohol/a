<?php
	if(isset($_POST['submit'])) { //ha megnyomtuk a feltöltés gombot
		$target= "uploads/"; //célmappa
		$file_name = $_FILES['file']['name']; //a célfájlt nevezze el a $_FILES superglobal változóban lévő fájlnévre (a fájl eredeti nevére)
		$tmp_dir = $_FILES['file']['tmp_name']; //az ideiglenes mappa helyét a $tmp_dir változóban tároljuk
   
		if(!preg_match('/(gif|jpe?g|png)$/i', $file_name)) //ha a fájlnak ($file_name-nek) a kiterjesztése nem gif, jpg/jpeg, png, akkor...
		{
			echo "Rossz fájltípus!"; //... "dobjon el" egy hibát
		}
		else
		{
			move_uploaded_file($tmp_dir, $target . $file_name); //az ideiglenes mappából átteszi a fájlt a végleges mappába (a $target . $file_name összeilleszti a két stringet, így uploads/fajlnev-et kapunk)
			$feltoltve = true; //a feltoltve változó true értéket kap
		}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fájlok feltöltése php-val</title>
</head>
<body>
<form enctype="multipart/form-data" action="" method="post" >
<input type="hidden" name="MAX_FILE_SIZE" value="3000000" /> A feltöltött file maximális mérete 15mb
<label for="file"> Válassz egy képet!</label><input id="file" type="file" name="file" />
<input type="submit" name="submit" value="Feltöltés!" />
</form> 

<?php
	if($feltoltve) {
		$utvonal = $target . $file_name;
	
	    include ('../script/conn.php');  
 			$u_id =  $_GET['id'];
 			$helyszin =  $_GET['helyszin'];
 			$t=time();
		$date= (date("Y-m-d-H:i:s",$t));
     	$sq2="INSERT INTO uploaded_pic (u_id, img, aktiv, date , terulet)
VALUES
('$u_id','$utvonal' ,'3' ,'$date','$helyszin' )";
if (!mysql_query($sq2,$con))
  {
  die('Error: ' . mysql_error());
  }
	
	
		echo "Sikeresen feltöltötted a képet, megnézheted <a href=\"$utvonal\">itt!</a>"; 

	}
?>
</body>
</html>
