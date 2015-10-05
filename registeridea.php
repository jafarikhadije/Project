<html>
<body>
<?php

$e=$_REQUEST["e"];
$i=$_REQUEST["i"];


 $db_name='computer_store';
 $connection = @mysql_connect("localhost","root","") or die(mysql_error());
 $db=@mysql_select_db($db_name,$connection) or die(mysql_error());
 $query="set names utf8 ";
 $result=@mysql_query($query,$connection) or die(mysql_error());
 $query="insert into ideatable(emailuser,ideauser)  values ('$e', '$i') ";
 $result=@mysql_query($query,$connection) or die(mysql_error()); 
	echo "<br >Success ";
 

?> 
</body>
</html>