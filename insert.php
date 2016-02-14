<?php
include "config.inc.php";
if($_SESSION['logedin'] != 'siteloggedin')
{
header("Location: $redirectlocation"); 
exit(); 
}

$title = $_POST['title'];
$notes = $_POST['notes'];

if(empty($title))
{
header("Location: error.php?error=notitle");
exit();
}
if(empty($notes))
{
header("Location: error.php?error=nonotes");
exit();
}
  
$referer = $_SERVER['HTTP_REFERER'];

//Check if browser sends referrer url or not
if ($referer == "") //If not, set referrer as your domain
    $domain = $yoursite;
else
    $domain = parse_url($referer); //If yes, parse referrer

if($domain['host'] == $yoursite || $domain['host'] == $yoursite2)
{
    //open the database
    $db = new PDO("sqlite:$dbname");

	$db->exec("INSERT INTO $tablename (Title, Notes) VALUES ('$title' ,'$notes')");
	
    // close the database connection
    $db = NULL;

header("Location: $mainpage"); 
}
else
{
    //The referrer is not your site, we redirect to your home page
    header("Location: $yoursite2");
    exit(); //Stop running the script
}
?>