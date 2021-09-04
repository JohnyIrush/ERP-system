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
                        <p></p>
                        <h4>Set Configurations</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');">
                   <div class="col-md-2">
                   </div>

                    <!--edit school-->
                    <div class="col-md-8">
                        <form id="">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-btns" style="display: none;">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">Configurations</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                            <div id="addstdcomm" style="text-align:center;"></div>
                            
                                <div class="row">
                                    
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">TOTAL SUBJECTS  FOR 1ST SELECTION  <span class="asterisk">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" name="firstselection" class="form-control" id="firstselection" placeholder="e.g. 11" value="11" maxlength="50" required="required">
                                        </div>
                                    </div><!-- form-group -->
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">2ND SELECTION GRADING <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-8">
                                            <div class="select2-container width100p" id="s2id_gradingmode"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">USE POINTS</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select id="gradingmode" data-placeholder="Choose Exam type" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                               <option value="2">USE POINTS</option>
                                                            <option value="1">USE MARKS </option>
                                                            <option value="2">USE POINTS</option>
                        
                                                            
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                         <div class="form-group">
                                        <label class="col-sm-4 control-label">REPORT CARD TEMPLATE <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-8">
                                            <div class="select2-container width100p" id="s2id_template"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">ALL EXAMS CONVERTED TO PERCENTAGE</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select id="template" data-placeholder="Choose Exam type" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                               <option value="1">ALL EXAMS CONVERTED TO PERCENTAGE</option>
                                                            <option value="1">ALL EXAMS CONVERTED TO PERCENTAGE </option>
                                                            <option value="2">CATS USES RAW MARKS THEN FINAL USES PERCENTAGE</option>
                                                            
                                                            
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                         <div class="form-group">
                                        <label class="col-sm-4 control-label">TYPE OF SCHOOL GENDER <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-8">
                                            <div class="select2-container width100p" id="s2id_gender"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-3"> MIXED GENDER SCHOOL</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen3" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-3" id="s2id_autogen3"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen3_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-3" id="s2id_autogen3_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-3">   </ul></div></div><select id="gender" data-placeholder="Choose Exam type" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                               <option value="1"> MIXED GENDER SCHOOL</option>
                                                            <option value="1">MIXED GENDER </option>
                                                            <option value="2">SINGLE GENDER</option>
                                                            
                                                            
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                         <div class="form-group">
                                        <label class="col-sm-4 control-label">FEES BALANCE ON REPORT CARD <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-8">
                                            <div class="select2-container width100p" id="s2id_finance"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">YES </span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-4">   </ul></div></div><select id="finance" data-placeholder="Choose Exam type" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                               <option value="1">YES </option>
                                                            <option value="1">YES </option>
                                                            <option value="2">NO</option>
                                                            
                                                            
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                      

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">                                            
                                    <button class="btn btn-primary mr5" id="btnaddexam">Add/Update Record</button>
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