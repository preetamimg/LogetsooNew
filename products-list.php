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
                                   <div class="col-auto heading fw-700"><span class="d-block">Products</span></div>
                                   <div class="col-12 col-lg">
                                        <div class="row formStyle3 justify-content-end mt-2 mt-lg-0">
                                             <div class="col-6 col-sm-8 col-md-12 col-lg-auto pe-0 mb-md-2 mb-lg-0 listSarchWrapper">
                                                  <div class="position-relative">
                                                       <input type="text" class="form-control searchInput" placeholder="Search Keyword...">
                                                       <img class="searchIconImg" src="<?php echo iii ?>assets/img/searchIcon.png" alt="">
                                                  </div>
                                             </div>
                                             <div class="col-6 col-sm-4 col-md col-lg-auto pe-md-0">
                                                  <select name="" id="" class="form-select">
                                                       <option value="">All Category</option>
                                                       <option value="">option1</option>
                                                  </select>
                                             </div>
                                             <div class="col-6 col-sm-4 col-md col-lg-auto pe-0 mt-2 mt-md-0">
                                                  <select name="" id="" class="form-select">
                                                       <option value="">Product Status</option>
                                                       <option value="">option1</option>
                                                  </select>
                                             </div>
                                             <div class="col-6 col-sm col-md-auto pe-sm-0 mt-2 mt-md-0">
                                                  <div class="position-relative">
                                                       <input type="text" class="form-control notRequired calendarInput" id="dateRange" placeholder="Select date range" autocomplete="off">
                                                       <img class="calendarIconImg" src="<?php echo iii ?>assets/img/calendarIcon.png" alt="">
                                                  </div>
                                             </div>
                                             <div class="col-6 col-sm-auto mt-2 mt-md-0 pe-0">
                                                  <button class="btn btn-theme1 shadow-none sendReviewBtn w-100"  data-bs-toggle="modal" data-bs-target="#sendReview"><span class="d-block">Send Review</span></button>
                                             </div>
                                             <div class="col-6 col-sm-auto mt-2 mt-md-0">
                                                  <a href="<?php echo iii ?>add-product.php" class="btn btn-theme1 shadow-none sendReviewBtn w-100"><span class="d-block">Add Product</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="customTableWrapper" id="customTableWrapper">     
                                   <table id="productListTable" class="table dt-responsive nowrap customTable mb-3" style="width:100%">
                                        <thead>
                                             <tr>
                                                  <th class="plusIcon"></th>
                                                  <th><span class="box"></span></th>
                                                  <th>Status</th>
                                                  <th>Product Name</th>
                                                  <th>Created Date</th>
                                                  <th>Category</th>
                                                  <th>Price</th>
                                                  <th>Available Qty</th>
                                                  <th data-priority="1" class="text-center text-md-start">Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody class="proListTableBody">
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Active</td>
                                                  <td class="proName">OnePlus 108 cm4K Ultra HD Smart Android LED TV 43Y1S Pro2022</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div>
                                                  </td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Inactive</td>
                                                  <td class="proName">Universal TV Remote Control for All Brands TV HDTV LCD Set Top Box Digital</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td class="outOfStock">Out of Stock</td>
                                                  <td class="proName">Mini drone camera with obstacle avoidance Toy drone 4k camera gps 5g</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Active</td>
                                                  <td class="proName">headphones In-ear Earphones headphones Sport Earbuds Headset</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td class="zeroQty">0</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Active</td>
                                                  <td class="proName">Luxury Universal Racing Sport Seats Car For Sale</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Inactive</td>
                                                  <td class="proName">automotive led 60w h8 h9 h11 h13 high power led car headlight bulb h1 h4 h7 le</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td class="outOfStock">Out of Stock</td>
                                                  <td class="proName">VR Battleship amusement park products virtual reality theme park prod</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Active</td>
                                                  <td class="proName">UAV Drone Sprayers Agriculture Machinery Equipment with Camera GPS</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td class="zeroQty">0</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Active</td>
                                                  <td class="proName">OnePlus 108 cm4K Ultra HD Smart Android LED TV 43Y1S Pro2022</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Inactive</td>
                                                  <td class="proName">Mini luggage case for lashes pink color customade lash boxes lash luggage</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td class="outOfStock">Out of Stock</td>
                                                  <td class="proName">OnePlus 108 cm4K Ultra HD Smart Android LED TV 43Y1S Pro2022</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Active</td>
                                                  <td class="proName">eAirtec 81 cms (32 inches) HD Ready LED TV 32DJ (Black)</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td class="zeroQty">0</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Active</td>
                                                  <td class="proName">eAirtec 81 cms (32 inches) HD Ready LED TV 32DJ (Black)</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Inactive</td>
                                                  <td>eAirtec 81 cms (32 inches) HD Ready LED TV 32DJ (Black)</td>
                                                  <td>06-08-2022 </td>
                                                  <td class="proName">Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td class="outOfStock">Out of Stock</td>
                                                  <td class="proName">eAirtec 81 cms (32 inches) HD Ready LED TV 32DJ (Black)</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td>1,000</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
                                             </tr>
                                             <tr>
                                                  <td  class="plusIcon"></td>
                                                  <td></td>
                                                  <td>Active</td>
                                                  <td class="proName">eAirtec 81 cms (32 inches) HD Ready LED TV 32DJ (Black)</td>
                                                  <td>06-08-2022 </td>
                                                  <td>Consumer Electronics</td>
                                                  <td>AED 100.50</td>
                                                  <td class="zeroQty">0</td>
                                                  <td class="text-center">
                                                       <div class="d-flex align-items-center justify-content-center">
                                                       <a href="<?php echo iii ?>add-product.php"><img class="actionImg" src="<?php echo iii ?>assets/img/action.png" alt=""></a>
                                                       <button class="btn btnStyle2 border-0"><img class="actionImg2 ms-3" src="<?php echo iii ?>assets/img/deleteAction.png" alt=""></button>
                                                       </div></td>
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
     <!-- Send Review Modal -->
     <div class="modal fade sendReviewModal" id="sendReview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sendReviewLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                    <div class="modal-header">
                         <div class="modalTitle fw-600" id="sendReviewLabel"><span>Send Review</span></div>
                         <img class="closeBtn" data-bs-dismiss="modal" aria-label="Close" src="<?php echo iii ?>assets/img/x.png" alt="">
                    </div>
                    <div class="modal-body">
                         <form class="formStyle3 row needs-validation" novalidate>
                              <div class="col-12 mt-n1">    
                                   <label for="validationCustomQtyStock" class="form-label fw-600">Buyer Name *</label>
                                   <div class="position-relative">
                                        <input type="text" class="form-control" id="validationCustomQtyStock" placeholder="Enter name" required autocomplete="off">
                                        <div class="invalid-feedback">
                                             Please enter buyer name.
                                        </div>
                                   </div>
                              </div>
                              <div class="col-12 mt-2">    
                                   <label for="validationCustomQtyStock" class="form-label fw-600">Buyer Email Address *</label>
                                   <div class="position-relative">
                                        <input type="text" class="form-control" id="validationCustomQtyStock" placeholder="Enter email address" required autocomplete="off">
                                        <div class="invalid-feedback">
                                             Please enter email address.
                                        </div>
                                   </div>
                              </div>
                              <div class="col-12 mt-3">
                                   <button type="submit" class="btn btn-theme1 shadow-none sendReviewBtn"><span class="d-block">Send Review</span></button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</main>
<?php include 'layouts/footer-link.php' ?>





