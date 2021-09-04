@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-pencil"></i></li>
                            <li>Edit Subjects</li>
                        </ul>
                        <h4>Edit Subjects</h4>
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
                                <h4 class="panel-title">Edit Subject</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div id="addstdcomm" style="text-align:center;"></div>

                                    <div class="form-group">                                               
                                    <label class="col-sm-3 control-label">Category</label>
                                    <div class="col-sm-9">
                                        <div class="select2-container width100p" id="s2id_fruits"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">Humanities</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select id="fruits" name="category" data-placeholder="Choose One" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                            <option value="1">Compulsory</option><option value="2">Science</option><option value="3" selected="">Humanities</option><option value="4">Technical</option>                                                       
                                        </select>
                                      </div>
                                    </div><!-- form-group --> 

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Subject Name <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="subjectname" class="form-control" id="subjectname" placeholder="e.g. English" maxlength="50" value="History ">
                                        </div>
                                    </div><!-- form-group -->
                                                                              
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Description <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea rows="5" class="form-control" id="subjectdescription" placeholder="e.g. This is a compulsory language subject" maxlength="300">This is an optional subject </textarea>
                                        </div>
                                    </div><!-- form-group -->
                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">                                            
                                    <button class="btn btn-primary mr5" id="btnaddexam">Edit Subject</button>
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