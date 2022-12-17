<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
    <?php $header = 1 ?>
    <?php $footer = 2 ?>
    <?php include 'layouts/header.php' ?>
    <div class="bodyPart row mx-0 flex-fill overflow-hidden  align-items-md-start align-items-center">
        <div class="scrollPart col-12 px-0"> <!-- ### SCROLL PART START ### -->
            <div class="container-fluid buyerLoginPage">
                <div class="container py-md-5 pt-0"> 
                        <div class="row justify-content-md-end justify-content-center">
                            <div class="col loginForm my-4 bg-white rounded shadow p-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 loginHeading fw-700 pb-3"><span>Login</span></div>
                                            <div class="col-12">
                                                <form class="row g-3 needs-validation formStyle2 user-select-none" novalidate autocomplete="off">
                                                    <div class="col-md-12">
                                                        <label for="validationCustomemail" class="form-label">Email / Mobile Number *</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" id="validationCustomemail" placeholder="Enter email or phone number" required autocomplete="off">
                                                            <span class="inputIcon">
                                                                <img src="<?php echo iii ?>assets/img/email.png" alt="">
                                                            </span>
                                                            <div class="invalid-feedback">
                                                                Please enter email or phone number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="validationCustomPassword" class="form-label">Password *</label>
                                                        <div class="position-relative">
                                                            <input type="password" class="form-control" id="validationCustomPassword" placeholder="Enter password" required autocomplete="off">
                                                            <span class="inputIcon">
                                                                <img src="<?php echo iii ?>assets/img/pass.png" alt="">
                                                            </span>
                                                            <div class="invalid-feedback">
                                                                Please enter valid password.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-check d-flex align-items-center gap-1">
                                                                    <input class="form-check-input mt-0" type="checkbox" value="" id="invalidCheck">
                                                                    <label class="form-check-label user-select-none" for="invalidCheck">
                                                                        Stay logged in
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <a class="resetPasswordBtn text-decoration-none fw-700" href="<?php echo iii ?>buyerside/buyer-reset-password.php">Reset Password</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btnStyle2 btn-primary w-100 fw-500" type="submit">Login</button>
                                                    </div>
                                                    <div class="col-12">
                                                        <a href="<?php echo iii ?>buyerside/register-as-buyer.php" class="btn btnStyle2 btn-outline-primary w-100 fw-500">Register</a>
                                                    </div>
                                                    <div class="col-12 form-label text-center mt-4">
                                                        <span class="d-block">Or Login With</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="javascript:;" class="btn btnStyle2 w-100 fw-500 loginWithBtn shadow-none"><img class="me-2" src="<?php echo iii ?>assets/buyerside/img/so-google.png" alt=""><span class="d-block">Google</span></a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="javascript:;" class="btn btnStyle2 w-100 fw-500 loginWithBtn shadow-none"><img class="me-2" src="<?php echo iii ?>assets/buyerside/img/so-fb.png" alt=""><span class="d-block">Facebook</span></a>
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
        <div class="row">
        <?php include 'layouts/footer.php' ?>
        </div>
        </div> <!-- ### SCROLL PART END ### -->
    </div>
    
</main>
<?php include 'layouts/footer-link.php' ?>