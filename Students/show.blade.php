@extends('layouts.app');

@section('content')
 <div class="container">
    <div class="mainpanel">
        <div class="pageheader">
            <div class="media">
                <div class="pageicon pull-left">
                    <i class="fa fa-image"></i>
                </div>
                <div class="media-body">
                    <ul class="breadcrumb">
                        <li><i class="fa fa-image"></i></li>
                        <li>Student Profile</li>
                    </ul>
                    <h4>PAULINE NJERI MBOO </h4>
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->
        
        <div class="contentpanel">
            
            <div class="row">
                
               <div class="col-md-1">
               </div>

               <div class="col-md-10">
               
                <div align="center">   <img src="images/profile/gender/2.jpg" width="200px" style="border-radius:5px;margin-bottom:10px;">   </div>

                
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-info">
                        <li class="active"><a href="#home6" data-toggle="tab"><strong>Registration Details</strong></a></li>
                        <li><a href="#profile6" data-toggle="tab"><strong>Parent Details</strong></a></li>
                        <li><a href="#about6" data-toggle="tab"><strong>Responsibilities</strong></a></li>
                        <li><a href="#contact6" data-toggle="tab"><strong>Contact Parent</strong></a></li>
                        <li><a href="#issueditems" data-toggle="tab"><strong>Issued Items</strong></a></li>
                        <li><a href="#medicalhistory" data-toggle="tab"><strong>Medical History</strong></a></li>
                        
                    </ul>

                            
                    <!-- Tab panes -->
                    <div class="tab-content tab-content-info mb30">
                        <div class="tab-pane active" id="home6">
                            <h4 class="nomargin"></h4>
                            <table class="table table-striped">
                            <tbody><tr><td><b>Name: </b></td><td style="width:50px;"></td><td>PAULINE NJERI MBOO </td></tr>
                            <tr><td><b>Date of Birth: </b></td><td></td><td>20-04-2005</td></tr>
                            <tr><td><b>Gender: </b></td><td></td><td>Female</td></tr>
                            <tr><td><b>Admission Number: </b></td><td></td><td>570</td></tr>
                            <tr><td><b>Admission Date: </b></td><td></td><td>28-01-2020 at 14:38:14</td></tr>
                            <tr><td><b>Entry Marks: </b></td><td></td><td>181</td></tr>
                            <tr><td><b>Former School: </b></td><td></td><td></td></tr>
                            <tr><td><b>Class Admitted: </b></td><td></td><td>Form One </td></tr>
                            <tr><td><b>Stream Admitted: </b></td><td></td><td>UNITY</td></tr>
                            <tr><td><b>Current Class: </b></td><td></td><td>Form Two</td></tr>
                            <tr><td><b>Current Stream: </b></td><td></td><td>UNITY</td></tr>
                            <tr><td><b>Admission Status: </b></td><td></td><td><b style="color:green;">Admitted</b></td></tr>
                            <tr><td><b>Contact Person: </b></td><td></td><td></td></tr>
                            <tr><td><b>Physical Address: </b></td><td></td><td></td></tr>
                            </tbody></table>
                        </div><!-- tab-pane -->
                      
                        <div class="tab-pane" id="profile6">
                            <h4 class="nomargin"></h4>
                            <table class="table table-striped">
                            <tbody><tr><td><b>Name: </b></td><td style="width:50px;"></td><td>   </td></tr>
                            <tr><td><b>ID/Passport Number: </b></td><td></td><td></td></tr>
                            <tr><td><b>Gender: </b></td><td></td><td>Female</td></tr>
                            <tr><td><b>Phone Number: </b></td><td></td><td></td></tr>
                            <tr><td><b>Other Contacts: </b></td><td></td><td></td></tr>
                            <tr><td><b>Physical Address: </b></td><td></td><td></td></tr>
                            <tr><td><b>Occupation: </b></td><td></td><td></td></tr>
                            </tbody></table>
                        </div><!-- tab-pane -->
                      
                        <div class="tab-pane" id="about6">
                            <table class="table table-striped"><tbody><tr><th>Responsibility</th><th>Description</th></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr></tbody></table>                                    </div><!-- tab-pane -->
                      
                        <div class="tab-pane" id="contact6">
                            <h4 class="nomargin" style="text-align:center;margin-bottom:20px;">Phone Number: </h4>
                            <div id="commsms" style="text-align:center;"></div>
                            <input type="hidden" id="phone" value="">
                            <div class="form-group" id="thcntcs">
                                <label class="col-sm-3 control-label" id="contcslabel">Message<span class="asterisk">*</span></label>
                                <div class="col-sm-9">
                                    <textarea rows="5" class="form-control" id="mesage" required="" maxlength="500"></textarea>
                                    <div id="cntcomm"></div>
                                </div>                                                
                            </div><!-- form-group -->

                            <div class="row">
                            <div class="col-sm-9 col-sm-offset-3" style="padding-bottom:55px">
                                <div id="addstdcomm"></div>
                                <button class="btn btn-primary mr5" id="btnsendmessage">Send Message</button>
                            </div>
                          </div>
                        </div><!-- tab-pane -->

                        <div class="tab-pane" id="issueditems">
                            <p style="color:green;font-weight:bold;text-align:center;">No items have been issued</p>                                    </div><!-- tab-pane -->

                        <div class="tab-pane" id="medicalhistory">
                            <p style="color:green;text-align:center;font-weight:bold;">No medical history record found</p>                                    </div>

                        


                    </div><!-- tab-content -->
                    
                </div><!-- col-md-6 -->



            </div><!--row -->

            

        </div><!-- contentpanel -->
        
    </div>
 </div>
@endsection