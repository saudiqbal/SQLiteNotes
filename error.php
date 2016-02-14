<?php

ob_start("ob_gzhandler");
	
if (isset($_GET['error']))
$PAGES = $_GET['error'];

// Default
else $PAGES = 'blank';

switch ($PAGES)
{
// Blank 
	case 'blank': 
		$error = 'No Error Detected'; 
	break;

// No Title
	case 'notitle': 
		$error = 'Title cannot be empty'; 
	break;

// No Notes
	case 'nonotes': 
		$error = 'Notes cannot be empty'; 
	break;

// Default
	default: 
		$error = 'No Error Detected'; 
	break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<style type="text/css">
.info, .success, .warning, .error {
    border: 1px solid;
    margin: 250px 0px;
    padding:15px 20px 15px 20px;
    width: 500px;	
    font: bold 12px verdana;
    -moz-box-shadow: 0 0 5px #888;
    -webkit-box-shadow: 0 0 5px#888;
    box-shadow: 0 0 5px #888;
    text-shadow: 2px 2px 2px #ccc;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
.info {
    color: #00529B;
    background: #BDE5F8;
}
.success {
    color: #4F8A10;
    background: #DFF2BF;
}
.warning {
    color: #9F6000;
    background: #FEEFB3;
}
.error {
    color: #D8000C;
    background: #FFBABA;
}
</style>
</head>
<body>
<center>
<div class="error"><?php echo("$error"); ?></div>
</div>
</body>
</html>