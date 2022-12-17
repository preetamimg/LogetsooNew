<?php  
if($header==1){ ?>
  <nav class="navbar navbar-expand-lg bg-white navbar-light py-3" id="header">
    <div class="container">
      <a class="navbar-brand me-auto" href="#">
        <img src="<?php echo iii ?>assets/img/logo.png" alt="">
      </a>
      <button class="navbar-toggler border-0 shadow-none opacity-100 order-first ps-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="flex-fill d-flex ms-5 position-relative align-items-center searchBar" role="search">
          <input class="form-control border border-3 border-theme1 shadow-none h-100" type="search" placeholder="Search for categories, suppliers, brands and more" id="searchbar" aria-label="Search">
          <label for="searchbar" class="order-first">
            <select class="js-example-basic-single" name="" id="">
              <option value="">Products</option>
              <option value="">Supplier</option>
            </select>
          </label>
          <button class="btn btn-theme1 shadow-none rounded-0 d-flex align-items-center justify-content-center" type="submit"><img src="<?php echo iii ?>assets/userside/img/search.png" alt=""></button>
        </form>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-baseline">
          <li class="nav-item ps-2">
            <a class="nav-link fw-400 position-relative text-dark" aria-current="page" href="#">Login</a>
          </li>
          <li class="nav-item px-2  dropdown">
            <a class="nav-link fw-400 position-relative text-dark dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Register</a>
            <ul class="dropdown-menu m-0 border-0 shadow">
              <li class="py-1"><a class="dropdown-item rounded" href="#">Register As Buyer</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Register As Seller</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item px-2 dropdown withBg">
            <a class="nav-link fw-400 position-relative text-dark dropdown-toggle d-flex align-items-center rounded-pill py-1 gap-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">AED</a>
            <ul class="dropdown-menu m-0 border-0 shadow">
              <li class="py-1"><a class="dropdown-item rounded" href="#">Action</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Another action</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Something else here</a></li>
            </ul>
          </li> -->
          <!-- <li class="nav-item px-2 dropdown withBg">
              <select class="langSelect rounded-pill shadow-none">
                <option value="1">AED</option>
                <option value="2">USD</option>
              </select>
          </li> -->
        </ul>
      </div>
      <div class="col-auto d-lg-none">
        <div class="row flex-nowrap rightPartActions">
          <a class="col-auto px-2 text-decoration-none" data-bs-toggle="offcanvas" href="#searchbarCanvas" role="button" aria-controls="searchbarCanvas">
            <img src="<?php echo iii ?>assets/userside/img/search3.png" alt="">
          </a>
          <div class="px-2 dropdown">
            <a class="position-relative dropdown-toggle profileDropDown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo iii ?>assets/userside/img/profile.png" alt=""></a>
            <ul class="dropdown-menu m-0 border-0 shadow">
            <li class="py-1"><a class="dropdown-item rounded" href="#">Login</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Register As Buyer</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Register As Seller</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="langSelectWrapper ms-3 ms-lg-0">
        <form class="d-flex">
          <select class="langSelect rounded-pill shadow-none me-3">
            <option value="1">AED</option>
            <option value="2">USD</option>
          </select>
          <select class="langSelect rounded-pill shadow-none" id="changeLanguage" onchange="changeLang()">
            <option value="1">English</option>
            <option value="2">Arabic</option>
          </select>
        </form>
      </div>
    </div>
  </nav>
  
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title row mx-0 w-100" id="offcanvasExampleLabel">
      <div class="col-12 px-0 position-relative searchbar">
        <input type="search" class="form-control text-white bg-transparent shadow-none" placeholder="Search" name="" id="">
        <a href="javascript:;" class="btn position-absolute d-flex align-items-center"><img src="<?php echo iii ?>assets/userside/img/search.png" alt=""></a>
      </div>
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-white pt-0">
        <ul class="mobileMenuWrapper list-unstyled">
          <li class="MobileMenuList p-2 pb-0 row flex-row-reverse collapsed" data-bs-target="#buildingcollapse"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="buildingcollapse">
            <a class="col-auto collapseMenuItem">
              <img class="arrowImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt="">
            </a>
            <a class="col MobileMenuListItem" href="javascript:;">
              <span class="d-inline-flex align-items-center MobileMenuListItem1"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/cate-building.png" alt="">Building and construction</span>
            </a>
            <div class="collapse" id="buildingcollapse">
              <ul class="mobileMenuWrapper list-unstyled">
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Machinery</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Vehicle Parts and Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Consumer Electronics</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home Appliances</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Apparel</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Fashion Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Jewelry, Timepieces, Eyewear</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Light and Lighting</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Building & Construction</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home and Garden</span></a></li>
              </ul>
            </div>
          </li>
          <li class="MobileMenuList p-2 pb-0 row flex-row-reverse collapsed" data-bs-target="#electronicscollapse"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="electronicscollapse">
            <a class="col-auto collapseMenuItem">
              <img class="arrowImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt="">
            </a>
            <a class="col MobileMenuListItem" href="javascript:;">
              <span class="d-inline-flex align-items-center MobileMenuListItem1"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/cate-elect.png" alt="">Consumer Electronics</span>
            </a>
            <div class="collapse" id="electronicscollapse">
              <ul class="mobileMenuWrapper list-unstyled">
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Machinery</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Vehicle Parts and Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Consumer Electronics</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home Appliances</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Apparel</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Fashion Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Jewelry, Timepieces, Eyewear</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Light and Lighting</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Building & Construction</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home and Garden</span></a></li>
              </ul>
            </div>
          </li>
          <li class="MobileMenuList p-2 pb-0 row flex-row-reverse collapsed" data-bs-target="#apparelcollapse"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="apparelcollapse">
            <a class="col-auto collapseMenuItem">
              <img class="arrowImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt="">
            </a>
            <a class="col MobileMenuListItem" href="javascript:;">
              <span class="d-inline-flex align-items-center MobileMenuListItem1"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/cate-apparel.png" alt="">Apparel</span>
            </a>
            <div class="collapse" id="apparelcollapse">
              <ul class="mobileMenuWrapper list-unstyled">
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Machinery</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Vehicle Parts and Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Consumer Electronics</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home Appliances</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Apparel</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Fashion Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Jewelry, Timepieces, Eyewear</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Light and Lighting</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Building & Construction</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home and Garden</span></a></li>
              </ul>
            </div>
          </li>
          <li class="MobileMenuList p-2 pb-0 row flex-row-reverse collapsed" data-bs-target="#vehiclecollapse"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="vehiclecollapse">
            <a class="col-auto collapseMenuItem">
              <img class="arrowImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt="">
            </a>
            <a class="col MobileMenuListItem" href="javascript:;">
              <span class="d-inline-flex align-items-center MobileMenuListItem1"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/cate-vehicle.png" alt="">Vehicle Parts and Accessories</span>
            </a>
            <div class="collapse" id="vehiclecollapse">
              <ul class="mobileMenuWrapper list-unstyled">
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Machinery</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Vehicle Parts and Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Consumer Electronics</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home Appliances</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Apparel</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Fashion Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Jewelry, Timepieces, Eyewear</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Light and Lighting</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Building & Construction</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home and Garden</span></a></li>
              </ul>
            </div>
          </li>
          <li class="MobileMenuList p-2 pb-0 row flex-row-reverse collapsed" data-bs-target="#machinecollapse"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="machinecollapse">
            <a class="col-auto collapseMenuItem">
              <img class="arrowImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt="">
            </a>
            <a class="col MobileMenuListItem" href="javascript:;">
              <span class="d-inline-flex align-items-center MobileMenuListItem1"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/cate-mac.png" alt="">Machinery</span>
            </a>
            <div class="collapse" id="machinecollapse">
              <ul class="mobileMenuWrapper list-unstyled">
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Machinery</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Vehicle Parts and Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Consumer Electronics</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home Appliances</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Apparel</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Fashion Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Jewelry, Timepieces, Eyewear</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Light and Lighting</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Building & Construction</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home and Garden</span></a></li>
              </ul>
            </div>
          </li>
          <li class="MobileMenuList p-2 pb-0 row flex-row-reverse collapsed" data-bs-target="#gardencollapse"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="gardencollapse">
            <a class="col-auto collapseMenuItem">
              <img class="arrowImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt="">
            </a>
            <a class="col MobileMenuListItem" href="javascript:;">
              <span class="d-inline-flex align-items-center MobileMenuListItem1"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/cate-garden.png" alt="">Home and Garden</span>
            </a>
            <div class="collapse" id="gardencollapse">
              <ul class="mobileMenuWrapper list-unstyled">
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Machinery</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Vehicle Parts and Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Consumer Electronics</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home Appliances</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Apparel</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Fashion Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Jewelry, Timepieces, Eyewear</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Light and Lighting</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Building & Construction</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home and Garden</span></a></li>
              </ul>
            </div>
          </li>
          <li class="MobileMenuList p-2 pb-0 row flex-row-reverse collapsed" data-bs-target="#beautycollapse"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="beautycollapse">
            <a class="col-auto collapseMenuItem">
              <img class="arrowImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt="">
            </a>
            <a class="col MobileMenuListItem" href="javascript:;">
              <span class="d-inline-flex align-items-center MobileMenuListItem1"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/cate-care.png" alt="">Beauty and Personal Care</span>
            </a>
            <div class="collapse" id="beautycollapse">
              <ul class="mobileMenuWrapper list-unstyled">
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Machinery</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Vehicle Parts and Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Consumer Electronics</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home Appliances</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Apparel</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Fashion Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Jewelry, Timepieces, Eyewear</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Light and Lighting</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Building & Construction</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home and Garden</span></a></li>
              </ul>
            </div>
          </li>
          <li class="MobileMenuList p-2 pb-0 row flex-row-reverse collapsed" data-bs-target="#sportcollapse"  data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sportcollapse">
            <a class="col-auto collapseMenuItem">
              <img class="arrowImg" src="<?php echo iii ?>assets/userside/img/drpdwn-arrow-blue.png" alt="">
            </a>
            <a class="col MobileMenuListItem" href="javascript:;">
              <span class="d-inline-flex align-items-center MobileMenuListItem1"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/cate-sport.png" alt="">Sport and Entertainment </span>
            </a>
            <div class="collapse" id="sportcollapse">
              <ul class="mobileMenuWrapper list-unstyled">
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Machinery</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Vehicle Parts and Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Consumer Electronics</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home Appliances</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Apparel</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Fashion Accessories</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Jewelry, Timepieces, Eyewear</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Light and Lighting</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Building & Construction</span></a></li>
                <li class="MobileMenuInnerList px-3 py-1 row"><a class="col MobileMenuListItem" href="javascript:;"><span class="">Home and Garden</span></a></li>
              </ul>
            </div>
          </li>
          <li class="MobileMenuList p-2 pb-0 row flex-row-reverse">
            <a class="col-auto collapseMenuItem">
              <img class="arrowImg arrowImg2" src="<?php echo iii ?>assets/userside/img/menu-drp.png" alt="">
            </a>
            <a class="col MobileMenuListItem" href="javascript:;">
              <span class="d-inline-flex align-items-center MobileMenuListItem1"><img class="pe-2" src="<?php echo iii ?>assets/userside/img/more-cat.png" alt="">More Categories </span>
            </a>
          </li>
        </ul>
  </div>
</div>
<?php }
elseif($header==2){ ?>
<?php } ?>


<div class="offcanvas offcanvas-top searchbarCanvas" tabindex="-1" id="searchbarCanvas" aria-labelledby="searchbarCanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title row mx-0 w-100" id="searchbarCanvasLabel">
      <div class="col-12 px-0 position-relative searchbar">
        <input type="search" class="form-control bg-transparent shadow-none" placeholder="Search" name="" id="">
        <a href="javascript:;" class="btn position-absolute d-flex align-items-center"><img src="<?php echo iii ?>assets/userside/img/search.png" alt=""></a>
      </div>
    </h5>
  </div>
</div>