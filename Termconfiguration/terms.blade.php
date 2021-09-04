@extends('layouts.app');

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
                        <li>Term Configuration</li>
                    </ul>
                    <h4>Term Configuration</h4>
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
                            <form action="year.php" method="post" class="form-horizontal ">
                              <div class="form-group">
                                <label class="control-label col-md-4">Year:</label>
                                <div class="col-md-6 col-xs-11">
                                
                                
                                   <input type="number" required="" name="year" size="16" placeholder="eg 2017" class="form-control">
                                   
                                </div>
                            </div>
                              
                            <div class="form-group">
                                <label class="control-label col-md-4">Term:</label>
                                <div class="col-md-6 col-xs-11">
                                   <select required="" name="term" id="term" class="form-control">
                                    <option value="">Select Term</option>
                    
                                          <option value="1">Term One</option>
                                           <option value="2">Term Two</option>
                                            <option value="3">Term Three</option>

                                    
                               </select>
                                   
                                </div>
                            </div>
                             
                           

                              <div class="form-group">
                                <label class="control-label col-md-4">From:</label>
                                <div class="col-md-6 col-xs-11">

                                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">
                                        <input type="text" required="" name="from" readonly="" value="2021-09-03" size="16" class="form-control">
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                    </div>
                                  
                                </div>
                            </div>
                              <div class="form-group">
                                <label class="control-label col-md-4">To:</label>
                                <div class="col-md-6 col-xs-11">

                                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">
                                        <input type="text" required="" name="to" readonly="" value="2021-09-03" size="16" class="form-control">
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                    </div>
                                  
                                </div>
                            </div>

                            <div class="form-group">  
                                    
                                    <div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" name="classid1" class="staffids" id="1" value="1">
                        <label for="1">Form One </label>
                    </div>
                </div>
            </div>
        </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" name="classid2" class="staffids" id="2" value="2">
                        <label for="2">Form Two</label>
                    </div>
                </div>
            </div>
        </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" name="classid3" class="staffids" id="3" value="3">
                        <label for="3">Form Three</label>
                    </div>
                </div>
            </div>
        </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" name="classid4" class="staffids" id="4" value="4">
                        <label for="4">Form Four</label>
                    </div>
                </div>
            </div>
        </div><!-- form-group -->                                              
                                  
                                    </div><!-- form-group -->
                           
                            
                        
                            
                        
                        
                        
                            
                            
                             <button type="submit" name="member" class="btn btn-default">Add Term</button>
                            
                          
                            </form>
                             
                            
                                                                   
                        </div>
                    </div>
                </div>
            </div>
            
                                <div class="table-responsive">
                                    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
                                        <thead>
                                          <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 61px;">No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Term Name: activate to sort column ascending" style="width: 172px;">Term Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Class Name: activate to sort column ascending" style="width: 179px;">Class Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending" style="width: 141px;">From</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="To: activate to sort column ascending" style="width: 141px;">To</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Year: activate to sort column ascending" style="width: 83px;">Year</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 121px;">Edit</th></tr>
                                        </thead>
                                        
                                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                <td class=" ">1.</td>
                                <td class=" ">3</td>
                                 <td class=" "></td>
                                <td class=" ">2021-07-14</td>
                              
                                <td class="  sorting_1">2021-07-26                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2021 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=22"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr><tr class="even">
                                <td class=" ">2.</td>
                                <td class=" ">2</td>
                                 <td class=" "></td>
                                <td class=" ">2021-01-04</td>
                              
                                <td class="  sorting_1">2021-03-22                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2021 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=23"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr><tr class="odd">
                                <td class=" ">3.</td>
                                <td class=" ">2</td>
                                 <td class=" "></td>
                                <td class=" ">2020-10-12</td>
                              
                                <td class="  sorting_1">2020-12-23                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2020 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=19"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr><tr class="even">
                                <td class=" ">4.</td>
                                <td class=" ">1</td>
                                 <td class=" "></td>
                                <td class=" ">2020-12-02</td>
                              
                                <td class="  sorting_1">2020-03-16                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2020 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=18"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr><tr class="odd">
                                <td class=" ">5.</td>
                                <td class=" ">3</td>
                                 <td class=" "></td>
                                <td class=" ">2019-08-27</td>
                              
                                <td class="  sorting_1">2019-10-25                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2019 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=17"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr><tr class="even">
                                <td class=" ">6.</td>
                                <td class=" ">2</td>
                                 <td class=" "></td>
                                <td class=" ">2019-04-30</td>
                              
                                <td class="  sorting_1">2019-08-13                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2019 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=16"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr><tr class="odd">
                                <td class=" ">7.</td>
                                <td class=" ">1</td>
                                 <td class=" "></td>
                                <td class=" ">2019-01-03</td>
                              
                                <td class="  sorting_1">2019-04-03                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2019 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=15"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr><tr class="even">
                                <td class=" ">8.</td>
                                <td class=" ">3</td>
                                 <td class=" "></td>
                                <td class=" ">2018-08-28</td>
                              
                                <td class="  sorting_1">2018-10-24                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2018 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=14"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr><tr class="odd">
                                <td class=" ">9.</td>
                                <td class=" ">2</td>
                                 <td class=" "></td>
                                <td class=" ">2018-05-02</td>
                              
                                <td class="  sorting_1">2018-08-20                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2018 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=13"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr><tr class="even">
                                <td class=" ">10.</td>
                                <td class=" ">1</td>
                                 <td class=" "></td>
                                <td class=" ">2018-01-02</td>
                              
                                <td class="  sorting_1">2018-04-03                                             
                                </td>
                              
                                
                                 <td class=" ">                                           
                                    <div>2018 
                                </div></td><td class=" ">                                           
                                    <div><a href="edittermconfig.php?id=12"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                </td>
                                             
                              </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 21 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
                                </div><!-- table-responsive -->
                            </div>                                      
                </div><!-- panel -->
                    
                    
            </div><!-- col-md-6 --> 

        </div><!--row -->
    

    </div>
 </div>
@endsection