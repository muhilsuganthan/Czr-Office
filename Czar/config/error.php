<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** Display page for unauthorized user access
 **
 ** Designer & programmer: Siva Subramanian-sivasubramanian@yourtpdc.com
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/
session_start();
if(($_SESSION['user']!="")&&($_SESSION['privilege']!=""))
{
     if($_SESSION['privilege']=="admin")
	 {
	  $link="../dashboard.php";
	 }
	  elseif($_SESSION['privilege']=="staff")
	  {
		 $link="../staff/index.php"; 
	  }
	  elseif($_SESSION['privilege']=="student")
	   {
		  $link="../student/index.php"; 
		}
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>:: CZAR :: Unauthorized Access</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">


    <div class="middle-box text-center animated fadeInDown">
        <h1>:(</h1>
        <h3 class="font-bold">You are not authorized</h3>

        <div class="error-desc">
            We apologize.It seems like you are not authorized to use this<br/>
            If you're lost we can take you back <br/><a href="<?php echo $link;?>" class="btn btn-primary m-t">Take me back</a>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
