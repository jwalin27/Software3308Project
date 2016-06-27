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
$sql="INSERT INTO Login (User, Pass) VALUES ('$_POST[user]','$_POST[pass]')";
$a =mysql_query($sql);
if (!$a)
  {
  echo mysql_error();
  }
else
{
header('Location: profile.html');
}
mysql_close($con)
?>
</body>
</html>
