<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
     <?php $header = 3 ?>
     <?php $footer = 2 ?>
     <?php include 'layouts/header.php' ?>
     <div class="bodyPart row mx-0 flex-fill overflow-hidden dashboardPage">
          <div class="scrollPart col-12 d-flex flex-column"> <!-- ### SCROLL PART START ### -->
               <div class="row flex-fill">
                    <div class="container-fluid">
                         <div class="container pt-4">
                              <div class="row">
                                   <div class="col-12 pageHeading fw-700 mb-3"><span class="d-block">Dashboard</span></div>
                              </div>
                              <div class="row g-3 gap-lg-4 pb-3 pb-sm-0 flex-nowrap flex-sm-wrap overflow-auto">
                                   <div class="col-7 col-sm-4 col-lg dTopCardWrapper text-center text-md-start">
                                        <div class="dTopCard row mx-0 py-3 align-items-center">
                                             <div class="col-md-auto dTopImg"><img src="<?php echo iii ?>assets/img/dash1.png" alt=""></div>
                                             <div class="col-md ps-md-0 mt-2 mt-md-0">
                                                  <span class="d-block dTopValue fw-600">1,568,00</span>
                                                  <span class="d-block dTopName">Total Inquires</span>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-7 col-sm-4 col-lg dTopCardWrapper text-center text-md-start">
                                        <div class="dTopCard row mx-0 py-3 align-items-center">
                                             <div class="col-md-auto dTopImg"><img src="<?php echo iii ?>assets/img/dash2.png" alt=""></div>
                                             <div class="col-md ps-md-0 mt-2 mt-md-0">
                                                  <span class="d-block dTopValue fw-600">1,568,00</span>
                                                  <span class="d-block dTopName">Total Products</span>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-7 col-sm-4 col-lg dTopCardWrapper text-center text-md-start">
                                        <div class="dTopCard row mx-0 py-3 align-items-center">
                                             <div class="col-md-auto dTopImg"><img src="<?php echo iii ?>assets/img/dash3.png" alt=""></div>
                                             <div class="col-md ps-md-0 mt-2 mt-md-0">
                                                  <span class="d-block dTopValue fw-600">1,568,00</span>
                                                  <span class="d-block dTopName">Products Out Of Stock</span>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="row mt-3 mt-sm-4 dSectionWrapper mx-0">
                                   <div class="col-12 px-0">
                                        <div class="row sectionHeader mx-0 align-items-center py-3">
                                             <div class="col SectionTitle fw-600"><span class="d-block">Latest Inquiries</span></div>
                                             <div class="col-auto SectionBtn d-sm-none">
                                                  <a href="javascript:;" class="ViewBtn btn rounded"><span class="d-block">View All</span></a>
                                             </div>
                                             <div class="col-sm-8 col-md-6 col-lg-5 col-xl-4">
                                                  <div class="row mx-0 formStyle2">
                                                       <div class="col px-0 mt-2 mt-sm-0">
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control searchInput" placeholder="Search Keyword...">
                                                                 <img class="searchIconImg" src="<?php echo iii ?>assets/img/searchIcon.png" alt="">
                                                            </div>
                                                       </div>
                                                       <div class="col-auto SectionBtn d-none d-sm-block">
                                                            <a href="javascript:;" class="ViewBtn btn rounded"><span class="d-block">View All</span></a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-12 px-0">
                                        <div class="customTableWrapper dashBoardTable" id="customTableWrapper">     
                                             <table id="dashboardInquiryTable" class="table dt-responsive nowrap customTable customDashboardTable mb-3 overflow-hidden border-strat-0 border-end-0" style="width:100%">
                                                  <thead>
                                                       <tr>
                                                            <th>Product ID</th>
                                                            <th>Inquiry Date</th>
                                                            <th>Product Name</th>
                                                            <th>Qty Inquire</th>
                                                            <th>Price</th>
                                                            <th data-priority="1">Customer Name</th>
                                                            <th>Location</th>
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
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="row mt-3 mt-sm-4 dSectionWrapper dSectionHidden mx-0">
                                             <div class="col-12 px-0">
                                                  <div class="row sectionHeader mx-0 align-items-center py-3">
                                                       <div class="col SectionTitle fw-600"><span class="d-block">My Inbox</span></div>
                                                       <div class="col-auto SectionBtn">
                                                            <a href="javascript:;" class="ViewBtn btn rounded"><span class="d-block">View All</span></a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-12 px-0">
                                                  <div class="customTableWrapper dashBoardTable" id="customTableWrapper1">     
                                                       <table id="dashboardInboxTable" class="table dt-responsive nowrap customTable customDashboardTable mb-3 overflow-hidden border-strat-0 border-end-0" style="width:100%">
                                                            <thead>
                                                                 <tr>
                                                                      <th>Buyer Name</th>
                                                                      <th>Message</th>
                                                                      <th data-priority="1">Date</th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <tr class="inquiryRow dInboxRow unread">
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/inquiryUser1.png" alt=""></div></div>
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block inquiryUserName">William Babin</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/attatch.png" alt=""></div>
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block">I'll let you know how it goes once we wrap thing lore</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>06-08-2022</td>
                                                                 </tr>
                                                                 <tr class="inquiryRow dInboxRow unread">
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <div class="col-auto">
                                                                                     <!-- <div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/User2.png" alt=""></div> -->
                                                                                     <div class="inquiryUserImgName"><span>rf</span></div>
                                                                                </div>
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block inquiryUserName">Renee Faulkner</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <!-- <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/attatch.png" alt=""></div> -->
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block">I'll let you know how it goes once we wrap thing lore</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>06-08-2022</td>
                                                                 </tr>
                                                                 <tr class="inquiryRow dInboxRow unread">
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/User5.png" alt=""></div></div>
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block inquiryUserName">Marshall Edwards</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <!-- <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/attatch.png" alt=""></div> -->
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block">I'll let you know how it goes once we wrap thing lore</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>06-08-2022</td>
                                                                 </tr>
                                                                 <tr class="inquiryRow dInboxRow unread">
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <div class="col-auto">
                                                                                     <!-- <div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/User4.png" alt=""></div> -->
                                                                                     <div class="inquiryUserImgName"><span>sm</span></div>
                                                                                </div>
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block inquiryUserName">Samuel Mike</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/attatch.png" alt=""></div>
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block">I'll let you know how it goes once we wrap thing lore</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>06-08-2022</td>
                                                                 </tr>
                                                                 <tr class="inquiryRow dInboxRow">
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/User2.png" alt=""></div></div>
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block inquiryUserName">William Babin</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <!-- <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/attatch.png" alt=""></div> -->
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block">I'll let you know how it goes once we wrap thing lore</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>06-08-2022</td>
                                                                 </tr>
                                                                 <tr class="inquiryRow dInboxRow">
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <div class="col-auto"><div class="inquiryUserImg"><img class="" src="<?php echo iii ?>assets/img/User3.png" alt=""></div></div>
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block inquiryUserName">William Babin</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>
                                                                           <div class="row flex-nowrap align-items-center">
                                                                                <!-- <div class="col-auto"><img class="inquiryLocationImg" src="<?php echo iii ?>assets/img/attatch.png" alt=""></div> -->
                                                                                <div class="col ps-0">
                                                                                     <span class="d-block">I'll let you know how it goes once we wrap thing lore</span>
                                                                                </div>
                                                                           </div>
                                                                      </td>
                                                                      <td>06-08-2022</td>
                                                                 </tr>
                                                            </tbody>
                                                       </table>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="row mt-3 mt-sm-4 dSectionWrapper dSectionHidden mx-0">
                                             <div class="col-12 px-0">
                                                  <div class="row sectionHeader mx-0 align-items-center py-3">
                                                       <div class="col SectionTitle fw-600"><span class="d-block">Recent Chats</span></div>
                                                       <div class="col-auto SectionBtn">
                                                            <a href="javascript:;" class="ViewBtn btn rounded"><span class="d-block">View All</span></a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-12 px-0">
                                                  <div class="row mx-0 dChatSection">
                                                       <div class="col-12">
                                                            <div class="row align-items-center dChatRow unread">
                                                                 <div class="col-auto dCUserImg"><img class="" src="<?php echo iii ?>assets/img/user1.png" alt=""></div>
                                                                 <div class="col ps-0">
                                                                      <span class="d-block dCUserName fw-600">William Babin</span>
                                                                      <span class="d-block dCUserMsg">I'll let you know how it goes once we wrap thing lore</span>
                                                                 </div>
                                                                 <div class="col-auto ">
                                                                      <span class="d-block dCUserTime">09:30 AM</span>
                                                                      <div class="d-flex align-items-center justify-content-center rounded-circle ms-auto dCUserMsgNo"><span class="d-block">10</span></div>
                                                                 </div>
                                                            </div>
                                                            <div class="row align-items-center dChatRow unread">
                                                                 <div class="col-auto dCUserImg"><img class="" src="<?php echo iii ?>assets/img/user5.png" alt=""></div>
                                                                 <div class="col ps-0">
                                                                      <span class="d-block dCUserName fw-600">Marshall Edwards</span>
                                                                      <span class="d-block dCUserMsg">I'll let you know how it goes once we wrap thing lore</span>
                                                                 </div>
                                                                 <div class="col-auto ">
                                                                      <span class="d-block dCUserTime">09:30 AM</span>
                                                                      <div class="d-flex align-items-center justify-content-center rounded-circle ms-auto dCUserMsgNo"><span class="d-block">10</span></div>
                                                                 </div>
                                                            </div>
                                                            <div class="row align-items-center dChatRow">
                                                                 <div class="col-auto dCUserImg"><img class="" src="<?php echo iii ?>assets/img/user4.png" alt=""></div>
                                                                 <div class="col ps-0">
                                                                      <span class="d-block dCUserName fw-600">Renee Faulkner</span>
                                                                      <span class="d-block dCUserMsg">I'll let you know how it goes once we wrap thing lore</span>
                                                                 </div>
                                                                 <div class="col-auto ">
                                                                      <span class="d-block dCUserTime">09:30 AM</span>
                                                                 </div>
                                                            </div>
                                                            <div class="row align-items-center dChatRow">
                                                                 <div class="col-auto dCUserImg"><img class="" src="<?php echo iii ?>assets/img/user3.png" alt=""></div>
                                                                 <div class="col ps-0">
                                                                      <span class="d-block dCUserName fw-600">Samuel Mike</span>
                                                                      <span class="d-block dCUserMsg">I'll let you know how it goes once we wrap thing lore</span>
                                                                 </div>
                                                                 <div class="col-auto ">
                                                                      <span class="d-block dCUserTime">Yesterday</span>
                                                                 </div>
                                                            </div>
                                                            <div class="row align-items-center dChatRow">
                                                                 <div class="col-auto dCUserImg"><img class="" src="<?php echo iii ?>assets/img/user2.png" alt=""></div>
                                                                 <div class="col ps-0">
                                                                      <span class="d-block dCUserName fw-600">Renee Faulkner</span>
                                                                      <span class="d-block dCUserMsg">I'll let you know how it goes once we wrap thing lore</span>
                                                                 </div>
                                                                 <div class="col-auto ">
                                                                      <span class="d-block dCUserTime">03-Aug-2022</span>
                                                                 </div>
                                                            </div>
                                                            <div class="row align-items-center dChatRow">
                                                                 <div class="col-auto dCUserImg"><img class="" src="<?php echo iii ?>assets/img/user2.png" alt=""></div>
                                                                 <div class="col ps-0">
                                                                      <span class="d-block dCUserName fw-600">Renee Faulkner</span>
                                                                      <span class="d-block dCUserMsg">I'll let you know how it goes once we wrap thing lore</span>
                                                                 </div>
                                                                 <div class="col-auto ">
                                                                      <span class="d-block dCUserTime">03-Aug-2022</span>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-7 col-xl-8">
                                        <div class="row mt-3 mt-sm-4 dSectionWrapper mx-0 highchartSection h-100">
                                             <div class="col-12 px-0">
                                                  <div class="row sectionHeader mx-0 align-items-center py-3">
                                                       <div class="col SectionTitle fw-600"><span class="d-block">Enquiry Received</span></div>
                                                       <div class="col-auto formStyle3">
                                                            <select class="form-select shadow-none">
                                                                 <option value="">August 2022</option>
                                                                 <option value="">September 2022</option>
                                                                 <option value="">October 2022</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-12 px-0">
                                                  <div class="row mx-0 mb-3">
                                                       <div class="col-12 graphName fw-600"><span>Total Enquiries in August</span></div>
                                                       <div class="col-12 graphValue"><span>6,582</span></div>
                                                  </div>
                                                  <figure class="highcharts-figure mb-0">
                                                       <div id="chart1"></div>
                                                  </figure>
                                                  <div class="row mx-0 px-2">
                                                       <div class="col-12 labelContainer text-center"><span class="d-block labelText">Total enquiries received</span></div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-lg-5 col-xl-4">
                                        <div class="row mt-3 mt-sm-4 dSectionWrapper mx-0 highchartSection h-100">
                                             <div class="col-12 px-0">
                                                  <div class="row sectionHeader mx-0 align-items-center py-3">
                                                       <div class="col SectionTitle fw-600"><span class="d-block">Most Viewed</span></div>
                                                       <div class="col-auto formStyle3">
                                                            <select class="form-select shadow-none">
                                                                 <option value="">August 2022</option>
                                                                 <option value="">September 2022</option>
                                                                 <option value="">October 2022</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-sm-9 col-md-7 col-lg-12 mx-auto px-0">
                                                  <figure class="highcharts-figure">
                                                       <div id="chart2"></div>
                                                  </figure>
                                                  <div class="row mx-0 g-2 px-2 pb-3">
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #288EC5;"></span><span class="d-block labelText">Building and construction</span></div>
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #90E2FF;"></span><span class="d-block labelText">Home and Garden</span></div>
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #4B82C6;"></span><span class="d-block labelText">Consumer Electronics</span></div>
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #409ED6;"></span><span class="d-block labelText">Beauty and Personal Care</span></div>
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #6C74BF;"></span><span class="d-block labelText">Apparel</span></div>
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #0072A6;"></span><span class="d-block labelText">Sport and Entertainment</span></div>
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #8963B0;"></span><span class="d-block labelText">Vehicle Parts and Accessories</span></div>
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #0072A6;"></span><span class="d-block labelText">Toys & Hobbies</span></div>
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #A05199;"></span><span class="d-block labelText">Machinery</span></div>
                                                       <div class="col-6 d-flex align-items-center labelContainer"><span class="d-block labelColor me-2" style="background-color: #005689;"></span><span class="d-block labelText">Rubbers & Plastics</span></div>
                                                  </div>
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
<!-- <script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script> -->
<?php include 'layouts/footer-link.php' ?>

<script>
     $(document).ready(function() {
          window.chart = new Highcharts.Chart({
               chart: {
                    renderTo: 'chart1',
                    height: (8 / 16 * 100) + '%',
                    // panning: false,
               },
               title: false,
               xAxis: {
                    gridLineColor: '#e9ecef',
                    gridLineWidth: (0.063) + 'em',
                    gridLineDashStyle: 'longdash',
                    type: 'datetime',
                    tickInterval: 24 * 3600000,
                    labels: {
                         rotation: 0,
                         style: {
                              fontSize: (0.55) + 'em',
                         },
                         formatter: function() {
                              // return Highcharts.dateFormat(' %d %b', this.value);
                              return Highcharts.dateFormat(' %d <br> %b', this.value);
                         }
                    },
                    scrollbar: {
                    enabled: true
                    },
                    min: Date.parse('8/7/2022') - (6 * 24 * 3600000) - 50000000 ,
                    max: Date.parse('8/17/2022') - (6 * 24 * 3600000) - 50000000 ,
                    tickLength: 0
               },
               yAxis: {
                    lineColor: '#dee2e6',
                    lineWidth: 1,
                    min: 0,
                    title: false,
                    gridLineColor: 'transparent'
               },  
               tooltip: {
                    backgroundColor: '#298ec6',
                    borderColor :'#298ec6',
                    style: {
                         align : 'center'
                    },
                    formatter: function () {
                         return  '<span style=" color: white; font-weight:bold; text-align:center;">' + this.y + '</span>'  +'<br>' + '<span style=" color: #e9ecef;">' + Highcharts.dateFormat(' %d-%b-%Y', this.x) + '</span>'; 
                    }
               },
               plotOptions: {
                    spline: {
                         lineColor: '#298ec6'
                    },
                    series: {
                         marker: {
                              fillColor: '#ffffff',
                              lineWidth: (0.2) + 'em',
                              lineColor: '#298ec6',
                         },
                         states: {
                              hover: {
                                   enabled: true,
                                   lineWidth: (0.2) + 'em',
                              }
                         }
                    }
               },
               legend: {
                    symbolWidth: 0,
               },
               series: [{
                    showInLegend: false,
                    name: 'Total enquiries received',
                    data: [
                         [Date.parse('8/1/2022'), 100], 
                         [Date.parse('8/2/2022'), 180], 
                         [Date.parse('8/3/2022'), 205], 
                         [Date.parse('8/4/2022'), 190], 
                         [Date.parse('8/5/2022'), 260], 
                         [Date.parse('8/6/2022'), 125], 
                         [Date.parse('8/7/2022'), 135], 
                         [Date.parse('8/8/2022'), 205], 
                         [Date.parse('8/9/2022'), 160], 
                         [Date.parse('8/10/2022'), 175], 
                         [Date.parse('8/11/2022'), 215],
                         [Date.parse('8/12/2022'), 206],
                         [Date.parse('8/13/2022'), 310],
                         [Date.parse('8/14/2022'), 280],
                         [Date.parse('8/15/2022'), 340],
                         [Date.parse('8/16/2022'), 340],
                         [Date.parse('8/17/2022'), 380],
                         [Date.parse('8/18/2022'), 300],
                         [Date.parse('8/19/2022'), 325],
                         [Date.parse('8/20/2022'), 350],
                         [Date.parse('8/21/2022'), 375],
                         [Date.parse('8/22/2022'), 375],
                         [Date.parse('8/23/2022'), 375],
                         [Date.parse('8/24/2022'), 400], 
                         [Date.parse('8/25/2022'), 375],
                         [Date.parse('8/28/2022'), 370],
                         [Date.parse('8/29/2022'), 400],
                         [Date.parse('8/30/2022'), 420],
                         [Date.parse('8/31/2022'), 450],
                    ],
                    type: 'spline',         
                    lineWidth: (0.2) + 'em',
               }]
          });
     });
</script>


<script>
     Highcharts.chart('chart2', {
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
                    colors: [ '#288EC5', '#4B82C6',  '#6C74BF', '#8963B0', '#A05199', '#90E2FF', '#409ED6', '#0072A6','#0072A6', '#005689',],
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
                    ['Building and construction', 20],
                    ['Consumer Electronics', 15],
                    ['Apparel', 15],
                    ['Vehicle Parts and Accessories', 15],
                    ['Machinery', 25],
                    ['Home and Garden', 25], 
                    ['Beauty and Personal Care', 15],
                    ['Sport and Entertainment', 20],
                    ['Toys & Hobbies', 10],
                    ['Rubbers & Plastics', 5],
               ]
          }]
     });
</script>







