<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
     <?php $header = 3 ?>
     <?php $footer = 2 ?>
     <?php include 'layouts/header.php' ?>
     <div class="bodyPart row mx-0 flex-fill overflow-hidden addProductPage">
          <div class="scrollPart col-12"> <!-- ### SCROLL PART START ### -->
               <div class="container">
                    <div class="row justify-content-center">
                         <div class="col-12 addProductCard">
                              <div class="row">
                                   <div class="col-auto startCard py-md-4 pt-1">
                                        <div class="row navItems flex-md-column-reverse flex-row-reverse align-items-center flex-md-wrap flex-nowrap justify-content-md-start justify-content-between">
                                             <a class="col-md-12 col navItem pt-2 pb-md-3 pb-3 text-decoration-none position-relative d-md-flex align-items-center" id="nav7">
                                                  <div class="row mx-0 navIcon justify-content-center">
                                                       <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                  </div>
                                                  <div class="row ms-md-2 ms-0 me-0 pt-md-0 pt-1 navTitle justify-content-center">
                                                       <span class="col-auto d-md-none fw-900">7</span>
                                                       <span class="col-auto d-md-block d-none">Descriptions</span>
                                                  </div>
                                             </a>
                                             <a class="col-md-12 col navItem pt-2 pb-md-3 pb-3 text-decoration-none position-relative d-md-flex align-items-center" id="nav6">
                                                  <div class="row mx-0 navIcon justify-content-center">
                                                       <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                  </div>
                                                  <div class="row ms-md-2 ms-0 me-0 pt-md-0 pt-1 navTitle justify-content-center">
                                                       <span class="col-auto d-md-none fw-900">6</span>
                                                       <span class="col-auto d-md-block d-none">Technical Information</span>
                                                  </div>
                                             </a>
                                             <a class="col-md-12 col navItem pt-2 pb-md-3 pb-3 text-decoration-none position-relative d-md-flex align-items-center" id="nav5">
                                                  <div class="row mx-0 navIcon justify-content-center">
                                                       <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                  </div>
                                                  <div class="row ms-md-2 ms-0 me-0 pt-md-0 pt-1 navTitle justify-content-center">
                                                       <span class="col-auto d-md-none fw-900">5</span>
                                                       <span class="col-auto d-md-block d-none">More Details</span>
                                                  </div>
                                             </a>
                                             <a class="col-md-12 col navItem pt-2 pb-md-3 pb-3 text-decoration-none position-relative d-md-flex align-items-center" id="nav4">
                                                  <div class="row mx-0 navIcon justify-content-center">
                                                       <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                  </div>
                                                  <div class="row ms-md-2 ms-0 me-0 pt-md-0 pt-1 navTitle justify-content-center">
                                                       <span class="col-auto d-md-none fw-900">4</span>
                                                       <span class="col-auto d-md-block d-none">Product Images</span>
                                                  </div>
                                             </a>
                                             <a class="col-md-12 col navItem pt-2 pb-md-3 pb-3 text-decoration-none position-relative d-md-flex align-items-center" id="nav3">
                                                  <div class="row mx-0 navIcon justify-content-center">
                                                       <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                  </div>
                                                  <div class="row ms-md-2 ms-0 me-0 pt-md-0 pt-1 navTitle justify-content-center">
                                                       <span class="col-auto d-md-none fw-900">3</span>
                                                       <span class="col-auto d-md-block d-none">Variants</span>
                                                  </div>
                                             </a>
                                             <a class="col-md-12 col navItem pt-2 pb-md-3 pb-3 text-decoration-none position-relative d-md-flex align-items-center" id="nav2">
                                                  <div class="row mx-0 navIcon justify-content-center">
                                                       <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                  </div>
                                                  <div class="row ms-md-2 ms-0 me-0 pt-md-0 pt-1 navTitle justify-content-center">
                                                       <span class="col-auto d-md-none fw-900">2</span>
                                                       <span class="col-auto d-md-block d-none">Price and Offer</span>
                                                  </div>
                                             </a>
                                             <a class="col-md-12 col navItem pt-2 pb-md-3 pb-3 text-decoration-none position-relative d-md-flex align-items-center active" id="nav1">
                                                  <div class="row mx-0 navIcon justify-content-center">
                                                       <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                  </div>
                                                  <div class="row ms-md-2 ms-0 me-0 pt-md-0 pt-1 navTitle justify-content-center">
                                                       <span class="col-auto d-md-none fw-900">1</span>
                                                       <span class="col-auto d-md-block d-none">Basic Information</span>
                                                  </div>
                                             </a>
                                        </div>
                                   </div>
                                   <div class="col endCard bg-white mb-4">
                                        <div class="row addProductCardBody">
                                             <div class="col-xl-9 innerBody bg-white px-4 pt-4 pb-md-5 addProductForm1">
                                                  <div class="row">
                                                       <div class="col-12 px-3 headingAddProduct fw-700 pb-1"><span>Add Product</span></div>
                                                       <div class="col-12 px-3">
                                                            <div class="alert customAlert rounded-pill p-2 pe-4 d-inline-flex align-items-center" role="alert">
                                                                 <img class="me-2" src="<?php echo iii ?>assets/img/infoalert.png" alt="">
                                                                 <span class="d-block">Arabic fields are optional</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <form class="row g-3 addProductForm_needs-validation formStyle3 user-select-none pb-md-5 pb-4" novalidate autocomplete="off">
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomProductCategory" class="form-label fw-600">Product Category *</label>
                                                            <div class="position-relative">
                                                                 <select name="validationCustomProductCategory" class="form-control addProduct1" required id="validationCustomProductCategory">
                                                                      <option value="0">Select product category</option>
                                                                      <option value="0">product 1</option>
                                                                      <option value="1">product 2</option>
                                                                 </select>
                                                                 <div class="invalid-feedback">
                                                                      Please select product category.
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustommanufacturer" class="form-label fw-600">Manufacturer *</label>
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control" id="validationCustommanufacturer" placeholder="Enter manufacturer" required autocomplete="off">
                                                                 <div class="invalid-feedback">
                                                                      Please enter manufacturer. 
                                                                 </div>
                                                                 <div class="row pt-2 inArabicInput">
                                                                      <div class="col-12">
                                                                           <input type="text" class="form-control" id="validationCustomMadeIn" placeholder="أدخل الشركة المصنعة" autocomplete="off">
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال الشركة المصنعة   
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomProductName" class="form-label fw-600">Product Name *</label>
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control" id="validationCustomProductName" placeholder="Enter product name" required autocomplete="off">
                                                                 <div class="invalid-feedback">
                                                                      Please enter product name.
                                                                 </div>
                                                                 <div class="row pt-2 inArabicInput">
                                                                      <div class="col-12">
                                                                           <input type="text" class="form-control" id="validationCustomMadeIn" placeholder="أدخل اسم المنتج" autocomplete="off">
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال اسم المنتج.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomMadeIn" class="form-label fw-600">Made In *</label>
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control" id="validationCustomMadeIn" placeholder="Enter made in" required autocomplete="off">
                                                                 <div class="invalid-feedback">
                                                                      Please enter made in.
                                                                 </div>
                                                                 <div class="row pt-2 inArabicInput">
                                                                      <div class="col-12">
                                                                           <input type="text" class="form-control" id="validationCustomMadeIn" placeholder="أدخل صنع في" autocomplete="off">
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال صنع في.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomPartNumber" class="form-label fw-600">Part Number *</label>
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control" id="validationCustomPartNumber" placeholder="Enter part number" required autocomplete="off">
                                                                 <div class="invalid-feedback">
                                                                      Please enter part number.
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 px-3 ms-auto position-relative">
                                                            <button class="btn btnStyle2 btn-primary px-5 fw-500" type="submit">
                                                                 <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                 <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                 <span class="beforeText">Save & Next</span>
                                                            </button>
                                                       </div>
                                                  </form>
                                             </div>
                                             <div class="col-xl-9 innerBody bg-white px-4 pt-4 pb-md-5 addProductForm2 d-none">
                                                  <div class="row">
                                                       <div class="col-12 px-3 headingAddProduct fw-700 pb-1"><span>Add Product</span></div>
                                                       <div class="col-12 px-3">
                                                            <div class="alert customAlert rounded-pill p-2 pe-4 d-inline-flex align-items-center" role="alert">
                                                                 <img class="me-2" src="<?php echo iii ?>assets/img/infoalert.png" alt="">
                                                                 <span class="d-block">Arabic fields are optional</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <form class="row g-3 addProductForm_needs-validation2 formStyle3 user-select-none pb-md-5 pb-4" novalidate autocomplete="off">
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomSellerPrice" class="form-label fw-600">Seller Price *</label>
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control" id="validationCustomSellerPrice" placeholder="Enter seller price" required autocomplete="off">
                                                                 <div class="invalid-feedback">
                                                                      Please enter seller price. 
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <div class="row">
                                                                 <div class="col-12">
                                                                      <label for="" class="form-label fw-600">Offer Validity</label>
                                                                 </div>
                                                                 <div class="col-6">
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control notRequired calendarInput" id="startDate" placeholder="Select start date" autocomplete="off">
                                                                           <img class="calendarIconImg" src="<?php echo iii ?>assets/img/calendarIcon.png" alt="">
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-6">
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control notRequired calendarInput" id="endDate" placeholder="Select end date" autocomplete="off">
                                                                           <img class="calendarIconImg" src="<?php echo iii ?>assets/img/calendarIcon.png" alt="">
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomPriceInAED" class="form-label fw-600">Price in AED *</label>
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control" id="validationCustomPriceInAED" placeholder="Enter price in AED" required autocomplete="off">
                                                                 <div class="inputMessage pt-1">
                                                                      <span class="d-block">(Total Price including VAT)</span>
                                                                 </div>
                                                                 <div class="invalid-feedback">
                                                                      Please enter price in AED.
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomQtyStock" class="form-label fw-600">Qty / Stock Available *</label>
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control" id="validationCustomQtyStock" placeholder="Enter qty/Stock" required autocomplete="off">
                                                                 <div class="invalid-feedback">
                                                                      Please enter qty/Stock.
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomOfferPrice" class="form-label fw-600">Offer Price</label>
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control notRequired" id="validationCustomOfferPrice" placeholder="Enter offer price" autocomplete="off">
                                                            </div>
                                                       </div>
                                                       <div class="col-12 px-3 ms-auto d-flex gap-3 align-items-center position-relative">
                                                            <button class="btn btnStyle2 btn-outline-primary fw-500 px-5" type="button" id="backtofirst">Back</button>
                                                            <button class="btn btnStyle2 btn-primary px-5 fw-500" type="submit">
                                                                 <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                 <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                 <span class="beforeText">Save & Next</span>
                                                            </button>
                                                       </div>
                                                  </form>
                                             </div>
                                             <div class="col-xl-9 innerBody bg-white px-4 pt-4 pb-md-5 addProductForm3 d-none">
                                                  <div class="row">
                                                       <div class="col-12 px-3 headingAddProduct fw-700 pb-1"><span>Add Product</span></div>
                                                       <div class="col-12 px-3">
                                                            <div class="alert customAlert rounded-pill p-2 pe-4 d-inline-flex align-items-center" role="alert">
                                                                 <img class="me-2" src="<?php echo iii ?>assets/img/infoalert.png" alt="">
                                                                 <span class="d-block">Arabic fields are optional</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <form class="row g-3 addProductForm_needs-validation3 formStyle3 user-select-none pb-md-5 pb-4" novalidate autocomplete="off">
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomProductSize" class="form-label fw-600 position-relative">Product Size *</label>
                                                            <div class="position-relative">
                                                                 <div class="w-100 position-relative">
                                                                      <input type="text" class="form-control productSizeInput" id="validationCustomProductSize" name='validationCustomProductSize' placeholder="" value='Product size 1, Product size 2' required autocomplete="off">
                                                                      <div class="invalid-feedback">
                                                                           Please enter product size. 
                                                                      </div>
                                                                 </div>
                                                                 <div class="row pt-3 inArabicInput mx-0">
                                                                      <div class="col-12 position-relative p-0">
                                                                           <input type="text" class="form-control productSizeInput" id="validationCustomProductSize2" name='validationCustomProductSize2' placeholder="" value='1 حجم المنتج 2, حجم المنتج ' autocomplete="off">
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال الشركة المصنعة   
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <a href="javascript:;" class="inArabicBtn text-decoration-none pt-1"><strong>+</strong><span>In Arabic</span></a>
                                                            </div>
                                                       </div>

                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomOtherVariants" class="form-label fw-600 position-relative">Other Variants *</label>
                                                            <div class="position-relative">
                                                                 <div class="w-100 position-relative">
                                                                      <input type="text" class="form-control productSizeInput" id="validationCustomOtherVariants" name='validationCustomOtherVariants' placeholder="" value='' required autocomplete="off">
                                                                      <div class="invalid-feedback">
                                                                           Please enter other variants. 
                                                                      </div>
                                                                 </div>
                                                                 <div class="row pt-3 inArabicInput mx-0">
                                                                      <div class="col-12 position-relative p-0">
                                                                           <input type="text" class="form-control productSizeInput" id="validationCustomOtherVariants2" name='validationCustomOtherVariants2' placeholder="" value='' autocomplete="off">
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال الشركة المصنعة   
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <a href="javascript:;" class="inArabicBtn text-decoration-none pt-1"><strong>+</strong><span>In Arabic</span></a>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomProductColor" class="form-label fw-600 position-relative">Product Color *</label>
                                                            <div class="position-relative">
                                                                 <div class="w-100 position-relative">
                                                                      <input type="text" class="form-control productSizeInput" id="validationCustomProductColor" name='validationCustomProductColor' placeholder="" value='' required autocomplete="off">
                                                                      <div class="invalid-feedback">
                                                                           Please enter product color. 
                                                                      </div>
                                                                 </div>
                                                                 <div class="row pt-3 inArabicInput mx-0">
                                                                      <div class="col-12 position-relative p-0">
                                                                           <input type="text" class="form-control productSizeInput" id="validationCustomProductColor2" name='validationCustomProductColor2' placeholder="" value='' autocomplete="off">
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال الشركة المصنعة   
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <a href="javascript:;" class="inArabicBtn text-decoration-none pt-1"><strong>+</strong><span>In Arabic</span></a>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6 px-3">
                                                            <label for="validationCustomOrderMinimumQty" class="form-label fw-600 position-relative">MOQ (Minimum Order Qty) *</label>
                                                            <div class="position-relative">
                                                                 <input type="text" class="form-control" id="validationCustomOrderMinimumQty" placeholder="Enter minimum order qty" required autocomplete="off">
                                                                 <div class="invalid-feedback">
                                                                      Please enter minimum order qty.
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 px-3 ms-auto d-flex gap-3 align-items-center position-relative">
                                                            <button class="btn btnStyle2 btn-outline-primary fw-500 px-5" type="button" id="backtosecond">Back</button>
                                                            <button class="btn btnStyle2 btn-primary px-5 fw-500" type="submit">
                                                                 <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                 <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                 <span class="beforeText">Save & Next</span>
                                                            </button>
                                                       </div>
                                                  </form>
                                             </div>
                                             <div class="col-xl-9 innerBody bg-white px-4 pt-4 pb-md-5 addProductForm4 d-none">
                                                  <form class="row g-3 addProductForm_needs-validation4 formStyle2 user-select-none digit-group pb-md-5 pb-4" novalidate autocomplete="off">
                                                       <div class="col-12">
                                                            <div class="row">
                                                                 <div class="col-12 otpTitle fw-600 pb-1"><span class="d-block">Add Product</span></div>
                                                                 <div class="col-12 px-3">
                                                                      <div class="alert customAlert rounded-pill p-2 pe-4 d-inline-flex align-items-center" role="alert">
                                                                           <img class="me-2" src="<?php echo iii ?>assets/img/infoalert.png" alt="">
                                                                           <span class="d-block">Arabic fields are optional</span>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                            <div class="row gap-sm-0 gap-3">
                                                                 <div class="col-sm-4 dropifyVideoInput">
                                                                      <input type="file" id="validationCustomAddVideo" class="form-control dropifyVideo" required/>
                                                                      <div class="invalid-feedback">
                                                                      Please enter seller price. 
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-sm-4 dropifyImageInput">
                                                                      <input type="file" id="validationCustomAddImage" class="form-control dropifyImage"/>
                                                                 </div>     
                                                                 <div class="col-sm-4 dropifyExtraInput">
                                                                      <input type="file" id="validationCustomAddExtra" class="form-control dropifyExtra"/>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 px-3 ms-auto d-flex gap-3 align-items-center position-relative">
                                                            <button class="btn btnStyle2 btn-outline-primary px-5 fw-500" type="button" id="backtothird">Back</button>
                                                            <button class="btn btnStyle2 btn-primary px-5 fw-500 verifyBtn" type="submit">
                                                                 <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                 <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                 <span class="beforeText">Save & Next</span>
                                                            </button>
                                                       </div>
                                                  </form>
                                             </div>
                                             <div class="col-xl-9 innerBody bg-white px-4 pt-4 pb-md-5 addProductForm5 d-none">
                                                  <div class="row">
                                                       <div class="col-12 headingAddProduct fw-600 px-3 pb-1"><span class="d-block">Add Product</span></div>
                                                       <div class="col-12 px-3">
                                                            <div class="alert customAlert rounded-pill p-2 pe-4 d-inline-flex align-items-center" role="alert">
                                                                 <img class="me-2" src="<?php echo iii ?>assets/img/infoalert.png" alt="">
                                                                 <span class="d-block">Arabic fields are optional</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <form class="row g-3 addProductForm_needs-validation5 formStyle3 user-select-none digit-group pb-md-5 pb-4" novalidate autocomplete="off">
                                                       <div class="col-12">
                                                            <div class="row">
                                                                 <div class="col-lg-6 px-3">
                                                                      <label for="validationCustomShipingTimiline" class="form-label fw-600">Estimated Shipping Timeline *</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control" id="validationCustomShipingTimiline" placeholder="Enter shipping timeline" required autocomplete="off">
                                                                           <div class="invalid-feedback">
                                                                                Please enter estimated shipping timeline. 
                                                                           </div>
                                                                           <div class="row pt-2 inArabicInput">
                                                                                <div class="col-12">
                                                                                     <input type="text" class="form-control" id="validationCustomShipingTimilineArabic" placeholder="أدخل الجدول الزمني للشحن" autocomplete="off">
                                                                                     <div class="invalid-feedback">
                                                                                          الرجاء إدخال الجدول الزمني التقديري للشحن.  
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-lg-6 px-3">
                                                                      <label for="validationCustomProductColor1" class="form-label fw-600 position-relative">Product Color *</label>
                                                                      <div class="position-relative">
                                                                           <div class="w-100 position-relative">
                                                                                <input type="text" class="form-control productSizeInput" id="validationCustomProductColor1" name='validationCustomProductColor1' placeholder="" value='' required autocomplete="off">
                                                                                <div class="invalid-feedback">
                                                                                     Please enter product color. 
                                                                                </div>
                                                                           </div>
                                                                           <div class="row pt-3 inArabicInput mx-0">
                                                                                <div class="col-12 position-relative p-0">
                                                                                     <input type="text" class="form-control productSizeInput" id="validationCustomProductColor4" name='validationCustomProductColor4' placeholder="" value='' autocomplete="off">
                                                                                     <div class="invalid-feedback">
                                                                                          الرجاء إدخال الشركة المصنعة   
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none pt-1"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-lg-6 px-3">
                                                                      <div class="row">
                                                                           <div class="col-12">
                                                                                <label for="validationCustomProductGuaranteeWarrenty" class="form-label fw-600">Guarantee/Warranty *</label>
                                                                                <div class="btn-group w-100 flex-wrap" role="group" aria-label="Basic radio toggle button group">
                                                                                     <input type="radio" class="btn-check" name="validationCustomProductGuaranteeWarrenty" id="validationCustomProductGuaranteeWarrenty1" autocomplete="off" required>
                                                                                     <label class="btn shadow-none productStatusRadioBtn py-3 col-4" for="validationCustomProductGuaranteeWarrenty1"><span class="d-block">Yes</span><span class="d-block">نعم</span></label>
                                                                                
                                                                                     <input type="radio" class="btn-check" name="validationCustomProductGuaranteeWarrenty" id="validationCustomProductGuaranteeWarrenty2" autocomplete="off" required checked>
                                                                                     <label class="btn shadow-none productStatusRadioBtn py-3 col-4" for="validationCustomProductGuaranteeWarrenty2"><span class="d-block">No</span><span class="d-block">رقم</span></label>
                                                                                
                                                                                     <input type="radio" class="btn-check" name="validationCustomProductGuaranteeWarrenty" id="validationCustomProductGuaranteeWarrenty3" autocomplete="off" required>
                                                                                     <label class="btn shadow-none productStatusRadioBtn py-3 col-4" for="validationCustomProductGuaranteeWarrenty3"><span class="d-block">Not Available</span><span class="d-block">غير متوفر</span></label>
                                                                                          <div class="invalid-feedback">
                                                                                               Please select guarantee warranty. 
                                                                                          </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-lg-6 px-3">
                                                                      <label for="validationCustomReturnRefund" class="form-label fw-600">Compliance Certificates(Upto 3 Files) *</label>
                                                                      <div class="row">
                                                                           <div class="col-4 dropifyImageInput1 pe-0">
                                                                                <input type="file" id="validationCustomAddVideo" class="form-control dropifyImage1"/>
                                                                                <div class="invalid-feedback">
                                                                                Please enter seller price. 
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-4 dropifyImageInput1 pe-0">
                                                                                <input type="file" id="validationCustomAddImage" class="form-control dropifyImage1"/>
                                                                           </div>     
                                                                           <div class="col-4 dropifyImageInput1 pe-0">
                                                                                <input type="file" id="validationCustomAddExtra" class="form-control dropifyImage1"/>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-lg-6 px-3">
                                                                      <div class="row">
                                                                           <div class="col-12">
                                                                                <label for="validationCustomReturnRefund" class="form-label fw-600">Returns/Refunds *</label>
                                                                                <div class="btn-group w-100 flex-wrap" role="group" aria-label="Basic radio toggle button group">
                                                                                     <input type="radio" class="btn-check" name="validationCustomReturnRefund" id="validationCustomReturnRefund1" autocomplete="off" required checked>
                                                                                     <label class="btn shadow-none productStatusRadioBtn py-3 col-6" for="validationCustomReturnRefund1"><span class="d-block">Yes</span><span class="d-block">نعم</span></label>
                                                                                     <input type="radio" class="btn-check" name="validationCustomReturnRefund" id="validationCustomReturnRefund3" autocomplete="off" required>
                                                                                     <label class="btn shadow-none productStatusRadioBtn py-3 col-6" for="validationCustomReturnRefund3"><span class="d-block">No</span><span class="d-block">رقم</span></label>
                                                                                          <div class="invalid-feedback">
                                                                                               Please select returns refunds. 
                                                                                          </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 px-3 ms-auto d-flex gap-3 align-items-center position-relative">
                                                            <button class="btn btnStyle2 btn-outline-primary px-5 fw-500" type="button" id="backtofourth">Back</button>
                                                            <button class="btn btnStyle2 btn-primary px-5 fw-500 verifyBtn" type="submit">
                                                                 <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                 <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                 <span class="beforeText">Save & Next</span>
                                                            </button>
                                                       </div>
                                                  </form>
                                             </div>
                                             <div class="col-12 innerBody bg-white px-4 pt-4 pb-md-5 addProductForm6 d-none">
                                                  <form class="row g-3 addProductForm_needs-validation6 formStyle3 user-select-none digit-group pb-md-5 pb-4" novalidate autocomplete="off">
                                                       <div class="col-12">
                                                            <div class="row mx-0">
                                                                 <div class="col-12 otpTitle fw-600 pb-1"><span class="d-block">Add Product</span></div>
                                                                 <div class="col-12 px-3">
                                                                      <div class="alert customAlert rounded-pill p-2 pe-4 d-inline-flex align-items-center" role="alert">
                                                                           <img class="me-2" src="<?php echo iii ?>assets/img/infoalert.png" alt="">
                                                                           <span class="d-block">Arabic fields are optional</span>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                            <div class="row mx-0">
                                                                 <div class="col-lg-6 px-3">
                                                                      <label for="validationCustomEditor" class="form-label fw-600">Product Description *</label>
                                                                      <div class="position-relative">
                                                                           <textarea id="validationCustomEditor" class="form-control editor" required></textarea>
                                                                           <div class="invalid-feedback">
                                                                                Please enter product description.
                                                                           </div>
                                                                           <div class="row pt-2 inArabicInput">
                                                                                <div class="col-12">
                                                                                <textarea id="validationCustomEditor1" class="form-control editor1 arabicEditor"></textarea>
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال وصف المنتج.
                                                                           </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-lg-6 px-3">
                                                                      <label for="validationCustomEditor2" class="form-label fw-600">Product Specifiction *</label>
                                                                      <div class="position-relative">
                                                                           <textarea id="validationCustomEditor2" class="form-control editor3" required></textarea>
                                                                           <div class="invalid-feedback">
                                                                                Please enter product Specifiction.
                                                                           </div>
                                                                           <div class="row pt-2 inArabicInput">
                                                                                <div class="col-12">
                                                                                <textarea id="validationCustomEdito3" class="form-control editor4 arabicEditor"></textarea>
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال مواصفات المنتج.
                                                                           </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                 </div>
                                                                 
                                                                 <div class="col-lg-6 px-3">
                                                                      <label for="validationCustomEditor4" class="form-label fw-600">Product Key Benefits *</label>
                                                                      <div class="position-relative">
                                                                           <textarea id="validationCustomEditor4" class="form-control editor5" required></textarea>
                                                                           <div class="invalid-feedback">
                                                                                Please enter product Key Benefits.
                                                                           </div>
                                                                           <div class="row pt-2 inArabicInput">
                                                                                <div class="col-12">
                                                                                <textarea id="validationCustomEdito5" class="form-control editor6 arabicEditor"></textarea>
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال مزايا مفتاح المنتج.
                                                                           </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-lg-6 px-3">
                                                                      <label for="validationCustomEditor6" class="form-label fw-600">Product Technical Details *</label>
                                                                      <div class="position-relative">
                                                                           <textarea id="validationCustomEditor6" class="form-control editor7" required></textarea>
                                                                           <div class="invalid-feedback">
                                                                                Please enter product Technical Details.
                                                                           </div>
                                                                           <div class="row pt-2 inArabicInput">
                                                                                <div class="col-12">
                                                                                <textarea id="validationCustomEdito7" class="form-control editor8 arabicEditor"></textarea>
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال التفاصيل الفنية للمنتج.
                                                                           </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-lg-6 px-3">
                                                                      <label for="validationCustomEditor8" class="form-label fw-600">Package Specifiction *</label>
                                                                      <div class="position-relative">
                                                                           <textarea id="validationCustomEditor8" class="form-control editor9" required></textarea>
                                                                           <div class="invalid-feedback">
                                                                                Please enter Package description.
                                                                           </div>
                                                                           <div class="row pt-2 inArabicInput">
                                                                                <div class="col-12">
                                                                                <textarea id="validationCustomEdito9" class="form-control editor10 arabicEditor"></textarea>
                                                                           <div class="invalid-feedback">
                                                                                الرجاء إدخال وصف الحزمة.
                                                                           </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 px-4 ms-auto d-flex gap-3 align-items-center position-relative">
                                                            <button class="btn btnStyle2 btn-outline-primary px-5 fw-500" type="button" id="backtofifth">Back</button>
                                                            <button class="btn btnStyle2 btn-primary px-5 fw-500 verifyBtn" type="submit">
                                                                 <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                 <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                 <span class="beforeText">Save & Next</span>
                                                            </button>
                                                       </div>
                                                  </form>
                                             </div>
                                             <div class="col-xl-9 innerBody bg-white px-4 pt-4 pb-md-5 addProductForm7 d-none">
                                                  <div class="row">
                                                       <div class="col-12 px-3 headingAddProduct fw-700 pb-1"><span>Add Product</span></div>
                                                       <div class="col-12 px-3">
                                                            <div class="alert customAlert rounded-pill p-2 pe-4 d-inline-flex align-items-center" role="alert">
                                                                 <img class="me-2" src="<?php echo iii ?>assets/img/infoalert.png" alt="">
                                                                 <span class="d-block">Arabic fields are optional</span>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <form class="row g-3 addProductForm_needs-validation7 formStyle3 user-select-none pb-md-5 pb-4" novalidate autocomplete="off">
                                                       <div class="col-lg-6">
                                                            <div class="row g-3">
                                                                 <div class="col-12 px-3">
                                                                      <label for="validationCustomProductstatus" class="form-label fw-600">Select Product Status *</label>
                                                                      <div class="btn-group w-100 flex-wrap" role="group" aria-label="Basic radio toggle button group">
                                                                           <input type="radio" class="btn-check" name="validationCustomProductstatus" id="validationCustomProductstatus1" autocomplete="off" required>
                                                                           <label class="btn shadow-none productStatusRadioBtn py-3" for="validationCustomProductstatus1"><span class="d-block">Available</span><span class="d-block">متوفرة</span></label>
                                                                      
                                                                           <input type="radio" class="btn-check" name="validationCustomProductstatus" id="validationCustomProductstatus2" autocomplete="off" required checked>
                                                                           <label class="btn shadow-none productStatusRadioBtn py-3" for="validationCustomProductstatus2"><span class="d-block">Out Of Stock</span><span class="d-block">إنتهى من المخزن</span></label>
                                                                      
                                                                           <input type="radio" class="btn-check" name="validationCustomProductstatus" id="validationCustomProductstatus3" autocomplete="off" required>
                                                                           <label class="btn shadow-none productStatusRadioBtn py-3" for="validationCustomProductstatus3"><span class="d-block">Not Available</span><span class="d-block">غير متوفر</span></label>
                                                                                <div class="invalid-feedback">
                                                                                     Please enter product keyword. 
                                                                                </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12 px-3">
                                                                      <label for="tentativeDate" class="form-label fw-600">Tentative Date For Available *</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control calendarInput" id="tentativeDate" placeholder="Select tentative date for available" required autocomplete="off">
                                                                           <img class="calendarIconImg" src="<?php echo iii ?>assets/img/calendarIcon.png" alt="">
                                                                           <div class="invalid-feedback">
                                                                                Please Select tentative date for available. 
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12 px-3">
                                                                      <label for="validationCustomProductKeywords" class="form-label fw-600 position-relative">Product Keywords *</label>
                                                                      <div class="position-relative">
                                                                           <div class="w-100 position-relative">
                                                                                <input type="text" class="form-control productSizeInput" id="validationCustomProductKeywords" name='validationCustomProductKeywords' placeholder="" value='Product Keyword 1, Product Keyword 2' required autocomplete="off">
                                                                                <div class="invalid-feedback">
                                                                                     Please enter product keyword. 
                                                                                </div>
                                                                           </div>
                                                                           <div class="row pt-3 inArabicInput mx-0">
                                                                                <div class="col-12 position-relative p-0">
                                                                                     <input type="text" class="form-control productSizeInput" id="validationCustomProductKeywords2" name='validationCustomProductKeywords2' placeholder="" value='الكلمة الرئيسية للمنتج 1 , الكلمة الرئيسية للمنتج 2' autocomplete="off">
                                                                                     <div class="invalid-feedback">
                                                                                          الرجاء إدخال كلمة المنتج    
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none pt-1"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-lg-6">
                                                            <div class="row g-3">
                                                                 <div class="col-12 px-3">
                                                                      <label for="validationCustomAdditionalInfo" class="form-label fw-600">Product Additional Info *</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control" id="validationCustomAdditionalInfo" placeholder="Enter information 1" required autocomplete="off">
                                                                           <div class="invalid-feedback">
                                                                                Please enter information. 
                                                                           </div>
                                                                           <div class="row pt-2 inArabicInput">
                                                                                <div class="col-12">
                                                                                     <input type="text" class="form-control" id="validationCustomAdditionalInfo1" placeholder="أدخل المعلومات 1" autocomplete="off">
                                                                                     <div class="invalid-feedback">
                                                                                          الرجاء إدخال المعلومات.  
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                      <div class="position-relative pt-2">
                                                                           <input type="text" class="form-control" id="validationCustomAdditionalInfo2" placeholder="Enter information 2" required autocomplete="off">
                                                                           <div class="invalid-feedback">
                                                                                Please enter information. 
                                                                           </div>
                                                                           <div class="row pt-2 inArabicInput">
                                                                                <div class="col-12">
                                                                                     <input type="text" class="form-control" id="validationCustomAdditionalInfo3" placeholder="أدخل المعلومات 2" autocomplete="off">
                                                                                     <div class="invalid-feedback">
                                                                                          الرجاء إدخال المعلومات.  
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <a href="javascript:;" class="inArabicBtn text-decoration-none"><strong>+</strong><span>In Arabic</span></a>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 px-3 ms-auto d-flex gap-3 align-items-center position-relative">
                                                            <button class="btn btnStyle2 btn-outline-primary px-5 fw-500" type="button" id="backtosixth">Back</button>
                                                            <button class="btn btnStyle2 btn-primary px-5 fw-500" type="submit">
                                                                 <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                 <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                 <span class="beforeText">Save & Next</span>
                                                            </button>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <?php include 'layouts/footer.php' ?>
               </div>


          </div> <!-- ### SCROLL PART END ### -->
     </div>
</main>
<?php include 'layouts/footer-link.php' ?>


