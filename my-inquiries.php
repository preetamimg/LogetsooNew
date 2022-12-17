<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
     <?php $header = 3 ?>
     <?php $footer = 2 ?>
     <?php include 'layouts/header.php' ?>
     <div class="bodyPart row mx-0 flex-fill overflow-hidden ProductsListPage">
          <div class="scrollPart col-12 d-flex flex-column"> <!-- ### SCROLL PART START ### -->
               <div class="row flex-fill">
                    <div class="container-fluid">
                         <div class="container pt-4">
                              <div class="row headerRow mb-2">
                                   <div class="col-md-auto heading fw-700"><span class="d-block">My Inquiries</span></div>
                                   <div class="col-md mt-2 mt-md-0">
                                        <div class="row formStyle3 justify-content-end">
                                             <div class="col col-md-5 col-lg-4 col-xl-3 pe-0">
                                                  <div class="position-relative">
                                                       <input type="text" class="form-control searchInput" placeholder="Search Keyword...">
                                                       <img class="searchIconImg" src="<?php echo iii ?>assets/img/searchIcon.png" alt="">
                                                  </div>
                                             </div>
                                             <div class="col-auto">
                                                  <div class="position-relative">
                                                       <input type="text" class="form-control notRequired calendarInput" id="dateRange2" placeholder="Select date range" autocomplete="off">
                                                       <img class="calendarIconImg" src="<?php echo iii ?>assets/img/calendarIcon.png" alt="">
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="customTableWrapper" id="customTableWrapper">     
                                   <table id="inquiryTable" class="table dt-responsive nowrap customTable mb-3" style="width:100%">
                                        <thead>
                                             <tr>
                                                  <th>Product ID</th>
                                                  <th>Inquiry Date</th>
                                                  <th>Product Name</th>
                                                  <th>Qty Inquire</th>
                                                  <th>Price</th>
                                                  <th>Customer Name</th>
                                                  <th>Location</th>
                                                  <th data-priority="1" class="text-center text-md-start">Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro1.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">OnePlus 108 cm4K Ultra HD Smart Android LED TV 43Y1S Pro2022 </span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Chandler, Arkansas</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a data-bs-toggle="offcanvas" data-bs-target="#inboxOffcanvas" aria-controls="inboxOffcanvas"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a data-bs-toggle="offcanvas" data-bs-target="#inquieyoffcanvas" aria-controls="inquieyoffcanvas"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>30032022-05</td>
                                                  <td>15-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro2.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">eAirtec 81 cms (32 inches) HD Ready LED TV 32DJ (Black)(2022 Model)</span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Al Ain, Al Ain,</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro3.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">Kevin 80 cm (32 Inches) HD Ready LED Smart TV K32CV338H (Black) (2021 </span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Muzayri, Emirates,</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro4.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">Huidi 80 cm (32 Inches) HD Ready Smart LED TV HD32D1M18 (Black) (2021 </span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Abu Dhabi Emirate, Al Dhafra,</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro5.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">LG 80 cm (32 inches) HD Ready LED Smart TV 32LK628BPTF(Black)</span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Commune Kasuku, Kindu,</span>
                                                                 <span class="d-block">DR Congo</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro1.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">OnePlus 108 cm4K Ultra HD Smart Android LED TV 43Y1S Pro2022 </span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Chandler, Arkansas</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>30032022-05</td>
                                                  <td>15-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro2.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">eAirtec 81 cms (32 inches) HD Ready LED TV 32DJ (Black)(2022 Model)</span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Al Ain, Al Ain,</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro3.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">Kevin 80 cm (32 Inches) HD Ready LED Smart TV K32CV338H (Black) (2021 </span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Muzayri, Emirates,</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro4.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">Huidi 80 cm (32 Inches) HD Ready Smart LED TV HD32D1M18 (Black) (2021 </span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Abu Dhabi Emirate, Al Dhafra,</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro5.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">LG 80 cm (32 inches) HD Ready LED Smart TV 32LK628BPTF(Black)</span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Commune Kasuku, Kindu,</span>
                                                                 <span class="d-block">DR Congo</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro1.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">OnePlus 108 cm4K Ultra HD Smart Android LED TV 43Y1S Pro2022 </span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Chandler, Arkansas</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>30032022-05</td>
                                                  <td>15-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro2.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">eAirtec 81 cms (32 inches) HD Ready LED TV 32DJ (Black)(2022 Model)</span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Al Ain, Al Ain,</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro3.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">Kevin 80 cm (32 Inches) HD Ready LED Smart TV K32CV338H (Black) (2021 </span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Muzayri, Emirates,</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro4.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">Huidi 80 cm (32 Inches) HD Ready Smart LED TV HD32D1M18 (Black) (2021 </span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Abu Dhabi Emirate, Al Dhafra,</span>
                                                                 <span class="d-block">UAE</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                             <tr class="inquiryRow">
                                                  <td>27122022-01</td>
                                                  <td>06-08-2022</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto inquiryProImg pe-0"><img class="" src="<?php echo iii ?>assets/img/inquirypro5.png" alt=""></div>
                                                            <div class="col inquiryProDetails"><span class="">LG 80 cm (32 inches) HD Ready LED Smart TV 32LK628BPTF(Black)</span></div>
                                                       </div>
                                                  </td>
                                                  <td>1028 Pcs</td>
                                                  <td>AED 100.50</td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block inquiryUserName">William Babin</span>
                                                                 <span class="d-block"><img class="inquiryCallImg pe-1" src="<?php echo iii ?>assets/img/callIcn.png" alt="">503-559-0484</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td>
                                                       <div class="row flex-nowrap align-items-center">
                                                            <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/locationicn.png" alt=""></div>
                                                            <div class="col ps-0">
                                                                 <span class="d-block">Commune Kasuku, Kindu,</span>
                                                                 <span class="d-block">DR Congo</span>
                                                            </div>
                                                       </div>
                                                  </td>
                                                  <td class="text-center">
                                                       <a href="javascript:;"><img class="actionImg1 pe-2" src="<?php echo iii ?>assets/img/emailicn.png" alt=""></a>
                                                       <a href="javascript:;"><img class="actionImg" src="<?php echo iii ?>assets/img/icnchat.png" alt=""></a>
                                                  </td>
                                             </tr>
                                        </tbody>
                                   </table>
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
<!-- inox offcanvas -->
<div class="offcanvas offcanvas-bottom shadow border-0 inboxOffcanvas" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="inboxOffcanvas" aria-labelledby="inboxOffcanvasLabel">
     <div class="offcanvas-header px-0">
          <div class="row mx-0 w-100">
               <div class="col">
                    <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn"><img src="<?php echo iii ?>assets/img/emlprev.png" alt=""></button>
                    <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn ms-2"><img src="<?php echo iii ?>assets/img/emlnext.png" alt=""></button>
               </div>
               <div class="col-auto">
                    <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn"><img src="<?php echo iii ?>assets/img/emlreply.png" alt=""></button>
                    <!-- <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn mx-2"><img src="<?php echo iii ?>assets/img/emlimportant.png" alt=""></button> -->
                    <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 ms-2 topBtn"><img src="<?php echo iii ?>assets/img/emldelete.png" alt=""></button>
                    <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topCloseBtn ms-2" data-bs-dismiss="offcanvas" aria-label="Close"><img src="<?php echo iii ?>assets/img/x.png" alt=""></button>
               </div>
          </div>
     </div>
     <div class="offcanvas-body px-0">
          <div class="row mx-0">
               <div class="col d-flex">
                    <div class="rounded-circle RightuserImg"><img class="me-2" src="<?php echo iii ?>assets/img/user1.png" alt=""></div>
                    <span class="d-block RightuserName">Marshall Edwards</span>
               </div>
               <div class="col-auto RightuserTime">
                    <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""></button>
                    <span>30 Mins</span>
               </div>
               <div class="col-12">
                    <div class="table-responsive mt-2">
                         <table class="table table-borderless rounded customTable">
                              <thead>
                                   <tr>
                                        <th class="productInfoTh" scope="col" colspan="2"><span>Product Information</span></th>
                                        <th class="text-center" scope="col"><span>Size</span></th>
                                        <th class="text-center" scope="col"><span>Color</span></th>
                                        <th class="text-center" scope="col"><span>Qunatity</span></th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <td scope="row"><img class="" src="<?php echo iii ?>assets/img/pro1.png" alt=""></td>
                                        <td class="pe-xl-5"><span class="d-block productInfoTd">OnePlus 108 cm (43 inches) Y Series 4K Ultra HD Smart Android LED TV 43Y1S Pro2022</span></td>
                                        <td class="text-center" scope="row"><span class="d-block productSizeTd">43 Inch</span></td>
                                        <td class="text-center" scope="row"><div class="productColorTd d-flex align-items-center gap-1 justify-content-center"><span class="colorSpan d-block"></span> <span  class="d-block">Silver</span></div></td>
                                        <td class="text-center" scope="row"><span class="d-block productQuantityTd">1,000</span></td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
               <div class="col-12 mb-3">
                    <div class="RightMsgText">
                         <div class="mb-2">Hello There,</div>
                         <div class="mb-2"> Mollis pretium lorem primis senectus habitasse lectus scelerisque donec, ultricies tortor suspendisse adipiscing fusce morbi volutpat pellentesque, consectetur mi risus
                         molestie curae malesuada cum. Dignissim lacus convallis massa mauris enim ad mattis magnis senectus montes, mollis taciti phasellus accumsan bibendum semper
                         blandit suspendisse faucibus nibh est, metus lobortis morbi cras magna vivamus per risus fermentum. Dapibus imperdiet praesent magnis ridiculus congue gravida curabitur
                         dictum sagittis, enim et magna sit inceptos sodales parturient pharetra mollis, aenean vel nostra tellus commodo pretium sapien sociosqu.</div>
                         
                         <div class="mb-2">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis sit, euismod libero facilisi aptent elementum felis blandit cursus gravida sociis erat ante, eleifend lectus
                         nullam dapibus netus feugiat curae curabitur est ad. Massa curae fringilla porttitor quam sollicitudin iaculis aptent leo ligula euismod dictumst, orci penatibus mauris eros
                         etiam praesent erat volutpat posuere hac. Metus fringilla nec ullamcorper odio aliquam lacinia conubia mauris tempor, etiam ultricies proin quisque lectus sociis id tristique,
                         integer phasellus taciti pretium adipiscing tortor sagittis ligula. </div>
                    </div>
               </div>
               <div class="col-auto">
                    <img class="attachImg" src="<?php echo iii ?>assets/img/attach1.png" alt="">
               </div>
               <div class="col-auto">
                    <img class="attachImg" src="<?php echo iii ?>assets/img/attach2.png" alt="">
               </div>
          </div>
     </div>
     <div class="offcanvas-footer" id="offFooter">
          <div class="rightInnerBottomSection py-2">
               <div class="row mx-0">
                    <div class="col-auto">
                         <button id="inquiryReplyBtn" class="btn btn-theme1 text-white shadow-none replyBtn px-4"><span>Reply</span></button>
                    </div>
               </div>
          </div>
          <div class="rightInnerBottomSection2 d-none">
               <form>
                    <textarea id="replyEditor8" class="form-control editor12" ></textarea>
                    <div class="row mx-0 py-2 rightInnerBottomSection2Inner">
                         <div class="col-auto">
                              <button class="btn btn-theme1 text-white shadow-none sendBtn px-4"><span>Send</span></button>
                         </div>
                    </div>
               </form>
          </div>
     </div>
</div>
<!-- inquiary mail offcanvas -->
<div class="offcanvas offcanvas-bottom inquiryMailOffcanvas shadow border-0 custonScrollbar" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="inquieyoffcanvas" aria-labelledby="inquieyoffcanvasLabel">
     <div class="offcanvas-header">
          <div class="row mx-0 w-100">
               <div class="col px-0">
                    <div class="row mx-0">
                         <div class="col-auto px-0">
                              <div class="rounded-circle position-relative chatuserImg"><img class="" src="<?php echo iii ?>assets/img/user1.png" alt=""><span class="userStatus online d-inline-flex rounded-circle"></span></div>
                         </div>
                         <div class="col">
                              <div class="chatUserName">William Babin</div>
                              <div class="chatUserStatus">Active</div>
                         </div>
                    </div>
               </div>
               <div class="col-auto px-0">
                    <img class="closeImg" src="<?php echo iii ?>assets/img/x.png" data-bs-dismiss="offcanvas" aria-label="Close" alt="">
               </div>
          </div>
     </div>
     <div class="offcanvas-body d-flex flex-column-reverse px-0">
          <div class="row mx-0 rightChatSide py-2">
               <div class="col-11 col-md-10 col-xl-9">
                    <div class="row mx-0">
                         <div class="col-auto">
                              <div class="rounded-circle position-relative chatuserImg"><img class="" src="<?php echo iii ?>assets/img/user1.png" alt=""></div>
                         </div>
                         <div class="col ps-0">
                              <div class="row mx-0">
                                   <div class="col-12 chatMsgBox rounded">
                                        <span class="chatMsg d-block">agittis sit, euismod libero facilisi aptent elementum felis blandit cursus gravida sociis erat antacn.</span>
                                        <span class="chatTime d-block">12:30 PM</span>
                                   </div>
                                   <div class="col-auto rounded chatAttachedImg mt-2">
                                        <img class=" rounded overflow-hidden" src="<?php echo iii ?>assets/img/attachpro2.png" alt="">
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row mx-0 leftChatSide py-2">
               <div class="col-11 col-md-10 col-xl-9">
                    <div class="row mx-0">
                         <div class="col-auto">
                              <div class="rounded-circle position-relative chatuserImg"><img class="" src="<?php echo iii ?>assets/img/user2.png" alt=""></div>
                         </div>
                         <div class="col ps-0">
                              <div class="row mx-0">
                                   <div class="col-12 chatMsgBox rounded">
                                        <span class="chatMsg d-block">Massa curae fringilla porttitor quam sollicitudin agittis sit, euismod libero .</span>
                                        <span class="chatTime">10:00 AM</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row mx-0 align-items-center dividerSection my-1">
               <div class="col dividerLine"> <span class="d-block"></span></div>
               <div class="col-auto dividerText"><span class="d-block">Today</span></div>
               <div class="col dividerLine"> <span class="d-block"></span></div>
          </div>
          <div class="row mx-0 rightChatSide py-2">
               <div class="col-11 col-md-10 col-xl-9">
                    <div class="row mx-0">
                         <div class="col-auto">
                              <div class="rounded-circle position-relative chatuserImg"><img class="" src="<?php echo iii ?>assets/img/user1.png" alt=""></div>
                         </div>
                         <div class="col ps-0">
                              <div class="row mx-0">
                                   <div class="col-12 chatMsgBox rounded">
                                        <span class="chatMsg d-block">agittis sit, euismod libero facilisi aptent elementum felis blandit cursus gravida sociis erat ante, eleifend lectus nullam dapibus netus feugiat curae curabitur est ad. Massa curae fringilla porttitor quam sollicitudin.</span>
                                        <span class="chatTime d-block">Yesterday  5:56 PM</span>
                                   </div>
                                   <div class="col-auto rounded chatAttachedImg mt-2">
                                        <img class=" rounded overflow-hidden" src="<?php echo iii ?>assets/img/attachpro1.png" alt="">
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row mx-0 leftChatSide py-2">
               <div class="col-11 col-md-10 col-xl-9">
                    <div class="row mx-0">
                         <div class="col-auto">
                              <div class="rounded-circle position-relative chatuserImg"><img class="" src="<?php echo iii ?>assets/img/user2.png" alt=""></div>
                         </div>
                         <div class="col ps-0">
                              <div class="row mx-0">
                                   <div class="col-12 chatMsgBox rounded">
                                        <span class="chatMsg d-block">agittis sit, euismod libero facilisi aptent elementum felis blandit cursus gravida sociis erat ante, eleifend lectus nullam dapibus netus feugiat curae curabitur est ad. Massa curae fringilla porttitor quam sollicitudin.</span>
                                        <span class="chatTime">Yesterday  6:00 PM</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row mx-0 align-items-center dividerSection my-1">
               <div class="col dividerLine"> <span class="d-block"></span></div>
               <div class="col-auto dividerText"><span class="d-block">Yesterday</span></div>
               <div class="col dividerLine"> <span class="d-block"></span></div>
          </div>
     </div>
     <div class="offcanvas-footer py-3">
          <form class="row mx-0 align-items-center formStyle3">
               <div class="col inputField">
                    <input type="text" class="border-0 customEmojimojiInput" id="emojionearea6" placeholder="Type your message here....">
                    <div class="attachImgWrapper">
                         <input type="file" class="d-none" id="attachImg">
                         <label for="attachImg"><img class="attachImgs" src="<?php echo iii ?>assets/img/attachImg.png" alt=""></label>
                    </div>
               </div>
               <div class="col-auto btnField text-end">
                    <button class="btn btn-theme1 text-white shadow-none replyBtn px-4"><span>Send</span></button>
               </div>
          </form>
     </div>
</div>
<?php include 'layouts/footer-link.php' ?>

<script>
     $(document).ready(function(){
  let inquiryReplyBtn = document.querySelector('#inquiryReplyBtn');
  let offFooter = document.querySelector('#offFooter');

  inquiryReplyBtn.addEventListener('click', ()=>{
      offFooter.classList.add('sendMessage')
  });

})
</script>




