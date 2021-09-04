@extends('layouts.app');

@section('content')
 <div class="container">
    <div class="mainpanel">
        <div class="pageheader">
            <div class="media">
                <div class="pageicon pull-left">
                    <i class="fa fa-male"></i>
                </div>
                <div class="media-body">
                    <ul class="breadcrumb">
                        <li><i class="fa fa-male"></i></li>
                        <li>Add Parent</li>
                    </ul>
                    <h4>Add Parent</h4>
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->
        
        <div class="contentpanel">
            

            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    @include('Students.add_gurdian_form')
                </div>
              </div>
            <div class="row" style="background:url('images/back.png');">
               <div class="col-md-3">
               </div>

                <!--edit school-->
                <div class="col-md-6">
                    <form id="" method="post" action="" enctype="multipart/form-data">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-btns">
                                <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                            </div><!-- panel-btns -->
                            <h4 class="panel-title">Add Student's Parent</h4>
                        </div><!-- panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Search <span class="asterisk"></span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control searchs" id="searchbox" maxlength="50" style="color: rgb(0, 0, 0);">
                                    </div>
                                </div><!-- form-group -->
                                <div id="display"></div>

                                <div id="myresult"></div>

                            </div><!-- row -->
                        </div><!-- panel-body -->
                       
                        <div class="panel-footer">
                        <div id="addstfcomm" style="text-align:center"></div>
                          <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">                                            
                                <button class="btn btn-primary mr5" name="btnaddparent">Save Record</button>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> New Parent</button>
                                 <button type="reset" class="btn btn-dark">Clear</button>
                            </div>
                          </div>
                        </div><!-- panel-footer -->  
                         
                    </div></form><!-- panel -->
                                                        
                </div><!-- col-md-6 -->


            </div><!--row --> 
        </div><!-- contentpanel -->
        
    </div>
    
 </div>

@endsection