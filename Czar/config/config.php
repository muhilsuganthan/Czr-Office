<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** Config.php initializes global connectivity identifiers like database 
 ** and other global identifiers
 **
 ** Backend programmer: Siva Subramanian - sivasubramanian@yourtpdc.com
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'yourtpdc_Czar');
   define('DB_PASSWORD', 'Fight_Club16');
   define('DB_DATABASE', 'yourtpdc_tpdc_czar_basic');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
