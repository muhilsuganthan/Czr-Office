<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** logout.php Destroys a user's session and logs him out securely
 **
 ** Designer & programmer: Siva Subramanian-sivasubramanian@yourtpdc.com
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>:: CZAR :: Log out successful</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">


    <div class="middle-box text-center animated fadeInDown">
        <h1>CZAR</h1>
        <h3 class="font-bold">Work smart, With Czar</h3>

        <div class="error-desc">
            <br/>
           
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
<?php
unset($_SESSION['user']);
unset($_SESSION['privilege']);
$url = "../index.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}

//header( "refresh:10;url=../index.php" );

?>
<script>
setTimeout(function () {
   window.location.href = "../index.php"; 
}, 10000);
</script>
