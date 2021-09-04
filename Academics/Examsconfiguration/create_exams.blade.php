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
                            <li>Add Exams</li>
                        </ul>
                        <h4>Add Exams</h4>
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
                                <h4 class="panel-title">Add New Exam</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                            <div id="addstdcomm" style="text-align:center;"></div>
                            <div class="form-group">
                                        <label class="col-sm-3 control-label">Term: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_fruitss"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">TERM NOT SET </span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select id="fruitss" name="term" data-placeholder="Choose Term" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                
                                                          <option value="">TERM NOT SET </option>
                                                            

                                                                                                                      
                        
                                                            
                                            </select>



                                            <!--<input readonly="readonly" type="text" name="term" class="form-control" id="fruitss" placeholder="e.g. Magazines" required="required" maxlength="50" value=""/>-->
                                        </div>
                                    </div><!-- form-group -->
                                <div class="row">
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Exam Name <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="examname" class="form-control" id="examname" placeholder="e.g. CAT ONE" maxlength="50" required="required">
                                        </div>
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Compilation Mode <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_flowers"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">SELECT EXAM TYPE</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select id="flowers" data-placeholder="Choose Exam type" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                               <option value="">SELECT EXAM TYPE</option>
                                                            <option value="1">BY PERCENTAGE </option>
                                                            <option value="2">AVERAGE</option>
                        
                                                            
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                         <div class="form-group">
                                        <label class="col-sm-3 control-label">Use Endterm <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_fruits"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-3">SELECT IF USED</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen3_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-3">   </ul></div></div><select id="fruits" data-placeholder="Choose Exam type" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                               <option value="">SELECT IF USED</option>
                                                            <option value="1">YES </option>
                                                            <option value="2">NO</option>
                                                            
                                                            
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                        <div id="lodpercentage"></div>
                                        
                                        <label class="col-sm-3 control-label">Options <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="rdio rdio-primary">
                                            <input type="radio" id="allclasses" value="1" name="option" checked="">
                                            <label for="allclasses">All Classes</label>
                                        </div><!-- rdio -->
                                        <div class="rdio rdio-primary">
                                            <input type="radio" id="specificclass" value="2" name="option">
                                            <label for="specificclass">Specific Classes</label>
                                        </div><!-- rdio -->
                                       
                                        <label id="genderError" class="error" for="gender"></label>
                                    </div>
                                     <div id="selectedparents" style="display:none;">
                                        <div class="form-group">  
                                        
                                        <div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-9">
                    <div class="pull-left">
                        <div class="ckbox ckbox-primary mt10">
                            <input type="checkbox" class="staffids" id="1">
                            <label for="1">Form One </label>
                        </div>
                    </div>
                </div>
            </div><!-- form-group --><div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-9">
                    <div class="pull-left">
                        <div class="ckbox ckbox-primary mt10">
                            <input type="checkbox" class="staffids" id="2">
                            <label for="2">Form Two</label>
                        </div>
                    </div>
                </div>
            </div><!-- form-group --><div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-9">
                    <div class="pull-left">
                        <div class="ckbox ckbox-primary mt10">
                            <input type="checkbox" class="staffids" id="3">
                            <label for="3">Form Three</label>
                        </div>
                    </div>
                </div>
            </div><!-- form-group --><div class="form-group">
                <label class="col-sm-3 control-label"></label>
                <div class="col-sm-9">
                    <div class="pull-left">
                        <div class="ckbox ckbox-primary mt10">
                            <input type="checkbox" class="staffids" id="4">
                            <label for="4">Form Four</label>
                        </div>
                    </div>
                </div>
            </div><!-- form-group -->                                              
                                      
                                        </div><!-- form-group -->
                                        
                                        
                                        
                                        
                                    </div><!-- row -->
                                        
                                       
                                                                              
                                    
                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">                                            
                                    <button class="btn btn-primary mr5" id="btnaddexam">Add Exam</button>
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