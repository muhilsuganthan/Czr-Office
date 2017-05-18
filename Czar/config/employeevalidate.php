<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** employeevalidate.php authorizes all the employee pages
 ** It restricts other users from accessing it
 ** Users without permissions are redirected to an error handling page
 ** Users without login token are redirected to login page
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
	  elseif($_SESSION['privilege']=="1")
	   {
		   header('Location: ../config/error.php'); 
		}
    elseif($_SESSION['privilege']!="0")
    {
        session_destroy();
        header('Location: ../index.php');
    }
}
else
{
    session_destroy();
    header('Location: ../index.php');
}

?>
