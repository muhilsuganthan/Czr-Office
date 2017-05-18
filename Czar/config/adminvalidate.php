<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** adminvalidate.php validates Admin Pages and restrict other users from
 ** accessing the page without permission. If anyone tries to access it 
 ** Without permission it'll redirect them to an error handling page
 ** If a person who hasn't logged in tries to access it'll redirect to 
 ** the login page
 **
 ** Backend programmer: Siva Subramanian - sivasubramanian@yourtpdc.com
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/
session_start();
if(($_SESSION['user']!="")&&($_SESSION['privilege']!=""))
{
     
	  if($_SESSION['privilege']=="1")
	  {
		  header('Location: ../config/error.php'); 
	  }
	  elseif($_SESSION['privilege']=="0")
	   {
		   header('Location: ../config/error.php'); 
		}
    
}
else
{
    session_destroy();
    header('Location: ../index.php');
}

?>
