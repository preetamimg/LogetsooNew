<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
    <?php $header = 1 ?>
    <?php $footer = 1 ?>
<?php include 'layouts/header.php' ?>
<div class="bodyPart row mx-0 flex-fill overflow-hidden categoryPage">
    <div class="scrollPart col-12 px-0 position-relative"> <!-- ### SCROLL PART START ### -->
        <div class="container-fluid navBreadcrumb py-2 d-md-block d-none">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item fw-500"><a class="text-decoration-none" href="javascript:;">Department</a></li>
                        <li class="breadcrumb-item fw-500"><a class="text-decoration-none" href="javascript:;">Electronics</a></li>
                        <li class="breadcrumb-item fw-500"><a class="text-decoration-none" href="javascript:;">Tv & Home Entertainment</a></li>
                        <li class="breadcrumb-item fw-500 active" aria-current="page">Televisions</li>
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
                    <div class="col itemSliderSection pt-4 pb-5">
                        <div class="row ms-lg-0">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-auto fw-600 text-dark sliderHeading pe-0"><span>Top Brands In Televisions</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mx-0 owl-carousel brandCarousel2">
                                            <div class="col-12">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/brand8.png" alt="">
                                            </div>
                                            <div class="col-12">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/brand9.png" alt="">
                                            </div>
                                            <div class="col-12">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/brand10.png" alt="">
                                            </div>
                                            <div class="col-12">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/brand11.png" alt="">
                                            </div>
                                            <div class="col-12">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/brand12.png" alt="">
                                            </div>
                                            <div class="col-12">
                                                <img class="w-100" src="<?php echo iii ?>assets/userside/img/brand9.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ms-lg-0 py-5">
                            <div class="col-12">
                                <div class="row pb-3">
                                    <div class="col">
                                        <div class="row align-items-center justify-content-between justify-content-md-start">
                                            <div class="col-auto fw-600 text-dark sliderHeading pe-0"><span>Newly Added Products</span></div>
                                            <a href="javascript:;" class="col-auto seeAll text-decoration-none fw-500 position-relative"><span>See All</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mx-0 owl-carousel newAddedCarousel2">
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image19.png" alt="">
                                                    </div>
                                                    <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                        <div class="row">
                                                            <div class="col-12 cardTitle"><span>32inch smart LED TV Full-HD T 32inch smart LED TV Full-HD T</span></div>
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
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image20.png" alt="">
                                                        <div class="row cardOffer position-absolute mx-0 fw-600">
                                                            <div class="col-auto px-0"><span>50% Off</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                        <div class="row">
                                                            <div class="col-12 cardTitle"><span>LED Smart TV Smart Television LED Smart TV Smart Television</span></div>
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
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image29.png" alt="">
                                                        <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                            <div class="col-auto px-0"><span>NEW</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                        <div class="row">
                                                            <div class="col-12 cardTitle"><span>Big Size Smart 3x3 LCD Video Big Size Smart 3x3 LCD Video </span></div>
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
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image21.png" alt="">
                                                        <div class="row cardOffer position-absolute mx-0 fw-600">
                                                            <div class="col-auto px-0"><span>50% Off</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                        <div class="row">
                                                            <div class="col-12 cardTitle"><span>Smart Watch 2.5” Square Mod Smart Watch 2.5” Square Mod</span></div>
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
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image29.png" alt="">
                                                        <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                            <div class="col-auto px-0"><span>NEW</span></div>
                                                        </div>
                                                        <div class="row cardOffer position-absolute mx-0 fw-600">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ms-lg-0 itemNonSliderSection">
                            <div class="col-12 d-md-none">
                                <div class="sectionInner">    
                                    <div class="row g-3">
                                        <a href="javascript:;" class="col-6 col-md-3 col-xl-6 text-decoration-none ">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image22.png" alt="">
                                                </div>
                                                <div class="col-12 sectionHeading fw-600 pt-1 px-0"><span class="d-block">Best Sellers</span></div>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="col-6 col-md-3 col-xl-6 text-decoration-none">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image25.png" alt="">
                                                </div>
                                                <div class="col-12 sectionHeading fw-600 pt-1 px-0"><span class="d-block">Ultra HD (4K) Tvs</span></div>
                                            </div>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-xl-6 d-none d-md-block">
                                <div class="sectionInner p-3">    
                                    <div class="row g-3">
                                        <div class="col-12 sectionHeading fw-600"><span class="d-block">Best Sellers</span></div>
                                        <div class="col-6 col-md-3 col-xl-6 ">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image22.png" alt="">
                                                </div>
                                                <div class="col-12 cardContent py-2 px-0">
                                                    <div class="row">
                                                        <div class="col-12 cardTitle"><span>55 Inch Seamless Multi-Scr 55 Inch Seamless Multi-Scr</span></div>
                                                        <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-xl-6">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image23.png" alt="">
                                                </div>
                                                <div class="col-12 cardContent py-2 px-0">
                                                    <div class="row">
                                                        <div class="col-12 cardTitle"><span>LCD Signage Display Screen LCD Signage Display Screen</span></div>
                                                        <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-xl-6">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image24.png" alt="">
                                                </div>
                                                <div class="col-12 cardContent py-2 px-0">
                                                    <div class="row">
                                                        <div class="col-12 cardTitle"><span>Smart Led Tv Led Smart Tele Smart Led Tv Led Smart Tele</span></div>
                                                        <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-xl-6">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image28.png" alt="">
                                                </div>
                                                <div class="col-12 cardContent py-2 px-0">
                                                    <div class="row">
                                                        <div class="col-12 cardTitle"><span>32inch smart LED TV Full-HD 32inch smart LED TV Full-HD</span></div>
                                                        <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a class="text-decoration-none seeMoreLink fw-600" href="javascript:;"><span>See More</span></a>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-xl-6 mt-4 mt-xl-0 d-none d-md-block">
                                <div class="sectionInner p-3">    
                                    <div class="row g-3">
                                        <div class="col-12 sectionHeading fw-600"><span class="d-block">Ultra HD (4K) Tvs</span></div>
                                        <div class="col-6 col-md-3 col-xl-6">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image25.png" alt="">
                                                </div>
                                                <div class="col-12 cardContent py-2 px-0">
                                                    <div class="row">
                                                        <div class="col-12 cardTitle"><span>Weier 32 40 43 50 55 60inc Weier 32 40 43 50 55 60inc</span></div>
                                                        <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-xl-6">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image26.png" alt="">
                                                </div>
                                                <div class="col-12 cardContent py-2 px-0">
                                                    <div class="row">
                                                        <div class="col-12 cardTitle"><span>Line Spring Festival OEM UH Line Spring Festival OEM UH</span></div>
                                                        <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-xl-6">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image27.png" alt="">
                                                </div>
                                                <div class="col-12 cardContent py-2 px-0">
                                                    <div class="row">
                                                        <div class="col-12 cardTitle"><span>4k Smart Television Smart Tv 4k Smart Television Smart Tv</span></div>
                                                        <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-xl-6">    
                                            <div class="row mx-0 customCard rounded position-relative">
                                                <div class="col-12 position-relative cardImg">
                                                    <img class="w-100" src="<?php echo iii ?>assets/userside/img/image28.png" alt="">
                                                </div>
                                                <div class="col-12 cardContent py-2 px-0">
                                                    <div class="row">
                                                        <div class="col-12 cardTitle"><span>32inch smart LED TV Full-HD 32inch smart LED TV Full-HD</span></div>
                                                        <div class="col-12 cardPrice fw-600"><span>AED 5,000</span> <span>10,000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a class="text-decoration-none seeMoreLink fw-600" href="javascript:;"><span>See More</span></a>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="row ms-lg-0 pt-5">
                            <div class="col-12">
                                <div class="row pb-3">
                                    <div class="col">
                                        <div class="row align-items-center">
                                            <div class="col-auto fw-600 text-dark sliderHeading pe-0"><span>Suggested Products For You</span></div>
                                            <a href="javascript:;" class="col-auto seeAll text-decoration-none fw-500 position-relative"><span>See All</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row mx-0 owl-carousel newAddedCarousel2">
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image19.png" alt="">
                                                    </div>
                                                    <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                        <div class="row">
                                                            <div class="col-12 cardTitle"><span>32inch smart LED TV Full-HD T 32inch smart LED TV Full-HD T</span></div>
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
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image20.png" alt="">
                                                        <div class="row cardOffer position-absolute mx-0 fw-600">
                                                            <div class="col-auto px-0"><span>50% Off</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                        <div class="row">
                                                            <div class="col-12 cardTitle"><span>LED Smart TV Smart Television LED Smart TV Smart Television</span></div>
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
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image29.png" alt="">
                                                        <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                            <div class="col-auto px-0"><span>NEW</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                        <div class="row">
                                                            <div class="col-12 cardTitle"><span>Big Size Smart 3x3 LCD Video Big Size Smart 3x3 LCD Video </span></div>
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
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image21.png" alt="">
                                                        <div class="row cardOffer position-absolute mx-0 fw-600">
                                                            <div class="col-auto px-0"><span>50% Off</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-7 col-sm-8  col-md-12 cardContent py-md-2">
                                                        <div class="row">
                                                            <div class="col-12 cardTitle"><span>Smart Watch 2.5” Square Mod Smart Watch 2.5” Square Mod</span></div>
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
                                            <div class="col-12  d-none d-md-block">
                                                <div class="row mx-0 customCard rounded position-relative">
                                                    <div class="col-5 col-sm-4 col-md-12 position-relative cardImg">
                                                        <img class="w-100" src="<?php echo iii ?>assets/userside/img/image29.png" alt="">
                                                        <div class="cardTag position-absolute mx-0 rounded-1 row">
                                                            <div class="col-auto px-0"><span>NEW</span></div>
                                                        </div>
                                                        <div class="row cardOffer position-absolute mx-0 fw-600">
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
