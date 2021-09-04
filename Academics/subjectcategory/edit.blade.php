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
                            <li><i class="fa fa-fa fa-pencil-square-o"></i></li>
                            <li>Edit Subject Category</li>
                        </ul>
                        <h4>Edit Subject Category</h4>
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
                                <div class="panel-btns" style="display: none;">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">Edit Subject Category</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">  
                                    <div id="addreqcomm" style="text-align:center"></div>                                         
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Category Name <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="itemname" class="form-control" id="catname" placeholder="e.g. Teaching Staff" maxlength="50" value="Technical">
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Category Description <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea rows="5" class="form-control" id="catdescription" placeholder="e.g. These are teachers employed by both TSC and board" maxlength="150">Business Studies, French, Agriculture, German, </textarea>
                                        </div>
                                    </div><!-- form-group -->                                      
                                        

                                </div><!-- row -->
                            </div><!-- panel-body -->

                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">                                            
                                    <button class="btn btn-primary mr5" id="btnaddreqs">Edit Category</button>
                                </div>
                              </div>
                            </div><!-- panel-footer -->  
                        </div><!-- panel -->

                        </form>
                            
                        
                        
                        
                    </div><!-- col-md-6 -->


                </div><!--row -->
  
            </div><!-- contentpanel -->
            
        </div>
    </div>
@endsection