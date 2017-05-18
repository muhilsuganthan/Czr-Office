<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** Contains "breadcrumb" part of every page
 ** 
 ** Backend programmer: Siva Subramanian - sivasubramanian@yourtpdc.com
 ** Last major Change: April 28,2016
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/

?>

 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2><?php echo $page_title; ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Admin Panel
                        </li>
                        <li class="active">
                            <strong><?php echo $page_title; ?></strong>
                        </li>
                    </ol>
                </div>
            </div>
            