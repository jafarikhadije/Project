<html>
<body>
<?php
session_start();
if(isset($_SESSION['user']))
  unset($_SESSION['user']);
$u=$_REQUEST["u"];
$p=$_REQUEST["p"];
 $db_name='computer_store';
 $connection = @mysql_connect("localhost","root","") or die(mysql_error());
 $db=@mysql_select_db($db_name,$connection) or die(mysql_error());
 $query="set names utf8 ";
 $result=@mysql_query($query,$connection) or die(mysql_error());
 $query="select * from usersystem where username='$u' and password='$p'";
 $result=@mysql_query($query,$connection) or die(mysql_error()); 
	if($result)
	{
		while($row=mysql_fetch_assoc($result))
			{
 			    $_SESSION [ 'user' ] =$u ;
				echo "<br >Welcome  ".$_SESSION [ 'user' ] ;
			}
	}
?> 
</body>
</html>