@extends('layouts.app');

@section('content')
 <div class="container">
    <div class="mainpanel">
        <div class="pageheader">
            <div class="media">
                <div class="pageicon pull-left">
                    <i class="fa fa-plus-square"></i>
                </div>
                <div class="media-body">
                    <ul class="breadcrumb">
                        <li><i class="fa fa-plus-square"></i></li>
                        <li>Add Student</li>
                    </ul>
                    <h4>Add Student</h4>
                    
                        
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->
        
        <div class="contentpanel">
            
            <div class="row" style="background:url('images/back.png');background-repeat:repeat-y;">
               <div class="col-md-3">
               </div>

                <!--edit school-->
                <div class="col-md-12">
                     <div class="clearfix">
                    <div class="btn-group">
                     <a href="#myModal" data-toggle="modal" class="btn btn-primary">
                        Quick Enrollment <i class="fa fa-plus"></i>
                    </a>
                     <a style="margin-left: 10px;" href="addstudent.php" class="btn btn-primary">
                        Full Enrollment <i class="fa fa-plus"></i>
                    </a>
                       
                    </div>
                    <div class="btn-group pull-right">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                           <!--<li><a target="_blank" href="printStudentReport.php">Generate Report</a></li>-->
                            <li><a target="_blank" href="deactivate.php">Deactivate Student</a></li>
                            <li><a target="_blank" href="reactivate.php">Reactivate Student</a></li>
                            <li><a target="_blank" href="pdf/student.php">Export to Pdf</a></li>
                            <li><a href="importStudent.php">Import From Excel</a></li>
                        </ul>
                    </div>
                </div>
                 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                            <h4 class="modal-title">Add Student</h4>
                        </div>
                        <div class="modal-body">
                            <form action="teme4.php" method="post" class="form-horizontal " enctype="multipart/form-data">
                               <div class="form-group">
                                <label class="control-label col-md-4"> Admisssion No:</label>
                                <div class="col-md-6">
                                     <input type="number" required="" onchange="CheckUserName()" value="776" class="form-control" name="mn" size="16" id="UserName" placeholder="Eg 0052">
                                      <div id="ErrorSpan" style="color:#a94442"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Class:</label>
                                <div class="col-md-6 col-xs-11">
                                   <select required="" name="sclass" id="changeclasses" class="form-control">
                                    <option value="">Select Class</option>
                                    <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>												
                               </select>
                                   
                                </div>
                            </div>
                             <div id="result"></div>
                           

                            <div class="form-group">
                                <label class="control-label col-md-4">First Name:</label>
                                <div class="col-md-6 col-xs-11">
                                    <input style="text-transform:uppercase" required="" value="" type="text" class="form-control" name="fn" size="16" id="exampleInputEmail5" placeholder="Eg JAMES">
                                   
                                </div>
                            </div>
                            
                        
                             <div class="form-group">
                                <label class="control-label col-md-4">Last Name:</label>
                                <div class="col-md-6 col-xs-11">
                                    <input type="text" style="text-transform:uppercase" required="" class="form-control" name="ln" value="" size="16" id="exampleInputEmail5" placeholder="e.g. JOSEPH">
                                   
                                </div>
                            </div>
                              <div class="form-group">
                                <label class="control-label col-md-4">Other Names:</label>
                                <div class="col-md-6 col-xs-11">
                                    <input type="text" style="text-transform:uppercase" name="onas" value="" class="form-control" size="16" id="exampleInputEmail5" placeholder="e.g. ESITSAKHA">
                                   
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-4">Entry Marks:</label>
                                <div class="col-md-6 col-xs-11">
                                    <input type="number" name="emrks" value="" class="form-control" min="0" max="500" size="16" id="exampleInputEmail5" placeholder="e.g 360">
                                   
                                </div>
                            </div>
                                 <div class="form-group">
                                <label class="control-label col-md-4">Former School:</label>
                                <div class="col-md-6 col-xs-11">
                                    <input type="text" value="" style="text-transform:uppercase" name="fschl" class="form-control" size="16" id="exampleInputEmail5" placeholder="e.g OGEMBO">
                                   
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-4">Parent Contact:</label>
                                <div class="col-md-6 col-xs-11">
                                    <input type="text" value="" style="text-transform:uppercase" name="pcont" class="form-control" size="16" id="exampleInputEmail5" placeholder="e.g +254700000000">
                                   
                                </div>
                            </div>
                            

                          
                           
                            
                            
                            
                             <div class="form-group">
                                <label class="control-label col-md-4">Gender:</label>
                                <div class="col-md-6 col-xs-11">
                                   <select required="" name="gd" class="form-control">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Others</option>
                                    
                               </select>
                                   
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-4">Border/Dayscholor:</label>
                                <div class="col-md-6 col-xs-11">
                                   <select required="" name="bd" class="form-control">
                                    <option value="0">Dayscholar</option>
                                    <option value="1">Boader</option>
                                    
                                    
                               </select>
                                   
                                </div>
                            </div>
                             
                             
                            
                              <div class="form-group">
                                <label class="control-label col-md-4">Date Of Birth:</label>
                                <div class="col-md-6 col-xs-11">

                                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">
                                        <input type="text" name="dtb" readonly="" value="2021-09-03" size="16" class="form-control">
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                    </div>
                                  
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-4">Picture:</label>
                                <div class="col-md-6 col-xs-11">
                                    <input type="file" style="text-transform:uppercase" name="file" class="form-control" size="16">
                                   
                                </div>
                            </div>
                            
                        
                            
                        
                        
                        
                            
                            
                             <button type="submit" name="member" class="btn btn-default">Add Student</button>
                            
                          
                            </form>
                             
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
                                            
                <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
        <thead>
        <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Reg No: activate to sort column ascending" style="width: 52px;">Reg No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Avatar: activate to sort column ascending" style="width: 52px;">Avatar</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" style="width: 249px;">Full Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending" style="width: 64px;">DOB</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Class: activate to sort column ascending" style="width: 65px;">Class</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Stream: activate to sort column ascending" style="width: 52px;">Stream</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 52px;">Gender</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Guardian Phone: activate to sort column ascending" style="width: 116px;">Guardian Phone</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 106px;">Action</th></tr>
        </thead>
        
        <tfoot>
        <tr><th rowspan="1" colspan="1">Reg No</th><th rowspan="1" colspan="1">Avatar</th><th rowspan="1" colspan="1">Full Name</th><th rowspan="1" colspan="1">DOB</th><th rowspan="1" colspan="1">Class</th><th rowspan="1" colspan="1">Stream</th><th rowspan="1" colspan="1">Gender</th><th rowspan="1" colspan="1">Guardian Phone</th><th rowspan="1" colspan="1">Action</th></tr>
        </tfoot>
        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="gradeX odd">
            <td class=" ">570</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">PAULINE NJERI MBOO</td>
          <td class=" ">2005-04-20</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">PEACE</td>
           <td class=" ">FEMALE</td>
           <td class=" ">+254716918227</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=481">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=481">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=481">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=481&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=481"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr><tr class="gradeX even">
            <td class=" ">571</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">LEAH WANJIKU WANJIRA</td>
          <td class=" ">2005-12-23</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">UNITY</td>
           <td class=" ">FEMALE</td>
           <td class=" ">+254720350425</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=482">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=482">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=482">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=482&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=482"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr><tr class="gradeX odd">
            <td class=" ">572</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">MARGARET NJERI NJAU</td>
          <td class=" ">2006-08-04</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">PEACE</td>
           <td class=" ">FEMALE</td>
           <td class=" ">+254715722854</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=483">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=483">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=483">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=483&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=483"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr><tr class="gradeX even">
            <td class=" ">573</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">PATRICK NDUNGU KINUTHIA</td>
          <td class=" ">2003-05-11</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
           <td class=" ">+254791736734</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=484">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=484">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=484">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=484&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=484"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr><tr class="gradeX odd">
            <td class=" ">574</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">MARGARET WANJIRA NGANGA</td>
          <td class=" ">2004-08-29</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">PEACE</td>
           <td class=" ">FEMALE</td>
           <td class=" ">+254724161281</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=485">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=485">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=485">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=485&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=485"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr><tr class="gradeX even">
            <td class=" ">575</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">TERESIA WACUKA NGURWA</td>
          <td class=" ">2003-10-21</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">UNITY</td>
           <td class=" ">FEMALE</td>
           <td class=" ">+254723276303</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=486">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=486">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=486">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=486&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=486"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr><tr class="gradeX odd">
            <td class=" ">576</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">SIMON BORO WAMBUI</td>
          <td class=" ">2004-08-23</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">PEACE</td>
           <td class=" ">MALE</td>
           <td class=" ">+254714729985</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=487">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=487">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=487">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=487&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=487"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr><tr class="gradeX even">
            <td class=" ">577</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">LUCY WANGECHI NJAMBI</td>
          <td class=" ">2005-03-07</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">UNITY</td>
           <td class=" ">FEMALE</td>
           <td class=" ">+254720340733</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=488">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=488">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=488">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=488&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=488"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr><tr class="gradeX odd">
            <td class=" ">578</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">ELVIS MWIHIA WANJERI</td>
          <td class=" ">2004-11-06</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">PEACE</td>
           <td class=" ">MALE</td>
           <td class=" ">+254720753618</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=489">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=489">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=489">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=489&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=489"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr><tr class="gradeX even">
            <td class=" ">579</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">MOSES MBURU WAINAINA</td>
          <td class=" ">2006-02-06</td>
            <td class="  sorting_1">Form Two</td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
           <td class=" ">+254721459180</td>
          <td class=" "> <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="editstudent.php?studentid=490">Edit Student Details</a></li>
                    
                    <li><a href="getstudentprofile.php?studentid=490">View Student Profile</a></li>
                    <li><a href="changeStudentProfile.php?studentid=490">Change Profile Image</a></li>
                    <li><a href="teme4.php?studentid=490&amp;delete" onclick="return confirm('Are you sure you want to delete this student from the system?');">Delete Record</a></li>
                    
                    
                    
                        
                    
                     
                             <li class="divider"></li>
                           <li><a href="addGuardian.php?studentid=490"> Add Guardian</a></li>
                                
                            
                        
                         
                    
                    
                  
                </ul>
            </div> </td>
           
            
           
        </tr></tbody></table>
        <div class="row-fluid">
            <div class="span6">
                <div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 311 entries</div>
            </div>
            <div class="span6">
                <div class="dataTables_info" id="dynamic-table_info">
            <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
            </nav>  
                </div>
            </div></div></div>
        
                   
                        
                    </div><!-- panel -->
                    
                    
                    
                </div><!-- col-md-6 -->


            </div><!--row --> 
        </div>
 </div>
@endsection