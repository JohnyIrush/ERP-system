@extends('layouts.app');

@section('content')
 <div class="container">
    <div class="mainpanel">
        <div class="pageheader">
            <div class="media">
                <div class="pageicon pull-left">
                    <i class="fa fa-mortar-board"></i>
                </div>
                <div class="media-body">
                    <ul class="breadcrumb">
                        <li><i class="fa fa-mortar-board"></i></li>
                        <li>School Settings</li>
                    </ul>
                    <h4>School Settings</h4>
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->
        
        <div class="contentpanel">
            
            <div class="row" style="background:url('images/back.png');">
               <div class="col-md-3">
               </div>

                <!--edit school-->
                <div class="col-md-6">
                    
                    <div class="panel panel-default">
                    <form id="">
                        <div class="panel-heading">
                            <div class="panel-btns">
                                <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                            </div><!-- panel-btns -->
                            <h4 class="panel-title">School Settings</h4>
                        </div><!-- panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                               <div class="form-group">
                                        <label class="col-sm-3 control-label">School Name: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="sname" value="HGM TINGANGA SECONDARY SCHOOL" class="form-control" id="name" placeholder="e.g. ELIMUSYNCH HIGH SCHOOL" maxlength="50">
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">School Address: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" value=" P.O. BOX 2262 00900 KIAMBU" name="saddress" class="form-control" id="address" placeholder="e.g. P.O BOX 1234 KWALE" maxlength="50">
                                        </div>
                                    </div><!-- form-group -->

                                    <!--streams will be loaded here-->
                                  
                                        
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">School Phone: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" value="0775-334-714" name="sphone" class="form-control" id="phone" placeholder="e.g. +254700000000" maxlength="50">
                                        </div>
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Water Mark: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" value="HGM TINGANGA" name="swatermark" class="form-control" id="watermark" placeholder="elimusynch" maxlength="50">
                                        </div>
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Link: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" value="http://elimusynch.com/hgm" name="slink" class="form-control" id="phone" readonly="" maxlength="50">
                                        </div>
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">SMS Id: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" value="TECHNOGURU" name="ssmsid" class="form-control" id="phone" readonly="" maxlength="50">
                                        </div>
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">API KEY: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" value="6d8c3146e8aa4b3b82443c9d4b79d51485525119" name="sapikey" class="form-control" id="phone" readonly="" maxlength="50">
                                        </div>
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Username: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" value="duncan" name="susername" class="form-control" id="phone" readonly="" maxlength="50">
                                        </div>
                                    </div><!-- form-group -->
                                    
                                   
                                    
                                

                                

                            </div><!-- row -->
                        </div><!-- panel-body -->
                        </form>
                          <div class="form-group">
                                        <label class="col-sm-3 control-label">Signature: <span class="asterisk">*</span></label>
                                        <div style="height: 230px;" class="col-sm-9">
                                            <div id="signature-pad" class="signature-pad">
<div class="signature-pad--body">
<canvas width="340" style="touch-action: none;" height="138"></canvas>
</div>
<div class="signature-pad--footer">
<div class="description">Sign above</div>

<div class="signature-pad--actions">
<div>
<button type="button" class="btn-danger" data-action="clear">Clear</button>

<button type="button" class="btn-info" data-action="undo">Undo</button>

</div>
<div>
<div style="display:none" class="form-group">
                       <div id="results"></div>
                                
<button type="button" class="button" data-action="change-color">Change color</button>
<button type="button" class="button save" data-action="save-jpg">Save as JPG</button>
<button type="button" class="button save" data-action="save-svg">Save as SVG</button>
</div><!-- form-group -->
<button type="button" class="btn-primary" data-action="save-png">Save</button>
</div>
</div>
</div>
</div>
                                        </div>
                                    </div><!-- form-group -->
                        <div class="panel-footer">
                          <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <div id="commedt123"></div>
                                <button class="btn btn-primary mr5" id="btnaddadmno">Edit Record</button>
                                <button type="reset" class="btn btn-dark">Clear</button>
                            </div>
                          </div>
                        </div><!-- panel-footer -->  
                    </div><!-- panel -->
                    
                    
                </div><!-- col-md-6 -->


            </div><!--row -->
                 </div><!-- contentpanel -->
        
    </div>
 </div>
@endsection