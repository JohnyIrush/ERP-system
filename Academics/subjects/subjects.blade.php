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
                            <li>Registered Subjects</li>
                        </ul>
                        <h4>Registered Subjects</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                   
<div class="clearfix">
                        <div class="btn-group">
                           <a href="addsubjects.php" class="btn btn-primary">
                            Add New Subject <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>
                        
                    </div>
                    <!--edit school-->
                    <div class="col-md-15">

                 <div class="col-md-15">
                                    <div class="table-responsive">
                                        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
                                            <thead>
                                              <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 21px;">No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Code: activate to sort column ascending" style="width: 38px;">Code</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Subject Name: activate to sort column ascending" style="width: 103px;">Subject Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 69px;">Category</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Description: activate to sort column ascending" style="width: 643px;">Description</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 54px;">Edit</th></tr>
                                            </thead>
                                            
                                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                    <td class=" ">5</td>
                                     <td class=" ">311</td>
                                    <td class=" ">History </td>
                                    <td class=" ">Humanities</td>
                                    <td class="  sorting_1">This is an optional subject </td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=5"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">6</td>
                                     <td class=" ">313</td>
                                    <td class=" ">Cre</td>
                                    <td class=" ">Humanities</td>
                                    <td class="  sorting_1">This is an optional subject </td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=6"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="odd">
                                    <td class=" ">9</td>
                                     <td class=" ">565</td>
                                    <td class=" ">Business Studies</td>
                                    <td class=" ">Technical</td>
                                    <td class="  sorting_1">This is an optional subject</td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=9"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">10</td>
                                     <td class=" ">443</td>
                                    <td class=" ">Agriculture</td>
                                    <td class=" ">Technical</td>
                                    <td class="  sorting_1">This is an optional subject</td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=10"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="odd">
                                    <td class=" ">11</td>
                                     <td class=" ">312</td>
                                    <td class=" ">Geography</td>
                                    <td class=" ">Humanities</td>
                                    <td class="  sorting_1">This is an optional subject</td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=11"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">2</td>
                                     <td class=" ">232</td>
                                    <td class=" ">Physics</td>
                                    <td class=" ">Science</td>
                                    <td class="  sorting_1">This is a compulsory subject for Form ones and twos but an optional one for Form threes and fours</td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=2"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="odd">
                                    <td class=" ">3</td>
                                     <td class=" ">231</td>
                                    <td class=" ">Biology</td>
                                    <td class=" ">Science</td>
                                    <td class="  sorting_1">This is a compulsory subject for Form ones and twos but an optional one for Form threes and fours</td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=3"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">1</td>
                                     <td class=" ">121</td>
                                    <td class=" ">Mathematics</td>
                                    <td class=" ">Compulsory</td>
                                    <td class="  sorting_1">This is a compulsory subject for all the classes</td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=1"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="odd">
                                    <td class=" ">4</td>
                                     <td class=" ">233</td>
                                    <td class=" ">Chemistry</td>
                                    <td class=" ">Science</td>
                                    <td class="  sorting_1">This is a compulsory subject for all classes</td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=4"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr><tr class="even">
                                    <td class=" ">7</td>
                                     <td class=" ">101</td>
                                    <td class=" ">English</td>
                                    <td class=" ">Compulsory</td>
                                    <td class="  sorting_1">This is a compulsory subject for all classes</td>
                                  
                                    <td class=" ">                                           
                                        <div><a href="editsubject.php?id=7"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                                 
                                  </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 11 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
                                    </div>
                                </div>
                               

                                                   
                       
                              
                    </div><!-- panel -->
                        
                        
                </div><!-- col-md-6 --> 

            </div><!--row -->
        </div>
    </div>
@endsection