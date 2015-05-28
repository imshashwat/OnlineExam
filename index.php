<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>NIMCET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }
   
   a:link,a:visited,a:active {
    text-decoration: none;
    color:teal;
}
a:hover{text-decoration: none;
color:#80C0C0;}

    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px;
    }
    .navbar .btn-navbar {
      margin-top: 10px;
    }
    </style>
      <script src="js/html5shiv.js"></script>
      <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
       <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
      
    </head>

<body style="background-color:#A9CCCC;margin-top:80px;">
    <div id="sliderFrame">
        <div id="slider">
            <a href="" target="_blank">
                <img src="images/nitw.jpg" alt="Welcome to New NIMCET Exam site" />
            </a>
            <img src="images/nitt.jpg" alt="NIT Trichy" />
            <img src="images/nitk.jpg" alt="NIT Surathkal" />
            <img src="images/manit.jpg" alt="MNIT Bhopal" />
            <img src="images/image-slider-5.jpg" />
        </div>
       
    </div>

    
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<div style='background-color:white;margin-top:50px;margin-right:30%;margin-left:30%;border-radius:5px;'><Label class='text-center'><h3>Welcome to Online Exam</h3></label>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"></td>
    <td width="93%" valign="bottom" bordercolor="#A9CCCC">
		<a href="showtest.php" class="style4"><h3>Take Test</h3>
		 </a>
	</td>
  </div>
  </tr>
  <tr>
    <td height="58" valign="bottom"></td>
    <td valign="bottom"> <a href="result.php" class="style4"><h3>Result </h3></a></td>
  </tr>
</table></div>';
   
		exit;
}
?>
<table width="100%" border="0">
    <tr>
      <td width="70%" height="25">&nbsp;</td>
     <td width="1%" rowspan="2" bgcolor="#A9CCCC"><span class="style6"></span></td>
     <td width="29%" bgcolor="#A9CCCC"><div align="center" class="">User Login </div></td>
   </tr>
  <tr>
    <td height="296" valign="top">
        <div align="center">
         <h1 class="style8" align="center"><p class="bg-primary">Welcome to Online NIMCET Exam</p></h1>
               
          <p align="left" class="style5">&nbsp;</p>
          <blockquote>
          <p align="center" class="style5">
          <span class="style7">Welcome to NIMCET Online exam.<br>
            You need to login for the take the online exam.
          </span></p>
          </blockquote>
        </div>
      </td>
    <td valign="top"><div class="well">
      <form name="form1" method="post" action="">
          <table width="200" border="0">
             <tr>
              <td><span class="style2">Login ID </span></td>
               <td><input name="loginid" type="text" id="loginid2"></td>
             </tr>
              <tr>
               <td><span class="style2">Password</span></td>
               <td><input name="pass" type="password" id="pass2"></td>
              </tr>
              <tr>
              <td colspan="2"><span class="errors">
               <?php
		            if(isset($found))
	           	  {
		          	echo "Invalid Username or Password";
		            }
		             ?>
                </span></td>
                </tr>
               <tr>
                <td colspan=2 align=center class="errors">
		            <input name="submit" class="btn btn-primary" type="submit" id="submit" value="Login"></td>
                </tr>
                 <tr>
               <td colspan="2">
            	 <div align="center"><span class="style4"><br>New User ? 
	             <a href="signup.php">Signup</a> 
           		</span>
	             </div></td>
               </tr>
              </table>

      <div align="center">
        <p class="style5"></p>
        </div>
    </form></div>
     </td>
  </tr>
</table>
<div class="footer text-center"> &copy Shashwat</div>
</body>
</html>