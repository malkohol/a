<?php


if (!empty($_POST['content']) && is_array($_POST['content']))
{
	
    $content = '';
    foreach ($_POST['content'] as $part)
    {
        $content .= $part;
  
    }
      echo "vagas";
}

$content = str_replace(' ', '+', $content);




    // Remove the headers (data:,) part. 
    // A real application should use them according to needs such as to check image type
    
    $filteredData=substr($content, strpos($content, ",")+1);
  
 
    // Need to decode before saving since the data we received is already base64 encoded
    $unencodedData=base64_decode($filteredData);
 
   //echo "unencodedData".$unencodedData;
 
    // Save file.  This example uses a hard coded filename for testing,
    // but a real application can specify filename in POST variable
    
    $t=time();
		$date= (date("Y-m-d-H:i:s",$t));		
    $fp = fopen( 'upload/'.$date.'.png', 'wb' );
    $file_path = 'upload/'.$date.'.png';
    fwrite( $fp, $unencodedData	);
    fclose( $fp );
    
         include ('script/conn.php');  
 			$u_id =  $_POST['u_id'];
 			
 			$t=time();
			$date= (date("Y-m-d-H:i:s",$t));
     	$sq2="INSERT INTO sufni_uploaded_pic (u_id, img, aktiv, date )
				VALUES ('$u_id','$file_path' ,'3' ,'$date' )";
			if (!mysql_query($sq2,$con))
  				{
  					die('Error: ' . mysql_error());
 					 }
  			echo "Kép sikeresen feltöltve";
   

     ?>
