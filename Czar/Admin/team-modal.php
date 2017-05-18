<?php
  	/* 
     ** **************************Czar V 0.4*********************************
     ** *********************************************************************
     ** Modal page for Manage-teams.php
     ** 
     ** Designer & programmer: Siva Subramanian-sivasubramanian@yourtpdc.com
     ** Last major Change: April 28,2016
     ** ********************************************************************
     ** *************************Powered By TPDC****************************
    */
    require_once '../config/adminvalidate.php';
    require_once '../libs/definitions.php';
    require_once 'modal.php';
    require_once("../libs/dboperations.php");
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>:: CZAR ADMIN ::</title>
   
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

        <div class="wrapper wrapper-content animated fadeInRight">    
       <!--------Content Starting------ -->

       <!--------Content Ends here----- -->
        </div>
        <?php require_once 'footer.php'; ?>

        </div>
        </div>
 
    <!-- Mainly scripts -->
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
<script src="../js/plugins/toastr/toastr.min.js"></script>
     <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="../js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="../js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>


    <script>
        $(document).ready(function(){
            $('.contact-box').each(function() {
                animationHover(this, 'pulse');
            });
        });
    </script>

</body>

</html>
