<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
     <?php $header = 3 ?>
     <?php $footer = 2 ?>
     <?php include 'layouts/header.php' ?>
     <div class="bodyPart row mx-0 flex-fill overflow-hidden inboxPage">
          <div class="scrollPart col-12 p-0 py-md-4 d-flex flex-column overflow-hidden"> <!-- ### SCROLL PART START ### -->
               <div class="row flex-fill h-100">
                    <div class="container-fluid h-100">
                         <div class="container h-100">
                              <div class="row inboxPageInner h-100">
                                   <div class="col-auto leftInbox h-100 p-0">
                                        <div class="leftInboxInner h-100 d-flex flex-column">
                                             <div class="leftInnerTopSection p-3">
                                                       <a class="nav-link fw-600 position-relative dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Inbox</a>
                                                            <ul class="dropdown-menu m-0 border-0 shadow">
                                                                 <li class="py-1"><a class="dropdown-item rounded" href="#">Action</a></li>
                                                                 <li class="py-1"><a class="dropdown-item rounded" href="#">Another action</a></li>
                                                                 <li class="py-1"><a class="dropdown-item rounded" href="#">Something else here</a></li>
                                                            </ul>
                                                       <div class="position-relative formStyle3 searchBox mt-2">
                                                            <input type="text" class="form-control searchInput border-0 ps-5" id="searchInbox" placeholder="Search keyword...">
                                                            <label class="position-absolute searchImg" for="searchInbox"><img src="<?php echo iii ?>assets/img/searchIcon.png" alt=""></label>
                                                       </div>
                                             </div>
                                             <div class="leftInnerScrollSection flex-fill">
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard unread">
                                                       <div class="col-auto">
                                                            <div class="userBox">
                                                                 <img src="<?php echo iii ?>assets/img/user1.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails ">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12 iUserMessage"><span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                            </div>
                                                       </div>
                                                  </a> 
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard unread">
                                                       <div class="col-auto">
                                                            <div class="userBox">
                                                                 <!-- <img src="<?php echo iii ?>assets/img/user1.png" alt=""> -->
                                                                 <span style="" class="d-flex justify-content-center align-items-center h-100">rf</span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12 iUserMessage"><span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard unread active">
                                                       <div class="col-auto">
                                                            <div class="userBox">
                                                                 <img src="<?php echo iii ?>assets/img/user2.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12 iUserMessage"><span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox">
                                                                 <!-- <img src="<?php echo iii ?>assets/img/user1.png" alt=""> -->
                                                                 <span style="" class="d-flex justify-content-center align-items-center h-100">sm</span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12 iUserMessage"><span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox">
                                                                 <img src="<?php echo iii ?>assets/img/user3.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12 iUserMessage"><span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox">
                                                                 <img src="<?php echo iii ?>assets/img/user4.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12 iUserMessage"><span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox">
                                                                 <img src="<?php echo iii ?>assets/img/user5.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12 iUserMessage"><span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox">
                                                                 <img src="<?php echo iii ?>assets/img/user6.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12 iUserMessage"><span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox">
                                                                 <img src="<?php echo iii ?>assets/img/user1.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12 iUserMessage"><span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                            </div>
                                                       </div>
                                                  </a>
                                             </div>
                                             <!-- <div class="leftInnerBottomSection p-3">
                                                  <nav aria-label="Page navigation example">
                                                       <ul class="pagination justify-content-around m-0">
                                                            <li class="page-item"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none prev" href="#" aria-label="Previous"><img src="<?php echo iii ?>assets/img/leftArrow.png" alt=""></a></li>
                                                            <li class="page-item"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">1</span></a></li>
                                                            <li class="page-item"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">2</span></a></li>
                                                            <li class="page-item"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none active" href="#"><span class="d-block">3</span></a></li>
                                                            <li class="page-item"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">4</span></a></li>
                                                            <li class="page-item"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">5</span></a></li>
                                                            <li class="page-item"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">6</span></a></li>
                                                            <li class="page-item"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">7</span></a></li>
                                                            <li class="page-item"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none next" href="#" aria-label="Next"><img src="<?php echo iii ?>assets/img/rightArrow.png" alt=""></a></li>
                                                       </ul>
                                                  </nav>
                                             </div> -->
                                        </div>
                                   </div>
                                   <div class="col rightInbox h-100">
                                        <div class="rightInboxInner rounded h-100 d-flex flex-column">
                                             <div class="rightInnerTopSection">
                                                  <div class="row mx-0">
                                                       <div class="col">
                                                            <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn"><img src="<?php echo iii ?>assets/img/emlprev.png" alt=""></button>
                                                            <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn ms-2"><img src="<?php echo iii ?>assets/img/emlnext.png" alt=""></button>
                                                       </div>
                                                       <div class="col-auto">
                                                            <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn"><img src="<?php echo iii ?>assets/img/emlreply.png" alt=""></button>
                                                            <!-- <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn mx-3"><img src="<?php echo iii ?>assets/img/emlimportant.png" alt=""></button> -->
                                                            <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 ms-3 topBtn"><img src="<?php echo iii ?>assets/img/emldelete.png" alt=""></button>
                                                            <button class="btn border-0 shadow-none d-inline-flex align-items-center justify-content-center p-0 topBtn d-md-none ms-3 backBtn"><img src="<?php echo iii ?>assets/img/x.png" alt=""></button>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="rightInnerMiddleSection flex-fill">
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
                                             <div class="rightInnerBottomSection py-2">
                                                  <div class="row mx-0">
                                                       <div class="col-auto">
                                                            <button class="btn btn-theme1 text-white shadow-none replyBtnShow replyBtn px-4"><span>Reply</span></button>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="rightInnerBottomSection2 d-none">
                                                  <form>
                                                       <textarea id="replyEditor8" name="replyEditor" class="form-control editor11" required></textarea>
                                                       <div class="row mx-0 py-2 rightInnerBottomSection2Inner">
                                                            <div class="col-auto">
                                                                 <button class="btn btn-theme1 text-white shadow-none sendBtn px-4"><span>Send</span></button>
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div> <!-- ### SCROLL PART END ### -->
     </div>
</main>
<?php include 'layouts/footer-link.php' ?>
