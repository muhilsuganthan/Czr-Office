<?php
/* 
 ** **************************Czar V 0.4*********************************
 ** *********************************************************************
 ** Common Navigation Bar
 ** Important dependancy for most/all Admin pages
 **
 ** Designer: Muhil Suganthan - muhilsuganthan@yourtpdc.com
 ** Last major Change: April 28,2016
 ** ********************************************************************
 ** *************************Powered By TPDC****************************
*/
?>
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Administrator</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="Profile.php">Profile</a></li>
                            <li><a href="mail.php">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="../config/logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        Czar
                    </div>
                </li>
                <li>
                
                    <a href="managedept.php"><i class="fa fa-th-large"></i> <span class="nav-label">Manage Department</span></a>
                    
                </li>
                               
                <li>
                     <a href="addpost.php"><i class="fa fa-envelope"></i> <span class="nav-label">Manage Postings</a>
                </li>
                    
                               
                <li>
                     <a href="empregister.php"><i class="fa fa-child"></i> <span class="nav-label">Add Employee</a>
                </li>
                
                <li>
                     <a href="Manage-Teams.php"><i class="fa fa-sitemap"></i> <span class="nav-label">Manage Teams</a>
                </li>
                     
                <li>
                     <a href="tickets.php"><i class="fa fa-list-alt"></i> <span class="nav-label">Tickets</a>
                </li>
                    
                 <li>
                     <a href="assets.php"><i class="fa fa-tasks"></i> <span class="nav-label">Manage Assets</a>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-mortar-board"></i> <span class="nav-label">Manage categories</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="../addstud.php">Order type</a></li>
                        
                       
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Announcements</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="../examtime.php">Holidays</a></li>
                        <li><a href="../addexams.php">Meetings</a></li>
                        <li><a href="../addexams.php">Messages</a></li>
                       
                    </ul>
                </li>
                
                 <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                       
                        <li><a href="../editattend.php">Edit Attendance</a></li>
                         <li><a href="../attendreport.php">Attendance Report</a></li>
                       
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Staff details</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="EmployeeList.php">View Staffs</a></li>
                        <li><a href="../staffrec.php">Change Password</a></li>
                        <li><a href="../staffattenedit.php">Modify Details</a></li>
                       
                         <li><a href="../staffattend.php">Attendance Report</a></li>
                       
                    </ul>
                </li>
                 
                <li>
                    <a href="#"><i class="fa fa-area-chart"></i> <span class="nav-label">Employee Rating</span> </a>
                </li>
                 
                  <li>
                     <a data-toggle="modal" href="#addpost"><i class="fa fa-frown-o"></i> <span class="nav-label">Remove/Suspend Emp</a>
                </li>
                      
                 <li>
                    <a href="../widgets.html"><i class="fa fa-cogs"></i> <span class="nav-label">Change Password</span> </a>
                </li>
               
     </ul>
     </div>
     </nav>
