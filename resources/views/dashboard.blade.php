@extends('adminlte::page')


@section('title', 'TheHolidaysClub')

@section('content_header')
    <h1>Dashboard</h1>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel">
                <div class="panel-header"></div>

                <div class="panel-body">
                	<div class="row">
                		
			          <div class="col-md-3 col-sm-6 col-xs-12">
         				 <div class="info-box">
            				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

           				 <div class="info-box-content">
             				 <span class="info-box-text">New Members</span>
              				<span class="info-box-number">2,000</span>
            			</div>
            <!-- /.info-box-content -->
         			 </div>
          <!-- /.info-box -->
        </div>
			          <div class="col-md-3 col-sm-6 col-xs-12">
         				 <div class="info-box">
           					 <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

         					   <div class="info-box-content">
            					  <span class="info-box-text">Likes</span>
            					  <span class="info-box-number">41,410</span>
          					  </div>
            <!-- /.info-box-content -->
        				  </div>
          <!-- /.info-box -->
        </div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">CPU Traffic</span>
								<span class="info-box-number">90<small>%</small></span>
							</div>
				<!-- /.info-box-content -->
					</div>
				<!-- /.info-box -->
				</div>
			     <div class="col-md-3 col-sm-6 col-xs-12">
        			<div class="info-box">
            			<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

           				 <div class="info-box-content">
              				<span class="info-box-text">Sales</span>
            			    <span class="info-box-number">760</span>
            			</div>
            <!-- /.info-box-content -->
         			 </div>
          <!-- /.info-box -->
        		</div>
        		
			          
			          <div class="row">
			          	<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart" style="position: relative;"><svg height="347" version="1.1" width="613.3333129882812" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.75px;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="56.5" y="312" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,312H588.3333129882812" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="56.5" y="240.25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">7,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,240.25H588.3333129882812" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="56.5" y="168.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">15,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,168.5H588.3333129882812" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="56.5" y="96.75000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4.000000000000028">22,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,96.75000000000003H588.3333129882812" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="56.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">30,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M69,25H588.3333129882812" stroke-width="0.5"></path><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="492.41756137926694" y="324.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2012</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="262.09355258130506" y="324.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2011</tspan></text><path style="fill-opacity: 1;" fill="#7cb57c" stroke="none" d="M69,261.1723C83.51356767767979,255.91063333333335,112.54070303303938,244.99147916666666,127.05427071071917,240.12563333333333C141.56783838839897,235.2597875,170.59497374375854,228.90665173041896,185.10854142143833,222.24553333333336C199.46435292870856,215.65681839708563,228.17597594324903,189.092289640884,242.53178745051926,187.12630000000001C256.72984278737994,185.181914640884,285.1259534611013,205.17415833333334,299.32400879796194,206.60403333333335C313.83757647564175,208.06568333333334,342.8647118310013,197.71899166666668,357.3782795086811,198.69240000000002C371.8918471863609,199.66580833333336,400.9189825417204,231.6705296903461,415.43255021940024,214.3913C429.7883617266705,197.29988802367942,458.49998474121094,69.54718333333336,472.85579624848117,61.209833333333364C487.2116077557514,52.87248333333336,515.9232307702919,135.4676984061931,530.2790422775621,147.69250000000002C544.7926099552419,160.05164007285975,573.8197453106014,156.58232500000003,588.3333129882812,159.5456L588.3333129882812,312L69,312Z" fill-opacity="1"></path><path style="" fill="none" stroke="#4da74d" d="M69,261.1723C83.51356767767979,255.91063333333335,112.54070303303938,244.99147916666666,127.05427071071917,240.12563333333333C141.56783838839897,235.2597875,170.59497374375854,228.90665173041896,185.10854142143833,222.24553333333336C199.46435292870856,215.65681839708563,228.17597594324903,189.092289640884,242.53178745051926,187.12630000000001C256.72984278737994,185.181914640884,285.1259534611013,205.17415833333334,299.32400879796194,206.60403333333335C313.83757647564175,208.06568333333334,342.8647118310013,197.71899166666668,357.3782795086811,198.69240000000002C371.8918471863609,199.66580833333336,400.9189825417204,231.6705296903461,415.43255021940024,214.3913C429.7883617266705,197.29988802367942,458.49998474121094,69.54718333333336,472.85579624848117,61.209833333333364C487.2116077557514,52.87248333333336,515.9232307702919,135.4676984061931,530.2790422775621,147.69250000000002C544.7926099552419,160.05164007285975,573.8197453106014,156.58232500000003,588.3333129882812,159.5456" stroke-width="3"></path><circle cx="69" cy="261.1723" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="127.05427071071917" cy="240.12563333333333" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="185.10854142143833" cy="222.24553333333336" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="242.53178745051926" cy="187.12630000000001" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="299.32400879796194" cy="206.60403333333335" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="357.3782795086811" cy="198.69240000000002" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="415.43255021940024" cy="214.3913" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="472.85579624848117" cy="61.209833333333364" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="530.2790422775621" cy="147.69250000000002" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="588.3333129882812" cy="159.5456" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"></circle><path style="fill-opacity: 1;" fill="#a8b4bd" stroke="none" d="M69,286.4952666666667C83.51356767767979,280.7409166666667,112.54070303303938,268.51830416666667,127.05427071071917,263.47786666666667C141.56783838839897,258.4374291666667,170.59497374375854,248.92759398907103,185.10854142143833,246.17176666666666C199.46435292870856,243.44589398907104,228.17597594324903,243.7671638581952,242.53178745051926,241.55106666666666C256.72984278737994,239.35932219152855,285.1259534611013,231.61421730769231,299.32400879796194,228.5404C313.83757647564175,225.39827564102563,342.8647118310013,216.55695416666666,357.3782795086811,216.6873C371.8918471863609,216.81764583333333,400.9189825417204,242.90179635701276,415.43255021940024,229.58316666666667C429.7883617266705,216.4093046903461,458.49998474121094,118.52851666666669,472.85579624848117,110.71733333333336C487.2116077557514,102.90615000000003,515.9232307702919,158.893485291439,530.2790422775621,167.0937C544.7926099552419,175.38402695810566,573.8197453106014,174.28305,588.3333129882812,176.67950000000002L588.3333129882812,312L69,312Z" fill-opacity="1"></path><path style="" fill="none" stroke="#7a92a3" d="M69,286.4952666666667C83.51356767767979,280.7409166666667,112.54070303303938,268.51830416666667,127.05427071071917,263.47786666666667C141.56783838839897,258.4374291666667,170.59497374375854,248.92759398907103,185.10854142143833,246.17176666666666C199.46435292870856,243.44589398907104,228.17597594324903,243.7671638581952,242.53178745051926,241.55106666666666C256.72984278737994,239.35932219152855,285.1259534611013,231.61421730769231,299.32400879796194,228.5404C313.83757647564175,225.39827564102563,342.8647118310013,216.55695416666666,357.3782795086811,216.6873C371.8918471863609,216.81764583333333,400.9189825417204,242.90179635701276,415.43255021940024,229.58316666666667C429.7883617266705,216.4093046903461,458.49998474121094,118.52851666666669,472.85579624848117,110.71733333333336C487.2116077557514,102.90615000000003,515.9232307702919,158.893485291439,530.2790422775621,167.0937C544.7926099552419,175.38402695810566,573.8197453106014,174.28305,588.3333129882812,176.67950000000002" stroke-width="3"></path><circle cx="69" cy="286.4952666666667" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="127.05427071071917" cy="263.47786666666667" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="185.10854142143833" cy="246.17176666666666" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="242.53178745051926" cy="241.55106666666666" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="299.32400879796194" cy="228.5404" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="357.3782795086811" cy="216.6873" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="415.43255021940024" cy="229.58316666666667" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="472.85579624848117" cy="110.71733333333336" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="530.2790422775621" cy="167.0937" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="588.3333129882812" cy="176.67950000000002" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"></circle><path style="fill-opacity: 1;" fill="#2677b5" stroke="none" d="M69,286.4952666666667C83.51356767767979,286.2274,112.54070303303938,288.1096416666667,127.05427071071917,285.4238C141.56783838839897,282.7379583333334,170.59497374375854,266.1976752276867,185.10854142143833,265.00853333333333C199.46435292870856,263.83231689435337,228.17597594324903,278.2445980662983,242.53178745051926,275.96236666666664C256.72984278737994,273.705214732965,285.1259534611013,249.10166346153846,299.32400879796194,246.851C313.83757647564175,244.5503217948718,342.8647118310013,255.37729166666668,357.3782795086811,257.757C371.8918471863609,260.13670833333333,400.9189825417204,277.1945324225865,415.43255021940024,265.88866666666667C429.7883617266705,254.70569075591985,458.49998474121094,174.8175875,472.85579624848117,167.80163333333334C487.2116077557514,160.78567916666668,515.9232307702919,201.86290050091074,530.2790422775621,209.76103333333333C544.7926099552419,217.74595883424408,573.8197453106014,225.94065833333332,588.3333129882812,231.33386666666667L588.3333129882812,312L69,312Z" fill-opacity="1"></path><path style="" fill="none" stroke="#0b62a4" d="M69,286.4952666666667C83.51356767767979,286.2274,112.54070303303938,288.1096416666667,127.05427071071917,285.4238C141.56783838839897,282.7379583333334,170.59497374375854,266.1976752276867,185.10854142143833,265.00853333333333C199.46435292870856,263.83231689435337,228.17597594324903,278.2445980662983,242.53178745051926,275.96236666666664C256.72984278737994,273.705214732965,285.1259534611013,249.10166346153846,299.32400879796194,246.851C313.83757647564175,244.5503217948718,342.8647118310013,255.37729166666668,357.3782795086811,257.757C371.8918471863609,260.13670833333333,400.9189825417204,277.1945324225865,415.43255021940024,265.88866666666667C429.7883617266705,254.70569075591985,458.49998474121094,174.8175875,472.85579624848117,167.80163333333334C487.2116077557514,160.78567916666668,515.9232307702919,201.86290050091074,530.2790422775621,209.76103333333333C544.7926099552419,217.74595883424408,573.8197453106014,225.94065833333332,588.3333129882812,231.33386666666667" stroke-width="3"></path><circle cx="69" cy="286.4952666666667" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="127.05427071071917" cy="285.4238" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="185.10854142143833" cy="265.00853333333333" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="242.53178745051926" cy="275.96236666666664" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="299.32400879796194" cy="246.851" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="357.3782795086811" cy="257.757" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="415.43255021940024" cy="265.88866666666667" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="472.85579624848117" cy="167.80163333333334" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="530.2790422775621" cy="209.76103333333333" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="588.3333129882812" cy="231.33386666666667" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="left: 237.324px; top: 142px; display: none;"><div class="morris-hover-row-label">2011 Q1</div><div class="morris-hover-point" style="color: #0b62a4">
  iPhone:
  6,810
</div><div class="morris-hover-point" style="color: #7A92A3">
  iPad:
  1,914
</div><div class="morris-hover-point" style="color: #4da74d">
  iPod Touch:
  2,293
</div></div></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart" style="position: relative;"><svg height="347" version="1.1" width="398.8833312988281" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.433319px; top: -0.75px;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="36.5" y="312" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,312H373.8833312988281" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="36.5" y="240.25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">25</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,240.25H373.8833312988281" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="36.5" y="168.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">50</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,168.5H373.8833312988281" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="36.5" y="96.75" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">75</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,96.75H373.8833312988281" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="36.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">100</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M49,25H373.8833312988281" stroke-width="0.5"></path><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="350.6773790631975" y="324.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2012</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="257.8535701206752" y="324.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2010</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="165.0297611781529" y="324.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2008</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="72.20595223563058" y="324.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2006</tspan></text><rect x="54.801488058907644" y="25" width="15.904464176722936" height="287" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="73.70595223563058" y="53.69999999999999" width="15.904464176722936" height="258.3" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="101.21339253016879" y="96.75" width="15.904464176722936" height="215.25" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="120.11785670689173" y="125.44999999999999" width="15.904464176722936" height="186.55" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="147.62529700142994" y="168.5" width="15.904464176722936" height="143.5" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="166.52976117815288" y="197.2" width="15.904464176722936" height="114.80000000000001" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="194.03720147269112" y="96.75" width="15.904464176722936" height="215.25" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="212.94166564941406" y="125.44999999999999" width="15.904464176722936" height="186.55" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="240.44910594395228" y="168.5" width="15.904464176722936" height="143.5" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="259.3535701206752" y="197.2" width="15.904464176722936" height="114.80000000000001" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="286.86101041521346" y="96.75" width="15.904464176722936" height="215.25" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="305.76547459193637" y="125.44999999999999" width="15.904464176722936" height="186.55" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="333.2729148864746" y="25" width="15.904464176722936" height="287" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect><rect x="352.1773790631975" y="53.69999999999999" width="15.904464176722936" height="258.3" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    <!-- /.panel -->
                </div>
			          </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop