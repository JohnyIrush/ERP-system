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
                        <li>Reactivate Student</li>
                    </ul>
                    <h4>Reactivate Student</h4>
                    
                        
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
                     <a href="javascript:goAct()" class="btn btn-primary">
                        Reactivate   <i class="fa fa-plus"></i>
                    </a>
                       
                    </div>
                 
                </div>
               
             
<form action="" method="post">
                
                <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="dynamic-table_length" class="dataTables_length"><label><select class="form-control" size="1" name="dynamic-table_length" aria-controls="dynamic-table"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="dynamic-table_filter"><label>Search: <input type="text" class="form-control" aria-controls="dynamic-table"></label></div></div></div><table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
        <thead>
        <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Select: activate to sort column ascending" style="width: 64px;">Select</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Reg No: activate to sort column ascending" style="width: 74px;">Reg No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Avatar: activate to sort column ascending" style="width: 74px;">Avatar</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" style="width: 299px;">Full Name</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="DOB: activate to sort column ascending" style="width: 88px;">DOB</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 91px;">Class</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Stream: activate to sort column ascending" style="width: 73px;">Stream</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 75px;">Gender</th></tr>
        </thead>
        
        <tfoot>
        <tr><th rowspan="1" colspan="1">Select</th><th rowspan="1" colspan="1">Reg No</th><th rowspan="1" colspan="1">Avatar</th><th rowspan="1" colspan="1">Full Name</th><th rowspan="1" colspan="1">DOB</th><th rowspan="1" colspan="1">Class</th><th rowspan="1" colspan="1">Stream</th><th rowspan="1" colspan="1">Gender</th></tr>
        </tfoot>
        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="571">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">660</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">JOHN ONSERIO NYAMWEA</td>
          <td class="  sorting_1">25-12-2004</td>
            <td class=" ">Form Two</td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="536">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">625</td>
             <td class=" ">    <img src="images/profile/536.jpg" width="60px">   </td>
            <td class=" ">BRIAN WAMBUA MUSEMBI</td>
          <td class="  sorting_1">2006-04-06</td>
            <td class=" ">Form Two</td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="442">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">533</td>
             <td class=" ">    <img src="images/profile/442.jpg" width="60px">   </td>
            <td class=" ">NJOROGE SYLVIA NYAMBURA</td>
          <td class="  sorting_1">2005-05-31</td>
            <td class=" ">Form Three</td>
            <td class=" ">PEACE</td>
           <td class=" ">FEMALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="459">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">551</td>
             <td class=" ">    <img src="images/profile/459.jpg" width="60px">   </td>
            <td class=" ">EDWIN MUKII NGANGA</td>
          <td class="  sorting_1">2005-04-26</td>
            <td class=" ">Form Four</td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="517">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">606</td>
             <td class=" ">    <img src="images/profile/517.jpg" width="60px">   </td>
            <td class=" ">EUNICE WACUKA WANDERI</td>
          <td class="  sorting_1">2005-03-20</td>
            <td class=" ">Form Two</td>
            <td class=" ">PEACE</td>
           <td class=" ">FEMALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="575">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">664</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">NEMROD  ASETA  OTWORI </td>
          <td class="  sorting_1">2005-02-28</td>
            <td class=" ">Form Two</td>
            <td class=" ">PEACE</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="572">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">661</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">CHRISTINE GAKENYE NYAGA</td>
          <td class="  sorting_1">2004-4-24</td>
            <td class=" ">Form Four</td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="534">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">623</td>
             <td class=" ">    <img src="images/profile/534.jpg" width="60px">   </td>
            <td class=" ">HANNAH WANJIRU GITAU</td>
          <td class="  sorting_1">2004-12-09</td>
            <td class=" ">Form Two</td>
            <td class=" ">UNITY</td>
           <td class=" ">FEMALE</td>
          
        
           
            
           
        </tr><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="437">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">528</td>
             <td class=" ">    <img src="images/profile/437.jpg" width="60px">   </td>
            <td class=" ">DORCAS WANGUI KIBE</td>
          <td class="  sorting_1">2004-12-04</td>
            <td class=" ">Form Three</td>
            <td class=" ">UNITY</td>
           <td class=" ">FEMALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="425">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">516</td>
             <td class=" ">    <img src="images/profile/425.jpg" width="60px">   </td>
            <td class=" ">PIUS MUKONO MUNGE</td>
          <td class="  sorting_1">2004-11-28</td>
            <td class=" ">Form Four</td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 372 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>
        </form>
        
                   
                        
                    </div><!-- panel -->
                    
                    
                    
                </div><!-- col-md-6 -->


            </div><!--row -->

            <div style="margin-top:50px;text-align:center;">
<p style="font-weight:bold;"><span style="color:#1fb5ac ;">© Copyright 2021. All Rights reserved | Technoguru</span></p> 
</div>    
        </div>
 </div>
@endsection