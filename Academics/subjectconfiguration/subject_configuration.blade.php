@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-pencil-square"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-pencil-square"></i></li>
                            <li>Subject Selection Configuration</li>
                        </ul>
                        <h4>Subject Selection  Configuration</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                   
<div class="clearfix">
                        <!--<div class="btn-group">
                           <a href="addsubjects.php"  class="btn btn-primary">
                            Add New Subject <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>-->
                        
                    </div>
                    <!--edit school-->
                    <div class="col-md-15">

                       <div class="col-md-15">
                            <div class="clearfix">
                        <div class="btn-group">
                         <a href="#myModal" data-toggle="modal" class="btn btn-primary">
                            Add New Term <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                               <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                                <li><a href="#">Import From Excel</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">x</button>
                                <h4 class="modal-title">Add Term</h4>
                            </div>
                            <div class="modal-body">
                                <form action="subjectselectionconfiguration.php" method="post" class="form-horizontal ">
                                   <div class="form-group">
                                    <label class="control-label col-md-4">Selection Name:</label>
                                    <div class="col-md-6 col-xs-11">
                                       <select required="" name="sname" id="term" class="form-control">
                                        <option value="">Select Selection</option>
                        
                                              <option value="1">First Selection</option>
                                               <option value="2">Second Selection</option>
                                               

                                        
                                   </select>
                                       
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-4"> Class:</label>
                                    <div class="col-md-6 col-xs-11">
                                       <select required="" name="fromclass" id="term" class="form-control">
                                        <option value="">Select  Class</option>
                        
                                              <option value="1">Form One</option>
                                               <option value="2">Form Two</option>
                                                <option value="3">Form Three</option>
                                                <option value="4">Form Four</option>

                                        
                                   </select>
                                       
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                    <label class="control-label col-md-4"> Term:</label>
                                    <div class="col-md-6 col-xs-11">
                                       <select required="" name="fromterm" id="term" class="form-control">
                                        <option value="">Select  Term</option>
                        
                                              <option value="1">Term One</option>
                                               <option value="2">Term Two</option>
                                                <option value="3">Term Three</option>

                                        
                                   </select>
                                       
                                    </div>
                                </div>
                               
                             
                                 
                               

                                
                            
                            
                               
                              
                                
                                
                                 
                              
                                
                               
                                
                            
                                
                            
                            
                            
                                
                                
                                 <button type="submit" name="member" class="btn btn-default">Add Term</button>
                                
                              
                                </form>
                                 
                                
                                                                       
                            </div>
                        </div>
                    </div>
                </div>
                
                                    <div class="table-responsive">
                                        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
                                            <thead>
                                              <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 80px;">No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Selection Name: activate to sort column ascending" style="width: 281px;">Selection Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 124px;">Class</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Term: activate to sort column ascending" style="width: 115px;">Term</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Date: activate to sort column ascending" style="width: 176px;">Date</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 152px;">Edit</th></tr>
                                            </thead>
                                            
                                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                    <td class=" ">1.</td>
                                    <td class=" ">1</td>
                                    <td class=" ">1</td>
                                  
                                    <td class=" ">1                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=1"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">2.</td>
                                    <td class=" ">2</td>
                                    <td class=" ">4</td>
                                  
                                    <td class=" ">2                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=11"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="odd">
                                    <td class=" ">3.</td>
                                    <td class=" ">2</td>
                                    <td class=" ">4</td>
                                  
                                    <td class=" ">1                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=10"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">4.</td>
                                    <td class=" ">2</td>
                                    <td class=" ">3</td>
                                  
                                    <td class=" ">3                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=9"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="odd">
                                    <td class=" ">5.</td>
                                    <td class=" ">2</td>
                                    <td class=" ">3</td>
                                  
                                    <td class=" ">2                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=8"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">6.</td>
                                    <td class=" ">2</td>
                                    <td class=" ">3</td>
                                  
                                    <td class=" ">1                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=7"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="odd">
                                    <td class=" ">7.</td>
                                    <td class=" ">1</td>
                                    <td class=" ">2</td>
                                  
                                    <td class=" ">3                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=6"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">8.</td>
                                    <td class=" ">1</td>
                                    <td class=" ">2</td>
                                  
                                    <td class=" ">2                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=5"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="odd">
                                    <td class=" ">9.</td>
                                    <td class=" ">1</td>
                                    <td class=" ">2</td>
                                  
                                    <td class=" ">1                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=4"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">10.</td>
                                    <td class=" ">1</td>
                                    <td class=" ">1</td>
                                  
                                    <td class=" ">3                                             
                                    </td>
                                  
                                    
                                     <td class="  sorting_1">                                           
                                        <div>2017-07-18 
                                    </div></td><td class=" ">                                           
                                        <div><a href="edittermconfig.php?id=3"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 12 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
                                    </div><!-- table-responsive -->
                                </div>                                      
                    </div><!-- panel -->
                        
                        
                </div><!-- col-md-6 --> 

            </div><!--row -->      

        </div>
    </div>
@endsection