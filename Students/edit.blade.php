@extends('layouts.app');

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
                        <li>Edit Student</li>
                    </ul>
                    <h4>Edit Student</h4>
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->
        
        <div class="contentpanel">
            
            <div class="row" style="background:url('images/back.png');background-repeat:repeat-y;">
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
                            <h4 class="panel-title">Edit Student</h4>
                        </div><!-- panel-heading -->
                        <div class="panel-body">
                            <div class="row">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">First Name <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="e.g. Komba" maxlength="50" value="PAULINE">
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Last Name <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="e.g. Joseph" maxlength="50" value="NJERI">
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Other Names <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="onames" class="form-control" id="onames" placeholder="e.g. Esitsakha" maxlength="50" value="MBOO">
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Adm No <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="admno" class="form-control" id="admno" placeholder="e.g. 2039" maxlength="10" value="570">
                                    </div>
                                </div><!-- form-group -->
                                
                                    <div class="form-group">
                                    <label class="col-sm-3 control-label">Class</label>
                                    <div class="col-sm-9">
                                        <select id="fruits2" data-placeholder="Choose One" class="width100p form-control" required="">
                                        <option value="2">Form Two</option>
                                           <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>                                                    </select>
                                      </div>
                                    </div><!-- form-group -->
                                    <div id="loadstream">
                                         <div class="form-group">
                                    <label class="col-sm-3 control-label">Stream</label>
                                    <div class="col-sm-9">
                                        <select id="stream" data-placeholder="Choose One" class="width100p form-control" required="">
                                        <option value="6">PEACE</option>
                                           <option value="2">UNITY</option><option value="6">PEACE</option>                                                    </select>
                                      </div>
                                    </div><!-- form-group -->
                                    </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Date of Birth </label>
                                    <div class="col-sm-9">
                                        <input type="date" name="dob" class="form-control" id="dob" placeholder="e.g. 25-12-1988" maxlength="10" value="2005-04-20">
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
                                    <label class="col-sm-3 control-label">Entry Marks <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="marks" class="form-control" id="marks" placeholder="e.g 385" maxlength="3" value="181">
                                    </div>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Boarder/Dayscholar</label>
                                    <div class="col-sm-9">
                                        <select id="bd" data-placeholder="Choose One" class="width100p form-control" required="">
                                        <option value="0">Dayscholar</option>
                                           
        <option value="0">Dayscholar</option>
                                    <option value="1">Boader</option>
    
                                        </select>
                                      </div>
                                    </div><!-- form-group -->
                              
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Former School <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="primarysch" class="form-control" id="primarysch" placeholder="e.g. Irumbi Primary School" maxlength="50" value="">
                                    </div>
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Parent Contact <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="pcontact" class="form-control" id="pcontact" placeholder="e.g. +2547111111111" maxlength="50" value="+254716918227">
                                    </div>
                                </div><!-- form-group -->
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Contact Person(s) </label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="contactprsn" placeholder="e.g. James (brother): email-james@gmail.com" maxlength="500"></textarea>
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group" id="thcntcs">
                                    <label class="col-sm-3 control-label" id="contcslabel">Phyisical Address (Home)</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="address" placeholder="e.g. Easy Life Apartments, Airport North road, Embakasi - Nairobi, Kenya" maxlength="500"></textarea>
                                        <div id="cntcomm"></div>
                                    </div>                                                
                                </div><!-- form-group -->

                            </div><!-- row -->
                        </div><!-- panel-body -->
                        
                        <div class="panel-footer">
                            <div id="addstdcomm" style="text-align:center"></div>
                          <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">                                            
                                <button class="btn btn-primary mr5" id="btnaddstaff">Edit Student</button>
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