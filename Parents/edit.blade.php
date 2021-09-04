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
                            <li>Edit Parent</li>
                        </ul>
                        <h4>Edit Parent</h4>
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
                                <h4 class="panel-title">Edit Parent</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">                                              

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">First Name <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fname" class="form-control" id="fname" placeholder="e.g. Komba" maxlength="50" value="DAMARIS">
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Last Name <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="lname" class="form-control" id="lname" placeholder="e.g. Joseph" maxlength="50" value="WANGARE">
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Other Names <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="onames" class="form-control" id="onames" placeholder="e.g. Esitsakha" maxlength="50" value="">
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">ID/Passport No <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="idpassno" class="form-control" id="idpassno" placeholder="e.g. 21246783" maxlength="8" value="0">
                                        </div>
                                    </div><!-- form-group -->

                                    <label class="col-sm-3 control-label">Gender <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="rdio rdio-primary">
                                            <input type="radio" id="male" value="1" name="gender">
                                            <label for="male">Male</label>
                                        </div><!-- rdio -->
                                        <div class="rdio rdio-primary">
                                            <input type="radio" id="female" value="2" name="gender" checked="">
                                            <label for="female">Female</label>
                                        </div><!-- rdio -->
                                        <label id="genderError" class="error" for="gender"></label>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Phone Number <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="phoneno" class="form-control" id="phoneno" placeholder="e.g +2547xxxxxxxx" maxlength="13" value="+254792742064">
                                        </div>
                                    </div><!-- form-group -->
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Other Contacts <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea rows="5" class="form-control" id="othercontacts" placeholder="e.g. joseph@gmail.com" maxlength="300"></textarea>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group" id="thcntcs">
                                        <label class="col-sm-3 control-label" id="contcslabel">Phyisical Address <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea rows="5" class="form-control" id="address" placeholder="e.g. Easy Life Apartments, Airport North road, Embakasi - Nairobi, Kenya" maxlength="300"></textarea>
                                            <div id="cntcomm"></div>
                                        </div>                                                
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Occupation <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="occupation" class="form-control" id="occupation" placeholder="e.g Farmer" maxlength="50" value="">
                                        </div>
                                    </div><!-- form-group -->

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                                <div id="addstfcomm" style="text-align:center"></div>
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">                                            
                                    <button class="btn btn-primary mr5" id="btnaddparent">Edit Parent</button>
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