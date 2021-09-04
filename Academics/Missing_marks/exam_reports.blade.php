@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-paperclip"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-paperclip"></i></li>
                            <li>Student Result</li>
                        </ul>
                        <h4>Student Result </h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');">
                   <div class="col-md-3">
                   </div>
                          <form action="" method="post">
                    <!--edit school-->
                    <div class="col-md-15">
                       
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-btns">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                </div>
                                
                                <!-- panel-btns -->
                                                                        
                                   <h4 class="panel-title">2021-   Missing Entry For 3 Term 3 </h4> 
                                
                                                                    </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                
                                 
                                                                                    
                                            
                                            
                                            <!---Begin  CAT  Term Class Form 3 and 4 Result-->
                                            
                                    
                               
                               <div class="col-md-15">
                                        <div class="table-responsive">
                                            <table class="table table-primary mb30" align="center">
                                                <thead>
                                                  <tr>
                                            <th>Subjects</th>
                                            
                                            
                                              <th>UNITY | Teacher</th><th>PEACE | Teacher</th>													
                                            
                                        <th>Total</th>
                                            
                                            
                                            </tr>
                                             </thead>
                                            
                                            
                                                                
                                    
                                                    
                                                     
                                                    <tbody><tr> <td>Eng</td><td>34/0 | Mrs.MS. </td><td>40/0 | Mr.MACHIRA</td><td>74/0</td>
                                                    </tr>
                                                    <tr> <td>Kis</td><td>34/0 | Mr.GICHOHI</td><td>40/0 | Mr.SIMON </td><td>74/0</td>
                                                    </tr>
                                                    <tr> <td>Mat</td><td>34/0 | Mrs.MRS</td><td>40/0 | Mrs.MS. </td><td>74/0</td>
                                                    </tr>
                                                    <tr> <td>Bio</td><td>34/0 | Mrs.MUGIIRA</td><td>40/0 | Mrs.MRS</td><td>74/0</td>
                                                    </tr>
                                                    <tr> <td>Phy</td><td>0/0</td><td>0/0</td><td>0/0</td>
                                                    </tr>
                                                    <tr> <td>Che</td><td>34/0 | Mr.CHEGE</td><td>40/0 | Mrs.S M</td><td>74/0</td>
                                                    </tr>
                                                    <tr> <td>His</td><td>25/0 | Mr.SIMON </td><td>32/0 | Mr.SIMON </td><td>57/0</td>
                                                    </tr>
                                                    <tr> <td>Geo</td><td>10/0 | Mr.H</td><td>8/0 | Mr.H</td><td>18/0</td>
                                                    </tr>
                                                    <tr> <td>Cre</td><td>0/0 | Mrs.KIBET</td><td>0/0 | Mrs.KIBET</td><td>0/0</td>
                                                    </tr>
                                                    <tr> <td>Agr</td><td>0/0 | Mr.MR.</td><td>39/0 | Mrs.M</td><td>39/0</td>
                                                    </tr>
                                                    <tr> <td>Bus</td><td>33/0 | Mr.DENNIS</td><td>0/0</td><td>33/0</td>
                                                    </tr>															
                                                    
                                            
                                            
                                        </tbody></table>
                                  
                                     
                                        

                                  </div><!-- row -->   

                                </div><!-- row -->
                                  
                                     
                                  <div class="col-md-12">
                         <div class="clearfix">
                        <div class="btn-group">
                         <a href="smsprogress.php?rtype=1&amp;ts=3&amp;etype=comb&amp;year=2021&amp;classex=3" class="btn btn-primary">
                            SMS To Teachers <i class="fa fa-envelope"></i>
                        </a>
                         
                           
                        </div>
                      
                    </div>
                     </div>
                            
                                  <!---End  CAT Term Class form 3 and 4 Result-->
                                    
                                        
                                        
                                        
                                        
                                        
                                                                                 
                                
                                
                                
                                
                                 
                                                                        
                                
                            </div><!-- panel-body -->
                        
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <div id="edtschcomm"></div>
                                </div>
                              </div>
                            </div><!-- panel-footer -->  
                        </div><!-- panel -->
                        
                        
                    </div><!-- col-md-6 -->
                        


                </div></form><!--row -->
                  </div><!-- contentpanel -->
            
        </div><!-- mainpanel -->
    </div>
    </div>
@endsection