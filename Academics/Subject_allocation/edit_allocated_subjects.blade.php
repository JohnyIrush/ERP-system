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
                            <li>Subject Allocation</li>
                        </ul>
                        <h4>EDIT SUBJECT ALLOCATED TO PAULINE NJERI MBOO  Form Two   PEACE  </h4>
                        <p></p>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                    <div class="clearfix">
                        <div class="btn-group">
                         <a href="addsubject.php?studid=481" data-toggle="modal" class="btn btn-primary">
                            Add New Subject <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>
                     
                    </div>

                    <!--edit school-->
                    <div class="col-md-15">
                       <p></p><div class="col-md-15">
                                    <div class="table-responsive">
                                      <br><br>
                            
                                        <table class="table table-primary mb30" align="center">
                                            <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Subject Name</th>
                                                <th>Subject Category</th>
                                                  <th>Change</th>
                                                   <th>Delete</th>
                                                
                                              </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div><!-- table-responsive -->
                                </div><p style="color:green;font-weight:bold;text-align:center;">Student has not been allocated subject.</p>                                      
                    </div><!-- panel -->
                        
                        
                </div><!-- col-md-6 --> 

            </div><!--row -->
        </div>
    </div>
@endsection