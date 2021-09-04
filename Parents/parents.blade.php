@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-pencil-square-o"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-pencil-square-o"></i></li>
                            <li>Edit Parents</li>
                        </ul>
                        <h4>Edit Parents</h4>
                        <p></p>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                   

                    <!--edit school-->
                    <div class="col-md-15">
                     <div class="clearfix">
                        <div class="btn-group">
                         <a href="addparents.php" class="btn btn-primary">
                            Add New Parent <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                               <li><a target="_blank" href="pdf/parent.php">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                                <li><a href="importParent.php">Import From Excel</a></li>
                            </ul>
                        </div>
                    </div>
                      
                            
                            <p></p>
                         <div class="col-md-15">
                                    <div class="table-responsive">
                                        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
                                            <thead>
                                              <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 17px;">No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Parent Name: activate to sort column ascending" style="width: 151px;">Parent Name</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="ID/Passport Number: activate to sort column ascending" style="width: 124px;">ID/Passport Number</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 48px;">Gender</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="Phone No: activate to sort column ascending" style="width: 88px;">Phone No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Other Contacts: activate to sort column ascending" style="width: 93px;">Other Contacts</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Occupation: activate to sort column ascending" style="width: 76px;">Occupation</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Physical Address: activate to sort column ascending" style="width: 105px;">Physical Address</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 45px;">Edit</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 61px;">Delete</th></tr>
                                            </thead>
                                            
                                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                    <td class=" ">18</td>
                                    <td class=" ">DAMARIS WANGARE </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Female</td>
                                    <td class="  sorting_1">+254792742064</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=18"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr class="even">
                                    <td class=" ">144</td>
                                    <td class=" ">LUCY NJERI </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Female</td>
                                    <td class="  sorting_1">+254788584858</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=144"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr class="odd">
                                    <td class=" ">171</td>
                                    <td class=" ">BENARD GITAU </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Male</td>
                                    <td class="  sorting_1">+254788470756</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=171"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr class="even">
                                    <td class=" ">133</td>
                                    <td class=" ">CECILIA WAMBUI </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Female</td>
                                    <td class="  sorting_1">+254788337845</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=133"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr class="odd">
                                    <td class=" ">129</td>
                                    <td class=" ">DOMINIC OBITA </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Male</td>
                                    <td class="  sorting_1">+254772079871</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=129"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr class="even">
                                    <td class=" ">107</td>
                                    <td class=" ">BEATRICE WAMBUI </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Female</td>
                                    <td class="  sorting_1">+254738148837</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=107"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr class="odd">
                                    <td class=" ">68</td>
                                    <td class=" ">MICHAEL MUROKI </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Male</td>
                                    <td class="  sorting_1">+254735528258</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=68"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr class="even">
                                    <td class=" ">179</td>
                                    <td class=" ">GEORGE GITAU </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Male</td>
                                    <td class="  sorting_1">+254733903327</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=179"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr class="odd">
                                    <td class=" ">143</td>
                                    <td class=" ">GEORGE MUIRURI </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Male</td>
                                    <td class="  sorting_1">+254733214152</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=143"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr class="even">
                                    <td class=" ">117</td>
                                    <td class=" ">LUCY WAIRIMU </td>
                                    <td class=" ">0</td>
                                    <td class=" ">Female</td>
                                    <td class="  sorting_1">+254732486120</td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" "></td>
                                    <td class=" ">                                           
                                        <div><a href="editthisparent.php?id=117"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                    </td>
                                    <td class=" ">                                           
                                        <div><a href="deletethisparent.php?id='.$parentrow['parentId'].'"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 269 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
                                    </div><!-- table-responsive -->
                                </div>
                               

                                                    
                    
                              
                    </div><!-- panel -->
                        
                        
                </div><!-- col-md-6 --> 

            </div><!--row -->


        </div>
    </div>
@endsection