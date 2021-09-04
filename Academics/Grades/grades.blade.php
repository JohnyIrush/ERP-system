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
                            <li>Manage Grades</li>
                        </ul>
                        <h4>Manage Grades</h4>
                        <p></p>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                <div class="btn-group">
                           <a href="addgrades.php" class="btn btn-primary">
                            Add New Grade <i class="fa fa-plus"></i>
                        </a>
                           
                        </div>
                        <p></p>
                    <div class="col-md-3">
                    
                    </div>

                    <!--edit school-->
                    <div class="col-md-6">
                       <p></p><div class="col-md-15">
                                    <div class="table-responsive">
                                        <table class="table table-primary mb30" align="center">
                                            <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Grade Name</th>
                                                <th>Grade Points</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                              </tr>
                                            </thead>
                                            <tbody><tr>
                                    <td>1.</td>
                                    <td>A</td>
                                    <td>12</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=1"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=1"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>2.</td>
                                    <td>A-</td>
                                    <td>11</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=2"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=2"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>3.</td>
                                    <td>B+</td>
                                    <td>10</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=3"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=3"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>4.</td>
                                    <td>B</td>
                                    <td>9</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=4"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=4"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>5.</td>
                                    <td>B-</td>
                                    <td>8</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=5"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=5"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>6.</td>
                                    <td>C+</td>
                                    <td>7</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=6"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=6"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>7.</td>
                                    <td>C</td>
                                    <td>6</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=7"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=7"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>8.</td>
                                    <td>C-</td>
                                    <td>5</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=8"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=8"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>9.</td>
                                    <td>D+</td>
                                    <td>4</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=9"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=9"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>10.</td>
                                    <td>D</td>
                                    <td>3</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=10"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=10"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>11.</td>
                                    <td>D-</td>
                                    <td>2</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=11"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=11"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
                                  </tr><tr>
                                    <td>12.</td>
                                    <td>E</td>
                                    <td>1</td>
                                    <td>                                           
                                        <div><a href="editgrade.php?id=12"><button class="mr5"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                                  
                                    </td> 
                                    <td>                                              
                                        <div><a href="deletegrade.php?id=12"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                    </td>          
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