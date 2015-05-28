<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	background-color:#A9CCCC;
}
-->
</style>
 <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <a class="brand" href="#">NIMCET 2015</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="../index.php"><span class="glyphicon glyphicon-search"></span>Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#">Administrator Login</a></li>
	<?php
	if(isset($_SESSION['alogin']))
	{
	 echo "<li><a href=\"signout.php\">Signout</a></li>";
	 }
	 else
	 {
	 echo "&nbsp;";
	 }
	?>
                  </ul>
            </div>
          </div>
        </div>
      </div> 
    </div>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	
  </tr>
  
</table>
