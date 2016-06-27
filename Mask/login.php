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
$user = $_POST[user];
$pass = $_POST[pass];
mysql_query("USE masK");
$sql = "SELECT * FROM Login WHERE `User` = '{$user}' AND `Pass` = '{$pass}'";
$result = mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
$count = mysql_num_rows($result);
if ($count == 1)
{
  $_SESSION['user'] = $user;
  $_SESSION['id'] = trim(mysql_fetch_array($result)['UserID']);
  header("location: feed.php");
}
else
{
echo "Incorrect Username or Password. Please go back and try again.";
}
mysql_close($con);
?>
</body>
</html>
