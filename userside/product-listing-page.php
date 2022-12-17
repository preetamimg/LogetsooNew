<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
    <?php $header = 1 ?>
    <?php $footer = 1 ?>
<?php include 'layouts/header.php' ?>
<div class="bodyPart row mx-0 flex-fill overflow-hidden productListingPage">
    <div class="scrollPart col-12 px-0 position-relative"> <!-- ### SCROLL PART START ### -->
        <div class="container-fluid navBreadcrumb py-2 d-md-block d-none">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item fw-500"><a class="text-decoration-none" href="javascript:;">Department</a></li>
                        <li class="breadcrumb-item fw-500"><a class="text-decoration-none" href="javascript:;">Electronics</a></li>
                        <li class="breadcrumb-item fw-500"><a class="text-decoration-none" href="javascript:;">Tv & Home Entertainment</a></li>
                        <li class="breadcrumb-item fw-500"><a class="text-decoration-none" href="javascript:;">Televisions</a></li>
                        <li class="breadcrumb-item fw-500 active" aria-current="page">Ultra HD Televisions</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid mobileFilterBar d-lg-none py-2">
            <div class="container">    
                <div class="row justify-content-end">
                    <div class="col-auto d-flex align-items-center filterTarget" id="FilterShow"><span class="d-block"></span><img class="ms-2" src="<?php echo iii ?>assets/userside/img/filter.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row mainSection">
                    <div class="col-auto px-0 categorySection h-100 pt-4">
                        <div class="h-100 d-none d-lg-block">
                            <div class="categoryHeading bg-theme1 d-flex align-items-center fw-500" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/dpt.png" alt=""><span class="d-block">Categories</span><img class="ms-auto catDownImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow.png" alt=""></div>
                            <div class="row mx-0 categoryListWrapper collapse show" id="collapseCategory">
                                <div class="col-12 px-0 categoryList">
                                    <div class="row mx-0 align-items-center categoryItem">
                                        <div class="col-auto ps-0"><img class="categoryImg" src="<?php echo iii ?>assets/userside/img/cate-building.png" alt=""></div>
                                        <div class="col ps-0 categoryName"><span class="d-block fw-500">Building and construction</span></div>
                                        <div class="col-auto pe-0"><img class="drpDownImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt=""></div>
                                    </div>
                                    <div class="categoryItemList p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class="active"><a href="javascript:;">Machinery</a></li>
                                                    <li><a href="javascript:;">Vehicle Parts and Accessories</a></li>
                                                    <li><a href="javascript:;">Consumer Electronics</a></li>
                                                    <li><a href="javascript:;">Home Appliances</a></li>
                                                    <li><a href="javascript:;">Apparel</a></li>
                                                    <li><a href="javascript:;">Fashion Accessories</a></li>
                                                    <li><a href="javascript:;">Jewelry, Timepieces, Eyewear</a></li>
                                                    <li><a href="javascript:;">Light and Lighting</a></li>
                                                    <li><a href="javascript:;">Building & Construction</a></li>
                                                    <li><a href="javascript:;">Home and Garden</a></li>
                                                    <li><a href="javascript:;">Furniture</a></li>
                                                    <li><a href="javascript:;">Fabric & Textile Ram Material</a></li>
                                                    <li><a href="javascript:;">Home Textiles</a></li>
                                                    <li><a href="javascript:;">Beauty and Personal Care</a></li>
                                                    <li><a href="javascript:;">Health and Medical</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and School Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                    <li><a href="javascript:;">Tools Hardware</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and school Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class=""><a href="javascript:;">Tools Hardware</a></li>
                                                    <li class=""><a href="javascript:;">Security</a></li>
                                                    <li class=""><a href="javascript:;">Safety</a></li>
                                                    <li class=""><a href="javascript:;">Fabrication Services</a></li>
                                                    <li class=""><a href="javascript:;">Electrical Equipment & Supplies</a></li>
                                                    <li class=""><a href="javascript:;">Electronic Components, Accessories & Telecommunication</a></li>
                                                    <li class=""><a href="javascript:;">Sports & Entertainment</a></li>
                                                    <li class=""><a href="javascript:;">Toys & Hobbies</a></li>
                                                    <li class=""><a href="javascript:;">Gift & Crafts</a></li>
                                                    <li class=""><a href="javascript:;">Luggage , Bags & Cases</a></li>
                                                    <li class=""><a href="javascript:;">Shoes & Accessories</a></li>
                                                    <li class=""><a href="javascript:;">Metal & Alloys</a></li>
                                                    <li class=""><a href="javascript:;">Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Rubbers & Plastics</a></li>
                                                    <li class=""><a href="javascript:;">Agriculture</a></li>
                                                    <li class=""><a href="javascript:;">Food and Beverage</a></li>
                                                    <li class=""><a href="javascript:;">Commercial Service Equipment</a></li>
                                                    <li class=""><a href="javascript:;">Business Services</a></li>
                                                    <li class=""><a href="javascript:;">Renewable Energy</a></li>
                                                    <li class=""><a href="javascript:;">Energy Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Environment</a></li>
                                                    <li class=""><a href="javascript:;">Power Transmission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0 categoryList">
                                    <div class="row mx-0 align-items-center categoryItem">
                                        <div class="col-auto ps-0"><img class="categoryImg" src="<?php echo iii ?>assets/userside/img/cate-elect.png" alt=""></div>
                                        <div class="col ps-0 categoryName"><span class="d-block fw-500">Consumer Electronics</span></div>
                                        <div class="col-auto pe-0"><img class="drpDownImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt=""></div>
                                    </div>
                                    <div class="categoryItemList p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class="active"><a href="javascript:;">Machinery</a></li>
                                                    <li><a href="javascript:;">Vehicle Parts and Accessories</a></li>
                                                    <li><a href="javascript:;">Consumer Electronics</a></li>
                                                    <li><a href="javascript:;">Home Appliances</a></li>
                                                    <li><a href="javascript:;">Apparel</a></li>
                                                    <li><a href="javascript:;">Fashion Accessories</a></li>
                                                    <li><a href="javascript:;">Jewelry, Timepieces, Eyewear</a></li>
                                                    <li><a href="javascript:;">Light and Lighting</a></li>
                                                    <li><a href="javascript:;">Building & Construction</a></li>
                                                    <li><a href="javascript:;">Home and Garden</a></li>
                                                    <li><a href="javascript:;">Furniture</a></li>
                                                    <li><a href="javascript:;">Fabric & Textile Ram Material</a></li>
                                                    <li><a href="javascript:;">Home Textiles</a></li>
                                                    <li><a href="javascript:;">Beauty and Personal Care</a></li>
                                                    <li><a href="javascript:;">Health and Medical</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and School Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                    <li><a href="javascript:;">Tools Hardware</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and school Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class=""><a href="javascript:;">Tools Hardware</a></li>
                                                    <li class=""><a href="javascript:;">Security</a></li>
                                                    <li class=""><a href="javascript:;">Safety</a></li>
                                                    <li class=""><a href="javascript:;">Fabrication Services</a></li>
                                                    <li class=""><a href="javascript:;">Electrical Equipment & Supplies</a></li>
                                                    <li class=""><a href="javascript:;">Electronic Components, Accessories & Telecommunication</a></li>
                                                    <li class=""><a href="javascript:;">Sports & Entertainment</a></li>
                                                    <li class=""><a href="javascript:;">Toys & Hobbies</a></li>
                                                    <li class=""><a href="javascript:;">Gift & Crafts</a></li>
                                                    <li class=""><a href="javascript:;">Luggage , Bags & Cases</a></li>
                                                    <li class=""><a href="javascript:;">Shoes & Accessories</a></li>
                                                    <li class=""><a href="javascript:;">Metal & Alloys</a></li>
                                                    <li class=""><a href="javascript:;">Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Rubbers & Plastics</a></li>
                                                    <li class=""><a href="javascript:;">Agriculture</a></li>
                                                    <li class=""><a href="javascript:;">Food and Beverage</a></li>
                                                    <li class=""><a href="javascript:;">Commercial Service Equipment</a></li>
                                                    <li class=""><a href="javascript:;">Business Services</a></li>
                                                    <li class=""><a href="javascript:;">Renewable Energy</a></li>
                                                    <li class=""><a href="javascript:;">Energy Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Environment</a></li>
                                                    <li class=""><a href="javascript:;">Power Transmission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0 categoryList">
                                    <div class="row mx-0 align-items-center categoryItem">
                                        <div class="col-auto ps-0"><img class="categoryImg" src="<?php echo iii ?>assets/userside/img/cate-apparel.png" alt=""></div>
                                        <div class="col ps-0 categoryName"><span class="d-block fw-500">Apparel</span></div>
                                        <div class="col-auto pe-0"><img class="drpDownImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt=""></div>
                                    </div>
                                    <div class="categoryItemList p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class="active"><a href="javascript:;">Machinery</a></li>
                                                    <li><a href="javascript:;">Vehicle Parts and Accessories</a></li>
                                                    <li><a href="javascript:;">Consumer Electronics</a></li>
                                                    <li><a href="javascript:;">Home Appliances</a></li>
                                                    <li><a href="javascript:;">Apparel</a></li>
                                                    <li><a href="javascript:;">Fashion Accessories</a></li>
                                                    <li><a href="javascript:;">Jewelry, Timepieces, Eyewear</a></li>
                                                    <li><a href="javascript:;">Light and Lighting</a></li>
                                                    <li><a href="javascript:;">Building & Construction</a></li>
                                                    <li><a href="javascript:;">Home and Garden</a></li>
                                                    <li><a href="javascript:;">Furniture</a></li>
                                                    <li><a href="javascript:;">Fabric & Textile Ram Material</a></li>
                                                    <li><a href="javascript:;">Home Textiles</a></li>
                                                    <li><a href="javascript:;">Beauty and Personal Care</a></li>
                                                    <li><a href="javascript:;">Health and Medical</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and School Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                    <li><a href="javascript:;">Tools Hardware</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and school Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class=""><a href="javascript:;">Tools Hardware</a></li>
                                                    <li class=""><a href="javascript:;">Security</a></li>
                                                    <li class=""><a href="javascript:;">Safety</a></li>
                                                    <li class=""><a href="javascript:;">Fabrication Services</a></li>
                                                    <li class=""><a href="javascript:;">Electrical Equipment & Supplies</a></li>
                                                    <li class=""><a href="javascript:;">Electronic Components, Accessories & Telecommunication</a></li>
                                                    <li class=""><a href="javascript:;">Sports & Entertainment</a></li>
                                                    <li class=""><a href="javascript:;">Toys & Hobbies</a></li>
                                                    <li class=""><a href="javascript:;">Gift & Crafts</a></li>
                                                    <li class=""><a href="javascript:;">Luggage , Bags & Cases</a></li>
                                                    <li class=""><a href="javascript:;">Shoes & Accessories</a></li>
                                                    <li class=""><a href="javascript:;">Metal & Alloys</a></li>
                                                    <li class=""><a href="javascript:;">Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Rubbers & Plastics</a></li>
                                                    <li class=""><a href="javascript:;">Agriculture</a></li>
                                                    <li class=""><a href="javascript:;">Food and Beverage</a></li>
                                                    <li class=""><a href="javascript:;">Commercial Service Equipment</a></li>
                                                    <li class=""><a href="javascript:;">Business Services</a></li>
                                                    <li class=""><a href="javascript:;">Renewable Energy</a></li>
                                                    <li class=""><a href="javascript:;">Energy Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Environment</a></li>
                                                    <li class=""><a href="javascript:;">Power Transmission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 px-0 categoryList">
                                    <div class="row mx-0 align-items-center categoryItem">
                                        <div class="col-auto ps-0"><img class="categoryImg" src="<?php echo iii ?>assets/userside/img/cate-vehicle.png" alt=""></div>
                                        <div class="col ps-0 categoryName"><span class="d-block fw-500">Vehicle Parts and Accessories</span></div>
                                        <div class="col-auto pe-0"><img class="drpDownImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt=""></div>
                                    </div>
                                    <div class="categoryItemList p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class="active"><a href="javascript:;">Machinery</a></li>
                                                    <li><a href="javascript:;">Vehicle Parts and Accessories</a></li>
                                                    <li><a href="javascript:;">Consumer Electronics</a></li>
                                                    <li><a href="javascript:;">Home Appliances</a></li>
                                                    <li><a href="javascript:;">Apparel</a></li>
                                                    <li><a href="javascript:;">Fashion Accessories</a></li>
                                                    <li><a href="javascript:;">Jewelry, Timepieces, Eyewear</a></li>
                                                    <li><a href="javascript:;">Light and Lighting</a></li>
                                                    <li><a href="javascript:;">Building & Construction</a></li>
                                                    <li><a href="javascript:;">Home and Garden</a></li>
                                                    <li><a href="javascript:;">Furniture</a></li>
                                                    <li><a href="javascript:;">Fabric & Textile Ram Material</a></li>
                                                    <li><a href="javascript:;">Home Textiles</a></li>
                                                    <li><a href="javascript:;">Beauty and Personal Care</a></li>
                                                    <li><a href="javascript:;">Health and Medical</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and School Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                    <li><a href="javascript:;">Tools Hardware</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and school Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class=""><a href="javascript:;">Tools Hardware</a></li>
                                                    <li class=""><a href="javascript:;">Security</a></li>
                                                    <li class=""><a href="javascript:;">Safety</a></li>
                                                    <li class=""><a href="javascript:;">Fabrication Services</a></li>
                                                    <li class=""><a href="javascript:;">Electrical Equipment & Supplies</a></li>
                                                    <li class=""><a href="javascript:;">Electronic Components, Accessories & Telecommunication</a></li>
                                                    <li class=""><a href="javascript:;">Sports & Entertainment</a></li>
                                                    <li class=""><a href="javascript:;">Toys & Hobbies</a></li>
                                                    <li class=""><a href="javascript:;">Gift & Crafts</a></li>
                                                    <li class=""><a href="javascript:;">Luggage , Bags & Cases</a></li>
                                                    <li class=""><a href="javascript:;">Shoes & Accessories</a></li>
                                                    <li class=""><a href="javascript:;">Metal & Alloys</a></li>
                                                    <li class=""><a href="javascript:;">Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Rubbers & Plastics</a></li>
                                                    <li class=""><a href="javascript:;">Agriculture</a></li>
                                                    <li class=""><a href="javascript:;">Food and Beverage</a></li>
                                                    <li class=""><a href="javascript:;">Commercial Service Equipment</a></li>
                                                    <li class=""><a href="javascript:;">Business Services</a></li>
                                                    <li class=""><a href="javascript:;">Renewable Energy</a></li>
                                                    <li class=""><a href="javascript:;">Energy Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Environment</a></li>
                                                    <li class=""><a href="javascript:;">Power Transmission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 px-0 categoryList">
                                    <div class="row mx-0 align-items-center categoryItem">
                                        <div class="col-auto ps-0"><img class="categoryImg" src="<?php echo iii ?>assets/userside/img/cate-mac.png" alt=""></div>
                                        <div class="col ps-0 categoryName"><span class="d-block fw-500">Machinery</span></div>
                                        <div class="col-auto pe-0"><img class="drpDownImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt=""></div>
                                    </div>
                                    <div class="categoryItemList p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class="active"><a href="javascript:;">Machinery</a></li>
                                                    <li><a href="javascript:;">Vehicle Parts and Accessories</a></li>
                                                    <li><a href="javascript:;">Consumer Electronics</a></li>
                                                    <li><a href="javascript:;">Home Appliances</a></li>
                                                    <li><a href="javascript:;">Apparel</a></li>
                                                    <li><a href="javascript:;">Fashion Accessories</a></li>
                                                    <li><a href="javascript:;">Jewelry, Timepieces, Eyewear</a></li>
                                                    <li><a href="javascript:;">Light and Lighting</a></li>
                                                    <li><a href="javascript:;">Building & Construction</a></li>
                                                    <li><a href="javascript:;">Home and Garden</a></li>
                                                    <li><a href="javascript:;">Furniture</a></li>
                                                    <li><a href="javascript:;">Fabric & Textile Ram Material</a></li>
                                                    <li><a href="javascript:;">Home Textiles</a></li>
                                                    <li><a href="javascript:;">Beauty and Personal Care</a></li>
                                                    <li><a href="javascript:;">Health and Medical</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and School Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                    <li><a href="javascript:;">Tools Hardware</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and school Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class=""><a href="javascript:;">Tools Hardware</a></li>
                                                    <li class=""><a href="javascript:;">Security</a></li>
                                                    <li class=""><a href="javascript:;">Safety</a></li>
                                                    <li class=""><a href="javascript:;">Fabrication Services</a></li>
                                                    <li class=""><a href="javascript:;">Electrical Equipment & Supplies</a></li>
                                                    <li class=""><a href="javascript:;">Electronic Components, Accessories & Telecommunication</a></li>
                                                    <li class=""><a href="javascript:;">Sports & Entertainment</a></li>
                                                    <li class=""><a href="javascript:;">Toys & Hobbies</a></li>
                                                    <li class=""><a href="javascript:;">Gift & Crafts</a></li>
                                                    <li class=""><a href="javascript:;">Luggage , Bags & Cases</a></li>
                                                    <li class=""><a href="javascript:;">Shoes & Accessories</a></li>
                                                    <li class=""><a href="javascript:;">Metal & Alloys</a></li>
                                                    <li class=""><a href="javascript:;">Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Rubbers & Plastics</a></li>
                                                    <li class=""><a href="javascript:;">Agriculture</a></li>
                                                    <li class=""><a href="javascript:;">Food and Beverage</a></li>
                                                    <li class=""><a href="javascript:;">Commercial Service Equipment</a></li>
                                                    <li class=""><a href="javascript:;">Business Services</a></li>
                                                    <li class=""><a href="javascript:;">Renewable Energy</a></li>
                                                    <li class=""><a href="javascript:;">Energy Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Environment</a></li>
                                                    <li class=""><a href="javascript:;">Power Transmission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 px-0 categoryList">
                                    <div class="row mx-0 align-items-center categoryItem">
                                        <div class="col-auto ps-0"><img class="categoryImg" src="<?php echo iii ?>assets/userside/img/cate-garden.png" alt=""></div>
                                        <div class="col ps-0 categoryName"><span class="d-block fw-500">Home and Garden</span></div>
                                        <div class="col-auto pe-0"><img class="drpDownImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt=""></div>
                                    </div>
                                    <div class="categoryItemList p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class="active"><a href="javascript:;">Machinery</a></li>
                                                    <li><a href="javascript:;">Vehicle Parts and Accessories</a></li>
                                                    <li><a href="javascript:;">Consumer Electronics</a></li>
                                                    <li><a href="javascript:;">Home Appliances</a></li>
                                                    <li><a href="javascript:;">Apparel</a></li>
                                                    <li><a href="javascript:;">Fashion Accessories</a></li>
                                                    <li><a href="javascript:;">Jewelry, Timepieces, Eyewear</a></li>
                                                    <li><a href="javascript:;">Light and Lighting</a></li>
                                                    <li><a href="javascript:;">Building & Construction</a></li>
                                                    <li><a href="javascript:;">Home and Garden</a></li>
                                                    <li><a href="javascript:;">Furniture</a></li>
                                                    <li><a href="javascript:;">Fabric & Textile Ram Material</a></li>
                                                    <li><a href="javascript:;">Home Textiles</a></li>
                                                    <li><a href="javascript:;">Beauty and Personal Care</a></li>
                                                    <li><a href="javascript:;">Health and Medical</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and School Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                    <li><a href="javascript:;">Tools Hardware</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and school Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class=""><a href="javascript:;">Tools Hardware</a></li>
                                                    <li class=""><a href="javascript:;">Security</a></li>
                                                    <li class=""><a href="javascript:;">Safety</a></li>
                                                    <li class=""><a href="javascript:;">Fabrication Services</a></li>
                                                    <li class=""><a href="javascript:;">Electrical Equipment & Supplies</a></li>
                                                    <li class=""><a href="javascript:;">Electronic Components, Accessories & Telecommunication</a></li>
                                                    <li class=""><a href="javascript:;">Sports & Entertainment</a></li>
                                                    <li class=""><a href="javascript:;">Toys & Hobbies</a></li>
                                                    <li class=""><a href="javascript:;">Gift & Crafts</a></li>
                                                    <li class=""><a href="javascript:;">Luggage , Bags & Cases</a></li>
                                                    <li class=""><a href="javascript:;">Shoes & Accessories</a></li>
                                                    <li class=""><a href="javascript:;">Metal & Alloys</a></li>
                                                    <li class=""><a href="javascript:;">Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Rubbers & Plastics</a></li>
                                                    <li class=""><a href="javascript:;">Agriculture</a></li>
                                                    <li class=""><a href="javascript:;">Food and Beverage</a></li>
                                                    <li class=""><a href="javascript:;">Commercial Service Equipment</a></li>
                                                    <li class=""><a href="javascript:;">Business Services</a></li>
                                                    <li class=""><a href="javascript:;">Renewable Energy</a></li>
                                                    <li class=""><a href="javascript:;">Energy Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Environment</a></li>
                                                    <li class=""><a href="javascript:;">Power Transmission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 px-0 categoryList">
                                    <div class="row mx-0 align-items-center categoryItem">
                                        <div class="col-auto ps-0"><img class="categoryImg" src="<?php echo iii ?>assets/userside/img/cate-care.png" alt=""></div>
                                        <div class="col ps-0 categoryName"><span class="d-block fw-500">Beauty and Personal Care</span></div>
                                        <div class="col-auto pe-0"><img class="drpDownImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt=""></div>
                                    </div>
                                    <div class="categoryItemList p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class="active"><a href="javascript:;">Machinery</a></li>
                                                    <li><a href="javascript:;">Vehicle Parts and Accessories</a></li>
                                                    <li><a href="javascript:;">Consumer Electronics</a></li>
                                                    <li><a href="javascript:;">Home Appliances</a></li>
                                                    <li><a href="javascript:;">Apparel</a></li>
                                                    <li><a href="javascript:;">Fashion Accessories</a></li>
                                                    <li><a href="javascript:;">Jewelry, Timepieces, Eyewear</a></li>
                                                    <li><a href="javascript:;">Light and Lighting</a></li>
                                                    <li><a href="javascript:;">Building & Construction</a></li>
                                                    <li><a href="javascript:;">Home and Garden</a></li>
                                                    <li><a href="javascript:;">Furniture</a></li>
                                                    <li><a href="javascript:;">Fabric & Textile Ram Material</a></li>
                                                    <li><a href="javascript:;">Home Textiles</a></li>
                                                    <li><a href="javascript:;">Beauty and Personal Care</a></li>
                                                    <li><a href="javascript:;">Health and Medical</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and School Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                    <li><a href="javascript:;">Tools Hardware</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and school Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class=""><a href="javascript:;">Tools Hardware</a></li>
                                                    <li class=""><a href="javascript:;">Security</a></li>
                                                    <li class=""><a href="javascript:;">Safety</a></li>
                                                    <li class=""><a href="javascript:;">Fabrication Services</a></li>
                                                    <li class=""><a href="javascript:;">Electrical Equipment & Supplies</a></li>
                                                    <li class=""><a href="javascript:;">Electronic Components, Accessories & Telecommunication</a></li>
                                                    <li class=""><a href="javascript:;">Sports & Entertainment</a></li>
                                                    <li class=""><a href="javascript:;">Toys & Hobbies</a></li>
                                                    <li class=""><a href="javascript:;">Gift & Crafts</a></li>
                                                    <li class=""><a href="javascript:;">Luggage , Bags & Cases</a></li>
                                                    <li class=""><a href="javascript:;">Shoes & Accessories</a></li>
                                                    <li class=""><a href="javascript:;">Metal & Alloys</a></li>
                                                    <li class=""><a href="javascript:;">Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Rubbers & Plastics</a></li>
                                                    <li class=""><a href="javascript:;">Agriculture</a></li>
                                                    <li class=""><a href="javascript:;">Food and Beverage</a></li>
                                                    <li class=""><a href="javascript:;">Commercial Service Equipment</a></li>
                                                    <li class=""><a href="javascript:;">Business Services</a></li>
                                                    <li class=""><a href="javascript:;">Renewable Energy</a></li>
                                                    <li class=""><a href="javascript:;">Energy Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Environment</a></li>
                                                    <li class=""><a href="javascript:;">Power Transmission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 px-0 categoryList">
                                    <div class="row mx-0 align-items-center categoryItem">
                                        <div class="col-auto ps-0"><img class="categoryImg" src="<?php echo iii ?>assets/userside/img/cate-sport.png" alt=""></div>
                                        <div class="col ps-0 categoryName"><span class="d-block fw-500">Sport and Entertainment </span></div>
                                        <div class="col-auto pe-0"><img class="drpDownImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt=""></div>
                                    </div>
                                    <div class="categoryItemList p-3">
                                        <div class="row">
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class="active"><a href="javascript:;">Machinery</a></li>
                                                    <li><a href="javascript:;">Vehicle Parts and Accessories</a></li>
                                                    <li><a href="javascript:;">Consumer Electronics</a></li>
                                                    <li><a href="javascript:;">Home Appliances</a></li>
                                                    <li><a href="javascript:;">Apparel</a></li>
                                                    <li><a href="javascript:;">Fashion Accessories</a></li>
                                                    <li><a href="javascript:;">Jewelry, Timepieces, Eyewear</a></li>
                                                    <li><a href="javascript:;">Light and Lighting</a></li>
                                                    <li><a href="javascript:;">Building & Construction</a></li>
                                                    <li><a href="javascript:;">Home and Garden</a></li>
                                                    <li><a href="javascript:;">Furniture</a></li>
                                                    <li><a href="javascript:;">Fabric & Textile Ram Material</a></li>
                                                    <li><a href="javascript:;">Home Textiles</a></li>
                                                    <li><a href="javascript:;">Beauty and Personal Care</a></li>
                                                    <li><a href="javascript:;">Health and Medical</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and School Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                    <li><a href="javascript:;">Tools Hardware</a></li>
                                                    <li><a href="javascript:;">Packaging</a></li>
                                                    <li><a href="javascript:;">Office and school Supplies</a></li>
                                                    <li><a href="javascript:;">Instrumentation & Equipment</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <ul class="list-unstyled m-0">
                                                    <li class=""><a href="javascript:;">Tools Hardware</a></li>
                                                    <li class=""><a href="javascript:;">Security</a></li>
                                                    <li class=""><a href="javascript:;">Safety</a></li>
                                                    <li class=""><a href="javascript:;">Fabrication Services</a></li>
                                                    <li class=""><a href="javascript:;">Electrical Equipment & Supplies</a></li>
                                                    <li class=""><a href="javascript:;">Electronic Components, Accessories & Telecommunication</a></li>
                                                    <li class=""><a href="javascript:;">Sports & Entertainment</a></li>
                                                    <li class=""><a href="javascript:;">Toys & Hobbies</a></li>
                                                    <li class=""><a href="javascript:;">Gift & Crafts</a></li>
                                                    <li class=""><a href="javascript:;">Luggage , Bags & Cases</a></li>
                                                    <li class=""><a href="javascript:;">Shoes & Accessories</a></li>
                                                    <li class=""><a href="javascript:;">Metal & Alloys</a></li>
                                                    <li class=""><a href="javascript:;">Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Rubbers & Plastics</a></li>
                                                    <li class=""><a href="javascript:;">Agriculture</a></li>
                                                    <li class=""><a href="javascript:;">Food and Beverage</a></li>
                                                    <li class=""><a href="javascript:;">Commercial Service Equipment</a></li>
                                                    <li class=""><a href="javascript:;">Business Services</a></li>
                                                    <li class=""><a href="javascript:;">Renewable Energy</a></li>
                                                    <li class=""><a href="javascript:;">Energy Chemicals</a></li>
                                                    <li class=""><a href="javascript:;">Environment</a></li>
                                                    <li class=""><a href="javascript:;">Power Transmission</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 px-0 categoryList moreCategoryLink">
                                    <a href="javascript:;" class="row mx-0 align-items-center text-decoration-none categoryItem ">
                                        <div class="col-auto ps-0"><img class="categoryImg" src="<?php echo iii ?>assets/userside/img/more-cat.png" alt=""></div>
                                        <div class="col ps-0 categoryName text-theme1"><span class="d-block fw-500">More Categories</span></div>
                                        <div class="col-auto pe-0"><img class="drpDownImg2 flipImage" src="<?php echo iii ?>assets/userside/img/menu-drp.png" alt=""></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="filterBar my-lg-4 rounded" id="filterBar">
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
                            <div class="col-xl productListHeading"><span>Ultra HD Televisions</span><span>(Showing 1 – 40 products of 44,276 products)</span></div>
                            <div class="col-xl-auto mt-2 mt-xl-0">
                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <form>
                                            <div class="position-relative SortSelectWrapper">
                                                <label class="sortLabel fw-500" for="SortSelect">Sort By</label>
                                                <select class="js-example-basic-single" name="" id="SortSelect">
                                                    <option value="">Newest Arrivals</option>
                                                    <option value="">Price: High To Low</option>
                                                    <option value="">Price: Low To High</option>
                                                    <option value="">Customer Rating</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-auto ps-0">
                                        <div class="listGridContainer d-flex">
                                            <div class="viewBox gridView d-flex align-items-center justify-content-center active" id="gridView" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Grid View">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/gridon.png" alt="">
                                            </div>
                                            <div class="viewBox listView d-flex align-items-center justify-content-center" id="listView" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="List View">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/listoff.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row plcViewBox g-3 mt-2">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image19.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600" data-bs-toggle="offcanvas" data-bs-target="#compareOffcanvas" aria-controls="compareOffcanvas"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image36.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image19.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image36.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row plcFeaturedProduct mt-3">
                            <div class="col-12 fpHeading fw-600 mb-3"><span class="d-block">Featured Products</span></div>
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="plcFeatureCard position-relative overflow-hidden">
                                    <img class="flipImage" src="<?php echo iii ?>assets/userside/img/fp3.png" alt="">
                                    <a href="javascript:;" class="btn btn-white checkNowBtn position-absolute shadow-none"><span class="d-block">Check Now</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12 col-xl-6 mt-3 mt-md-0 mt-lg-3 mt-xl-0">
                                <div class="plcFeatureCard position-relative overflow-hidden">
                                    <img class="flipImage" src="<?php echo iii ?>assets/userside/img/fp4.png" alt="">
                                    <a href="javascript:;" class="btn btn-white checkNowBtn position-absolute shadow-none"><span class="d-block">Check Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row plcViewBox g-3 mt-2">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image19.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image36.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image19.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image36.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3 plcCardWrapper">
                                <div class="row productListCard mx-0">
                                    <div class="col-12 px-0 position-relative plcTopSection">
                                        <div class="row owl-carousel plcImageSlider mx-0">
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image35.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image30.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image31.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image32.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image33.png" alt="">
                                            </div>
                                            <div class="col-12 plcImg overflow-hidden">
                                                <img class="" src="<?php echo iii ?>assets/userside/img/image34.png" alt="">
                                            </div>
                                        </div>
                                        <div class="plcRating">
                                            <img class="me-1" src="<?php echo iii ?>assets/userside/img/littleStar.png" alt="">
                                            <span class="fw-bold">4.3</span>
                                            <span>(3.568)</span>
                                        </div>
                                    </div>
                                    <div class="col-12 plcMiddleSection">
                                        <div class="row">
                                            <div class="col-12 plCardContent">
                                                <div class="row py-2">
                                                    <div class="col-12 plcProductName"><span class="d-block">VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                                    <div class="col-12 plcProductType fw-bold py-1 pb-2"><span class="d-block">AED 80.96-10</span></div>
                                                    <div class="col-auto plcProductMoq fw-600"><span class="d-block">MOQ: 1,000 Pcs</span></div>
                                                    <div class="col ps-0 d-flex align-items-center plcProductCompare fw-600"><img class="me-1" src="<?php echo iii ?>assets/userside/img/compareoff.png" alt=""><span class="d-block">Add To Compare</span></div>
                                                    <div class="col-12 plcSupplierCountry py-2">
                                                        <span class="d-block plcSupplier fw-600">Supplier Country</span>
                                                        <div class="d-flex align-items-center plcCountryName">
                                                            <img class="me-2" src="<?php echo iii ?>assets/userside/img/flag7.png" alt="">
                                                            <span class="d-block fw-600">United Arab Emirates</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 plcBottomSection">
                                                <div class="row align-items-center">
                                                    <div class="col"><a class="InquiryBtn btn btn-theme1 w-100 shadow-none" href="javascript:;"><span class="d-block">Inquire Now</span></a></div>
                                                    <div class="col-auto msgBtn"><a href="javascript:;"><img class="" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                                    <div class="col-auto favBtn"><button class="btn border-0 bg-transparent shadow-none p-0"><img class="" src="<?php echo iii ?>assets/userside/img/icnFav.png" alt=""></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row plcFeaturedProduct mt-3">
                            <div class="col-12 fpHeading fw-600 mb-3"><span class="d-block">Featured Products</span></div>
                            <div class="col-sm-6">
                                <div class="plcFeatureCard position-relative overflow-hidden">
                                    <img class="flipImage" src="<?php echo iii ?>assets/userside/img/fp5.png" alt="">
                                    <a href="javascript:;" class="btn btn-white checkNowBtn position-absolute shadow-none"><span class="d-block">Check Now</span></a>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-3 mt-sm-0">
                                <div class="plcFeatureCard position-relative overflow-hidden">
                                    <img class="flipImage" src="<?php echo iii ?>assets/userside/img/fp6.png" alt="">
                                    <a href="javascript:;" class="btn btn-white checkNowBtn position-absolute shadow-none"><span class="d-block">Check Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="plcPaginationWrapper p-3 mt-4">
                            <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-between">
                                <div class="pageNo fw-500"><span class="d-block PageNoSpan">Page 1 of 1,108</span></div>
                                <ul class="pagination justify-content-center m-0">
                                    <li class="page-item mx-1"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none prev" href="#" aria-label="Previous"><img src="<?php echo iii ?>assets/img/leftArrow.png" alt=""></a></li>
                                    <li class="page-item mx-1"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">1</span></a></li>
                                    <li class="page-item mx-1"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">2</span></a></li>
                                    <li class="page-item mx-1"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none active" href="#"><span class="d-block">3</span></a></li>
                                    <li class="page-item mx-1"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">4</span></a></li>
                                    <li class="page-item mx-1"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">5</span></a></li>
                                    <li class="page-item mx-1"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">6</span></a></li>
                                    <li class="page-item mx-1"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none" href="#"><span class="d-block">7</span></a></li>
                                    <li class="page-item mx-1"><a class="page-link d-flex justify-content-center align-items-center border-0 shadow-none next" href="#" aria-label="Next"><img src="<?php echo iii ?>assets/img/rightArrow.png" alt=""></a></li>
                                </ul>
                                <div class="pageNo fw-500 invisible d-none d-sm-block"><span class="d-block PageNoSpan">Page 1 of 1,108</span></div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row itemSliderSection">
                    <div class="col-12">
                        <div class="row">
                            <div class="col">
                                <div class="row align-items-center mb-3 justify-content-between justify-content-md-start">
                                    <div class="col-auto fw-600 text-dark sliderHeading pe-0"><span>Newly Added Products</span></div>
                                    <a href="javascript:;" class="col-auto seeAll text-decoration-none fw-500 position-relative"><span>See All</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row mx-0 owl-carousel newAddedCarousel">
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image1.png" alt="">
                                                <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                    <div class="col-auto px-0"><span>NEW</span></div>
                                                </div>
                                                <div class="row cardOffer position-absolute mx-0 fw-600 d-none d-md-block">
                                                    <div class="col-auto px-0"><span>50% Off</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Smart Watch 2.5” Square Model for boys Smart Watch 2.5” Square Model for boys</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/best-android-phones1.png" alt="">
                                                <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                    <div class="col-auto px-0"><span>NEW</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Android Phone With 48MP Cam Android Phone With 48MP Cam</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image12.png" alt="">
                                                <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                    <div class="col-auto px-0"><span>NEW</span></div>
                                                </div>
                                                <div class="row cardOffer position-absolute mx-0 fw-600 d-none d-md-block">
                                                    <div class="col-auto px-0"><span>50% Off</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Digital Arm Blood Pressure Mon Digital Arm Blood Pressure Mon</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image2.png" alt="">
                                                <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                    <div class="col-auto px-0"><span>NEW</span></div>
                                                </div>
                                                <div class="row cardOffer position-absolute mx-0 fw-600 d-none d-md-block">
                                                    <div class="col-auto px-0"><span>50% Off</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Fingertip Oximeter Medical Adu Fingertip Oximeter Medical Adu</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image4.png" alt="">
                                                <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                    <div class="col-auto px-0"><span>NEW</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Ture Wireless Macaron Ear Pho Ture Wireless Macaron Ear Pho</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image12.png" alt="">
                                                <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                    <div class="col-auto px-0"><span>NEW</span></div>
                                                </div>
                                                <div class="row cardOffer position-absolute mx-0 fw-600 d-none d-md-block">
                                                    <div class="col-auto px-0"><span>50% Off</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Digital Arm Blood Pressure Mon Digital Arm Blood Pressure Mon</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row itemSliderSection py-4 py-md-5">
                    <div class="col-12">
                        <div class="row">
                            <div class="col">
                                <div class="row align-items-center mb-3 justify-content-between justify-content-md-start">
                                    <div class="col-auto fw-600 text-dark sliderHeading pe-0"><span>Recently Reviewed Products</span></div>
                                    <a href="javascript:;" class="col-auto seeAll text-decoration-none fw-500 position-relative"><span>See All</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row mx-0 owl-carousel newAddedCarousel">
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image6.png" alt="">
                                                <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                    <div class="col-auto px-0"><span>NEW</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>RAGGIE Big Size DC 12v 32inch L RAGGIE Big Size DC 12v 32inch L</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image13.png" alt="">
                                                <div class="row cardOffer position-absolute mx-0 fw-600">
                                                    <div class="col-auto px-0"><span>50% Off</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Kuwii Wholesale Elegant Vintag Kuwii Wholesale Elegant Vintag</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image4.png" alt="">
                                                <div class="row cardOffer position-absolute mx-0 fw-600">
                                                    <div class="col-auto px-0"><span>50% Off</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Ture Wireless Macaron Ear Pho Ture Wireless Macaron Ear Pho</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image6.png" alt="">
                                                <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                    <div class="col-auto px-0"><span>NEW</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>RAGGIE Big Size DC 12v 32inch L RAGGIE Big Size DC 12v 32inch L</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image13.png" alt="">
                                                <div class="row cardOffer position-absolute mx-0 fw-600">
                                                    <div class="col-auto px-0"><span>50% Off</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Kuwii Wholesale Elegant Vintag Kuwii Wholesale Elegant Vintag</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none d-md-block">
                                        <div class="row mx-0 customCard rounded position-relative">
                                            <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/image4.png" alt="">
                                                <div class="row cardOffer position-absolute mx-0 fw-600">
                                                    <div class="col-auto px-0"><span>50% Off</span></div>
                                                </div>
                                            </div>
                                            <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                <div class="row">
                                                    <div class="col-12 cardTitle"><span>Ture Wireless Macaron Ear Pho Ture Wireless Macaron Ear Pho</span></div>
                                                    <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    <div class="col-12 cardOff d-md-none fw-600"><span>50% OFF</span></div>
                                                    <div class="col-12 cardQuantity mb-2"><span>MOQ: 1,000 Pcs</span></div>
                                                </div>
                                            </div>
                                            <div class="col-12 cardhoverContent position-absolute w-100 h-100 py-2 px-3 d-none d-md-block">
                                                <div class="row mx-0 flex-column h-100">
                                                    <ul class="col-12 m-0 flex-fill">
                                                        <li><span class="d-block">Faux rabbit fur blanket</span></li>
                                                        <li><span class="d-block">Washable, stain Resistant, Non-Slip, PET FRIENDLY</span></li>
                                                        <li><span class="d-block">Modern</span></li>
                                                        <li><span class="d-block">Home, Commercial, doormat</span></li>
                                                        <li><span class="d-block">super soft luxury faux rabbit fur plush throw blankets</span></li>
                                                        <li><span class="d-block">Chenxing</span></li>
                                                        <li><span class="d-block">Overlock</span></li>
                                                        <li><span class="d-block">150x200cm</span></li>
                                                    </ul>
                                                    <a href="javascript:;" class="col-12 fw-500 text-center mt-2"><span class="d-block">See More</span></a>
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


