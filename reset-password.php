<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column">
    <?php $header = 1 ?>
    <?php $footer = 1 ?>
    <?php include 'layouts/header.php' ?>
    <div class="bodyPart row mx-0 flex-fill overflow-hidden supplierLoginPage align-items-md-start align-items-center">
        <div class="scrollPart col-12"> <!-- ### SCROLL PART START ### -->
        <div class="container pt-md-5 pt-0"> 
                <div class="row justify-content-md-end justify-content-center">
                    <div class="col loginForm my-4 bg-white rounded shadow p-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 loginHeading fw-700"><span>Reset Password</span></div>
                                    <div class="col-12 pb-3 resetInstructions"><span class="d-block">Enter the email associated with your account and we'll send an email with instructions to reset your password</span></div>
                                    <div class="col-12">
                                        <form class="row g-3 needs-reset-validation5 resetForm formStyle2 user-select-none" novalidate autocomplete="off">
                                            <div class="col-md-12">
                                                <label for="resetvalidationCustomemail" class="form-label">Email *</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" id="resetvalidationCustomemail" placeholder="Enter your email" required autocomplete="off">
                                                    <span class="inputIcon">
                                                        <img src="<?php echo iii ?>assets/img/email.png" alt="">
                                                    </span>
                                                    <div class="invalid-feedback">
                                                        Please enter email.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                            <button class="btn btnStyle2 btn-primary w-100 fw-500" type="submit">
                                                <span class="spinner-border spinner-border-sm afterText d-none" role="status" aria-hidden="true"></span>
                                                <span class="visually-showw afterText d-none ps-1">Loading...</span>
                                                <span class="beforeText">Submit</span>
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






        </div> <!-- ### SCROLL PART END ### -->
    </div>
    <?php include 'layouts/footer.php' ?>
</main>
<?php include 'layouts/footer-link.php' ?>