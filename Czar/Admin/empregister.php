
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
     ** 8. libs/definition.php - contains important definitions
     **
     ** Designer: Muhil Suganthan - muhilsuganthan@yourtpdc.com
     ** Design Modifications - Siva Subramanian
     ** Backend programmer: Siva Subramanian - sivasubramanian@yourtpdc.com
     ** Last major Change: April 28,2016
     ** ********************************************************************
     ** *************************Powered By TPDC****************************
    */
    require_once '../config/adminvalidate.php';
    require_once '../libs/definitions.php';
    require_once 'modal.php';
    require_once("../libs/dboperations.php");
    $page_title="Employee list";

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
    <!-- Toastr style -->
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">



</head>

<body>

    <div id="wrapper">

    <?php require_once 'navbar.php'; ?>
	<?php require_once 'navbar1.php'; ?>
    <?php require_once 'breadcrumb.php'; ?>

            
            
            <!--------------Form-------------------->
<div class="wrapper wrapper-content animated fadeInRight">   
<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<form method="post" action="" class="form-horizontal">
			<div class="ibox-title">
				<h5>Employee ID & Password</h5>
			</div>
			<div class="ibox-content">
				<div class="form-group"><label class="col-sm-2 control-label">Employee ID *</label>
					<div class="col-sm-4"><input name="empid" type="text" disabled="disabled" class="form-control required" readonly="readonly"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Set Password *</label>
					<div class="col-sm-4"><input type="password" name="passkey" class="form-control required"></div>
                </div>
			</div>
		
			<div class="ibox-title">
				<h5>Personal Informations</h5>
			</div>
			<div class="ibox-content">
				<div class="form-group"><label class="col-sm-2 control-label">First Name *</label>
					<div class="col-sm-4"><input type="text" name="firstname" class="form-control required"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Middle Name</label>
					<div class="col-sm-4"><input type="text" name="middlename" class="form-control"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Last Name</label>
					<div class="col-sm-4"><input type="text" name="lastname" class="form-control"></div>
                </div>
                <div class="form-group">
					<div class="col-sm-2"><label class="col-sm-2 control-label">S/O. \ W/O.</label>
                    </div>
                    <div class="col-sm-4"><input type="text" name="fhname" class="form-control required"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Gender</label>
					<div class="col-sm-4"><select class="form-control m-b" name="gender">
						<option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Transgender">Transgender</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Marital Status</label>
					<div class="col-sm-4"><select class="form-control m-b" name="mstatus">
						<option value="Married">Married</option>
                        <option value="Single">Single</option>
                        </select>
                    </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Identity Marks</label>
					<div class="col-sm-4"><input type="text" name="idmark" placeholder="Seperate with 'comma'" class="form-control input-lg m-b"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Caste</label>
					<div class="col-sm-4"><input type="text" name="caste" class="form-control"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Religion</label>
					<div class="col-sm-4"><input type="text" name="religion" class="form-control"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Blood group</label>
					<div class="col-sm-4"><input type="text" name="bgroup" class="form-control"></div>
                </div>
				<div class="form-group" id="data_1">
					<label class="col-sm-2 control-label">Date of birth</label>
					<div class="col-sm-4">
					<div class="input-group date">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="dob" class="form-control" >
					</div>
					</div>
				</div>
			</div>
			
			<div class="ibox-title">
				<h5>Official Details</h5>
			</div>
			<div class="ibox-content">
				<div class="form-group"><label class="col-sm-2 control-label">Post</label>
					<div class="col-sm-4"><select class="form-control m-b" name="post">
						<?php 
                        $pickpost=mysqli_query($con,"SELECT * from cz_posting_prvs");
                        while($row=mysqli_fetch_array($pickpost))
						{
                            $post_title=$row[1];
                            $authority_level=$row[2];
                            
                        ?>
						<option value="<?php echo $post_title; ?>"><?php echo $post_title; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group" id="data_1">
					<label class="col-sm-2 control-label">Date of Joining</label>
					<div class="col-sm-4">
					<div class="input-group date">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="doj" class="form-control" >
					</div>
					</div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label">Qualification</label>
					<div class="col-sm-4"><input type="text" name="qual" placeholder="Seperate with 'comma'" class="form-control input-lg m-b"></div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Department</label>
					<div class="col-sm-4"><select class="form-control m-b" name="dept">
						<?php 
                        $pickdet=mysqli_query($con,"SELECT * from cz_department");
                        while($row=mysqli_fetch_array($pickdet))
						{
                            $department_id=$row[0];
                            $department_name=$row[1];
                        ?>
						<option value="<?php echo $department_id; ?>"><?php echo $department_name; ?></option>
						<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group"><div class="col-sm-4"><input type="text" placeholder="Phone Work" name="phwork" class="form-control"></div>
					<div class="col-sm-4"><input type="text" placeholder="Phone Personal" name="phpersonal" class="form-control"></div>
                </div>
                <div class="form-group"><div class="col-sm-4"><input type="text" placeholder="Mobile Work" name="mobilew" class="form-control"></div>
					<div class="col-sm-4"><input type="text" placeholder="Mobile Personal" name="mobilep" class="form-control"></div>
                </div>
                <div class="form-group"><div class="col-sm-4"><input type="email" placeholder="Personal Email-ID" name="emailp" class="form-control"></div>
					<div class="col-sm-4"><input type="email" placeholder="Work Email-ID" name="emailW" class="form-control"></div>
                </div>
                <div class="form-group">
					<div class="col-sm-8"><button type="submit" name="submit" class="btn btn-block btn-outline btn-primary">Add Employee</button></div>
                </div>
                
                
			</div>
			
		</form>
	</div>
</div>
</div>       
            <!--------------------------Footer------------------ -->
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
    <script src="../js/plugins/toastr/toastr.min.js"></script>
 <!-- Chosen -->
    <script src="../js/plugins/chosen/chosen.jquery.js"></script>
        <script src="../js/plugins/datapicker/bootstrap-datepicker.js"></script>


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
<?php
      if(isset($_POST['submit']))
     {
		$empid=$_POST["empid"];
		$passkey = sha1($_POST['passkey']);
		$firstname=$_POST["firstname"];
		$middlename=$_POST["middlename"];
		$lastname=$_POST["lastname"];
		$fhn=$_POST["fhn"];
		$fhname=$_POST["fhname"];
		$father="";
		$husband="";
		$gender=$_POST["gender"];
		$mstatus=$_POST["mstatus"];
		$idmark=$_POST["idmark"];
		$caste=$_POST["caste"];
		$religion=$_POST["religion"];
		$bgroup=$_POST["bgroup"];
		$dob=$_POST["dob"];
		$post=$_POST["post"];
		$doj=$_POST["doj"];
		$qual=$_POST["qual"];
		$dept=$_POST["dept"];
		$phwork=$_POST["phwork"];
		$phpersonal=$_POST["phpersonal"];
		$mobilew=$_POST["mobilew"];
		$mobilep=$_POST["mobilep"];
		$emailp=$_POST["emailp"];
		$emailW=$_POST["emailW"];
		if($fhn=="father")
		{
			$father=$fhname;
			$husband="";
		}
		else{
			$father="";
			$husband=$fhname;
		}
        
		 $pickpost1=mysqli_query($con,"SELECT * from cz_posting_prvs where post_title='$post'");
                        while($row=mysqli_fetch_array($pickpost1))
						{
                            $authority=$row[2];
                            
						}
						$stat=1;
		$sql=mysqli_query($con,"INSERT INTO cz_employee_details(employee_id,first_name,middle_name,last_name,father_name,husband_name,gender,marital_status,identity_mark,caste,religion,blood_group,date_of_birth,authority_level,post_title,joining_date,qualification,department,phone_personal,phone_work,mobile_personal,mobile_work,email_personal,email_work,is_active) values('$empid','$firstname','$middlename','$lastname','$father','$husband','$gender','$mstatus','$idmark','$caste','$religion','$bgroup','$dob','$authority','$post','$doj','$qual','$dept','$phwork','$phpersonal','$mobilew','$mobilep','$emailp','$emailW','$stat')");
		$sql1=mysqli_query($con,"INSERT INTO cz_login(login_user_id,login_passkey,authority_level,last_known_passkey,is_active) values('$empid','$passkey','$authority','$passkey','$stat') ");
		if (($sql)&&($sql1))
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
                toastr.info('Employee Registered', 'Success');

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
