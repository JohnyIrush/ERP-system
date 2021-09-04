@extends('layouts.app')

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
            
            <div class="row" style="background:url('images/back.png');">
               <div class="col-md-3">
               </div>

               <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                </div>
              </div>

                <!--edit school-->
                <div class="col-md-6">
                    <form id="" method="post" action="" enctype="multipart/form-data">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-btns" style="display: none;">
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

                                <div id="myresult"><div class="form-group"><input name="status" value="new" type="hidden"><label class="col-sm-3 control-label">First Name <span class="asterisk">*</span></label><div class="col-sm-9"> <input type="hidden" name="cid"><input type="text" name="fname" class="form-control" id="lname" placeholder="e.g. Joseph" maxlength="50"> </div></div><!-- form-group --><div class="form-group"><label class="col-sm-3 control-label">Last Name <span class="asterisk">*</span></label><div class="col-sm-9"> <input type="text" name="lname" class="form-control" id="lname" placeholder="e.g. Kuria" maxlength="50"> </div></div><!-- form-group --><div class="form-group"><label class="col-sm-3 control-label">Other Names <span class="asterisk">*</span></label><div class="col-sm-9"> <input type="text" name="onames" class="form-control" id="onames" placeholder="e.g. Juma" maxlength="50"> </div></div><!-- form-group --><div class="form-group"><label class="col-sm-3 control-label">Id/Passport N <span class="asterisk">*</span></label><div class="col-sm-9"> <input type="text" name="idpassno" class="form-control" id="idpassno" placeholder="e.g. Kuria" maxlength="50"> </div></div><!-- form-group --><div class="form-group"><label class="col-sm-3 control-label">Email <span class="asterisk">*</span></label><div class="col-sm-9"> <input type="email" name="email" class="form-control" id="email" placeholder="e.g. admin@gmail.com" maxlength="50"> </div></div><!-- form-group --><label class="col-sm-3 control-label">Gender <span class="asterisk">*</span></label><div class="col-sm-9"><div class="rdio rdio-primary"><input type="radio" id="male" value="1" name="gender" checked=""><label for="male">Male</label></div><!-- rdio --><div class="rdio rdio-primary"><input type="radio" id="female" value="2" name="gender"><label for="female">Female</label></div><!-- rdio --><label id="genderError" class="error"></label></div><div class="form-group"><label class="col-sm-3 control-label">Phone Number <span class="asterisk">*</span></label><div class="col-sm-9"><input type="text" name="phoneno" class="form-control" id="phoneno" placeholder="e.g +07xxxxxxxx" maxlength="15"></div></div><!-- form-group --> <div class="form-group" id="thcntcs"><label class="col-sm-3 control-label" id="contcslabel">Phyisical Address <span class="asterisk">*</span></label><div class="col-sm-9"><textarea rows="5" class="form-control" name="address" id="address" placeholder="e.g. Easy Life Apartments, Airport North road, Embakasi - Nairobi, Kenya" maxlength="300"></textarea> <div id="cntcomm"></div></div></div><!-- form-group --><div class="form-group"> <label class="col-sm-3 control-label">Occupation <span class="asterisk">*</span></label><div class="col-sm-9"><input type="text" name="occupation" class="form-control" id="occupation" placeholder="e.g Farmer" maxlength="50"></div></div><!-- form-group --><div class="form-group"> <label class="col-sm-3 control-label">Avatar <span class="asterisk">*</span></label><div class="col-sm-9"><input type="file" name="file" class="form-control" id="file" maxlength="50"></div></div><!-- form-group --></div>

                            </div><!-- row -->
                        </div><!-- panel-body -->
                       
                        <div class="panel-footer">
                        <div id="addstfcomm" style="text-align:center"></div>
                          <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">                                            
                                <button class="btn btn-primary mr5" name="btnaddparent">Save Record</button>
                                <button class="btn btn-primary mr5" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">New Parent</button>
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