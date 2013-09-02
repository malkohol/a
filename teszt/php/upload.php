<script>
function stopUpload(success){
      var result = '';
      if (success == 1){
         result = '<span class="msg">A feltöltés sikeres!<\/span><br/><br/><div class="separator"></div><br/>';
        parent.document.getElementById('f1_upload_form').innerHTML = result + '<label>Nagy méretű kép<\/label><br> <input name="myfile_big" type="file" size="40" /><label><input type="submit" name="submitBtn" class="sbtn" value="Feltöltöm" /><\/label>';
      }
     
       if (success == 2){
         result = '<span class="msg">A feltöltés sikeres!<\/span><br/><br/><div class="separator"></div><br/>';
       parent.document.getElementById('f1_upload_form').innerHTML = result + '<label>Kép<\/label><br> <input name="myfile" type="file" size="40" /><label><input type="submit" name="submitBtn" class="sbtn" value="Feltöltöm" /><\/label>';
      }
         if (success == 3){
         result = '<span class="msg">A feltöltés sikertelen! Rossz a kiterjesztés vagy túl nagy a file<\/span><br/><br/><div class="separator"></div><br/>';
       parent.document.getElementById('f1_upload_form').innerHTML = result + '<label>Kép<\/label><br> <input name="myfile" type="file" size="40" /><label><input type="submit" name="submitBtn" class="sbtn" value="Feltöltöm" /><\/label>';
      }
      
          if (success == 4){
         result = '<span class="msg">A feltöltés sikertelen! Rossz a kiterjesztés vagy túl nagy a file<\/span><br/><br/><div class="separator"></div><br/>';
parent.document.getElementById('f1_upload_form').innerHTML = result + '<label>Nagy méretű kép<\/label><br> <input name="myfile_big" type="file" size="40" /><label><input type="submit" name="submitBtn" class="sbtn" value="Feltöltöm" /><\/label>';
      }
       else {
         result = '<span class="emsg">Hiba történt!<\/span><br/><br/><div class="separator"></div><br/>';
      }
      parent.document.getElementById('f1_upload_process').style.visibility = 'hidden';
   
  	  parent.document.getElementById('f1_upload_form').style.visibility = 'visible';      
      return true;   
    }	
    
   
    
	</script>
<?php
if(isset($_FILES['myfile'])){
// Edit upload location here
   $destination_path = '../uploads/';
   $file_path = 'uploads/';
		$t=time();
		$date= (date("Y-m-d-H-i-s",$t));
   	$file_name = $_FILES['myfile']['name'];
  	$result = 0;
    $file_size= $_FILES['myfile']['size'];
    $maxsize = 15728640 ; 
   


if(!preg_match('/(jpg|jpe?g|tiff|tif)$/i', $file_name) ||  ($file_size >= $maxsize) ) //ha a fájlnak ($file_name-nek) a kiterjesztése nem gif, jpg/jpeg, png, akkor...
		{
						
		}else{
		$target_path = $destination_path .$date. basename( $_FILES['myfile']['name']);
 		$target_path_file = $file_path .$date. basename( $_FILES['myfile']['name']);

   if(@move_uploaded_file($_FILES['myfile']['tmp_name'], $target_path)) {
      $result = 1;
   
     include ('../script/conn.php');  
 			$u_id =  $_POST['ses_u_id'];
 			$helyszin =  $_POST	['hely'];
 			$random =  $_POST['random'];
     	$sq2="INSERT INTO uploaded_pic (u_id, img, aktiv, date , terulet, random)
		VALUES
('$u_id','$target_path_file' ,'3' ,'$date','$helyszin', '$random')";
if (!mysql_query($sq2,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo "kis Kép sikeresen feltöltve";
   }
    }
   sleep(1);

?>

<script language="javascript" type="text/javascript">stopUpload(<?php echo $result; ?>);</script>   
<?	} 
if(isset($_FILES['myfile_big'])){
	
	   $destination_path = '../uploads_b/';
  	 $file_path = 'uploads_b/';
		$t=time();
		$date= (date("Y-m-d-H-i-s",$t));
   	$file_name = $_FILES['myfile_big']['name'];
  	$result = 0;
    $file_size= $_FILES['myfile_big']['size'];
    $maxsize = 15728640 ; 
   


if(!preg_match('/(3fr|ari|bay|crw|dcs|drf|eip|jpg|jpeg|fff|iiq|k25|mef|nef|obm|pef|r3d|rwl|sr2|x3f)$/i', $file_name) ||  ($file_size >= $maxsize) ) //ha a fájlnak ($file_name-nek) a kiterjesztése nem gif, jpg/jpeg, png, akkor...
		{
						 $result = 4;
		}else{
		$target_path = $destination_path .$date. basename( $_FILES['myfile_big']['name']);
 		$target_path_file = $file_path .$date. basename( $_FILES['myfile_big']['name']);

   if(@move_uploaded_file($_FILES['myfile_big']['tmp_name'], $target_path)) {
      $