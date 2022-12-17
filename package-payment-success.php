<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column ">
    <?php $header = 3 ?>
    <?php $footer = 2 ?>
    <?php include 'layouts/header.php' ?>
    <div class="bodyPart row mx-0 flex-fill overflow-hidden packagePaymentSuccessPage bg-white  align-items-md-start align-items-center">
        <div class="scrollPart col-12 pt-4 pb-5"> <!-- ### SCROLL PART START ### -->
            
            <div class="row justify-content-center mx-0 pt-md-4 pt-0 pb-5">
                <div class="col-12 successPopup rounded text-center">
                    <div class="row">
                        <div class="col-12 congratulationsIcon pb-4">
                            <img src="<?php echo iii ?>assets/img/icnsuccess.png" alt="">
                        </div>
                        <div class="col-12 title fw-700"><span class="d-block">Payment Successful</span></div>
                        <div class="col-12 subTitle pt-2"><span class="d-block fw-500">Your Ad package booked successfully. Now you can add your creatives.</span></div>
                        <div class="col-9 mx-auto pt-3">
                            <a href="<?php echo iii ?>ad-packages.php" class="btnStyle2 btn btn-theme1 text-white mx-auto">Create Your Ad</a>
                        </div>
                    </div>
                </div>
            </div>




        </div> <!-- ### SCROLL PART END ### -->
    </div>
    <?php include 'layouts/footer.php' ?>
</main>
<?php include 'layouts/footer-link.php' ?>