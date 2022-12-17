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
                              <div class="row inboxPageInner chatPageInner h-100">
                                   <div class="col-auto leftInbox h-100 p-0">
                                        <div class="leftInboxInner h-100 d-flex flex-column">
                                             <div class="leftInnerTopSection p-3">
                                                  <div class="chatHeading fw-600">Chats</div>
                                                  <div class="position-relative formStyle3 searchBox mt-2">
                                                       <input type="text" class="form-control searchInput border-0 ps-5" id="searchInbox" placeholder="Search keyword...">
                                                       <label class="position-absolute searchImg" for="searchInbox"><img src="<?php echo iii ?>assets/img/searchIcon.png" alt=""></label>
                                                  </div>
                                             </div>
                                             <div class="leftInnerScrollSection flex-fill">
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard unread">
                                                       <div class="col-auto">
                                                            <div class="userBox position-relative">
                                                                 <img src="<?php echo iii ?>assets/img/user1.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->                        
                                                                 <span class="userStatus online d-inline-flex"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails ">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><span>30 Mins</span></div>
                                                                 <div class="col-12">
                                                                      <div class="row">
                                                                      <div class="col iUserMessage"> <span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                                      <div class="col-auto ps-0 iuserMsgNumber"><div class="userMsgNumber d-flex align-items-center justify-content-center rounded-circle"><span class="">3</span></div></div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </a> 
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard unread">
                                                       <div class="col-auto">
                                                            <div class="userBox position-relative">
                                                                 <!-- <img src="<?php echo iii ?>assets/img/user1.png" alt=""> -->
                                                                 <span style="" class="d-flex justify-content-center align-items-center h-100">rf</span>                       
                                                                 <span class="userStatus offline d-inline-flex"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><span>30 Mins</span></div>
                                                                 <div class="col-12">
                                                                      <div class="row">
                                                                      <div class="col iUserMessage"> <span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard unread active">
                                                       <div class="col-auto">
                                                            <div class="userBox position-relative">
                                                                 <img src="<?php echo iii ?>assets/img/user2.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->                       
                                                                 <span class="userStatus waiting d-inline-flex"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12">
                                                                      <div class="row">
                                                                      <div class="col iUserMessage"> <span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                                      <div class="col-auto ps-0 iuserMsgNumber"><div class="userMsgNumber d-flex align-items-center justify-content-center rounded-circle"><span class="">2</span></div></div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox position-relative">
                                                                 <!-- <img src="<?php echo iii ?>assets/img/user1.png" alt=""> -->
                                                                 <span style="" class="d-flex justify-content-center align-items-center h-100">sm</span>                       
                                                                 <span class="userStatus online d-inline-flex"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"> <span>30 Mins</span></div>
                                                                 <div class="col-12">
                                                                      <div class="row">
                                                                      <div class="col iUserMessage"> <span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox position-relative">
                                                                 <img src="<?php echo iii ?>assets/img/user3.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->                       
                                                                 <span class="userStatus waiting d-inline-flex"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"> <span>30 Mins</span></div>
                                                                 <div class="col-12">
                                                                      <div class="row">
                                                                      <div class="col iUserMessage"> <span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox position-relative">
                                                                 <img src="<?php echo iii ?>assets/img/user4.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->                       
                                                                 <span class="userStatus offline d-inline-flex"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"> <span>30 Mins</span></div>
                                                                 <div class="col-12">
                                                                      <div class="row">
                                                                      <div class="col iUserMessage"> <span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox position-relative">
                                                                 <img src="<?php echo iii ?>assets/img/user5.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->                       
                                                                 <span class="userStatus online d-inline-flex"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"> <span>30 Mins</span></div>
                                                                 <div class="col-12">
                                                                      <div class="row">
                                                                      <div class="col iUserMessage"> <span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox position-relative">
                                                                 <img src="<?php echo iii ?>assets/img/user6.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->                       
                                                                 <span class="userStatus waiting d-inline-flex"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"> <span>30 Mins</span></div>
                                                                 <div class="col-12">
                                                                      <div class="row">
                                                                      <div class="col iUserMessage"> <span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </a>
                                                  <a href="javascript:;" class="row mx-0 py-2 leftInboxCard">
                                                       <div class="col-auto">
                                                            <div class="userBox position-relative">
                                                                 <img src="<?php echo iii ?>assets/img/user1.png" alt="">
                                                                 <!-- <span style="" class="d-flex justify-content-center align-items-center h-100">jb</span> -->                       
                                                                 <span class="userStatus offline d-inline-flex"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="row align-items-center iuserDetails">
                                                                 <div class="col iUserName"><span class="d-block">William Babin</span></div>
                                                                 <div class="col-auto iUserAction"><img src="<?php echo iii ?>assets/img/attatch.png" alt=""> <span>30 Mins</span></div>
                                                                 <div class="col-12">
                                                                      <div class="row">
                                                                      <div class="col iUserMessage"> <span class="d-block">Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis</span></div>
                                                                      </div>
                                                                 </div>
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
                                                       <div class="col-auto">
                                                            <div class="rounded-circle position-relative chatuserImg"><img class="" src="<?php echo iii ?>assets/img/user2.png" alt=""><span class="userStatus online d-inline-flex rounded-circle"></span></div>
                                                       </div>
                                                       <div class="col ps-0">
                                                            <div class="chatUserName">Marshall Edwards</div>
                                                            <div class="chatUserStatus">Away</div>
                                                       </div>
                                                       <div class="col-auto d-md-none">
                                                            <img id="mobcloseImg" class="mobcloseImg" src="<?php echo iii ?>assets/img/x.png" alt="">
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="rightInnerMiddleSection flex-fill d-flex flex-column-reverse">
                                                  <div class="row mx-0 rightChatSide py-2">
                                                       <div class="col-11 col-md-10 col-xl-9">
                                                            <div class="row mx-0">
                                                                 <div class="col-auto">
                                                                      <div class="rounded-circle position-relative chatuserImg"><img class="" src="<?php echo iii ?>assets/img/user1.png" alt=""></div>
                                                                 </div>
                                                                 <div class="col ps-0">
                                                                      <div class="row mx-0">
                                                                           <div class="col-12">
                                                                                <div class="row">
                                                                                     <div class="col-auto chatMsgBox rounded">
                                                                                          <span class="chatMsg d-block">agittis sit, euismod libero facilisi aptent elementum felis blandit cursus gravida sociis erat antacn.</span>
                                                                                          <span class="chatTime d-block">12:30 PM</span>
                                                                                     </div>
                                                                                </div>
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
                                                                           <div class="col-12">
                                                                                <div class="row">
                                                                                     <div class="col-auto chatMsgBox rounded">
                                                                                          <span class="chatMsg d-block">Massa curae fringilla porttitor quam sollicitudin agittis sit, euismod libero .</span>
                                                                                          <span class="chatTime">10:00 AM</span>
                                                                                     </div>
                                                                                </div>
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
                                                                           <div class="col-12">
                                                                                <div class="row">
                                                                                     <div class="col-auto chatMsgBox rounded">
                                                                                          <span class="chatMsg d-block">agittis sit, euismod libero facilisi aptent elementum felis blandit cursus gravida sociis erat ante, eleifend lectus nullam dapibus netus feugiat curae curabitur est ad. Massa curae fringilla porttitor quam sollicitudin.</span>
                                                                                          <span class="chatTime d-block">Yesterday  5:56 PM</span>
                                                                                     </div>
                                                                                </div>
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
                                                                           <div class="col-12">
                                                                                <div class="row">
                                                                                     <div class="col-auto chatMsgBox rounded">
                                                                                          <span class="chatMsg d-block">agittis sit, euismod libero facilisi aptent elementum felis blandit cursus gravida sociis erat ante, eleifend lectus nullam dapibus netus feugiat curae curabitur est ad. Massa curae fringilla porttitor quam sollicitudin.</span>
                                                                                          <span class="chatTime">Yesterday  6:00 PM</span>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-auto rounded chatAttachedImg mt-2">
                                                                                <img class=" rounded overflow-hidden" src="<?php echo iii ?>assets/img/attachpro1.png" alt="">
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
                                             <div class="rightInnerBottomSection py-3">
                                                  <form class="row mx-0 align-items-center position-relative formStyle3">
                                                       <div class="col inputField" id="inputField">
                                                            <input type="text" class="border-0 customEmojimojiInput" id="emojionearea5" placeholder="Type your message here....">
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
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div> <!-- ### SCROLL PART END ### -->
     </div>
</main>
<?php include 'layouts/footer-link.php' ?>

<script>
     $(document).ready(function(){
    let showInput = document.querySelector('#inputField')
      setTimeout(() => {
        showInput.style.visibility = "visible";
      }, 1000);
  })
</script>

<script>
     $(document).ready(function() {
          $("#mobcloseImg").click(function(){
          $(".chatPageInner").removeClass("show");
          });
     })
</script>

