<!DOCTYPE HTML>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; ">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
include("header.php");
extract($_POST);
include("database.php");
$rs=mysql_query("select * from mst_user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<div style='background-color:white;'><br><br><br><div class=head1>Login Id Already Exists</div></div>";
	exit;
}
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<div style='background-color:white;'><br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div></div>";


?>
</body>
</html>