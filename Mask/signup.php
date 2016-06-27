<?php
session_start();
$con = mysql_connect("localhost","root","root","masK");
?>
<!DOCTYPE html>
<html>
<body>
<?php
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query("USE masK");
$sql="INSERT INTO Login (User, Pass) VALUES ('$_POST[user]','$_POST[pass]')";
$result =mysql_query($sql);
if (!$result)
  {
  echo mysql_error();
  }
else
{
	$getID = "SELECT * FROM Login WHERE `User` = '$_POST[user]' AND `Pass` = '$_POST[pass]'";
	$getget = mysql_query($getID);
	$_SESSION['user'] = $_POST['user'];
    $_SESSION['id'] = trim(mysql_fetch_array($getget)['UserID']);
header("Location: profile.php");
}
mysql_close($con)
?>
</body>
</html>
