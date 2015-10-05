<?php
 $db_name='computer_store';
 $connection = @mysql_connect("localhost","afife","abolqasem") or die(mysql_error());
 $db=@mysql_select_db($db_name,$connection) or die(mysql_error());
 $query="set names utf8 ";
 $result=@mysql_query($query,$connection) or die(mysql_error());
 $query="select * from kala ";
 $result=@mysql_query($query,$connection) or die(mysql_error()); 
  if($result)
 {
	 echo "<h5>لیست کالاها</h5>";
  	 while($row=mysql_fetch_assoc($result))
  		{
  			$model=$row['kala_model'];
  			$type2=$row['kala_type'];
		    $pic=$row['kala_pic'];
		    echo "<table border='0'><tr><td>model:$model</td><td>type:$type2 </td><td><img  src='$pic' /></td></tr>";
 		 }
	  echo "</table>";
 }	

?> 