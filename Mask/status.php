<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$con = mysql_connect("localhost","root","root","masK");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query("USE masK");
$sql="INSERT INTO Posts (UserID, Post) VALUES ('$_SESSION[id]','$_POST[post]')";
$result = mysql_query($sql);
if (!$result)
  {
  echo mysql_error();
  }
else
{
echo "Success!";
}
mysql_close($con)
?>
</body>
</html>
