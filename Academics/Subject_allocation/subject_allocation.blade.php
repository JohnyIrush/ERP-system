@extends('layouts.app')

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
                            <li>Manage Student Subject Allocation</li>
                        </ul>
                        <h4>Manage Student Subject Allocation</h4>
                        
                            
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
                         <a href="allocateSubjectNew.php" class="btn btn-primary">
                            Allocate Subject <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                               <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                    
                   
                  
                    
                    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
            <thead>
            <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Reg No: activate to sort column ascending" style="width: 50px;">Reg No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Avatar: activate to sort column ascending" style="width: 50px;">Avatar</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" style="width: 241px;">Full Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending" style="width: 62px;">DOB</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Class: activate to sort column ascending" style="width: 63px;">Class</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Stream: activate to sort column ascending" style="width: 49px;">Stream</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 51px;">Gender</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 72px;">Status</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Entry: activate to sort column ascending" style="width: 37px;">Entry</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 103px;">Action</th></tr>
            </thead>
            
            <tfoot>
            <tr><th rowspan="1" colspan="1">Reg No</th><th rowspan="1" colspan="1">Avatar</th><th rowspan="1" colspan="1">Full Name</th><th rowspan="1" colspan="1">DOB</th><th rowspan="1" colspan="1">Class</th><th rowspan="1" colspan="1">Stream</th><th rowspan="1" colspan="1">Gender</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Entry</th><th rowspan="1" colspan="1">Action</th></tr>
            </tfoot>
            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="gradeX odd">
                <td class=" ">570</td>
                <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
                <td class=" ">PAULINE NJERI MBOO</td>
              <td class=" ">2005-04-20</td>
                <td class="  sorting_1">Form Two</td>
                <td class=" ">PEACE</td>
               <td class=" ">FEMALE</td>
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="false">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=481">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=481">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=481">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
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
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=482">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=482">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=482">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
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
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=483">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=483">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=483">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
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
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=484">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=484">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=484">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
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
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=485">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=485">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=485">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
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
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=486">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=486">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=486">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
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
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=487">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=487">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=487">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
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
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=488">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=488">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=488">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
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
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=489">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=489">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=489">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
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
               <td class=" ">allocated</td>
               <td class=" ">0</td>
              <td class=" "> <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="viewSubjectAloocated.php?studentid=490">View Allocated Subjects</a></li>
                        
                        <li><a onclick="return confirm('Are you sure you change student subject?');" href="editsubjectAllocated.php?studentid=490">Edit Subject Allocated</a></li>
                        
                                                <li><a onclick="return confirm('Are you sure you want to allocate student subject?');" href="changesubjectAllocation.php?studentid=490">Allocate Subjects</a></li>
                                        
                                        
                        
                        
                        
                            
                        
                         
                                    
                                
                            
                             
                        
                        
                      
                    </ul>
                </div> </td>
               
                
               
            </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 311 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
            
                       
                            
                        </div><!-- panel -->
                        
                        
                        
                    </div><!-- col-md-6 -->


                </div><!--row -->    
            </div>
    </div>
@endsection