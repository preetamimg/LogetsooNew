<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
    <?php $header = 3 ?>
    <?php $footer = 2 ?>
    <?php include 'layouts/header.php' ?>
    <div class="bodyPart row mx-0 flex-fill overflow-hidden adPackagesPage bg-white align-items-md-start align-items-center position-relative">
        <div class="scrollPart col-12 pt-0 px-0"> <!-- ### SCROLL PART START ### -->
            <div class="container-fluid position-relative overflow-hidden">
                <div class="row">
                    <div class="col-12">
                        <div class="container pb-2">
                            <div class="row justify-content-center headingStyle1 gap-2 pt-4">
                                    <div class="col-12 title fw-700"><span class="d-block">Upload Your Ad Creatives</span></div>
                                    <div class="col-12 subTitle fw-500"><span class="d-block">In the home page this would be as Featured products</span></div>
                            </div>
                        </div>
                        <div class="container pb-5">
                            <div class="row justify-content-between position-static">
                                <div class="col-md-7 col-lg-6 pb-4">
                                    <div class="row uploadAd">
                                        <form action="#" class="col-12 pt-3 formStyle2 needs-validation" novalidate>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="form-label" for="input-file-now">Add your Ad Creative *</label>
                                                    <div class="additionalText fw-500"><span class="d-block">NOTE: Size of cretive must be: 810x400  and format must be jpeg, png or gif only.</span></div>
                                                    <input type="file" id="input-file-now" class="dropify"/>
                                                </div>
                                                <div class="col-12 py-3">
                                                    <label class="form-label" for="addetail">URL For Ad Detail *</label>
                                                    <input class="form-control" type="text" name="addetail" id="addetail" placeholder="Enter url for your ad creative" required>
                                                    <div class="invalid-feedback">
                                                        Please Enter URL
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="preview d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#previewModal">
                                                                <img class="pe-2" src="<?php echo iii ?>assets/img/path874.png" alt="">
                                                                <span class="text-theme1 fw-600 d-block">Preview</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto px-0">
                                                            <button type="button" class="btnStyle2 cancleBtn fw-600 btn text-theme1">Cancel</button>
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="submit" class="btnStyle2 btn btn-theme1 text-white">Save Creatives</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="adPackageDetail">
                                        <div class="row mx-0">
                                            <div class="col-12 packageHeading p-4 pb-3 fw-600"><span class="d-block">Your Ad Package Detail</span></div>
                                            <div class="col-12 px-4 packageDescription">
                                                <div class="row mx-0">
                                                    <div class="col-12">
                                                        <div class="row justify-content-between align-items-center packageDescriptionRow ">
                                                            <div class="col-auto ps-0 fw-600"><span class="d-block">Ad Package</span></div>
                                                            <div class="col-auto pe-0">
                                                                <div class="row">
                                                                    <div class="col-auto pe-1 text-end">
                                                                        <span class="d-block fw-600 text-dark">Silver</span>
                                                                        <span class="d-block text-theme1 fw-500">AED 200</span>
                                                                    </div>
                                                                    <div class="col-auto ps-0">
                                                                    <img class="starImg" src="<?php echo iii ?>assets/img/pack-silver.png" alt=""/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row justify-content-between align-items-center packageDescriptionRow ">
                                                            <div class="col-auto ps-0 fw-600"><span class="d-block">No. Of Impressions</span></div>
                                                            <div class="col-auto pe-0 text-end">
                                                                <span class="d-block fw-600 text-dark">1,700</span>
                                                                <span class="d-block fw-400">1,700 impression left</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row justify-content-between align-items-center packageDescriptionRow ">
                                                            <div class="col-auto ps-0 fw-600"><span class="d-block">Ad Duration</span></div>
                                                            <div class="col-auto pe-0 text-end">
                                                                <span class="d-block fw-600 text-dark">40 Days</span>
                                                                <span class="d-block fw-400">40 Days Left</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 packageLocation py-2">
                                                        <div class="row">
                                                            <div class="col-12 px-0 py-2 fw-600"><span class="d-block">LOCATION</span></div>
                                                            <div class="col-12 pb-2">
                                                                <div class="row">
                                                                    <div class="col-auto px-0">
                                                                    <img class="locationImg" src="<?php echo iii ?>assets/img/pack2-homefeat.png" alt=""/>
                                                                    </div>
                                                                    <div class="col pe-0">
                                                                        <div class="row">
                                                                            <div class="col-12"><span class="d-block text-dark">In the home page</span></div>
                                                                            <div class="col-12"><span class="d-block">In the home page this would be as Featured products</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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


    <!--preview Modal -->
    <div class="modal previewModal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header bg-theme1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <a href="javascript:;" class="row text-decoration-none text-white align-items-center small mx-0 backArrow" data-bs-dismiss="modal">
                                    <span class="col-auto px-0 d-grid"><img src="<?php echo iii ?>assets/img/back-arrow.png" alt=""></span>
                                    <span class="col-auto ps-2 pe-0">Back</span>
                                </a>
                            </div>
                            <div class="col text-center previewModalHeading text-center fw-500 text-white"><span class="d-block">Ad Creatives Preview</span></div>
                            <div class="col-auto invisible d-none d-sm-block">
                                <a href="javascript:;" class="row text-decoration-none text-white align-items-center small mx-0 backArrow" data-bs-dismiss="modal">
                                    <span class="col-auto px-0 d-grid"><img src="<?php echo iii ?>assets/img/back-arrow.png" alt=""></span>
                                    <span class="col-auto ps-2 pe-0">Back</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8 mt-3 position-relative">
                            <ul class="nav navStyle1 nav-pills justify-content-center justify-content-md-end mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item packageNavItem" role="presentation">
                                    <button class="nav-link fw-600 active" id="pills-elite-tab" data-bs-toggle="pill" data-bs-target="#pills-elite" type="button" role="tab" aria-controls="pills-elite" aria-selected="true"><span class="d-block">Elite</span></button>
                                </li>
                                <li class="nav-item packageNavItem" role="presentation">
                                    <button class="nav-link fw-600" id="pills-silver-tab" data-bs-toggle="pill" data-bs-target="#pills-silver" type="button" role="tab" aria-controls="pills-silver" aria-selected="false"><span class="d-block">Silver</span></button>
                                </li>
                                <li class="nav-item packageNavItem" role="presentation">
                                    <button class="nav-link fw-600" id="pills-platinum-tab" data-bs-toggle="pill" data-bs-target="#pills-platinum" type="button" role="tab" aria-controls="pills-platinum" aria-selected="false"><span class="d-block">Platinum</span></button>
                                </li>
                                <li class="nav-item packageNavItem" role="presentation">
                                    <button class="nav-link fw-600" id="pills-gold-tab" data-bs-toggle="pill" data-bs-target="#pills-gold" type="button" role="tab" aria-controls="pills-gold" aria-selected="false"><span class="d-block">Gold</span></button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-elite" role="tabpanel" aria-labelledby="pills-elite-tab" tabindex="0">
                                    <ul class="nav navStyle2 nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex align-items-center pcNavLink packagePcNavItem active" id="pills-pc-elite-tab" data-bs-toggle="pill" data-bs-target="#pills-pc-elite" type="button" role="tab" aria-controls="pills-pc-elite" aria-selected="true"><img class="pe-2" src="<?php echo iii ?>assets/img/pcicon.png" alt=""><span class="d-block">Website</span></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex align-items-center mobileNavLink packageMobNavItem" id="pills-mobile-elite-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile-elite" type="button" role="tab" aria-controls="pills-mobile-elite" aria-selected="false"><img class="pe-2" src="<?php echo iii ?>assets/img/mobileicon.png" alt=""><span class="d-block">Mobile</span></button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade text-center show active packageInnerPcNavItem" id="pills-pc-elite" role="tabpanel" aria-labelledby="pills-pc-elite-tab" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-12">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="row justify-content-center">
                                                                <div class="col-12 elitepcImg px-0 position-relative">
                                                                    <img class="pcFrame" src="<?php echo iii ?>assets/img/screen-desk-elite.png" alt="">
                                                                    <img class="adImg" src="<?php echo iii ?>assets/img/elite-desk-ad.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade text-center packageInnerMobNavItem" id="pills-mobile-elite" role="tabpanel" aria-labelledby="pills-mobile-elite-tab" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <div class="row justify-content-center">
                                                        <div class="col-auto d-grid">
                                                            <div class="row justify-content-center mx-0">
                                                                <div class="col-auto elitemobImg px-0">
                                                                    <img class="pcFrame" src="<?php echo iii ?>assets/img/screen-mob-elite.png" alt="">
                                                                    <img class="adImg" src="<?php echo iii ?>assets/img/elite-mob-ad.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-silver" role="tabpanel" aria-labelledby="pills-silver-tab" tabindex="0">
                                    <ul class="nav navStyle2 nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex align-items-center pcNavLink packagePcNavItem active" id="pills-pc-silver-tab" data-bs-toggle="pill" data-bs-target="#pills-pc-silver" type="button" role="tab" aria-controls="pills-pc-silver" aria-selected="true"><img class="pe-2" src="<?php echo iii ?>assets/img/pcicon.png" alt=""><span class="d-block">Website</span></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex align-items-center mobileNavLink packageMobNavItem" id="pills-mobile-silver-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile-silver" type="button" role="tab" aria-controls="pills-mobile-silver" aria-selected="false"><img class="pe-2" src="<?php echo iii ?>assets/img/mobileicon.png" alt=""><span class="d-block">Mobile</span></button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade text-center packageInnerPcNavItem show active" id="pills-pc-silver" role="tabpanel" aria-labelledby="pills-pc-silver-tab" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-12">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="row justify-content-center">
                                                                <div class="col-12 silverpcImg px-0 position-relative">
                                                                    <img class="pcFrame" src="<?php echo iii ?>assets/img/screen-desk-silver.png" alt="">
                                                                    <img class="adImg" src="<?php echo iii ?>assets/img/preview.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade text-cente packageInnerMobNavItem" id="pills-mobile-silver" role="tabpanel" aria-labelledby="pills-mobile-silver-tab" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <div class="row justify-content-center">
                                                        <div class="col-auto d-grid">
                                                            <div class="row justify-content-center mx-0">
                                                                <div class="col-auto silvermobImg px-0">
                                                                    <img class="pcFrame" src="<?php echo iii ?>assets/img/screen-mob-silver.png" alt="">
                                                                    <img class="adImg" src="<?php echo iii ?>assets/img/preview.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-platinum" role="tabpanel" aria-labelledby="pills-platinum-tab" tabindex="0">
                                    <ul class="nav navStyle2 nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex align-items-center pcNavLink packagePcNavItem active" id="pills-pc-platinum-tab" data-bs-toggle="pill" data-bs-target="#pills-pc-platinum" type="button" role="tab" aria-controls="pills-pc-platinum" aria-selected="true"><img class="pe-2" src="<?php echo iii ?>assets/img/pcicon.png" alt=""><span class="d-block">Website</span></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex align-items-center mobileNavLink packageMobNavItem" id="pills-mobile-platinum-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile-platinum" type="button" role="tab" aria-controls="pills-mobile-platinum" aria-selected="false"><img class="pe-2" src="<?php echo iii ?>assets/img/mobileicon.png" alt=""><span class="d-block">Mobile</span></button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade text-center packageInnerPcNavItem show active" id="pills-pc-platinum" role="tabpanel" aria-labelledby="pills-pc-platinum-tab" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-12">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="row justify-content-center">
                                                                <div class="col-12 platinumpcImg px-0 position-relative">
                                                                    <img class="pcFrame" src="<?php echo iii ?>assets/img/screen-desk-platinum.png" alt="">
                                                                    <img class="adImg" src="<?php echo iii ?>assets/img/preview2.png" alt="">
                                                                    <img class="adImg2" src="<?php echo iii ?>assets/img/preview3.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade text-center packageInnerMobNavItem" id="pills-mobile-platinum" role="tabpanel" aria-labelledby="pills-mobile-platinum-tab" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <div class="row justify-content-center">
                                                        <div class="col-auto d-grid">
                                                            <div class="row justify-content-center mx-0">
                                                                <div class="col-auto platinummobImg px-0">
                                                                    <img class="pcFrame" src="<?php echo iii ?>assets/img/screen-mob-platinum.png" alt="">
                                                                    <img class="adImg" src="<?php echo iii ?>assets/img/preview2.png" alt="">
                                                                    <img class="adImg2" src="<?php echo iii ?>assets/img/preview3.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-gold" role="tabpanel" aria-labelledby="pills-gold-tab" tabindex="0">
                                    <ul class="nav navStyle2 nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex align-items-center pcNavLink packagePcNavItem active" id="pills-pc-gold-tab" data-bs-toggle="pill" data-bs-target="#pills-pc-gold" type="button" role="tab" aria-controls="pills-pc-gold" aria-selected="true"><img class="pe-2" src="<?php echo iii ?>assets/img/pcicon.png" alt=""><span class="d-block">Website</span></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link d-flex align-items-center mobileNavLink packageMobNavItem" id="pills-mobile-gold-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile-gold" type="button" role="tab" aria-controls="pills-mobile-gold" aria-selected="false"><img class="pe-2" src="<?php echo iii ?>assets/img/mobileicon.png" alt=""><span class="d-block">Mobile</span></button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade text-center packageInnerPcNavItem show active" id="pills-pc-gold" role="tabpanel" aria-labelledby="pills-pc-gold-tab" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-12">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="row justify-content-center">
                                                                <div class="col-12 goldpcImg px-0 position-relative">
                                                                    <img class="pcFrame" src="<?php echo iii ?>assets/img/screen-desk-gold.png" alt="">
                                                                    <img class="adImg" src="<?php echo iii ?>assets/img/preview.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade text-center packageInnerMobNavItem" id="pills-mobile-gold" role="tabpanel" aria-labelledby="pills-mobile-gold-tab" tabindex="0">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <div class="row justify-content-center">
                                                        <div class="col-auto d-grid">
                                                            <div class="row justify-content-center mx-0">
                                                                <div class="col-auto goldmobImg px-0">
                                                                    <img class="pcFrame" src="<?php echo iii ?>assets/img/screen-mob-gold.png" alt="">
                                                                    <img class="adImg" src="<?php echo iii ?>assets/img/preview.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layouts/footer-link.php' ?>


<script>
    let packagePcNavItems = document.querySelectorAll('.packagePcNavItem');
    let packageMobNavItems = document.querySelectorAll('.packageMobNavItem');
    let packageInnerMobNavItems = document.querySelectorAll('.packageInnerMobNavItem');
    let packageInnerPcNavItems = document.querySelectorAll('.packageInnerPcNavItem');


    packageMobNavItems.forEach(packageMobNavItem => {
        packageMobNavItem.addEventListener('click', ()=> {
            for (var i = 0; i < packageMobNavItems.length; i++) {
                packageMobNavItems[i].classList.add('active');
            }
            for (var q = 0; q < packagePcNavItems.length; q++) {
                packagePcNavItems[q].classList.remove('active');
            }
            
            for (var w = 0; w < packageInnerMobNavItems.length; w++) {
                packageInnerMobNavItems[w].classList.add('active', 'show');
            }
            for (var r = 0; r < packageInnerPcNavItems.length; r++) {
                packageInnerPcNavItems[r].classList.remove('active', 'show');
            }
        })
    })
    packagePcNavItems.forEach(packagePcNavItem => {
        packagePcNavItem.addEventListener('click', ()=> {
            for (var i = 0; i < packageMobNavItems.length; i++) {
                packageMobNavItems[i].classList.remove('active');
            }
            for (var q = 0; q < packagePcNavItems.length; q++) {
                packagePcNavItems[q].classList.add('active');
            }
            
            for (var w = 0; w < packageInnerMobNavItems.length; w++) {
                packageInnerMobNavItems[w].classList.remove('active', 'show');
            }
            for (var r = 0; r < packageInnerPcNavItems.length; r++) {
                packageInnerPcNavItems[r].classList.add('active', 'show');
            }
        })
    })
    
</script>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
