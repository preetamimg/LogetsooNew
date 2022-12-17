<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
     <?php $header = 3 ?>
     <?php $footer = 2 ?>
     <?php include 'layouts/header.php' ?>
     <div class="bodyPart row mx-0 flex-fill overflow-hidden dashboardPage reportsPage">
          <div class="scrollPart col-12 d-flex flex-column"> <!-- ### SCROLL PART START ### -->
               <div class="row flex-fill">
                    <div class="container-fluid">
                         <div class="container pt-4">
                              <div class="row">
                                   <div class="col-12 pageHeading fw-700 mb-3"><span class="d-block">My Package Report</span></div>
                              </div>
                              <div class="row g-3 gap-lg-4 pb-3 pb-lg-0 flex-nowrap flex-lg-wrap overflow-auto">
                                   <div class="col-7 col-sm-5 col-lg dTopCardWrapper text-center text-md-start">
                                        <div class="dTopCard row mx-0 py-3 align-items-center h-100">
                                             <div class="col-md-auto dTopImg"><img src="<?php echo iii ?>assets/img/repo1.png" alt=""></div>
                                             <div class="col-md ps-md-0 mt-2 mt-md-0">
                                                  <span class="d-block dTopValue fw-600">4</span>
                                                  <span class="d-block dTopName">Total Subscribed Packages</span>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-7 col-sm-5 col-lg dTopCardWrapper text-center text-md-start">
                                        <div class="dTopCard row mx-0 py-3 align-items-center h-100">
                                             <div class="col-md-auto dTopImg"><img src="<?php echo iii ?>assets/img/repo2.png" alt=""></div>
                                             <div class="col-md ps-md-0 mt-2 mt-md-0">
                                                  <span class="d-block dTopValue fw-600">4,658</span>
                                                  <span class="d-block dTopName">Total Clicks</span>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-7 col-sm-5 col-lg dTopCardWrapper text-center text-md-start">
                                        <div class="dTopCard row mx-0 py-3 align-items-center h-100">
                                             <div class="col-md-auto dTopImg"><img src="<?php echo iii ?>assets/img/repo3.png" alt=""></div>
                                             <div class="col-md ps-md-0 mt-2 mt-md-0">
                                                  <span class="d-block dTopValue fw-600">10,689</span>
                                                  <span class="d-block dTopName">Total Impressions</span>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="row mt-3 mt-sm-4 dSectionWrapper mx-0">
                                   <div class="col-12 px-0">
                                        <div class="row sectionHeader mx-0 align-items-center py-3">
                                             <div class="col SectionTitle fw-600"><span class="d-block">Package Detail</span></div>
                                        </div>
                                   </div>
                                   <div class="col-12 px-0">
                                        <div class="customTableWrapper dashBoardTable" id="customTableWrapper">     
                                             <table id="dashboardInquiryTable" class="table dt-responsive nowrap customTable customDashboardTable mb-3 overflow-hidden border-strat-0 border-end-0" style="width:100%">
                                                  <thead>
                                                       <tr>
                                                            <th>Package Name</th>
                                                            <th>Package Location</th>
                                                            <th>Package Price</th>
                                                            <th>Total Clicks</th>
                                                            <th>Total Impressions</th>
                                                            <th data-priority="1">Expires On</th>
                                                            <th>Status</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr class="inquiryRow">
                                                            <td>
                                                                 <div class="row flex-nowrap align-items-center">
                                                                      <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/pack1.png" alt=""></div>
                                                                      <div class="col ps-0">
                                                                           <span class="d-block">Elite</span>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div class="row flex-nowrap align-items-center">
                                                                      <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/pack11.png" alt=""></div>
                                                                      <div class="col ps-0">
                                                                           <span class="d-block">Home Page</span>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>$500</td>
                                                            <td>785</td>
                                                            <td>2,985</td>
                                                            <td>01-12-2022</td>
                                                            <td><span class="statusPill bg-success text-success">Approved</span></td>
                                                       </tr>
                                                       <tr class="inquiryRow">
                                                            <td>
                                                                 <div class="row flex-nowrap align-items-center">
                                                                      <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/pack2.png" alt=""></div>
                                                                      <div class="col ps-0">
                                                                           <span class="d-block">Silver</span>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div class="row flex-nowrap align-items-center">
                                                                      <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/pack22.png" alt=""></div>
                                                                      <div class="col ps-0">
                                                                           <span class="d-block">In The Home Page</span>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>$350</td>
                                                            <td>456</td>
                                                            <td>1,800</td>
                                                            <td>01-12-2022</td>
                                                            <td><span class="statusPill pendingPill">Pending</span></td>
                                                       </tr>
                                                       <tr class="inquiryRow">
                                                            <td>
                                                                 <div class="row flex-nowrap align-items-center">
                                                                      <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/pack3.png" alt=""></div>
                                                                      <div class="col ps-0">
                                                                           <span class="d-block">Platinum</span>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div class="row flex-nowrap align-items-center">
                                                                      <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/pack33.png" alt=""></div>
                                                                      <div class="col ps-0">
                                                                           <span class="d-block">Product Listing Page</span>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>$250</td>
                                                            <td>357</td>
                                                            <td>987</td>
                                                            <td>31-11-2022</td>
                                                            <td><span class="statusPill bg-danger text-danger">Expired</span></td>
                                                       </tr>
                                                       <tr class="inquiryRow">
                                                            <td>
                                                                 <div class="row flex-nowrap align-items-center">
                                                                      <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/pack4.png" alt=""></div>
                                                                      <div class="col ps-0">
                                                                           <span class="d-block">Gold</span>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 <div class="row flex-nowrap align-items-center">
                                                                      <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/pack44.png" alt=""></div>
                                                                      <div class="col ps-0">
                                                                           <span class="d-block">Product Detailed Page</span>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>$100</td>
                                                            <td>159</td>
                                                            <td>587</td>
                                                            <td>01-10-2022</td>
                                                            <td><span class="statusPill bg-danger text-danger">Expired</span></td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                              <div class="row g-4">
                                   <div class="col-lg-4">
                                        <div class="row mt-3 mt-sm-4 dSectionWrapper mx-0 highchartSection h-100">
                                             <div class="col-12 px-0">
                                                  <div class="row sectionHeader mx-0 align-items-center py-3">
                                                       <div class="col SectionTitle fw-600"><span class="d-block">Status Of The Packages</span></div>
                                                       <div class="col-auto formStyle3">
                                                            <select class="form-select shadow-none">
                                                                 <option value="">2022</option>
                                                                 <option value="">2021</option>
                                                                 <option value="">2020</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-sm-9 col-md-7 col-lg-12 mx-auto px-0">
                                                  <figure class="highcharts-figure mb-0">
                                                       <div id="chart1"></div>
                                                  </figure>
                                                  <div class="row mx-0 g-2 px-2 pb-3">
                                                       <div class="col-sm-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #8fb838;"></span><span class="d-block labelText1">Approved Packages</span><span class="d-block ms-auto labelVal" style="color: #8fb838;">50.0%</span></div>
                                                       <div class="col-sm-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #f7aa36;"></span><span class="d-block labelText1">Pending Packages</span><span class="d-block ms-auto labelVal" style="color: #f7aa36;">50.0%</span></div>
                                                       <div class="col-sm-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #ec5051;"></span><span class="d-block labelText1">Expired Packages</span><span class="d-block ms-auto labelVal" style="color: #ec5051;">50.0%</span></div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-4">
                                        <div class="row mt-3 mt-sm-4 dSectionWrapper mx-0 highchartSection h-100">
                                             <div class="col-12 px-0">
                                                  <div class="row sectionHeader mx-0 align-items-center py-3">
                                                       <div class="col SectionTitle fw-600"><span class="d-block">Top Click On Package</span></div>
                                                       <div class="col-auto formStyle3">
                                                            <select class="form-select shadow-none">
                                                                 <option value="">Last Month</option>
                                                                 <option value="">Sep 2022</option>
                                                                 <option value="">Oct 2022</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-sm-9 col-md-7 col-lg-12 mx-auto px-0">
                                                  <figure class="highcharts-figure mb-0">
                                                       <div id="chart2"></div>
                                                  </figure>
                                                  <div class="row mx-0 g-2 px-2 pb-3 justify-content-between">
                                                       <div class="col-6 col-xl-5 d-flex align-items-center labelContainer"><div class="labelImg me-2"><img class="" src="<?php echo iii ?>assets/img/pack1.png" alt=""></div><span class="d-block labelText">Elite</span><span class="d-block ms-auto labelVal" style="color: #8fb838;">50.0%</span></div>
                                                       <div class="col-6 col-xl-5 d-flex align-items-center labelContainer"><div class="labelImg me-2"><img class="" src="<?php echo iii ?>assets/img/pack2.png" alt=""></div><span class="d-block labelText">Silver</span><span class="d-block ms-auto labelVal" style="color: #8fb838;">50.0%</span></div>
                                                       <div class="col-6 col-xl-5 d-flex align-items-center labelContainer"><div class="labelImg me-2"><img class="" src="<?php echo iii ?>assets/img/pack3.png" alt=""></div><span class="d-block labelText">Platnum</span><span class="d-block ms-auto labelVal" style="color: #8fb838;">50.0%</span></div>
                                                       <div class="col-6 col-xl-5 d-flex align-items-center labelContainer"><div class="labelImg me-2"><img class="" src="<?php echo iii ?>assets/img/pack4.png" alt=""></div><span class="d-block labelText">Gold</span><span class="d-block ms-auto labelVal" style="color: #8fb838;">50.0%</span></div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>                                  
                                   <div class="col-lg-4">
                                        <div class="row mt-3 mt-sm-4 dSectionWrapper mx-0 highchartSection h-100">
                                             <div class="col-12 px-0">
                                                  <div class="row sectionHeader mx-0 align-items-center py-3">
                                                       <div class="col SectionTitle fw-600"><span class="d-block">Top Impressions On Package</span></div>
                                                       <div class="col-auto formStyle3">
                                                            <select class="form-select shadow-none">
                                                                 <option value="">2021</option>
                                                                 <option value="">S2022</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-sm-9 col-md-7 col-lg-12 mx-auto px-0">
                                                  <figure class="highcharts-figure mb-0">
                                                       <div id="chart3"></div>
                                                  </figure>
                                                  <div class="row mx-0 g-2 px-2 pb-3 justify-content-between">
                                                       <div class="col-6 col-xl-5 d-flex align-items-center labelContainer"><img class="me-2" src="<?php echo iii ?>assets/img/pack1.png" alt=""><span class="d-block labelText">Elite</span><span class="d-block ms-auto labelVal" style="color: #8fb838;">50.0%</span></div>
                                                       <div class="col-6 col-xl-5 d-flex align-items-center labelContainer"><img class="me-2" src="<?php echo iii ?>assets/img/pack2.png" alt=""><span class="d-block labelText">Silver</span><span class="d-block ms-auto labelVal" style="color: #8fb838;">50.0%</span></div>
                                                       <div class="col-6 col-xl-5 d-flex align-items-center labelContainer"><img class="me-2" src="<?php echo iii ?>assets/img/pack3.png" alt=""><span class="d-block labelText">Platnum</span><span class="d-block ms-auto labelVal" style="color: #8fb838;">50.0%</span></div>
                                                       <div class="col-6 col-xl-5 d-flex align-items-center labelContainer"><img class="me-2" src="<?php echo iii ?>assets/img/pack4.png" alt=""><span class="d-block labelText">Gold</span><span class="d-block ms-auto labelVal" style="color: #8fb838;">50.0%</span></div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>                                 
                                   <div class="col-12">
                                        <div class="row mt-3 mt-sm-4 dSectionWrapper mx-0 highchartSection h-100">
                                             <div class="col-12 px-0">
                                                  <div class="row sectionHeader mx-0 align-items-center py-3">
                                                       <div class="col SectionTitle fw-600"><span class="d-block">Top Country Wise Analytics</span></div>
                                                       <div class="col-auto formStyle3">
                                                            <select class="form-select shadow-none">
                                                                 <option value="">April</option>
                                                                 <option value="">May</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-12 px-0">
                                                  <div class="row mx-0 mb-3">
                                                       <div class="col-lg">
                                                            <div class="row g-2 g-md-4">
                                                                 <div class="col-6 col-md-auto brRight">
                                                                      <div class="d-flex align-items-center">
                                                                           <div class="analyticImg me-2">
                                                                                <img class="" src="<?php echo iii ?>assets/img/chart-ti.png" alt="">
                                                                           </div>
                                                                           <div>
                                                                                <div class="analyticsName fw-600"><span class="d-block">Total Impressions</span></div>
                                                                                <div class="analyticsVal"><span class="d-block">90, 689</span></div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-6 col-md-auto brRight">
                                                                      <div class="d-flex align-items-center">
                                                                           <div class="analyticImg me-2">
                                                                                <img class="" src="<?php echo iii ?>assets/img/chat-tc.png" alt="">
                                                                           </div>
                                                                           <div>
                                                                                <div class="analyticsName fw-600"><span class="d-block">Total Clicks</span></div>
                                                                                <div class="analyticsVal"><span class="d-block">1,05,000</span></div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-6 col-md-auto brRight">
                                                                      <div class="analyticsName fw-600"><span class="d-block">Average Impression</span></div>
                                                                      <div class="analyticsVal"><span class="d-block">78.00%</span></div>
                                                                 </div>
                                                                 <div class="col-6 col-md-auto">
                                                                      <div class="analyticsName fw-600"><span class="d-block">Average Clicks</span></div>
                                                                      <div class="analyticsVal"><span class="d-block">30.35%</span></div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-auto mt-2 mt-lg-0">
                                                            <div class="row justify-content-lg-end flex-lg-column">
                                                                 <div class="col-auto">
                                                                      <div class="d-flex align-items-center labelContainer py-1"><span class="d-block labelColor me-2" style="background-color: #288ec6;"></span><span class="d-block labelText1">Impressions</span></div>
                                                                 </div>
                                                                 <div class="col-auto">
                                                                      <div class="d-flex align-items-center labelContainer py-1"><span class="d-block labelColor me-2" style="background-color: #ae3f79;"></span><span class="d-block labelText1">Clicks Received</span></div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <figure class="highcharts-figure mb-0" style="height: 17em;">
                                                       <div class="h-100" id="chart4"></div>
                                                  </figure>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row mt-5">
                    <?php include 'layouts/footer.php' ?>
               </div>
          </div> <!-- ### SCROLL PART END ### -->
     </div>
</main>
<?php include 'layouts/footer-link.php' ?>

<script>
     Highcharts.chart('chart1', {
          chart: {
               height: (14 / 16 * 100) + '%',
               plotBackgroundColor: null,
               plotBorderWidth: 0,
               plotShadow: false,
          },
          title: false,
          tooltip: {
                    backgroundColor: '#ffffff',
                    borderColor :'#ffffff',
                    pointFormat: '<b>{point.percentage:.1f}%</b> <br>'

          },
          accessibility: {
               point: {
                    valueSuffix: '%'
               }
          },
          plotOptions: {
               pie: {
                    colors: [ '#8fb838', '#f7aa36',  '#ec5051'],
                    dataLabels: {
                         enabled: false,
                         distance: -50,
                         style: {
                              fontWeight: 'bold',
                              color: 'white'
                         }
                    },
                    startAngle: 0,
                    endAngle: 360,
                    size: '100%'
               },
          },
          series: [{
               type: 'pie',
               name: 'Most Viewed',
               innerSize: '0%',
               colorByPoint: true,
               data: [
                    ['Approved Packages', 50],
                    ['Pending Packages', 30],
                    ['Expired Packages', 20],
               ]
          }]
     });
</script>

<script>
     function renderIcons() {
     }
     Highcharts.chart('chart2', {
     chart: {
          height: (14 / 16 * 100) + '%',
          type: 'solidgauge',
          events: {
               render: renderIcons
          }
     },
     title: false,
     tooltip: {
          borderWidth: 0,
          backgroundColor: 'white',
          shadow: true,
          valueSuffix: '%',
          pointFormat: '{series.name}<br><span style="font-size:2em; color: {point.color}; font-weight: bold">{point.y}</span>',
          positioner: function (labelWidth) {
               return {
                    x: (this.chart.chartWidth - labelWidth) / 2,
                    y: (this.chart.plotHeight / 2) + 15
               };
          }
     },
     pane: {
          startAngle: 0,
          endAngle: 360,
          background: [{ 
               outerRadius: '105%',
               innerRadius: '95%',
               backgroundColor: '#eeeeee',
               borderWidth: 0
          }, 
          { 
          outerRadius: '85%',
          innerRadius: '75%',
          backgroundColor: '#eeeeee',
          borderWidth: 0
          }, 
          { 
          outerRadius: '65%',
          innerRadius: '55%',
          backgroundColor:'#eeeeee',
          borderWidth: 0,
          },
          { 
          outerRadius: '45%',
          innerRadius: '35%',
          backgroundColor: '#eeeeee',
          borderWidth: 0,
          }]
     },
     yAxis: {
          min: 0,
          max: 100,
          lineWidth: 0,
          tickPositions: []
     },
     plotOptions: {
          solidgauge: {
               dataLabels: {
                    enabled: false
               },
               linecap: 'round',
               stickyTracking: false,
               rounded: true
          }
     },
     series: [{
          name: 'Move',
               data: [{
                    color: '#298ec6',
                    radius: '105%',
                    innerRadius: '95%',
                    y: 80
               }]
          }, 
          {
          name: 'Exercise',
               data: [{
                    color: '#4b82c5',
                    radius: '85%',
                    innerRadius: '75%',
                    y: 65
               }]
          },
          {
          name: 'Stand',
               data: [{
                    color: '#6c74bf',
                    radius: '65%',
                    innerRadius: '55%',
                    y: 50
               }]
          },
          {
          name: 'new',
               data: [{
                    color: '#a1519a',
                    radius: '45%',
                    innerRadius: '35%',
                    y: 50
               }]
          }]
     });
</script>

<script>
     Highcharts.chart('chart3', {
          chart: {
               height: (14 / 16 * 100) + '%',
               plotBackgroundColor: null,
               plotBorderWidth: 0,
               plotShadow: false,
          },
          title: {
               text: '<span class="titleValue" style="color:black; font-weight:bold;">15,3690</span><br><span  style="color:#adb5bd; font-weight:bold;">Total View</span>',
               align: 'center',
               verticalAlign: 'middle',
               y: 25
          },
          tooltip: {
                    backgroundColor: '#ffffff',
                    borderColor :'#ffffff',
                    pointFormat: '<b>{point.percentage:.1f}%</b> <br>'

          },
          accessibility: {
               point: {
                    valueSuffix: '%'
               }
          },
          plotOptions: {
               pie: {
                    colors: [ '#4b82c5', '#6c74bf',  '#a1519a', '#298ec6',],
                    dataLabels: {
                         enabled: false,
                         distance: -50,
                         style: {
                              fontWeight: 'bold',
                              color: 'white'
                         }
                    },
                    startAngle: 0,
                    endAngle: 360,
                    size: '100%'
               },
          },
          series: [{
               type: 'pie',
               name: 'Most Viewed',
               innerSize: '60%',
               colorByPoint: true,
               data: [
                    ['Building and construction', 35],
                    ['Consumer Electronics', 15],
                    ['Apparel', 30],
                    ['Vehicle Parts and Accessories', 20],
               ]
          }]
     });
</script>

<script>
     Highcharts.chart('chart4', {
          chart: {
               type: 'spline',
               // height: (100) + '%',      
          },
          title: false,
          xAxis: {
               categories: ['Kuwait', 'Saudi Arabia', 'Qatar', 'UAE', 'Bahrain', 'Jordan','Oman', 'Turkey', 'Yemen', 'Iran', 'Israel', 'Lebanon'],
          },
          yAxis: {
               title: false,
               labels: {
                    formatter: function () {
                         return '<span style="">' + this.value + '%' + '</span>';
                    }
               }
          },
          tooltip: {
               backgroundColor: '#288ec6',
               formatter: function () {
                    return this.points.reduce(function (s, point) {
                    return '<span style="color: #ffffff;">' + s + '</span>' +'<br/>' + '<span style="color: #ffffff90;">' + point.series.name + ': ' + '</span>' + '<span style="color: #ffffff;">' + point.y  + '%' + '</span>';}, '<span class="color: red;">' + this.x + '</span>');
               },
               shared: true,
          },
          plotOptions: {
               spline: {
                    marker: {
                         radius: 4,
                         lineColor: '#666666',
                         lineWidth: 1
                    }
               }
          },
          series: [{
               showInLegend: false,
               name: 'Impressions',
               marker: false,
               data: [35, 70, 82, 55, 70, 48, 20,  35, 60, 35, 76, 90],         
               lineWidth: (0.2) + 'em',
               lineColor: '#288ec6',
          },
          {
               showInLegend: false,
               name: 'Clicks Received',
               marker: false,
               data: [ 75, 23, 65, 45, 10, 28, 90, 27, 26, 15, 70, 35],         
               lineWidth: (0.2) + 'em',
               lineColor: '#ae3f79',
          }]
     });
</script>







