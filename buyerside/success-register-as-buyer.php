<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column ">
    <?php $header = 2 ?>
    <?php $footer = 1 ?>
    <?php include 'layouts/header.php' ?>
    <div class="bodyPart row mx-0 flex-fill overflow-hidden successRegisterAsBuyerPage align-items-md-start align-items-center">
        <div class="scrollPart col-12 pt-md-4 pt-0"> <!-- ### SCROLL PART START ### -->
            
            <div class="row justify-content-center mx-0 pt-md-5 pt-0">
                <div class="col-12 successPopup bg-white rounded p-5 text-center">
                    <div class="row">
                        <div class="col-12 congratulationsIcon pb-4">
                            <img src="<?php echo iii ?>assets/img/successfully.png" alt="">
                        </div>
                        <div class="col-12 title fw-700"><span class="d-block">Congratulations</span></div>
                        <div class="col-12 subTitle pt-2"><span class="d-block fw-500">Your buyer account has been successfully created.</span></div>
                    </div>
                </div>
            </div>
        </div> <!-- ### SCROLL PART END ### -->
    </div>
    <?php include 'layouts/footer.php' ?>
</main>
<?php include 'layouts/footer-link.php' ?>