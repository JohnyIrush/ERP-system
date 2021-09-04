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
                       <p></p>
                        <h4>Academics Configurations</h4>
                        
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                   
<div class="btn-group">
                           <a href="addacademicconfig.php" class="btn btn-primary">
                            Set Configuration <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>
                    <!--edit school-->
                    <div class="col-md-15">
                       <p></p><div class="col-md-15">
                                    <div class="table-responsive">
                                        <table class="table table-primary mb30" align="center">
                                            <thead>
                                              <tr>
                                                <th>NoOfSubjects1st Selection</th>
                                                <th>Fees Balance To Show</th>
                                                <th>Report Card Template</th>
                                                <th>School Gender</th>
                                                <th>Grading Mode 2nd Selection</th>
                                                
                                                 
                                                
                                              </tr>
                                            </thead>
                                            <tbody><tr>
                                    <td>11.</td>
                                    <td>YES</td>
                                    <td>ALL MARKS CONVERTED TO PERCENTAGE</td>
                                    
                                   
                                    <td>MIXED SCHOOL</td>
                                    
                                    
                                    <td>USE POINTS</td>
                                    
                                 
                                  
                                   
                                  </tr></tbody>
                                        </table>
                                    </div><!-- table-responsive -->
                                </div>                                      
                    </div><!-- panel -->
                        
                        
                </div><!-- col-md-6 --> 

            </div><!--row -->

                          </div>
    </div>
@endsection