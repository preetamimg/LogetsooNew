<?php  
if($header==1){ ?>
<nav class="navbar navbar-expand-lg bg-theme1 navbar-dark py-md-3 py-2">
  <div class="container ps-lg-5">
    <a class="navbar-brand ms-lg-5 ps-lg-5" href="#">
      <img src="<?php echo iii ?>assets/img/supplier-logo.png" alt="">
    </a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <form>
        <select class="bg-transparent shadow-none border-0 text-white langSelect" id="changeLanguage" onchange="changeLang()">
          <option value="1">English</option>
          <option value="2">Arabic</option>
        </select>
          </form>
        </li>
      </ul>
  </div>
</nav>
  <div class="offcanvas offcanvas-start bg-dark mobileHeader" tabindex="-1" id="offcanvasExample2" aria-labelledby="offcanvasExample2Label">
    <div class="offcanvas-header pb-0 pt-4">
      <img class="w-75" src="<?php echo iii ?>assets/img/supplier-logo.png" alt="">
      <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-unstyled">
        <li class="p-2 ps-0"><a class="mobileMenu2 d-flex align-items-center justify-content-between collapsed" href="#productscollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="productscollapse"><span class="d-block">English</span> <img class="ps-1" src="<?php echo iii ?>assets/img/drpdwn-arrow-blue.png" alt=""></a></li>
        <div class="collapse" id="productscollapse">
            <ul class="list-unstyled">
              <li class="p-2"><a class="mobileMenu3" href="#"><span class="d-block">Arabic</span></a></li>
              <!-- <li class="p-2"><a class="mobileMenu3" href="#"><span class="d-block"><img class="pe-2 flagIcon" src="<?php echo iii ?>assets/img/flag7.png" alt="">Arabic</span></a></li> -->
            </ul>
        </div>
        <!-- <li class="p-2 ps-0"><a class="mobileMenu3" href="#"><span class="d-block">Reports</span></a></li> -->
      </ul>
    </div>
  </div>
<?php }
elseif($header==2){ ?>
<nav class="navbar navbar-expand-lg bg-theme1 navbar-dark py-md-3 py-2">
  <div class="container">
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 invisible">
    <li class="nav-item px-2">
      <form>
        <select class="bg-transparent shadow-none border-0 text-white langSelect">
          <option value="1">English</option>
          <option value="2">Arabic</option>
        </select>
      </form>
    </li>
    </ul>
    <a class="navbar-brand mx-auto" href="#">
      <img src="<?php echo iii ?>assets/img/supplier-logo.png" alt="">
    </a>
    <!-- <button class="navbar-toggler border-0 shadow-none opacity-100" type="button">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item px-2">
      <form>
        <select class="bg-transparent shadow-none border-0 text-white langSelect" id="changeLanguage" onchange="changeLang()">
          <option value="1">English</option>
          <option value="2">Arabic</option>
        </select>
      </form>
    </li>
    </ul>
  </div>
</nav>
<?php }
elseif($header==3){ ?>
  <nav class="navbar navbar-expand-lg bg-theme1 navbar-dark py-md-3 py-2">
    <div class="container">
      <a class="navbar-brand me-auto" href="#">
        <img src="<?php echo iii ?>assets/img/supplier-logo.png" alt="">
      </a>
      <button class="navbar-toggler border-0 shadow-none opacity-100 order-3 px-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item ps-2 pe-0 px-xl-2">
            <a class="nav-link text-white fw-400 position-relative active" aria-current="page" href="<?php echo iii ?>dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item ps-2 pe-0 px-xl-2 dropdown">
            <a class="nav-link text-white fw-400 position-relative dropdown-toggle text-white d-flex align-items-center" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
            <ul class="dropdown-menu m-0 border-0 shadow">
              <!-- <li class="py-1"><a class="dropdown-item rounded" href="<?php echo iii ?>add-product.php">Add Product</a></li> -->
              <li class="py-1"><a class="dropdown-item rounded" href="<?php echo iii ?>products-list.php">Product List</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="<?php echo iii ?>product-review.php">Review Center</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item ps-2 pe-0 px-xl-2 dropdown">
            <a class="nav-link text-white fw-400 position-relative dropdown-toggle text-white d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Inquiries</a>
            <ul class="dropdown-menu m-0 border-0 shadow">
              <li class="py-1"><a class="dropdown-item rounded" href="#">Action</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Another action</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Something else here</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Action</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Another action</a></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Something else here</a></li>
            </ul>
          </li> -->
          <li class="nav-item ps-2 pe-0 px-xl-2">
            <a class="nav-link text-white fw-400 position-relative" href="<?php echo iii ?>my-inquiries.php">Inquiries</a>
          </li>
          <li class="nav-item ps-2 pe-0 px-xl-2">
            <a class="nav-link text-white fw-400 position-relative" href="reports.php">Reports</a>
          </li>
          <li class="nav-item ps-2 pe-0 px-xl-2">
            <a class="nav-link text-white fw-400 position-relative" href="#">My Packages</a>
          </li>
          <li class="nav-item ps-2 pe-0 px-xl-2">
            <a class="nav-link text-white fw-400 position-relative" href="<?php echo iii ?>chats.php">Chats</a>
          </li>
          <li class="nav-item ps-2 pe-0 px-xl-2">
            <a class="nav-link text-white fw-400 position-relative" href="<?php echo iii ?>inbox-send.php">My Inbox</a>
          </li>
          <li class="nav-item ps-2 pe-0 px-xl-2">
            <a class="nav-link text-white fw-400 position-relative" href="#">Support</a>
          </li>
        </ul>
      </div>
      <div class="userProfile flex-grow-0">
        <ul class="navbar-nav align-items-center flex-row">
          <li class="nav-item newNavLink ps-2">
            <form>
              <select class="bg-transparent shadow-none border-0 text-white langSelect" id="changeLanguage" onchange="changeLang()">
                <option value="1">English</option>
                <option value="2">Arabic</option>
              </select>
            </form>
          </li>
          <li class="nav-item pe-2 dropdown">
            <a class="nav-link text-white fw-400 position-relative dropdown-toggle text-white row mx-0 align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="col-12">
                <div class="row align-items-center flex-nowrap w-100">
                  <div class="col-auto userIcon pe-0">
                    <img src="<?php echo iii ?>assets/img/user-profile.png" alt="">
                  </div>
                  <div class="col ps-2 d-xl-block d-none">
                    <div class="row">
                      <div class="col userName"><span class="d-block overflow-hidden">Ragheb Fawzi Hawax</span></div>
                    </div>
                    <div class="row">
                      <div class="col userEmail"><span class="d-block overflow-hidden">raghebfawziha@gmail.com</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <ul class="dropdown-menu position-absolute end-0 m-0 border-0 shadow">
              <li class="py-1"><a class="dropdown-item rounded" href="#">Profile</a></li>
              <!-- <li class="py-1"><a class="dropdown-item rounded" href="#">Setting</a></li> -->
              <li><hr class="dropdown-divider"></li>
              <li class="py-1"><a class="dropdown-item rounded" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="offcanvas offcanvas-start mobileHeader" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header pb-0 pt-4">
      <img class="w-75" src="<?php echo iii ?>assets/img/logo.png" alt="">
      <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-unstyled">
        <li class="p-2 ps-0"><a class="mobileMenu3 active" href="<?php echo iii ?>dashboard.php"><span class="d-block">Dashboard</span></a></li>
        <li class="p-2 ps-0"><a class="mobileMenu2 d-flex align-items-center justify-content-between collapsed" href="#productscollapse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="productscollapse"><span class="d-block">Products</span> <img class="ps-1" src="<?php echo iii ?>assets/img/drpdwn-arrow-blue.png" alt=""></a></li>
        <div class="collapse" id="productscollapse">
            <ul class="list-unstyled">
              <li class="p-2"><a class="mobileMenu3" href="<?php echo iii ?>products-list.php"><span class="d-block"> Product List</span></a></li>
              <li class="p-2"><a class="mobileMenu3" href="<?php echo iii ?>product-review.php"><span class="d-block">Review Center</span> </a></li>
            </ul>
        </div>
        <li class="p-2 ps-0"><a class="mobileMenu3" href="<?php echo iii ?>my-inquiries.php"><span class="d-block">Inquiries</span></a></li>
        <li class="p-2 ps-0"><a class="mobileMenu3" href="<?php echo iii ?>reports.php"><span class="d-block">Reports</span></a></li>
        <li class="p-2 ps-0"><a class="mobileMenu3" href="#"><span class="d-block">My Packages</span></a></li>
        <li class="p-2 ps-0"><a class="mobileMenu3" href="<?php echo iii ?>chats.php"><span class="d-block">Chats</span> </a></li>
        <li class="p-2 ps-0"><a class="mobileMenu3" href="<?php echo iii ?>inbox-send.php"><span class="d-block">My Inbox</span> </a></li>
        <li class="p-2 ps-0"><a class="mobileMenu3" href="#"><span class="d-block">Support</span> </a></li>
      </ul>
    </div>
  </div>
<?php } ?>
