<?php
/* 
 ** **************************Czar V 0.6*********************************
 ** *********************************************************************
 ** managedept.php displays all departments 
 ** And allows add/edit departments
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
 ** Backend programmer: Siva Subramanian - sivasubramanian@yourtpdc.com
 ** Last major Change: April 28,2016
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/
  	
  	require_once '../config/adminvalidate.php';
    require_once '../libs/dboperations.php';
    require_once '../libs/definitions.php';
  	require_once 'modal.php';
    $page_title="Manage Department";
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>:: CZAR ADMIN ::</title>

             <!-- Data Tables -->
    <link href="../css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="../css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">



</head>

<body>

    <div id="wrapper">

    <?php require_once 'navbar.php'; ?>
    <?php require_once 'navbar1.php'; ?>
    <?php require_once 'breadcrumb.php'; ?>

            
        <div class="wrapper wrapper-content animated fadeInRight">     
          
          
          
          
          <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                           
                            <div class="ibox-content ibox-heading">
                                 <div class="text-center">
                            <a data-toggle="modal" class="btn btn-primary" href="#addept">Click here to Add a Dept</a>
                            </div>
                                
                            </div>
                            
                        </div>
                    </div>

                   


                </div>
                
                <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Departments</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th width="33%">Department ID</th>
                        <th width="27%">Name</th>
                        <th width="40%">Description</th>
                        
                    </tr>
                    </thead>
                    <tbody>
						<?php 
                        $db= new DB();
                        $ctr=0;
                        $row=$db->fetch(TABLE_DEPARTMENT);
                        foreach($row as $key)
                        {
                            $department_id=$key['department_id'];
                            $department_name=$key['department_name'];
                            $short_description=$key['short_description'];

                        ?>
                    <tr class="gradeX">
                        <td><?php echo $department_id; ?></td>
                        <td><?php echo $department_name; ?>
                        </td>
                        <td><?php echo $short_description; ?></td>
                       
                    </tr>
                   
                   <?php
						}
					?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Department ID</th>
                        <th>Name</th>
                        <th>Description</th>                      
                    </tr>
                    </tfoot>
                    </table>

                    </div>
                </div>
            </div>
            
            <div class="col-lg-1"></div>
            
            </div>
          
          
          
          
          
          
          
          
        </div>
        <?php require_once 'footer.php'; ?>

        </div>
        </div>
        </div>

        <!-- Mainly scripts -->
    <script src="../js/jquery-2.1.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="../js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="../js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
    <script src="../js/plugins/toastr/toastr.min.js"></script>

  

 <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "../js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>


</body>

</html>
<?php
      if(isset($_POST['submit']))
     {
        $deptid=$_POST['deptid'];
		$deptname=$_POST['deptname'];
		$description=$_POST['description'];		
		$value = array("department_id"=>$deptid,"department_name"=>$deptname,"short_description"=>$description);
        $sql=$db->insert(TABLE_DEPARTMENT,$value);
		if ($sql==true)
		{
			
			?>
			<script>
            $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.info('Created new post', 'Success');

            }, 1300);
            
        });
        </script>
    <?php
		
	}
		else 
		{
			?>
			<script>
            $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.error('Unexpected error occured', 'Error');

            }, 1300);
            
        });
        </script>
    <?php
			
		}
	}
?>

