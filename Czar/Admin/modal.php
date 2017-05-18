<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** modal.php is a common modal-dialog for all pages
 ** contains most of the modal-form details
 ** Important dependancy for many Admin pages
 ** Depends on config.php for some data
 **
 ** Designer: Muhil Suganthan - muhilsuganthan@yourtpdc.com
 ** Design modifications  - Siva Subramanian
 ** Backend programmer: Siva Subramanian - sivasubramanian@yourtpdc.com
 ** Last major Change: April 28,2016
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/
?>
<div id="addept" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Add Department</h3>

                                                    <p>Provide valid data</p>

                                                     <form role="form" action="" method="POST">
                                                   
                             
                              <div class="form-group"><label>Dept ID</label><input type="text" class="form-control m-b" name="deptid" required="">
                                       </div> 
                             
                             
                                                      
                                                    
                         <div class="form-group"><label>Dept Name</label><input type="text" class="form-control m-b" name="deptname" required="">
                                       </div> 
                                    


                              
                         <div class="form-group"><label>Description</label><input type="text" class="form-control m-b" name="description">
                                        </div> 


                                    
                                     <div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="submit"><strong>CREATE</strong></button>
                                                           
                                                        </div>
                                                         </form>
                                                        <div class="form-group">
                                                         </div>
                                                   
                                                   
                                                </div>
                                                
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>





<!--addpost-->
<div id="addpost" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Add Posting</h3>

                                                    <p>Provide valid data</p>

                                                     <form role="form" action="" method="POST">
                                                   
                             
                              <div class="form-group"><label>Title</label><input type="text" class="form-control m-b" name="title" required="">
                                       </div> 
                             
                             
                                                      
                                                    
                         <div class="form-group"><label>Authority Level</label><select class="form-control m-b" name="authority">
                            <option value="2">Admin</option>
                             <option value="1">Manager</option>
                             <option value="0">Employee</option>
                             </select>
                                       </div>                                   


                     


                                    
                                     <div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="submit"><strong>CREATE</strong></button>
                                                           
                                                        </div>
                                                         </form>
                                                        <div class="form-group">
                                                         </div>
                                                   
                                                   
                                                </div>
                                                
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
 <!-----------------Assets------------------------>
 <div id="assets" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Add Posting</h3>

                                                    <p>Provide valid data</p>

                                                     <form role="form" action="" method="POST">
                                                   
                             
                              <div class="form-group"><label>Name</label><input type="text" class="form-control m-b" name="asname" required="">
                                       </div> 
                             <div class="form-group"><label>Type</label><input type="text" class="form-control m-b" name="astype" required="">
                                       </div> 
                             <div class="form-group"><label>Purchased From</label><input type="text" class="form-control m-b" name="pfrom" required="">
                                       </div> 
                                       </div>
                              <div class="col-sm-6">
                              <div class="form-group"><label>Reason</label><input type="text" class="form-control m-b" name="purpose" required="">
                                       </div>                        
                              <div class="form-group" id="data_1">
					<label>Date of Purchase</label>
					
					<div class="input-group date">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="dop" class="form-control" >
					</div>

				</div>                   
                         <div class="form-group"><label>Status of asset</label><select class="form-control m-b" name="status">
                             <option value="Good">Good</option>
                             <option value="Repair">Repair</option>
                             <option value="Repair-Fixed">Repair-Fixed</option>
                             </select>
                                       </div>                                   


                     


                                    
                                     <div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="submit"><strong>CREATE</strong></button>
                                                           
                                                        </div>
                                                        </div>
                                                         </form>
                                                        <div class="form-group">
                                                         </div>
                                                   
                                                   
                                                </div>
                                                
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>

 
 
 
 
                              
<!-- Manage Teams -->

<div id="teams" class="modal fade" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-body">
      <div class="row">
        <!-- Column 1 -->
        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">ADD TEAM</h3>

        <p>Provide valid data</p>
        <form role="form" action="" method="POST">
        <div class="form-group"><label>Team ID</label><input type="text" class="form-control m-b" name="title" required="">
        </div> 
        <div class="form-group"><label>Team Name</label><input type="text" class="form-control m-b" name="title" required="">
        </div> 

        <div class="form-group">
            <label>Team Leader</label>
            <div class="input-group">
                <select data-placeholder="Choose a TL" class="chosen-select" style="width:200px;" tabindex="2">
                    <option value="">Select</option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                </select>
            </div>
        </div>
        </div>
        <!-- Column 1 ends -->

        <!-- Column 2 -->
        <div class="col-sm-6 b-r">  
            <div class="form-group">
                <label>Members</label>
                <div class="input-group">
                    <select data-placeholder="Choose Members" class="chosen-select" multiple style="width:200px;" tabindex="4">
                        <option value="">Select</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Column 2 ends -->
        </form>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>