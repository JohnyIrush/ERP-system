@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-calculator"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-calculator"></i></li>
                            <li>Set Remarks</li>
                        </ul>
                        <h4>Set Remarks</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');">
                   <div class="col-md-3">
                   </div>

                    <!--edit school-->
                    <div class="col-md-6">
                        <form id="" method="post" action="">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-btns" style="display: none;">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">Set Remarks</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">                                            
                                        

                                        

                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">A<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">A-<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">B+<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">B<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">B-<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">C+<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">C<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">C-<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">D+<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">D<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">D-<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">E<br> </label>
                                                                <div class="col-sm-9">
                                                                <input type="hidden" name="subid[]" value="">
                                                                    <input type="text" name="remarks[]" class="form-control grademarks" value="">
                                                                </div>
                                                            </div><!-- form-group -->                                                

                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <div id="setgradescomm"></div>
                                    <button class="btn btn-primary mr5" id="btnsetgrades">Update Remarks</button>
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