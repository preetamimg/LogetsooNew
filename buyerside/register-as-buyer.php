<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
     <?php $header = 2 ?>
     <?php $footer = 1 ?>
     <?php include 'layouts/header.php' ?>
     <div class="bodyPart row mx-0 flex-fill overflow-hidden registerAsBuyerPage">
          <div class="scrollPart col-12 d-flex flex-column"> <!-- ### SCROLL PART START ### -->
               <div class="row flex-fill">
                    <div class="container-fluid">
                         <div class="container">
                              <div class="row justify-content-center py-5">
                                   <div class="col-12 registerCard">
                                        <div class="row">
                                             <div class="col-12">
                                                  <div class="row navItems flex-row-reverse align-items-center">
                                                       <a href="javascript:;" class="col navItem text-decoration-none position-relative" id="nav3">
                                                            <div class="row navIcon justify-content-center">
                                                                 <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                            </div>
                                                            <div class="row navTitle justify-content-center pt-2">
                                                                 <span class="col-auto">Verification</span>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:;" class="col navItem text-decoration-none position-relative" id="nav2">
                                                            <div class="row navIcon justify-content-center">
                                                                 <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                            </div>
                                                            <div class="row navTitle justify-content-center pt-2">
                                                                 <span class="col-auto">Address Detail</span>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:;" class="col navItem text-decoration-none position-relative active" id="nav1">
                                                            <div class="row navIcon justify-content-center">
                                                                 <span class="col-auto rounded-pill p-0 d-flex position-relative"></span>
                                                            </div>
                                                            <div class="row navTitle justify-content-center pt-2">
                                                                 <span class="col-auto">Personal Info</span>
                                                            </div>
                                                       </a>
                                                  </div>
                                             </div>
                                             <div class="col-12 pt-4">
                                                  <div class="row registerCardBody justify-content-center">
                                                       <div class="col-12 innerBody bg-white rounded p-4 form1">
                                                            <form class="row g-3 needs-validation formStyle2 user-select-none" novalidate autocomplete="off">
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomFirstname" class="form-label">First Name *</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control" id="validationCustomFirstname" placeholder="Enter first name" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/icuser.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter first name.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomLastname" class="form-label">Last Name *</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control" id="validationCustomLastname" placeholder="Enter last name" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/icuser.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter last name.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomemail" class="form-label">Email Address *</label>
                                                                      <div class="position-relative">
                                                                           <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" type="email" class="form-control" id="validationCustomemail" placeholder="Enter email address" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/icemail.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter email address.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomnumber" class="form-label">Mobile Number *</label>
                                                                      <div class="position-relative">
                                                                           <input onkeypress="return isNumberKey(event)" pattern="[0-9]{1}[0-9]{9}" minlength="10" maxlength="10" type="text" class="form-control" id="validationCustomnumber" placeholder="Enter mobile number" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/icnmobile.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter valid mobile number.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomPassword" class="form-label">Password *</label>
                                                                      <div class="position-relative">
                                                                           <input type="password" class="form-control" id="validationCustomPassword" placeholder="Enter password" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/pass.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter password.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomConfirmPassword" class="form-label">Confirm Password *</label>
                                                                      <div class="position-relative">
                                                                           <input type="password" class="form-control" id="validationCustomConfirmPassword" placeholder="Enter confirm password" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/pass.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter confirm password.
                                                                           </div>
                                                                           <div class="invalid-feedback2 d-none" id="invalidPassword">
                                                                                Password not match.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-6 ms-auto">
                                                                      <button class="btn btnStyle2 btn-primary w-100 fw-500" type="submit">
                                                                           <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                           <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                           <span class="beforeText">Continue</span>
                                                                      </button>
                                                                 </div>
                                                            </form>
                                                       </div>
                                                       <div class="col-12 innerBody bg-white rounded p-4 form2 d-none">
                                                            <form class="row g-3 needs-validation2 formStyle2 user-select-none" novalidate autocomplete="off">
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomRegisteredAddress1" class="form-label">Address Line 1*</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control" id="validationCustomRegisteredAddress1" placeholder="Enter address line 1" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/icnaddress.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter address line 1.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomRegisteredAddres2" class="form-label">Address Line 2*</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control" id="validationCustomRegisteredAddres2" placeholder="Enter address line 2" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/icnaddress.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter address line 2.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomCity" class="form-label">Enter City *</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control" id="validationCustomCity" placeholder="Enter city" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/buyerside/img/icncity.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter city.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomCountry" class="form-label">Country *</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control" id="validationCustomCountry" name='tags-country' placeholder="Select country" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/icnregion.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please select country.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomState" class="form-label">State *</label>
                                                                      <div class="position-relative">
                                                                           <input type="text" class="form-control" id="validationCustomState" name='tags-state' placeholder="Select state" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/img/icnregion.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please select state.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-md-6">
                                                                      <label for="validationCustomnumber" class="form-label">Telephone *</label>
                                                                      <div class="position-relative">
                                                                           <input onkeypress="return isNumberKey(event)" pattern="[0-9]{1}[0-9]{9}" minlength="10" maxlength="10" type="text" class="form-control" id="validationCustomnumber" placeholder="Enter telephone" required autocomplete="off">
                                                                           <span class="inputIcon">
                                                                                <img src="<?php echo iii ?>assets/buyerside/img/icncontactno.png" alt="">
                                                                           </span>
                                                                           <div class="invalid-feedback">
                                                                                Please enter valid telephone number.
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-6">
                                                                      <button class="btn btnStyle2 btn-outline-primary w-100 fw-500" type="button" id="backtofirst">Back</button>
                                                                 </div>
                                                                 <div class="col-6 ms-auto">
                                                                      <button class="btn btnStyle2 btn-primary w-100 fw-500" type="submit">
                                                                           <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                           <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                           <span class="beforeText">Continue</span>
                                                                      </button>
                                                                 </div>
                                                            </form>
                                                       </div>
                                                       <div class="col-md-9 innerBody bg-white rounded p-4 form3 d-none">
                                                            <form class="row g-3 needs-validation3 formStyle2 user-select-none digit-group" method="get" data-group-name="digits" data-autosubmit="false" novalidate autocomplete="off">
                                                                 <div class="col-12 text-center">
                                                                      <div class="row">
                                                                           <div class="col-12 otpTitle fw-600 pb-3"><span class="d-block">Verify Your Mobile Number</span></div>
                                                                           <div class="col-12 otpIstruction fw-500"><span class="d-block">An 6 digit code has been sent to +91 99999 00099</span></div>
                                                                      </div>
                                                                      <div class="row mx-0">
                                                                           <div class="col-12 pt-3 pb-1">
                                                                                <div class="row gap-md-3 gap-2 otpFields" id="otp">
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="" name="digit-1" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="second" name="digit-2" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="third" name="digit-3" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="fourth" name="digit-4" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="fifth" name="digit-5" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="sixth" name="digit-6" required />
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="row">
                                                                           <a href="javascript:;" class="col-auto resendOtp fw-500 text-theme1 text-decoration-none"><span>Resend OTP</span></a>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-6">
                                                                      <button class="btn btnStyle2 btn-outline-primary w-100 fw-500" type="button" id="backtosecond">Back</button>
                                                                 </div>
                                                                 <div class="col-6 ms-auto">
                                                                      <button class="btn btnStyle2 btn-primary w-100 fw-500 verifyBtn" type="submit">
                                                                           <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                           <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                           <span class="beforeText">Verify</span>
                                                                      </button>
                                                                 </div>
                                                            </form>
                                                       </div>
                                                       <div class="col-md-9 innerBody bg-white rounded p-4 form4 d-none">
                                                            <form class="row g-3 needs-validation4 formStyle2 user-select-none digit-group" method="get" data-group-name="digits" data-autosubmit="false" novalidate autocomplete="off">
                                                                 <div class="col-12 text-center">
                                                                      <div class="row">
                                                                           <div class="col-12 otpTitle fw-600 pb-3"><span class="d-block">Verify Your Email Address</span></div>
                                                                           <div class="col-12 otpIstruction fw-500"><span class="d-block">An 6 digit code has been sent to demoaddress@gmail.com</span></div>
                                                                      </div>
                                                                      <div class="row mx-0">
                                                                           <div class="col-12 pt-3 pb-1">
                                                                                <div class="row gap-md-3 gap-2 otpFields" id="otp2">
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="a" name="digit-1" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="second2" name="digit-2" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="third2" name="digit-3" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="fourth2" name="digit-4" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="fifth2" name="digit-5" required />
                                                                                     <input type="tel" onkeypress="return isNumberKey(event)" class="col form-control p-0 fw-700 text-center" maxlength="1" id="sixth2" name="digit-6" required />
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="row">
                                                                           <a href="javascript:;" class="col-auto resendOtp fw-500 text-theme1 text-decoration-none"><span>Resend OTP</span></a>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-6">
                                                                      <button class="btn btnStyle2 btn-outline-primary w-100 fw-500" type="button" id="backtothird">Back</button>
                                                                 </div>
                                                                 <div class="col-6 ms-auto">
                                                                      <button class="btn btnStyle2 btn-primary w-100 fw-500 verifyBtn" type="submit">
                                                                           <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                                           <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                                           <span class="beforeText">Verify</span>
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
                    </div>
               </div>
               <div class="row">
                    <?php include 'layouts/footer.php' ?>
               </div>
          </div> <!-- ### SCROLL PART END ### -->
     </div>
</main>
<?php include 'layouts/footer-link.php' ?>
