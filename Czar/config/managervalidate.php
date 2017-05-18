<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** managervalidate.php authorizes all manager pages
 ** It restricts other users from accessing it
 ** Unauthorized users will be taken back to error handling page
 ** Users without proper login token will be taken back to login page
 **
 ** Backend programmer: Siva Subramanian - sivasubramanian@yourtpdc.com
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/
session_start();
if(($_SESSION['user']!="")&&($_SESSION['privilege']!=""))
{
     
	  if($_SESSION['privilege']=="2")
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
