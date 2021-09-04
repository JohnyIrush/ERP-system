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
                    <li>Edit Class</li>
                </ul>
                <h4>Edit New Class</h4>
            </div>
        </div><!-- media -->
    </div><!-- pageheader -->
    
    <div class="contentpanel">
        
        <div class="row" style="background:url('images/back.png');">
           <div class="col-md-3">
           </div>

            <!--edit school-->
            <div class="col-md-6">
                <form id="">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="panel-btns">
                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                        </div><!-- panel-btns -->
                        <h4 class="panel-title">Edit Class</h4>
                    </div><!-- panel-heading -->
                    <div class="panel-body">
                        <div class="row">
                            <div id="commedt123"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Class Name <span class="asterisk">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="classname" class="form-control" id="classname" placeholder="e.g. Form One" maxlength="50" value="Form One ">
                                </div>
                            </div><!-- form-group -->
                            

                            

                        </div><!-- row -->
                    </div><!-- panel-body -->
                    
                    <div class="panel-footer">
                      <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">                                            
                            <button class="btn btn-primary mr5" id="btnaddclass">Edit Class</button>
                        </div>
                      </div>
                    </div><!-- panel-footer -->  
                </div></form><!-- panel -->
                
                
            </div><!-- col-md-6 -->


        </div><!--row -->   
    </div><!-- contentpanel -->
    
</div>
@endsection