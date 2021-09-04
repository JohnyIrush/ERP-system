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
                            <li>Manage Streams</li>
                        </ul>
                        <h4>Manage Streams</h4>
                        <p></p>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row">
                   

                    <!--edit school-->
                    <div class="col-md-15">
                       <div class="col-md-15">
                                    <div class="table-responsive">
                                     <a class="btn btn-primary mr5" href="addstream.php"> ADD NEW STREAM</a> <br><br>
                            
                                        <table class="table table-primary mb30" align="center">
                                            <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Class Name</th>
                                                <th>Stream Name</th>
                                                 <th>Capacity</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                              </tr>
                                            </thead>
                                            <tbody><tr>
                                        <td>1.</td>
                                        <td>Form One </td>
                                        <td>UNITY</td>
                                        <td></td>
                                        <td>                                           
                                            <div><a href="editstream.php?id=1"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                        </td>
                                        <td>                                           
                                            <div><a href="deletestream.php?id=1"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                        </td>          
                                      </tr><tr>
                                        <td>2.</td>
                                        <td>Form One </td>
                                        <td>PEACE</td>
                                        <td></td>
                                        <td>                                           
                                            <div><a href="editstream.php?id=5"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                        </td>
                                        <td>                                           
                                            <div><a href="deletestream.php?id=5"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                        </td>          
                                      </tr><tr>
                                        <td>3.</td>
                                        <td>Form Two</td>
                                        <td>UNITY</td>
                                        <td></td>
                                        <td>                                           
                                            <div><a href="editstream.php?id=2"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                        </td>
                                        <td>                                           
                                            <div><a href="deletestream.php?id=2"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                        </td>          
                                      </tr><tr>
                                        <td>4.</td>
                                        <td>Form Two</td>
                                        <td>PEACE</td>
                                        <td></td>
                                        <td>                                           
                                            <div><a href="editstream.php?id=6"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                        </td>
                                        <td>                                           
                                            <div><a href="deletestream.php?id=6"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                        </td>          
                                      </tr><tr>
                                        <td>5.</td>
                                        <td>Form Three</td>
                                        <td>UNITY</td>
                                        <td></td>
                                        <td>                                           
                                            <div><a href="editstream.php?id=3"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                        </td>
                                        <td>                                           
                                            <div><a href="deletestream.php?id=3"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                        </td>          
                                      </tr><tr>
                                        <td>6.</td>
                                        <td>Form Three</td>
                                        <td>PEACE</td>
                                        <td></td>
                                        <td>                                           
                                            <div><a href="editstream.php?id=7"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                        </td>
                                        <td>                                           
                                            <div><a href="deletestream.php?id=7"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                        </td>          
                                      </tr><tr>
                                        <td>7.</td>
                                        <td>Form Four</td>
                                        <td>UNITY</td>
                                        <td></td>
                                        <td>                                           
                                            <div><a href="editstream.php?id=4"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                        </td>
                                        <td>                                           
                                            <div><a href="deletestream.php?id=4"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
                                        </td>          
                                      </tr><tr>
                                        <td>8.</td>
                                        <td>Form Four</td>
                                        <td>PEACE</td>
                                        <td></td>
                                        <td>                                           
                                            <div><a href="editstream.php?id=8"><button class="mr5" id="btnaddreqs"><i class="fa fa-pencil-square"></i> Edit</button></a></div>                                             
                                        </td>
                                        <td>                                           
                                            <div><a href="deletestream.php?id=8"><button class="mr5 delete" id="btnaddreqs"><i class="fa fa-trash"></i> Delete</button></a></div>                                               
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