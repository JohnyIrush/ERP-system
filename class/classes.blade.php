@extends('layouts.app')

@section('content')
<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="pageicon pull-left">
                <i class="fa fa-pencil-square-o"></i>
            </div>
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><i class="fa fa-pencil-square-o"></i></li>
                    <li>Manage Class</li>
                </ul>
                <h4>Manage Class</h4>
                <p></p>
            </div>
        </div><!-- media -->
    </div><!-- pageheader -->
    
    <div class="contentpanel">
        
        <div class="row">
           

            <!--edit school-->
            <div class="col-md-15">
               <p></p><div class="col-md-15">
                   
                      <a class="btn btn-primary mr5" href="addclass.php"> ADD NEW CLASS</a> <br><br>
                            <div class="table-responsive">
                                <table class="table table-primary mb30" align="center">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Class Name</th>
                                        <th>Edit</th>
                                      
                                      </tr>
                                    </thead>
                                    <tbody><tr>
                            <td>1.</td>
                            <td>Form One </td>
                            <td>                                           
                                <div><a href="editclass.php?id=1"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                            </td>
                                  
                          </tr><tr>
                            <td>2.</td>
                            <td>Form Two</td>
                            <td>                                           
                                <div><a href="editclass.php?id=2"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                            </td>
                                  
                          </tr><tr>
                            <td>3.</td>
                            <td>Form Three</td>
                            <td>                                           
                                <div><a href="editclass.php?id=3"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                            </td>
                                  
                          </tr><tr>
                            <td>4.</td>
                            <td>Form Four</td>
                            <td>                                           
                                <div><a href="editclass.php?id=4"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                            </td>
                                  
                          </tr></tbody>
                                </table>
                            </div><!-- table-responsive -->
                        </div>                                      
            </div><!-- panel -->
                
                
        </div><!-- col-md-6 --> 

    </div><!--row -->   
</div>
@endsection