@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-plus-square-o"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-plus-square-o"></i></li>
                            <li>Add Stream</li>
                        </ul>
                        <h4>Add Stream</h4>
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
                                <h4 class="panel-title">Add New Stream</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <div class="pull-left">
                                                <div class="ckbox ckbox-primary mt10">
                                                    <input type="checkbox" id="streamoption" checked="">
                                                    <label for="streamoption">Add to All Classes</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div id="commedt123"></div>

                                        <div id="classselected" style="display:none">
                                        <label class="col-sm-3 control-label">Class</label>
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_fruits"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">Form One </span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select id="fruits" data-placeholder="Choose One" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>                                                    </select>
                                          </div>
                                        </div>
                                          
                                        </div><!-- form-group -->


                                        
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Stream Name <span class="asterisk">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="streamname" class="form-control" id="streamname" placeholder="e.g Green" maxlength="50">
                                            </div>
                                        </div><!-- form-group -->
                                        

                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <div id="edtschcomm"></div>
                                    <button class="btn btn-primary mr5" id="btnaddstream">Add Stream</button>
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