<html>
<head>
</head>
<body>
<?php
 session_start( )   ;
 $db_name='computer_store';
 $connection = @mysql_connect("localhost","root","") or die(mysql_error());
 $db=@mysql_select_db($db_name,$connection) or die(mysql_error());
 $query="set names utf8 ";
 $result=@mysql_query($query,$connection) or die(mysql_error());
 if(isset($_SESSION['user']))
	{
		 $query="select * from ideatable";
		 $result=@mysql_query($query,$connection) or die(mysql_error()); 
			if($result)
			{
			$i=0;
			while($row=mysql_fetch_assoc($result))
				{
				$i++;
				$email=$row['emailuser'];
 				$idea=$row['ideauser'];
				$check=$row['ok_idea'];
				$id=$row['id_idea'];
  				echo "<br><span hidden='1' id='id_idea'>$id</span>$i. <h5 > $email:</h5> <h6 >$idea</h6><input name='' type='checkbox' checked='$check' />";
				
				}
				if($i==0)
				echo "نظری ثبت نشده!";
			}
	}
 else
	{
		$query="select * from ideatable where ok_idea=true";
 		$result=@mysql_query($query,$connection) or die(mysql_error()); 
		if($result)
		{
			$i=0;
			while($row=mysql_fetch_assoc($result))
				{
				$i++;
				$email=$row['emailuser'];
 				$idea=$row['ideauser'];
  				echo "<br>$i. <h5> $email:</h5> <h6>$idea</h6>";
				}
				if($i==0)
				echo "نظری ثبت نشده!";
		}
}
?>
</body>
</html>

