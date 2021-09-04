@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-mortar-board"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-mortar-board"></i></li>
                            <li>Promote Students</li>
                        </ul>
                        <h4>Promote Students</h4>
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
                                <div class="panel-btns" style="display: none;">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">Promote Students</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <h4 style="text-align:center">Current Class</h4>
                                    <div class="form-group">
                                    <label class="col-sm-3 control-label">Class</label>
                                    <div class="col-sm-9">
                                        <select id="fruits2" data-placeholder="Choose One" class="width100p form-control" required="">
                                            <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>                                                </select>
                                      </div>
                                    </div><!-- form-group -->

                                    <!--streams will be loaded here-->
                                    <div id="loadedstreams"><div class="form-group">
<label class="col-sm-3 control-label">Stream</label>
<div class="col-sm-9">
    <select id="fruits3" data-placeholder="Choose One" class="width100p form-control" required="" onchange="reloadStudents()" <option="">Choose One<option value="1">UNITY</option><option value="5">PEACE</option></select>
  </div>
</div><!-- form-group --></div>

                                    <hr>
                                    <h4 style="text-align:center">New Class</h4>
                                    <div class="form-group">
                                    <label class="col-sm-3 control-label">Class</label>
                                    <div class="col-sm-9">
                                        <select id="new" data-placeholder="Choose One" class="width100p form-control" required="">
                                            <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>                                                </select>
                                      </div>
                                    </div><!-- form-group -->

                                    <!--streams will be loaded here-->
                                    <div id="loadedstreams2"><div class="form-group">
<label class="col-sm-3 control-label">Stream</label>
<div class="col-sm-9">
    <select id="newstream" data-placeholder="Choose One" class="width100p form-control" required=""><option value="1">UNITY</option><option value="5">PEACE</option></select>
  </div>
</div><!-- form-group --></div>


                                    <hr>

                                    <label class="col-sm-3 control-label">Options <span class="asterisk">*</span></label>
                                    <div class="col-sm-9">
                                        <div class="rdio rdio-primary">
                                            <input type="radio" id="allstd" value="1" name="option" checked="">
                                            <label for="allstd">All Students</label>
                                        </div><!-- rdio -->
                                        <div class="rdio rdio-primary">
                                            <input type="radio" id="selectedstd" value="2" name="option">
                                            <label for="selectedstd">Selected Students</label>
                                        </div><!-- rdio -->
                                        <label id="genderError" class="error" for="gender"></label>
                                    </div>

                                    <div id="stafftoselect" style="display:none;">
                                        <h4 style="text-align:center;">Students to Select from</h4>
                                        <div id="stcont"><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="609" checked="">
                        <label for="609">SIMON NJUKU NDUNGU[699]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="613" checked="">
                        <label for="613">DOMINIC MBURU MUROKI[703]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="615" checked="">
                        <label for="615">ROSEMARY WANJIRU WANGUI[705]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="617" checked="">
                        <label for="617">EVANS KIARIE NJOROGE[707]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="619" checked="">
                        <label for="619">AUSTIN KAIRU CHEGE[709]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="621" checked="">
                        <label for="621">GEOFFREY NGETHE MUNGAI[711]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="623" checked="">
                        <label for="623">BERNARD KIBE NJUGUNA[713]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="625" checked="">
                        <label for="625">ERIC WAMBU WANGARI[715]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="627" checked="">
                        <label for="627">KELVIN MLAGHE WANJIRU[717]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="629" checked="">
                        <label for="629">EVALYNE NYAMBURA MACHARIA[719]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="631" checked="">
                        <label for="631">JUDY MUTHONI KARIUKI[721]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="633" checked="">
                        <label for="633">AGNES MUTINDA WAMWERE[723]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="635" checked="">
                        <label for="635">ERICK KIMANI KABAE[725]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="637" checked="">
                        <label for="637">STEPHEN NJUGUNA MWANGI[727]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="639" checked="">
                        <label for="639">JOSEPH CHARAGU KURIA[729]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="641" checked="">
                        <label for="641">JOSEPH KIOKO NG'ETHE[731]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="643" checked="">
                        <label for="643">ALEX NGANGA KIRUNDO[733]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="645" checked="">
                        <label for="645">PETER MIGWI NJOROGE[735]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="647" checked="">
                        <label for="647">ELIZABETH WOTHAYA MWANGI[737]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="649" checked="">
                        <label for="649">LYDIA NJERI NJERI[739]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="651" checked="">
                        <label for="651">JANET WANJERI MBUGU[741]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="653" checked="">
                        <label for="653">SAMUEL KARU WANJIKU[743]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="655" checked="">
                        <label for="655">ETHAN MUHORO KINYUA[745]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="658" checked="">
                        <label for="658">REBECCA WANJIIRU NGENYA[748]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="661" checked="">
                        <label for="661">FAITH WANGUI NDEGWA[751]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="663" checked="">
                        <label for="663">PETER KARUNGA MWAURA[753]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="665" checked="">
                        <label for="665">PAULINE WANGUI WAMBUI[755]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="667" checked="">
                        <label for="667">BEATRICE WANJIRU NJIHIA[757]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="669" checked="">
                        <label for="669">MARY NJERI NJAMBI[759]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="670" checked="">
                        <label for="670">MARGARET NGENDO NGIGI[760]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="671" checked="">
                        <label for="671">LUCY WANJIKU NGUGI[761]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="674" checked="">
                        <label for="674">GRACE WANJIRU KIMANI[764]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="678" checked="">
                        <label for="678">MILKAH WANGUI GITAU[768]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="683" checked="">
                        <label for="683">FELISTA MUTHONI NDUATI[773]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --><div class="form-group">
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-9">
                <div class="pull-left">
                    <div class="ckbox ckbox-primary mt10">
                        <input type="checkbox" class="studentids" id="685" checked="">
                        <label for="685">MARCK CHALEE MUTUNE[775]</label>
                    </div>
                        </div>
                    </div>
                </div><!-- form-group --></div>
                                    </div>

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <div id="commedt123"><p></p></div>
                                    <button class="btn btn-primary mr5" id="btnpromote">Promote Students</button>
                                    <button type="reset" class="btn btn-dark">Clear</button>
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