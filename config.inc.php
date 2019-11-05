<?php
ob_start("ob_gzhandler");
header("Content-Encoding: gzip");
session_start();

// main page
$mainpage = "notes/main.php";
// redirect link when not logged in.
$redirectlocation = "notes/index.php";
// referer check
$yoursite = "saudiqbal.com"; //Your site url without http://
$yoursite2 = "www.saudiqbal.com"; //Type your domain with www. this time

// SQLite database with path
$dbname = "../db/Notes.db";
$tablename = "NotesTable";
?>
