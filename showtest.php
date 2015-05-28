<?php
session_start();
?>
<!DOCTYPE HTML >
<html>
<head>

    <meta charset="utf-8">
    <title>Take Exam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top:0; 
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">


<meta http-equiv="Content-Type" content="text/html;">
<link href="quiz.css" rel="stylesheet" type="text/css">


<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; ">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=1");
$row1=mysql_fetch_array($rs1);

$rs=mysql_query("select * from mst_test where sub_id=1");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Exam for this Subject </h2>";
	exit;
}
echo "<h2 class=head1>  </h2>";
echo "<table align=center>";
echo "<p class='text-warning' style='font-size:24pt;' align=center> Best OF Luck</p> <br/>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a class='btn btn-primary btn-active' href=quiz.php?testid=$row[0]&subid=$subid><font size=4> Go to $row[2]</font></a>";
    echo "<tr><td align=center ><a class='btn btn-primary btn-danger' href='index.php'>Back</a>";
}
echo "</table>";
?>
</body>
</html>