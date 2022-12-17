<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
    <?php $header = 1 ?>
    <?php $footer = 1 ?>
<?php include 'layouts/header.php' ?>
<div class="bodyPart row mx-0 flex-fill overflow-hidden supplierSearchResultPage">
    <div class="scrollPart col-12 px-0 position-relative"> <!-- ### SCROLL PART START ### -->
        <div class="container-fluid mobileFilterBar d-lg-none py-2">
            <div class="container">    
                <div class="row justify-content-end">
                    <div class="col-auto d-flex align-items-center filterTarget" id="FilterShow"><span class="d-block"></span><img class="ms-2" src="<?php echo iii ?>assets/userside/img/filter.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row mainSection mb-4">
                    <div class="col-auto px-0 categorySection h-100 pt-4">
                        <div class="filterBar rounded" id="filterBar">
                            <div class="filterFixedPart">
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col filterMainHeading fw-500"><span class="d-block">All Filters</span></div>
                                    <div class="col-auto FilterClear fw-500"><span class="d-block">Clear All</span></div>
                                </div>
                            </div>
                            <div class="filterScrollPart">
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600"><span class="d-block">Supplier Types</span></div>
                                    <form action="#" class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="suppliertype1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="suppliertype1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="suppliertype1"><span class="d-block">Assured Supplier</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="suppliertype2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="suppliertype2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="suppliertype2"><span class="d-block"> ≤1h response time</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600"><span class="d-block">Product Types</span></div>
                                    <form action="#" class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="producttype1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="producttype1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="producttype1"><span class="d-block">Ready to Ship</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="producttype2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="producttype2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="producttype2"><span class="d-block"> Paid samples</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600"><span class="d-block">Minimum Order</span></div>
                                    <form action="#" class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0">
                                                    <div class="col px-0">
                                                        <input type="text" class="form-control filterSearch shadow-none" placeholder="Enter company name">
                                                    </div>
                                                    <div class="col-auto pe-0">
                                                        <button class="goBtn btn btn-outline-theme1 text-theme1 shadow-none"><span>Go</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600"><span class="d-block">Price</span></div>
                                    <form action="#" class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0">
                                                    <div class="col px-0">
                                                        <input type="text" class="form-control filterSearch shadow-none" placeholder="AED Min">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control filterSearch shadow-none" placeholder="AED Max">
                                                    </div>
                                                    <div class="col-auto px-0">
                                                        <button class="goBtn btn btn-outline-theme1 text-theme1 shadow-none"><span>Go</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecountry" aria-expanded="false" aria-controls="collapsecountry"><span class="d-block">Supplier Country/Region</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsecountry">
                                        <div class="row">
                                            <div class="col-12 mb-1 position-relative">
                                                <input type="text" class="form-control filterSearch ps-5 shadow-none" placeholder="Search">
                                                <img class="searchIcon" src="<?php echo iii ?>assets/userside/img/search2.png" alt="">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="suppliercountry1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="suppliercountry1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="suppliercountry1">
                                                        <div class="d-flex align-items-center">
                                                            <img class="pe-2" src="<?php echo iii ?>assets/userside/img/flag1.png" alt="">
                                                            <span class="d-block">Bahrain</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="suppliercountry2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="suppliercountry2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="suppliercountry2">
                                                        <div class="d-flex align-items-center">
                                                            <img class="pe-2" src="<?php echo iii ?>assets/userside/img/flag2.png" alt="">
                                                            <span class="d-block">Cyprus</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="suppliercountry3">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="suppliercountry3"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="suppliercountry3">
                                                        <div class="d-flex align-items-center">
                                                            <img class="pe-2" src="<?php echo iii ?>assets/userside/img/flag3.png" alt="">
                                                            <span class="d-block">Egypt</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="suppliercountry4">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="suppliercountry4"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="suppliercountry4">
                                                        <div class="d-flex align-items-center">
                                                            <img class="pe-2" src="<?php echo iii ?>assets/userside/img/flag4.png" alt="">
                                                            <span class="d-block">Iran</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="suppliercountry5">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="suppliercountry5"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="suppliercountry5">
                                                        <div class="d-flex align-items-center">
                                                            <img class="pe-2" src="<?php echo iii ?>assets/userside/img/flag5.png" alt="">
                                                            <span class="d-block">Iraq</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="suppliercountry6">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="suppliercountry6"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="suppliercountry6">
                                                        <div class="d-flex align-items-center">
                                                            <img class="pe-2" src="<?php echo iii ?>assets/userside/img/flag6.png" alt="">
                                                            <span class="d-block">Saudi Arabia</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2 lastFilterOption">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="suppliercountry7">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="suppliercountry7"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="suppliercountry7">
                                                        <div class="d-flex align-items-center">
                                                            <img class="pe-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block">United Arab Emirates</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsesupplier" aria-expanded="false" aria-controls="collapsesupplier"><span class="d-block">Supplier</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsesupplier">
                                        <div class="row">
                                            <div class="col-12 mb-1 position-relative">
                                                <input type="text" class="form-control filterSearch ps-5 shadow-none" placeholder="Search">
                                                <img class="searchIcon" src="<?php echo iii ?>assets/userside/img/search2.png" alt="">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="supplier1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="supplier1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="supplier1"><span class="d-block">Supplier name here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="supplier2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="supplier2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="supplier2"><span class="d-block">Supplier name 2 here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="supplier3">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="supplier3"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="supplier3"><span class="d-block">Supplier name 3 here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="supplier4">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="supplier4"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="supplier4"><span class="d-block">Supplier name 4 here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="supplier5">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="supplier5"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="supplier5"><span class="d-block">Supplier name 5 here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="supplier6">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="supplier6"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="supplier6"><span class="d-block">Supplier name 6 here</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsemanufacturer" aria-expanded="false" aria-controls="collapsemanufacturer"><span class="d-block">Manufacturer</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsemanufacturer">
                                        <div class="row">
                                            <div class="col-12 mb-1 position-relative">
                                                <input type="text" class="form-control filterSearch ps-5 shadow-none" placeholder="Search">
                                                <img class="searchIcon" src="<?php echo iii ?>assets/userside/img/search2.png" alt="">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="manuf1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="manuf1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="manuf1"><span class="d-block">Manufacturer name here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="manuf2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="manuf2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="manuf2"><span class="d-block">Manufacturer name 2 here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="manuf3">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="manuf3"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="manuf3"><span class="d-block">Manufacturer name 3 here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="manuf4">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="manuf4"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="manuf4"><span class="d-block">Manufacturer name 4 here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="manuf5">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="manuf5"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="manuf5"><span class="d-block">Manufacturer name 5 here</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="manuf6">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="manuf6"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="manuf6"><span class="d-block">Manufacturer name 6 here</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecolor" aria-expanded="false" aria-controls="collapsecolor"><span class="d-block">Colors</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsecolor">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="color1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="color1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="color1">
                                                        <div class="d-flex align-items-center">
                                                            <div class="colorBox me-2" style="--bs-color1: #FFFFFF;"></div>
                                                            <span class="d-block">White</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="color2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="color2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="color2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="colorBox me-2" style="--bs-color1: #ECECEC;"></div>
                                                            <span class="d-block">Silver</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="color3">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="color3"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="color3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="colorBox me-2" style="--bs-color1: #000000;"></div>
                                                            <span class="d-block">Black</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="color4">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="color4"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="color4">
                                                        <div class="d-flex align-items-center">
                                                            <div class="colorBox me-2" style="--bs-color1: #7A2E03;"></div>
                                                            <span class="d-block">Brown</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="color5">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="color5"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="color5">
                                                        <div class="d-flex align-items-center">
                                                            <div class="colorBox me-2" style="--bs-color1: #216FE5;"></div>
                                                            <span class="d-block">Blue</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="color6">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="color6"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="color6">
                                                        <div class="d-flex align-items-center">
                                                            <div class="colorBox me-2" style="--bs-color1: #002A6A;"></div>
                                                            <span class="d-block">Navy Blue</span>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsereview" aria-expanded="false" aria-controls="collapsereview"><span class="d-block">Customer Review</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsereview">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="review1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="review1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="review1"><span class="d-block">4 ★ & above</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="review2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="review2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="review2"><span class="d-block">3 ★ & above</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="review3">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="review3"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="review3"><span class="d-block">2 ★ & above</span></label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="review4">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="review4"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="review4"><span class="d-block">1 ★ & above</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsebrand" aria-expanded="false" aria-controls="collapsebrand"><span class="d-block">Brands</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsebrand">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="brand1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="brand1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="brand1"><span class="d-block">Brand 1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="brand2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="brand2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="brand2"><span class="d-block">Brand 2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsepanel" aria-expanded="false" aria-controls="collapsepanel"><span class="d-block">Panel Type</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsepanel">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="panel1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="panel1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="panel1"><span class="d-block">panel 1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="panel2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="panel2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="panel2"><span class="d-block">panel 2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapseresolution" aria-expanded="false" aria-controls="collapseresolution"><span class="d-block">Resolution</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapseresolution">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="resolution1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="resolution1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="resolution1"><span class="d-block">Resolution 1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="resolution2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="resolution2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="resolution2"><span class="d-block">Resolution 2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsemodelyear" aria-expanded="false" aria-controls="collapsemodelyear"><span class="d-block">Model Year</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsemodelyear">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="modelyear1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="modelyear1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="modelyear1"><span class="d-block">Model Year 1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="modelyear2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="modelyear2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="modelyear2"><span class="d-block">Model Year 2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsetvplatform" aria-expanded="false" aria-controls="collapsetvplatform"><span class="d-block">TV Platform / OS</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsetvplatform">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="tv1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="tv1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="tv1"><span class="d-block">TV Platform 1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 my-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="tv2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="tv2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="tv2"><span class="d-block">TV Platform 2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsescreensize" aria-expanded="false" aria-controls="collapsescreensize"><span class="d-block">Screen Size</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsescreensize">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="screensize1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="screensize1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="screensize1"><span class="d-block">Screen Size 1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="screensize2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="screensize2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="screensize2"><span class="d-block">Screen Size 2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsecontrolmethod" aria-expanded="false" aria-controls="collapsecontrolmethod"><span class="d-block">Control Method</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsecontrolmethod">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="controlmethod1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="controlmethod1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="controlmethod1"><span class="d-block">Control Method 1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="controlmethod2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="controlmethod2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="controlmethod2"><span class="d-block">Control Method 2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapserefreshrate" aria-expanded="false" aria-controls="collapserefreshrate"><span class="d-block">Refresh Rate </span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapserefreshrate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="refresh1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="refresh1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="refresh1"><span class="d-block">Refresh Rate 1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="refresh2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="refresh2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="refresh2"><span class="d-block">Refresh Rate 2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapseusbport" aria-expanded="false" aria-controls="collapseusbport"><span class="d-block">Total USB Ports</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapseusbport">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="usb1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="usb1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="usb1"><span class="d-block">1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="usb2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="usb2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="usb2"><span class="d-block">2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapsehdmiport" aria-expanded="false" aria-controls="collapsehdmiport"><span class="d-block">Total HDMI Ports</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapsehdmiport">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="hdmi1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="hdmi1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="hdmi1"><span class="d-block">1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="hdmi2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="hdmi2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="hdmi2"><span class="d-block">2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row filterSection align-items-center mx-0">
                                    <div class="col-12 filterHeading fw-600 d-flex align-items-center justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapseconnectivity" aria-expanded="false" aria-controls="collapseconnectivity"><span class="d-block">Connectivity Technology</span><img class="" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                                    <form action="#" class="col-12 collapse" id="collapseconnectivity">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="connect1">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="connect1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="connect1"><span class="d-block">Connectivity Technology 1</span></label>
                                                </div> 
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row mx-0 align-items-center">
                                                    <div class="col-auto px-0">
                                                        <input class="filterCheckbox d-none" type="checkbox" value="" id="connect2">
                                                        <label class="filterLabel1 d-flex align-items-center justify-content-center" for="connect2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                                    </div>
                                                    <label class="filterLabel2 fw-500 col" for="connect2"><span class="d-block">Connectivity Technology 2</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col productSection pt-4 pb-5">
                        <div class="row align-items-center">
                            <div class="col-12 productListHeading"><span>Tvs </span><span>(Showing 1 – 40 products of 44,276 products)</span></div>
                        </div>
                        <div class="row mx-0 mt-3 searchResultBox">
                            <div class="col-xl-7 pe-xl-0">
                                <div class="row">
                                    <div class="col-12 my-1 fw-600 productSearchHeading"><span class="d-block">Ultmost Technology Group</span></div>
                                    <div class="col-12 my-1">
                                        <div class="row align-items-center">
                                            <div class="col-auto d-flex align-items-center">
                                                <div class="d-inline-flex align-items-center py-1 px-2 bg-theme1 ratingBox"><img class="me-1" src="<?php echo iii ?>assets/userside/img/whiteStar.png" alt=""><span class="d-block">4.3</span></div>
                                                <span class="proQty ms-2 d-block fw-600">(3,568)</span>
                                            </div>
                                            <div class="col d-flex align-items-center ps-0 srpCountryName">
                                                <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag1.png" alt="">
                                                <span class="d-block fw-500">Bahrain</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Supplier Type</span></div>
                                            <div class="col supplierDetailCol2 fw-500"><span class="d-block">Assured Supplier</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Product Categories</span></div>
                                            <div class="col supplierDetailCol3 fw-500 d-flex align-items-center gap-1 flex-wrap">
                                                <span class="d-block">Auto Parts & Accessories</span>
                                                <span class="d-block">Consumer Electronics</span>
                                                <span class="d-block">Health & Personal Care</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Registration No</span></div>
                                            <div class="col supplierDetailCol2 fw-500"><span class="d-block">09ADVFS7353J1Z4</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Website</span></div>
                                            <div class="col supplierDetailCol4 fw-500"><a href="javascript:;"><span class="d-block">www.utmosttech.com</span></a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto">
                                                <button class="btn shadow-none btn-theme1 px-4 productInquireBtn1"><span class="d-block">Inquire Now</span></button>
                                            </div>
                                            <div class="col ps-0">
                                                <button class="btn btnStyle2 border-0 productInquireBtn2"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 mt-2 mt-xl-0">
                                <div class="row">
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro1.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro2.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro3.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 mt-3 searchResultBox">
                            <div class="col-xl-7 pe-xl-0">
                                <div class="row">
                                    <div class="col-12 my-1 fw-600 productSearchHeading"><span class="d-block">Western International LLC</span></div>
                                    <div class="col-12 my-1">
                                        <div class="row align-items-center">
                                            <div class="col-auto d-flex align-items-center">
                                                <div class="d-inline-flex align-items-center py-1 px-2 bg-theme1 ratingBox"><img class="me-1" src="<?php echo iii ?>assets/userside/img/whiteStar.png" alt=""><span class="d-block">4.3</span></div>
                                                <span class="proQty ms-2 d-block fw-600">(3,568)</span>
                                            </div>
                                            <div class="col d-flex align-items-center ps-0 srpCountryName">
                                                <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                <span class="d-block fw-500">United Arab Emirates</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Supplier Type</span></div>
                                            <div class="col supplierDetailCol2 fw-500"><span class="d-block">Assured Supplier</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Product Categories</span></div>
                                            <div class="col supplierDetailCol3 fw-500 d-flex align-items-center gap-1 flex-wrap">
                                                <span class="d-block">Auto Parts & Accessories</span>
                                                <span class="d-block">Consumer Electronics</span>
                                                <span class="d-block">Health & Personal Care</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Registration No</span></div>
                                            <div class="col supplierDetailCol2 fw-500"><span class="d-block">09ADVFS7353J1Z4</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Website</span></div>
                                            <div class="col supplierDetailCol4 fw-500"><a href="javascript:;"><span class="d-block">www.utmosttech.com</span></a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto">
                                                <button class="btn shadow-none btn-theme1 px-4 productInquireBtn1"><span class="d-block">Inquire Now</span></button>
                                            </div>
                                            <div class="col ps-0">
                                                <button class="btn btnStyle2 border-0 productInquireBtn2"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 mt-2 mt-xl-0">
                                <div class="row">
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro4.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro5.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro6.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 mt-3 searchResultBox">
                            <div class="col-xl-7 pe-xl-0">
                                <div class="row">
                                    <div class="col-12 my-1 fw-600 productSearchHeading"><span class="d-block">Rasel Shohid Electronics Trading LLC</span></div>
                                    <div class="col-12 my-1">
                                        <div class="row align-items-center">
                                            <div class="col-auto d-flex align-items-center">
                                                <div class="d-inline-flex align-items-center py-1 px-2 bg-theme1 ratingBox"><img class="me-1" src="<?php echo iii ?>assets/userside/img/whiteStar.png" alt=""><span class="d-block">4.3</span></div>
                                                <span class="proQty ms-2 d-block fw-600">(3,568)</span>
                                            </div>
                                            <div class="col d-flex align-items-center ps-0 srpCountryName">
                                                <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag4.png" alt="">
                                                <span class="d-block fw-500">Iran</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Supplier Type</span></div>
                                            <div class="col supplierDetailCol2 fw-500"><span class="d-block">Assured Supplier</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Product Categories</span></div>
                                            <div class="col supplierDetailCol3 fw-500 d-flex align-items-center gap-1 flex-wrap">
                                                <span class="d-block">Auto Parts & Accessories</span>
                                                <span class="d-block">Consumer Electronics</span>
                                                <span class="d-block">Health & Personal Care</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Registration No</span></div>
                                            <div class="col supplierDetailCol2 fw-500"><span class="d-block">09ADVFS7353J1Z4</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Website</span></div>
                                            <div class="col supplierDetailCol4 fw-500"><a href="javascript:;"><span class="d-block">www.utmosttech.com</span></a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto">
                                                <button class="btn shadow-none btn-theme1 px-4 productInquireBtn1"><span class="d-block">Inquire Now</span></button>
                                            </div>
                                            <div class="col ps-0">
                                                <button class="btn btnStyle2 border-0 productInquireBtn2"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 mt-2 mt-xl-0">
                                <div class="row">
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro7.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro8.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro9.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-0 mt-3 searchResultBox">
                            <div class="col-xl-7 pe-xl-0">
                                <div class="row">
                                    <div class="col-12 my-1 fw-600 productSearchHeading"><span class="d-block">Orro Home General Trading LLC</span></div>
                                    <div class="col-12 my-1">
                                        <div class="row align-items-center">
                                            <div class="col-auto d-flex align-items-center">
                                                <div class="d-inline-flex align-items-center py-1 px-2 bg-theme1 ratingBox"><img class="me-1" src="<?php echo iii ?>assets/userside/img/whiteStar.png" alt=""><span class="d-block">4.3</span></div>
                                                <span class="proQty ms-2 d-block fw-600">(3,568)</span>
                                            </div>
                                            <div class="col d-flex align-items-center ps-0 srpCountryName">
                                                <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag2.png" alt="">
                                                <span class="d-block fw-500">Cyprus</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Supplier Type</span></div>
                                            <div class="col supplierDetailCol2 fw-500"><span class="d-block">Assured Supplier</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Product Categories</span></div>
                                            <div class="col supplierDetailCol3 fw-500 d-flex align-items-center gap-1 flex-wrap">
                                                <span class="d-block">Auto Parts & Accessories</span>
                                                <span class="d-block">Consumer Electronics</span>
                                                <span class="d-block">Health & Personal Care</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Registration No</span></div>
                                            <div class="col supplierDetailCol2 fw-500"><span class="d-block">09ADVFS7353J1Z4</span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto supplierDetailCol1 fw-500"><span class="d-block">Website</span></div>
                                            <div class="col supplierDetailCol4 fw-500"><a href="javascript:;"><span class="d-block">www.utmosttech.com</span></a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 my-1">
                                        <div class="row">
                                            <div class="col-auto">
                                                <button class="btn shadow-none btn-theme1 px-4 productInquireBtn1"><span class="d-block">Inquire Now</span></button>
                                            </div>
                                            <div class="col ps-0">
                                                <button class="btn btnStyle2 border-0 productInquireBtn2"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 mt-2 mt-xl-0">
                                <div class="row">
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro10.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro11.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-sm-auto col-xl-4 searchProductCardWrapper">
                                        <div class="row searchProductCard p-1 mx-0">
                                            <div class="col-12 px-0 searchProductCardImg"><img src="<?php echo iii ?>assets/userside/img/searchpro12.png" alt=""></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardTitle fw-500"><span class="d-block">Huidi 80 cm (32 Inches) HD Ready t Huidi 80 cm (32 Inches) HD Ready t</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardAed fw-600"><span class="d-block">AED 80.96-10000</span></div>
                                            <div class="col-12 px-0 mt-1 searchProductCardMcq fw-500"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                        </div>
                                    </div>
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


<div class="offcanvas offcanvas-bottom compareOffcanvas" data-bs-scroll="true" data-bs-backdrop="false" data-bs-target="#staticBackdrop" tabindex="-1" id="compareOffcanvas" aria-labelledby="compareOffcanvasLabel">
        <img class="closeBtn" data-bs-dismiss="offcanvas" aria-label="Close" src="<?php echo iii ?>assets/userside/img/offclose.png" alt="">
    <div class="offcanvas-body">
        <!-- <button type="button" class="btn-close"></button> -->
        <div class="container">
            <div class="row">
                <div class="col-xl">
                    <div class="row g-3">
                        <div class="col-6 col-xl-3">
                            <div class="row compareCard align-items-center h-100 mx-0">
                                <div class="col-auto px-0"><img class="compareImg" src="<?php echo iii ?>assets/userside/img/compare1.png" alt=""></div>
                                <div class="col compareProductDetail">
                                    <div class="compareProductTitle"><span>VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                    <div class="compareProductDesc fw-bold"><span>AED 80.96-10</span></div>
                                </div>
                                <div class="col-auto px-0"><img class="closeImg" src="<?php echo iii ?>assets/userside/img/close.png" alt=""></div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3">
                            <div class="row compareCard align-items-center h-100 mx-0">
                                <div class="col-auto px-0"><img class="compareImg" src="<?php echo iii ?>assets/userside/img/compare1.png" alt=""></div>
                                <div class="col compareProductDetail">
                                    <div class="compareProductTitle"><span>VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                    <div class="compareProductDesc fw-bold"><span>AED 80.96-10</span></div>
                                </div>
                                <div class="col-auto px-0"><img class="closeImg" src="<?php echo iii ?>assets/userside/img/close.png" alt=""></div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3">
                            <div class="row compareCard align-items-center h-100 mx-0">
                                <div class="col-auto px-0"><img class="compareImg" src="<?php echo iii ?>assets/userside/img/compare1.png" alt=""></div>
                                <div class="col compareProductDetail">
                                    <div class="compareProductTitle"><span>VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                    <div class="compareProductDesc fw-bold"><span>AED 80.96-10</span></div>
                                </div>
                                <div class="col-auto px-0"><img class="closeImg" src="<?php echo iii ?>assets/userside/img/close.png" alt=""></div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3">
                            <div class="row compareCard align-items-center h-100 mx-0 blank"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-auto btnContainer mt-3 mt-xl-0">
                    <button class="btn btn-outline-theme1 w-100 btnStyle2 shadow-none px-5 me-2 me-xl-0 InqBtn">Inquire Now</button>
                    <button class="btn btn-theme1 w-100 btnStyle2 shadow-none px-5 ms-2 ms-xl-0 mt-xl-2 text-white">Compare <span>(3/4)</span></button>
                </div>
            </div>
        </div>
    </div>
</div>


