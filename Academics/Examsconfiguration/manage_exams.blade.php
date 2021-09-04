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
                            <li>Manage Exams</li>
                        </ul>
                        <h4>Manage Exams</h4>
                        <p></p>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                   
<div class="btn-group">
                           <a href="addexams.php" class="btn btn-primary">
                            Add New Exam <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>
                    <!--edit school-->
                    <div class="col-md-15">
                       <p></p><div class="col-md-15">
                                    <div class="table-responsive">
                                        <table class="table table-primary mb30" align="center">
                                            <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Class</th>
                                                <th>Exam Name</th>
                                                <th>Type</th>
                                                <th>End Term %</th>
                                                <th>Term</th>
                                                <th>Year</th>
                                                 <th>Use In EndTerm</th>
                                                  <th>Status</th>
                                              
                                                <th>Action</th>
                                                
                                              </tr>
                                            </thead>
                                            <tbody><tr>
                                    <td>1.</td>
                                    <td>Form Three</td>
                                    <td>END OF TERM 3</td>
                                    <td>PERCENTAGE</td>
                                    <td>100%</td>
                                    <td>3</td>
                                    <td>2021</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=81">Edit</a></li>
                         <li><a href="deleteexams.php?id=81">Delete </a></li>
                         <li><a href="closeexam.php?id=81">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>2.</td>
                                    <td>Form Two</td>
                                    <td>END OF TERM 3</td>
                                    <td>PERCENTAGE</td>
                                    <td>100%</td>
                                    <td>3</td>
                                    <td>2021</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=80">Edit</a></li>
                         <li><a href="deleteexams.php?id=80">Delete </a></li>
                         <li><a href="closeexam.php?id=80">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>3.</td>
                                    <td>Form One </td>
                                    <td>END OF TERM 3</td>
                                    <td>PERCENTAGE</td>
                                    <td>100%</td>
                                    <td>3</td>
                                    <td>2021</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=79">Edit</a></li>
                         <li><a href="deleteexams.php?id=79">Delete </a></li>
                         <li><a href="closeexam.php?id=79">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>4.</td>
                                    <td>Form Three</td>
                                    <td>END OF TERM EXAMINATION</td>
                                    <td>PERCENTAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2021</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=78">Edit</a></li>
                         <li><a href="deleteexams.php?id=78">Delete </a></li>
                         <li><a href="closeexam.php?id=78">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>5.</td>
                                    <td>Form Two</td>
                                    <td>END OF TERM EXAMINATION</td>
                                    <td>PERCENTAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2021</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=77">Edit</a></li>
                         <li><a href="deleteexams.php?id=77">Delete </a></li>
                         <li><a href="closeexam.php?id=77">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>6.</td>
                                    <td>Form One </td>
                                    <td>END OF TERM EXAMINATION</td>
                                    <td>PERCENTAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2021</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=76">Edit</a></li>
                         <li><a href="deleteexams.php?id=76">Delete </a></li>
                         <li><a href="closeexam.php?id=76">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>7.</td>
                                    <td>Form Four</td>
                                    <td>MOCK EXAMS </td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>3</td>
                                    <td>2021</td>
                                    <td>NO</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=72">Edit</a></li>
                         <li><a href="deleteexams.php?id=72">Delete </a></li>
                         <li><a href="closeexam.php?id=72">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>8.</td>
                                    <td>Form Four</td>
                                    <td>CAT ONE 2020</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2020</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=70">Edit</a></li>
                         <li><a href="deleteexams.php?id=70">Delete </a></li>
                         <li><a href="closeexam.php?id=70">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>9.</td>
                                    <td>Form Four</td>
                                    <td>CAT 1 2020</td>
                                    <td>PERCENTAGE</td>
                                    <td>0%</td>
                                    <td>0</td>
                                    <td>2020</td>
                                    <td>NO</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=69">Edit</a></li>
                         <li><a href="deleteexams.php?id=69">Delete </a></li>
                         <li><a href="closeexam.php?id=69">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>10.</td>
                                    <td>Form Four</td>
                                    <td>END OF TERM </td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2020</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=68">Edit</a></li>
                         <li><a href="deleteexams.php?id=68">Delete </a></li>
                         <li><a href="closeexam.php?id=68">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>11.</td>
                                    <td>Form Three</td>
                                    <td>END OF TERM </td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2020</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=67">Edit</a></li>
                         <li><a href="deleteexams.php?id=67">Delete </a></li>
                         <li><a href="closeexam.php?id=67">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>12.</td>
                                    <td>Form Two</td>
                                    <td>END OF TERM </td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2020</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=66">Edit</a></li>
                         <li><a href="deleteexams.php?id=66">Delete </a></li>
                         <li><a href="closeexam.php?id=66">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>13.</td>
                                    <td>Form Three</td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>3</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=65">Edit</a></li>
                         <li><a href="deleteexams.php?id=65">Delete </a></li>
                         <li><a href="closeexam.php?id=65">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>14.</td>
                                    <td>Form Two</td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>3</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=64">Edit</a></li>
                         <li><a href="deleteexams.php?id=64">Delete </a></li>
                         <li><a href="closeexam.php?id=64">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>15.</td>
                                    <td>Form One </td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>3</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=63">Edit</a></li>
                         <li><a href="deleteexams.php?id=63">Delete </a></li>
                         <li><a href="closeexam.php?id=63">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>16.</td>
                                    <td>Form Three</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>3</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=62">Edit</a></li>
                         <li><a href="deleteexams.php?id=62">Delete </a></li>
                         <li><a href="closeexam.php?id=62">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>17.</td>
                                    <td>Form Two</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>3</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=61">Edit</a></li>
                         <li><a href="deleteexams.php?id=61">Delete </a></li>
                         <li><a href="closeexam.php?id=61">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>18.</td>
                                    <td>Form One </td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>3</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=60">Edit</a></li>
                         <li><a href="deleteexams.php?id=60">Delete </a></li>
                         <li><a href="closeexam.php?id=60">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>19.</td>
                                    <td>Form Four</td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=59">Edit</a></li>
                         <li><a href="deleteexams.php?id=59">Delete </a></li>
                         <li><a href="closeexam.php?id=59">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>20.</td>
                                    <td>Form Three</td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=58">Edit</a></li>
                         <li><a href="deleteexams.php?id=58">Delete </a></li>
                         <li><a href="closeexam.php?id=58">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>21.</td>
                                    <td>Form Two</td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=57">Edit</a></li>
                         <li><a href="deleteexams.php?id=57">Delete </a></li>
                         <li><a href="closeexam.php?id=57">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>22.</td>
                                    <td>Form One </td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=56">Edit</a></li>
                         <li><a href="deleteexams.php?id=56">Delete </a></li>
                         <li><a href="closeexam.php?id=56">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>23.</td>
                                    <td>Form Three</td>
                                    <td>MID TERM </td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=54">Edit</a></li>
                         <li><a href="deleteexams.php?id=54">Delete </a></li>
                         <li><a href="closeexam.php?id=54">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>24.</td>
                                    <td>Form Two</td>
                                    <td>MID TERM </td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=53">Edit</a></li>
                         <li><a href="deleteexams.php?id=53">Delete </a></li>
                         <li><a href="closeexam.php?id=53">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>25.</td>
                                    <td>Form One </td>
                                    <td>MID TERM </td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=52">Edit</a></li>
                         <li><a href="deleteexams.php?id=52">Delete </a></li>
                         <li><a href="closeexam.php?id=52">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>26.</td>
                                    <td>Form Four</td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=51">Edit</a></li>
                         <li><a href="deleteexams.php?id=51">Delete </a></li>
                         <li><a href="closeexam.php?id=51">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>27.</td>
                                    <td>Form Three</td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=50">Edit</a></li>
                         <li><a href="deleteexams.php?id=50">Delete </a></li>
                         <li><a href="closeexam.php?id=50">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>28.</td>
                                    <td>Form Two</td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=49">Edit</a></li>
                         <li><a href="deleteexams.php?id=49">Delete </a></li>
                         <li><a href="closeexam.php?id=49">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>29.</td>
                                    <td>Form One </td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=48">Edit</a></li>
                         <li><a href="deleteexams.php?id=48">Delete </a></li>
                         <li><a href="closeexam.php?id=48">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>30.</td>
                                    <td>Form Four</td>
                                    <td>MID TERM </td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=47">Edit</a></li>
                         <li><a href="deleteexams.php?id=47">Delete </a></li>
                         <li><a href="closeexam.php?id=47">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>31.</td>
                                    <td>Form Three</td>
                                    <td>MID TERM </td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=46">Edit</a></li>
                         <li><a href="deleteexams.php?id=46">Delete </a></li>
                         <li><a href="closeexam.php?id=46">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>32.</td>
                                    <td>Form Two</td>
                                    <td>MID TERM </td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=45">Edit</a></li>
                         <li><a href="deleteexams.php?id=45">Delete </a></li>
                         <li><a href="closeexam.php?id=45">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>33.</td>
                                    <td>Form One </td>
                                    <td>MID TERM </td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=44">Edit</a></li>
                         <li><a href="deleteexams.php?id=44">Delete </a></li>
                         <li><a href="closeexam.php?id=44">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>34.</td>
                                    <td>Form Four</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=43">Edit</a></li>
                         <li><a href="deleteexams.php?id=43">Delete </a></li>
                         <li><a href="closeexam.php?id=43">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>35.</td>
                                    <td>Form Three</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=42">Edit</a></li>
                         <li><a href="deleteexams.php?id=42">Delete </a></li>
                         <li><a href="closeexam.php?id=42">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>36.</td>
                                    <td>Form Two</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=41">Edit</a></li>
                         <li><a href="deleteexams.php?id=41">Delete </a></li>
                         <li><a href="closeexam.php?id=41">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>37.</td>
                                    <td>Form One </td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>1</td>
                                    <td>2019</td>
                                    <td>NO</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=40">Edit</a></li>
                         <li><a href="deleteexams.php?id=40">Delete </a></li>
                         <li><a href="closeexam.php?id=40">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>38.</td>
                                    <td>Form Three</td>
                                    <td>END OF TERM</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>3</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=39">Edit</a></li>
                         <li><a href="deleteexams.php?id=39">Delete </a></li>
                         <li><a href="closeexam.php?id=39">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>39.</td>
                                    <td>Form Two</td>
                                    <td>END OF TERM</td>
                                    <td>PERCENTAGE</td>
                                    <td>100%</td>
                                    <td>3</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=38">Edit</a></li>
                         <li><a href="deleteexams.php?id=38">Delete </a></li>
                         <li><a href="closeexam.php?id=38">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>40.</td>
                                    <td>Form One </td>
                                    <td>END OF TERM</td>
                                    <td>PERCENTAGE</td>
                                    <td>100%</td>
                                    <td>3</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=37">Edit</a></li>
                         <li><a href="deleteexams.php?id=37">Delete </a></li>
                         <li><a href="closeexam.php?id=37">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>41.</td>
                                    <td>Form Four</td>
                                    <td>ENDTERM</td>
                                    <td></td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=36">Edit</a></li>
                         <li><a href="deleteexams.php?id=36">Delete </a></li>
                         <li><a href="closeexam.php?id=36">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>42.</td>
                                    <td>Form Three</td>
                                    <td>ENDTERM</td>
                                    <td></td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=35">Edit</a></li>
                         <li><a href="deleteexams.php?id=35">Delete </a></li>
                         <li><a href="closeexam.php?id=35">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>43.</td>
                                    <td>Form Two</td>
                                    <td>ENDTERM</td>
                                    <td></td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=34">Edit</a></li>
                         <li><a href="deleteexams.php?id=34">Delete </a></li>
                         <li><a href="closeexam.php?id=34">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>44.</td>
                                    <td>Form One </td>
                                    <td>ENDTERM</td>
                                    <td></td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=33">Edit</a></li>
                         <li><a href="deleteexams.php?id=33">Delete </a></li>
                         <li><a href="closeexam.php?id=33">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>45.</td>
                                    <td>Form Four</td>
                                    <td>MIDTERM</td>
                                    <td></td>
                                    <td>100%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=32">Edit</a></li>
                         <li><a href="deleteexams.php?id=32">Delete </a></li>
                         <li><a href="closeexam.php?id=32">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>46.</td>
                                    <td>Form Three</td>
                                    <td>MIDTERM</td>
                                    <td></td>
                                    <td>50%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=31">Edit</a></li>
                         <li><a href="deleteexams.php?id=31">Delete </a></li>
                         <li><a href="closeexam.php?id=31">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>47.</td>
                                    <td>Form Two</td>
                                    <td>MIDTERM</td>
                                    <td></td>
                                    <td>50%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=30">Edit</a></li>
                         <li><a href="deleteexams.php?id=30">Delete </a></li>
                         <li><a href="closeexam.php?id=30">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>48.</td>
                                    <td>Form One </td>
                                    <td>MIDTERM</td>
                                    <td></td>
                                    <td>50%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=29">Edit</a></li>
                         <li><a href="deleteexams.php?id=29">Delete </a></li>
                         <li><a href="closeexam.php?id=29">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>49.</td>
                                    <td>Form Four</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=28">Edit</a></li>
                         <li><a href="deleteexams.php?id=28">Delete </a></li>
                         <li><a href="closeexam.php?id=28">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>50.</td>
                                    <td>Form Three</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=27">Edit</a></li>
                         <li><a href="deleteexams.php?id=27">Delete </a></li>
                         <li><a href="closeexam.php?id=27">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>51.</td>
                                    <td>Form Two</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=26">Edit</a></li>
                         <li><a href="deleteexams.php?id=26">Delete </a></li>
                         <li><a href="closeexam.php?id=26">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>52.</td>
                                    <td>Form One </td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>2</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=25">Edit</a></li>
                         <li><a href="deleteexams.php?id=25">Delete </a></li>
                         <li><a href="closeexam.php?id=25">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>53.</td>
                                    <td>Form Four</td>
                                    <td>ENDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>33.4%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=24">Edit</a></li>
                         <li><a href="deleteexams.php?id=24">Delete </a></li>
                         <li><a href="closeexam.php?id=24">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>54.</td>
                                    <td>Form Three</td>
                                    <td>ENDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>50%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=23">Edit</a></li>
                         <li><a href="deleteexams.php?id=23">Delete </a></li>
                         <li><a href="closeexam.php?id=23">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>55.</td>
                                    <td>Form Two</td>
                                    <td>ENDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>33.4%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=22">Edit</a></li>
                         <li><a href="deleteexams.php?id=22">Delete </a></li>
                         <li><a href="closeexam.php?id=22">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>56.</td>
                                    <td>Form One </td>
                                    <td>ENDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>33.4%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>NO</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=21">Edit</a></li>
                         <li><a href="deleteexams.php?id=21">Delete </a></li>
                         <li><a href="closeexam.php?id=21">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>57.</td>
                                    <td>Form Four</td>
                                    <td>MIDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>33.3%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=20">Edit</a></li>
                         <li><a href="deleteexams.php?id=20">Delete </a></li>
                         <li><a href="closeexam.php?id=20">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>58.</td>
                                    <td>Form Three</td>
                                    <td>MIDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>33.3%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=19">Edit</a></li>
                         <li><a href="deleteexams.php?id=19">Delete </a></li>
                         <li><a href="closeexam.php?id=19">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>59.</td>
                                    <td>Form Two</td>
                                    <td>MIDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>33.3%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=18">Edit</a></li>
                         <li><a href="deleteexams.php?id=18">Delete </a></li>
                         <li><a href="closeexam.php?id=18">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>60.</td>
                                    <td>Form One </td>
                                    <td>MIDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=17">Edit</a></li>
                         <li><a href="deleteexams.php?id=17">Delete </a></li>
                         <li><a href="closeexam.php?id=17">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>61.</td>
                                    <td>Form Four</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>33.3%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=16">Edit</a></li>
                         <li><a href="deleteexams.php?id=16">Delete </a></li>
                         <li><a href="closeexam.php?id=16">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>62.</td>
                                    <td>Form Three</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>33.3%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=15">Edit</a></li>
                         <li><a href="deleteexams.php?id=15">Delete </a></li>
                         <li><a href="closeexam.php?id=15">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>63.</td>
                                    <td>Form Two</td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>33.3%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=14">Edit</a></li>
                         <li><a href="deleteexams.php?id=14">Delete </a></li>
                         <li><a href="closeexam.php?id=14">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>64.</td>
                                    <td>Form One </td>
                                    <td>OPENER</td>
                                    <td>AVERAGE</td>
                                    <td>33.3%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>NO</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=13">Edit</a></li>
                         <li><a href="deleteexams.php?id=13">Delete </a></li>
                         <li><a href="closeexam.php?id=13">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>65.</td>
                                    <td>Form Four</td>
                                    <td>INDEXING EXAM 2017</td>
                                    <td></td>
                                    <td>100%</td>
                                    <td>1</td>
                                    <td>2018</td>
                                    <td>NO</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=12">Edit</a></li>
                         <li><a href="deleteexams.php?id=12">Delete </a></li>
                         <li><a href="closeexam.php?id=12">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>66.</td>
                                    <td>Form Four</td>
                                    <td>ENDTERM</td>
                                    <td></td>
                                    <td>70%</td>
                                    <td>2</td>
                                    <td>2017</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=8">Edit</a></li>
                         <li><a href="deleteexams.php?id=8">Delete </a></li>
                         <li><a href="closeexam.php?id=8">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>67.</td>
                                    <td>Form Three</td>
                                    <td>ENDTERM</td>
                                    <td></td>
                                    <td>70%</td>
                                    <td>2</td>
                                    <td>2017</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=7">Edit</a></li>
                         <li><a href="deleteexams.php?id=7">Delete </a></li>
                         <li><a href="closeexam.php?id=7">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>68.</td>
                                    <td>Form Two</td>
                                    <td>ENDTERM</td>
                                    <td></td>
                                    <td>70%</td>
                                    <td>2</td>
                                    <td>2017</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=6">Edit</a></li>
                         <li><a href="deleteexams.php?id=6">Delete </a></li>
                         <li><a href="closeexam.php?id=6">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>69.</td>
                                    <td>Form One </td>
                                    <td>ENDTERM</td>
                                    <td></td>
                                    <td>70%</td>
                                    <td>2</td>
                                    <td>2017</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=5">Edit</a></li>
                         <li><a href="deleteexams.php?id=5">Delete </a></li>
                         <li><a href="closeexam.php?id=5">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>70.</td>
                                    <td>Form Four</td>
                                    <td>MIDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>30%</td>
                                    <td>2</td>
                                    <td>2017</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=4">Edit</a></li>
                         <li><a href="deleteexams.php?id=4">Delete </a></li>
                         <li><a href="closeexam.php?id=4">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>71.</td>
                                    <td>Form Three</td>
                                    <td>MIDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>30%</td>
                                    <td>2</td>
                                    <td>2017</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=3">Edit</a></li>
                         <li><a href="deleteexams.php?id=3">Delete </a></li>
                         <li><a href="closeexam.php?id=3">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>72.</td>
                                    <td>Form Two</td>
                                    <td>MIDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>30%</td>
                                    <td>2</td>
                                    <td>2017</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=2">Edit</a></li>
                         <li><a href="deleteexams.php?id=2">Delete </a></li>
                         <li><a href="closeexam.php?id=2">CloseExam </a></li>	
                    </ul>
                </div></td>         
                                  </tr><tr>
                                    <td>73.</td>
                                    <td>Form One </td>
                                    <td>MIDTERM</td>
                                    <td>AVERAGE</td>
                                    <td>30%</td>
                                    <td>2</td>
                                    <td>2017</td>
                                    <td>YES</td>
                                    <td>OPEN</td>
                                    
                                 
                                  
                                    <td><div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">Choose Action <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                       
                        
                        <li><a href="editexams.php?id=1">Edit</a></li>
                         <li><a href="deleteexams.php?id=1">Delete </a></li>
                         <li><a href="closeexam.php?id=1">CloseExam </a></li>	
                    </ul>
                </div></td>         
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