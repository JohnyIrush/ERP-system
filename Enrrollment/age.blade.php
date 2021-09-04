@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-plus-square"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-plus-square"></i></li>
                            <li>Enrollment By Age</li>
                        </ul>
                        <h4>Enrollment By Age</h4>
                        
                            
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');background-repeat:repeat-y;">
                   <div class="col-md-3">
                   </div>
<div class="panel-heading">
                                <div class="panel-btns" style="display: none;">
                                 
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                 
                                </div>
                                
                                <!-- panel-btns -->
                            
                                <h4 class="panel-title">Enrollment By Age <a target="_blank" href="pdf/reportbyage.php"> <span style="float:right; margin-right: 30px;"> <img src="images/icon/icon.png" width="25"></span></a> </h4> 
                                
                            </div><!-- panel-heading -->
                    <!--edit school-->
                    <div class="col-md-12">
                    
                         
                  
                    
                    <table class="as_gridder_table table table-primary mb30" align="center">
                                         
<thead>
    

              <tr>
      <th>Age</th>
                    
                                                <th>F1M</th>
                                                <th>F1F</th>
                                                
                                                              
                                                <th>F2M</th>
                                                <th>F2F</th>
                                                
                                                              
                                                <th>F3M</th>
                                                <th>F3F</th>
                                                
                                                              
                                                <th>F4M</th>
                                                <th>F4F</th>
                                                
                                                                                                        
                                                
                                                
                                            
                                                
           <th>G TOTAL</th>   
                                                
                                                 
                                                    
                                                    
           </tr>                                 
               </thead>                                      
                                             
    <tbody>
    <tr>
    <td>Below 13 Years</td>
    
                  
                                                <td>1</td>
                                                <td>0</td>
                                                
                                                              
                                                <td>1</td>
                                                <td>0</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                                                                        <td>2</td>
        
    </tr>
     <tr>
    <td>13 Years</td>
    
                  
                                                <td>0</td>
                                                <td>2</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                                                                        <td>2</td>
        
    </tr>
    
    <tr>
    <td>14 Years</td>
    
                  
                                                <td>5</td>
                                                <td>6</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                                                                        <td>11</td>
        
    </tr>
    
      <tr>
    <td>15 Years</td>
    
                  
                                                <td>15</td>
                                                <td>12</td>
                                                
                                                              
                                                <td>6</td>
                                                <td>5</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                              
                                                <td>0</td>
                                                <td>0</td>
                                                
                                                                                                        <td>38</td>
        
    </tr>
  <tr>
    <td>16 Years</td>
    
                  
                                                <td>9</td>
                                                <td>8</td>
                                                
                                                              
                                                <td>14</td>
                                                <td>16</td>
                                                
                                                              
                                                <td>10</td>
                                                <td>6</td>
                                                
                                                              
                                                <td>2</td>
                                                <td>0</td>
                                                
                                                                                                        <td>65</td>
        
    </tr>
      
        
        <tr>
    <td>17 Years</td>
    
                  
                                                <td>4</td>
                                                <td>1</td>
                                                
                                                              
                                                <td>19</td>
                                                <td>13</td>
                                                
                                                              
                                                <td>25</td>
                                                <td>14</td>
                                                
                                                              
                                                <td>2</td>
                                                <td>1</td>
                                                
                                                                                                        <td>79</td>
        
    </tr>
    <tr>
    <td>18 Years</td>
    
                  
                                                <td>3</td>
                                                <td>2</td>
                                                
                                                              
                                                <td>6</td>
                                                <td>3</td>
                                                
                                                              
                                                <td>13</td>
                                                <td>2</td>
                                                
                                                              
                                                <td>7</td>
                                                <td>2</td>
                                                
                                                                                                        <td>38</td>
        
    </tr>
  
  <tr>
    <td>Above 18 Years</td>
    
                  
                                                <td>1</td>
                                                <td>1</td>
                                                
                                                              
                                                <td>4</td>
                                                <td>3</td>
                                                
                                                              
                                                <td>6</td>
                                                <td>5</td>
                                                
                                                              
                                                <td>2</td>
                                                <td>2</td>
                                                
                                                                                                        <td>24</td>
        
    </tr>
    
    <tr>
    <td>Total</td>
    
                  
                                                <td>38</td>
                                                <td>33</td>
                                                
                                                              
                                                <td>50</td>
                                                <td>40</td>
                                                
                                                              
                                                <td>54</td>
                                                <td>27</td>
                                                
                                                              
                                                <td>36</td>
                                                <td>33</td>
                                                
                                                                                                        <td>311</td>
        
    </tr>
        
        
    </tbody>
    
    
     
    </table>
            
                       
                            
                        </div><!-- panel -->
                        
                        
                        
                    </div><!-- col-md-6 -->


                </div><!--row -->   
            </div>
    </div>
@endsection