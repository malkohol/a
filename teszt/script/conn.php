<? $con =  mysql_connect("sql","cmhdatacom","iIosoeixhAhKrTx5");if (!$con) {  die("Could not connect: " . mysql_error());  } mysql_query("SET NAMES utf8", $con);mysql_select_db("cmhdatacom", $con); ?>