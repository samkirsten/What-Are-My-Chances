<?php
 $q=$_GET['q'];
 $my_data=sqlite_escape_string($q);
 $sqli=sqlite_open($storage) or die("Database Error");
 $sql="SELECT hospital FROM hospitals WHERE hospital LIKE '%$my_data%' ORDER BY hospital";
 $result = sqlite_query($sqli,$sql);

 if($result)
 {
  while($row=sqlite_fetch_array($result))
  {
   echo $row['name']."\n";
  }
 }
?>