<?php
include "config.inc.php";
if($_SESSION['logedin'] != 'siteloggedin')
{
header("Location: $redirectlocation"); 
exit(); 
}
?>
<html>
<head>
<script src="nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	new nicEditor({fullPanel : true}).panelInstance('area2');
});
</script>
</head>
<body>
<form action="insert.php" method="POST" id="login">
<h1>Add Notes</h1>
Title: <input name="title" size="150" /><br>
Note: 
<textarea cols="150" name="notes" rows="25" id="area2"></textarea>
<input type="submit" value="Submit" id="submit" />
<a href="main.php">Back</a>
</form>
</body>
</html>