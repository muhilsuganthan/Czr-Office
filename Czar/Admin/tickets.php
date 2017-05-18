<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** empregister.php Creates new Users and employees
 ** Depends on:
 ** 1. config/adminvalidate - for authorization
 ** 2. libs/dboperations for CRUD
 ** 3. modal.php - contains all modal forms
 ** 4. navbar.php  - Contains Navigation Bar
 ** 5. navbar1.php - Contains Top Navigation Bar
 ** 6. breadcrumb.php - Contains breadcrumb about the pages
 ** 7. footer.php  - Contains footer information
 ** 8. libs/definitions.php contains definitions
 **
 ** Designer: Muhil Suganthan - muhilsuganthan@yourtpdc.com
 ** Design Modifications - Siva Subramanian
 **
 ** Designer: Muhil Suganthan - muhilsuganthan@yourtpdc.com
 ** Backend programmer: Siva Subramanian - sivasubramanian@yourtpdc.com
 ** Last major Change: April 28,2016
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/
    require_once '../config/adminvalidate.php';
    require_once '../libs/definitions.php';
    require_once 'modal.php';
    require_once("../libs/dboperations.php");
    $page_title="Tickets";
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>:: CZAR ADMIN ::</title>

             <!-- Data Tables -->
    <link href="../css/plugins/datapicker/datepicker3.css" rel="stylesheet">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

    <?php require_once 'navbar.php'; ?>
	<?php require_once 'navbar1.php'; ?>
    <?php require_once 'breadcrumb.php'; ?>


            
            
            <!--        Form        -->
<div class="wrapper wrapper-content animated fadeInRight">   
<div class="ibox">
                        <div class="ibox-title">
                            <h5>All tickets</h5>
                            <div class="ibox-tools">
                                <a href="" class="btn btn-primary btn-xs">Create new ticket</a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row m-b-sm m-t-sm">
                                <div class="col-md-1">
                                    <button type="button" id="loading-example-btn" class="btn btn-white btn-sm" ><i class="fa fa-refresh"></i> Refresh</button>
                                </div>
                                <div class="col-md-11">
                                    <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                </div>
                            </div>

                            <div class="project-list">

                                <table class="table table-hover">
                                    <tbody>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">Contract with Zender Company</a>
                                            <br/>
                                            <small>Created 14.08.2014</small>
                                        </td>
                                        <td class="project-completion">
                                                <small>Completion with: 48%</small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 48%;" class="progress-bar"></div>
                                                </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a3.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a1.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a2.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a4.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a5.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">There are many variations of passages</a>
                                            <br/>
                                            <small>Created 11.08.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 28%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 28%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a7.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a6.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a3.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-default">Unactive</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">Many desktop publishing packages and web</a>
                                            <br/>
                                            <small>Created 10.08.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 8%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 8%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a5.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a3.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">Letraset sheets containing</a>
                                            <br/>
                                            <small>Created 22.07.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 83%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 83%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a2.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a3.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a1.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a7.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">Contrary to popular belief</a>
                                            <br/>
                                            <small>Created 14.07.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 97%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 97%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a4.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">Contract with Zender Company</a>
                                            <br/>
                                            <small>Created 14.08.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 48%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 48%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a1.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a2.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a4.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a5.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">There are many variations of passages</a>
                                            <br/>
                                            <small>Created 11.08.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 28%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 28%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a7.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a6.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a3.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-default">Unactive</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">Many desktop publishing packages and web</a>
                                            <br/>
                                            <small>Created 10.08.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 8%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 8%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a5.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a3.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">Letraset sheets containing</a>
                                            <br/>
                                            <small>Created 22.07.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 83%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 83%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a2.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a3.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a1.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">Contrary to popular belief</a>
                                            <br/>
                                            <small>Created 14.07.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 97%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 97%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a4.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">Active</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="project-detail.php">There are many variations of passages</a>
                                            <br/>
                                            <small>Created 11.08.2014</small>
                                        </td>
                                        <td class="project-completion">
                                            <small>Completion with: 28%</small>
                                            <div class="progress progress-mini">
                                                <div style="width: 28%;" class="progress-bar"></div>
                                            </div>
                                        </td>
                                        <td class="project-people">
                                            <a href=""><img alt="image" class="img-circle" src="../img/a7.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a6.jpg"></a>
                                            <a href=""><img alt="image" class="img-circle" src="../img/a3.jpg"></a>
                                        </td>
                                        <td class="project-actions">
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                <div class="btn-group">
                                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                                    <button class="btn btn-white">1</button>
                                    <button class="btn btn-white  active">2</button>
                                    <button class="btn btn-white">3</button>
                                    <button class="btn btn-white">4</button>
                                    <button class="btn btn-white">5</button>
                                    <button class="btn btn-white">6</button>
                                    <button class="btn btn-white">7</button>
                                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
</div>       
            <!--                  Footer            -->
            
        <?php require_once 'footer.php'; ?>

</div>


 <!-- Mainly scripts -->
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
 <!-- Chosen -->
    <script src="../js/plugins/chosen/chosen.jquery.js"></script>

	<!-- Date picker -->
    <script src="../js/plugins/datapicker/bootstrap-datepicker.js"></script>

  

 <!-- Page-Level Scripts -->
    <script>
       
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });
    </script>

</body>

</html>
