@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-certificate"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-certificate"></i></li>
                            <li>Compile Result</li>
                        </ul>
                        <h4>Compile Result</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');">
                   <div class="col-md-3">
                   </div>

                    <!--edit school-->
                    <div class="col-md-6">
                        <form id="sub" method="post" action="">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-btns">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">Compile Result</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                                                        
                                 <div class="form-group">
                                        <label class="col-sm-3 control-label">Term: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input readonly="readonly" type="text" name="fruits" class="form-control" id="fruitss" placeholder="e.g. 1" required="required" maxlength="50" value="">
                                        </div>
                                    </div><!-- form-group -->
                                    
                                 <!--<div class="form-group">
                                        <label class="col-sm-3 control-label">Class <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly="readonly" value="" name="itemname" class="form-control"    maxlength="50" />
                                            <input type="hidden"  value="" id="sclass"/>
                                        </div>
                                    </div> form-group -->
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Class</label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_sclass" title=""><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-20">Form Four</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen20" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-20" id="s2id_autogen20"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen20_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-20" id="s2id_autogen20_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-20">   </ul></div></div><select id="sclass" data-placeholder="Choose One" name="itemname" class="width100p select2-offscreen" required="" title="" tabindex="-1">
                                             <option value="">SELECT CLASS</option>
                                                                <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>                                                    </select>
                                          </div>
                                        </div><!-- form-group -->
                                        <div id="lodStream">



                                          <div class="form-group">
                                       
                                        <label class="col-sm-3 control-label">Stream</label>
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_stream"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-21">PEACE</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen21" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-21" id="s2id_autogen21"></div><select id="stream" name="stream" data-placeholder="Select Stream" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                 <option value="">SELECT STREAM</option>
                                               <option value="4">UNITY</option><option value="8">PEACE</option>                                                    </select>
                                          </div>
                                        </div><!-- form-group -->
                                    
                                       
                                        
                                        
                                                    <script>
     jQuery(document).ready(function(){
      
        // Basic Form
        jQuery("#basicForm").validate({
            highlight: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-error');
            }
        });
      
        // Error Message In One Container
        jQuery("#basicForm2").validate({
            errorLabelContainer: jQuery("#basicForm2 div.errorForm")
        });
      
        // With Checkboxes and Radio Buttons
        
        jQuery('#genderError').attr('for','gender');
        jQuery('#intError').attr('for','int[]');
        
        jQuery("#basicForm3").validate({
            highlight: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-error');
            }
        });
        
        jQuery("#basicForm4").validate({
            highlight: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-error');
            },
            ignore: null
        });
        
        // Validation with select boxes
        jQuery("#sclass,#stream,#stream").select2({
            minimumResultsForSearch: -1
        });
      
    });
  
</script>			
                
        




        
                                            
                                                
                                           </div>
                                        
                                        
                                    <!--<div class="form-group">
                                        <label class="col-sm-3 control-label">Steam: <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly="readonly" value="" name="itemname" class="form-control"   maxlength="50" />
                                             <input type="hidden"  value="" id="stream"/>
                                        </div>
                                    </div> form-group -->
                                
                                    
                                    
                                  
                                          
                                         <div class="form-group">
                                        <label class="col-sm-3 control-label">Subject <span class="asterisk">*</span></label>
                                        
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_exam"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">Biology</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"></div><select id="exam" data-placeholder="Choose Subject" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                              
                                                            <option value="">SELECT SUBJECT</option>
                                                            
                                                             <option value="1">Mathematics</option><option value="2">Physics</option><option value="3">Biology</option><option value="4">Chemistry</option><option value="5">History </option><option value="6">Cre</option><option value="7">English</option><option value="8">Kiswahili</option><option value="9">Business Studies</option><option value="10">Agriculture</option><option value="11">Geography</option>                                                                   
                                                
                                            </select>
                                          </div>
                                        </div><!-- form-group -->
                                        
                                         
                                        
                                       </div>

                                       

                                      

                                          
                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            </form>
                            <div class="panel-footer">
                              <div class="row">
                              <div id="addmrkscomm" style="text-align:center"></div>
                                <div class="col-sm-9 col-sm-offset-3">
                                    
                                    <button class="btn btn-primary mr5" id="btnaddmarks">Load Exam To Compile </button>
                                    
                                </div>
                              </div>
                            </div><!-- panel-footer -->  
                        </div><!-- panel -->
                        
                        
                    </div><!-- col-md-6 -->


                </div><!--row -->
                     
            </div>
    </div>
@endsection