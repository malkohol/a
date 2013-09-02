<? if ($log==1) {?>
   <?
  include ('script/conn.php');  
   $sql_user3 ="SELECT * FROM `game_users` WHERE `u_id` = '$user_id' LIMIT 0 , 30"; 
$result_user3 = mysql_query($sql_user3);
while($user3 = mysql_fetch_array($result_user3)){
$c_user_id = $user3['id'];
}		

if (empty($c_user_id)) {

function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
   
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
   
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}

// now try it
$ua=getBrowser();
$yourbrowser= $ua['userAgent'];

?>
<?


$u_id = $user_id;
$name =  $user_name;
$email = $user_email;
$lakcim = $_GET["lakcim"];
$nem =  $user_gender;

if($nem == male){ $gender = f; }
if($nem == female){ $gender = n; }

$sq2="INSERT INTO game_users (u_id, nev, email, lakcim, nem, browser )
VALUES
('$u_id','$name' ,'$email' ,'$lakcim','$gender','$yourbrowser')";
if (!mysql_query($sq2,$con))
  {
  die('Error: ' . mysql_error());
  }



	
}	else {

	}



?>
     
  
   
    <div id="game_area"> 
  <div id="wboxwrapper"> 
  	
  <div id="wbox" role="main" >

<div id="heading">
  <div id="logo"  onclick="document.location.href='rules.html'">weber</div>
  <div id="title"  onclick="bgStep()">fotópályázat</div>
</div>

<br> <br> <br> <br> <br> <br> <br>
<div id="leftcol">
  <div class="blurb grey2">

    <h1>Játékleírás</h1>
    <ol>
      <li>Likeold az oldalunkat!</li>
      <li>Válassz egy vagy akár több Neked tetsző helyszínt!</li>
      <li>Készíts róla egy minél szebb fotót</li>
      <li>Töltsd fel a képet a kiválasztott helyszín adatlapjára</li>
      <li>Buzdítsd barátaidat és ismerősidet, hogy minél többen szavazzanak a fotódra!</li>
    </ol>
    <p>
      A Játék három körös, körönként 3 fotó közönségszavazás, míg 3 zsűri által kerül a döntőbe. <br>
      A 18 döntős kép közül szavazással kerül ki 2 a győztes. 
      <br>
      <br>
      Szakmai díj: 100.000 Ft értékű fotóutalvány
      <br>Közönségdíj: 50.000 Ft értékű fotóutalvány
    </p>

    <button id="<?  echo $user_id ?>"class="button1" onclick="game(this.id);">Tovább a helyszínekhez!</button>

  </div>
</div>

<div id="aside">
  <img src="img/aside.png" alt="Nyerj! Szakmai díj: 100.000 Ft értékű fotóutalvány, közönségdíj, 50.000 Ft értékű fotóutalvány!">
</div>
</div>
</div>
</div>
<?}?>