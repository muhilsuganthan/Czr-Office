<?php
  	/* 
     ** **************************Czar V 0.4*********************************
     ** *********************************************************************
     ** Manage-Teams.php Lists existing teams and allows users to add new one
     ** Depends on:
     ** 1. config/adminvalidate - for authorization
     ** 2. config/config.php - for Global Identifiers
     ** 3. modal.php - contains all modal forms
     ** 4. navbar.php  - Contains Navigation Bar
     ** 5. navbar1.php - Contains Top Navigation Bar
     ** 6. breadcrumb.php - Contains breadcrumb about the pages
     ** 7. footer.php  - Contains footer information
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
    $page_title="Manage Teams";
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

    <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">


    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../css/plugins/chosen/chosen.css" rel="stylesheet">

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
        <!-- ------Content Starts------ --> 
          
          
          
          <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-6">
                    
                        <div class="ibox float-e-margins">
                           
                            <div class="ibox-content ibox-heading">
                            <form role="form" action="" method="POST">
        <div class="form-group"><label>Team ID</label><input type="text" class="form-control m-b" name="title" required="">
        </div> 
        <div class="form-group"><label>Team Name</label><input type="text" class="form-control m-b" name="title" required="">
        </div> 

        <div class="form-group">
            <label>Team Leader</label>
            <div class="input-group">
                <select data-placeholder="Choose a TL" class="chosen-select" style="width:480px;" tabindex="2">
                    <option value="">Select</option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                </select>
            </div>
        </div>
            <div class="form-group">
                <label>Members</label>
                <div class="input-group">
                    <select data-placeholder="Choose Members" class="chosen-select" multiple style="width:480px;" tabindex="4">
                        <option value="">Select</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
            <div class="text-center">
              <button class="btn btn-primary" type="submit" name="submit"><strong>CREATE</strong></button>
              </div>
            </div>
        </form>

                            </div>
                        </div>
                    </div>

                   


                </div>
                
                <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Postings</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th width="33%">Posting</th>                        
                        <th width="40%">Authority Level</th>
                        
                    </tr>
                    </thead>
                    <tbody>
						<?php 
                        $pickpost=mysqli_query($con,"SELECT * from cz_posting_prvs");
                        while($row=mysqli_fetch_array($pickpost))
						{
                            $post_title=$row[1];
                            $authority_level=$row[2];
                            if($authority_level=="0"){
								$authority="Basic Level";
							}
							elseif($authority_level=="1"){
								$authority="Manager Level";
							}
							elseif($authority_level=="2"){
								$authority="Admin Level";
							}

                        ?>
                    <tr class="gradeX">
                        <td><?php echo $post_title; ?></td>
                        <td><?php echo $authority; ?>
                        </td>
                     
                       
                    </tr>
                    <?php
						}
					?>
                   
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Posting</th>
                        <th>Authority Level</th>
                                             
                    </tr>
                    </tfoot>
                    </table>

                    </div>
                </div>
            </div>
            
            
        </div>
          
          
          
        <!--------Content Ends here----- --> 
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
    <!-- Chosen -->
    <script src="../js/plugins/chosen/chosen.jquery.js"></script>

    <!-- Color picker -->
    <script src="..js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>



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

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

             var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }




        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

             
        }

            

            var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
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
        $title=$_POST['title'];
		$authority_value=$_POST['authority'];	
		
		if($title!=""){

		$sql=mysqli_query($con,"INSERT INTO cz_posting_prvs(post_title,authority_level) values('$title','$authority_value')");
        }
		if ($sql)
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