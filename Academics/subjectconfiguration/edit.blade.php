@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-pencil-square"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-pencil-square"></i></li>
                            <li>Edit Term Configuration</li>
                        </ul>
                        <h4>Edit Term Configuration</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                   
<div class="clearfix">
                        <!--<div class="btn-group">
                           <a href="addsubjects.php"  class="btn btn-primary">
                            Add New Subject <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>-->
                        
                    </div>
                    <!--edit school-->
                    <div class="col-md-15">

                      

                            <div class="col-md-15">
                         
                    
                    <div>
                                            <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                               
                                <h4 class="modal-title">Edit Term Configurations</h4>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal ">
                                  
                             
                                 
                               

                                
                            
                            
                               
                              
                                
                                
                                 
                                  <div class="form-group">
                                    <label class="control-label col-md-4">From:</label>
                                    <div class="col-md-6 col-xs-11">

                                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">
                                            <input type="text" required="" name="from" readonly="" value="2015-01-05" size="16" class="form-control">
                                                  <span class="input-group-btn add-on">
                                                    <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>
                                                  </span>
                                        </div>
                                      
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-4">To:</label>
                                    <div class="col-md-6 col-xs-11">

                                        <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2021-09-03" class="input-append date dpYears">
                                            <input type="text" required="" name="to" readonly="" value="2015-04-23" size="16" class="form-control">
                                                  <span class="input-group-btn add-on">
                                                    <button class="btn btn-success" type="button"><i class="fa fa-calendar"></i></button>
                                                  </span>
                                        </div>
                                      
                                    </div>
                                </div>
                               
                                
                            
                                
                            
                            
                            
                                
                                
                                 <button type="submit" name="member" class="btn btn-default">Edit Term</button>
                                
                              
                                </form>
                                 
                                
                           
                               
                            </div>
                        </div>
                    </div>
                    
                                                                             </div>
                
                              
                    </div><!-- panel -->
                        
                        
                </div><!-- col-md-6 --> 

            </div><!--row -->    

        </div><!-- contentpanel -->
            
    </div>
    </div>
@endsection