<style type="text/css">
  body {
    margin-left: 0px;
    margin-top: 0px;
  }
</style>

<table bgcolor="#62A2D1" width="100%">
  <tr>
    <td rowspan=2><img src="image/logo.jpg" height="150" width="150"></td>
    <td><font face="Verdana" size="8">Online Driving Licence Examination</font></td>
  </tr>
  <tr>
    <td><font face="Verdana" size="3"><marquee>Online Driving Licence Examination</marquee></font></td>
  </tr>
</table>

<table width="100%">
  <tr>
    <td>
      <?php 
        @$_SESSION['login']; 
        error_reporting(1);
      ?>
    </td>
    <td>
	     <?php
	       if(isset($_SESSION['login']))
	         echo "<div align=\"left\"><font face=\"Verdana\" size=\"3\"><a href=\"index.php\">Home Page</a> | <a href=\"signout.php\">Logout</a></font></div>";
	       else
	 	       echo "&nbsp;";
	     ?>
	   </td>
	
  </tr>
</table>
