<?php
ob_start("ob_gzhandler");
header("Content-Encoding: gzip");
session_start();

// main page
$mainpage = "main.php";
// redirect link when not logged in.
$redirectlocation = "index.php";
// referer check
$yoursite = "example.com"; //Your site url without http://
$yoursite2 = "www.example.com"; //Type your domain with www. this time

// SQLite database with path
$dbname = "Notes.db";
$tablename = "NotesTable";
?>
