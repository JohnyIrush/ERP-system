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
                            <li>Edit Exams</li>
                        </ul>
                        <h4>Edit Exams</h4>
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
                                <h4 class="panel-title">Edit Exam</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div id="addstdcomm" style="text-align:center;"></div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Exam Name <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="examname" class="form-control" id="examname" placeholder="e.g. CAT 1, Term 1" maxlength="50" value="END OF TERM 3">
                                        </div>
                                    </div><!-- form-group -->
                                                                              
                                   
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Compilation Mode <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_flowers"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">PERCENTAGE</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select id="flowers" data-placeholder="Choose Exam type" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                               <option value="1">PERCENTAGE</option>
                                                        <option value="1">BY PERCENTAGE </option>
                                                            <option value="2">AVERAGE</option>
                                                            
                                                            
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                         <div class="form-group">
                                        <label class="col-sm-3 control-label">Use Endterm <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_fruits"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">YES</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen2_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-2">   </ul></div></div><select id="fruits" data-placeholder="Choose Exam type" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                               <option value="1">YES</option>
                                                            <option value="1">YES </option>
                                                            <option value="2">NO</option>
                                                            
                                                            
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                        <div class="form-group">
                                        <label class="col-sm-3 control-label">EndTerm %</label>
                                        <div class="col-sm-9">
                                            <input required="required" type="number" name="endterm" class="form-control" value="100" id="endterm" placeholder="e.g. 30" min="0" max="100">
                                        </div>
                                    </div><!-- form-group -->
                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">                                            
                                    <button class="btn btn-primary mr5" id="btnaddexam">Edit Exam</button>
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