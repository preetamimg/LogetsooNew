<?php include 'layouts/header-link.php' ?>
<main class="main container-fluid px-0 d-flex flex-column vh-100">
    <?php $header = 1 ?>
    <?php $footer = 1 ?>
<?php include 'layouts/header.php' ?>
<div class="bodyPart row mx-0 flex-fill overflow-hidden productComparePage">
    <div class="scrollPart col-12 px-0 position-relative"> <!-- ### SCROLL PART START ### -->
        <div class="container-fluid py-2 resultBar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-auto mb-2 mb-md-0 compareHeading fw-500"><span class="d-block">Compare Results</span></div>
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="row mx-0">
                                    <div class="col-auto px-0">
                                        <input class="compareCheckbox d-none" type="radio" value="" id="hideSame" name="showHide">
                                        <label class="compareLabel1 d-flex align-items-center justify-content-center" for="hideSame"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                    </div>
                                    <label class="compareLabel2 fw-500 col" for="hideSame"><span class="d-block">Hide the same</span></label>
                                </div>
                            </div>
                            <div class="col-auto px-0">
                                <div class="row mx-0">
                                    <div class="col-auto px-0">
                                        <input class="compareCheckbox d-none" type="radio" value="" id="showSame" name="showHide" checked>
                                        <label class="compareLabel1 d-flex align-items-center justify-content-center" for="showSame"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                    </div>
                                    <label class="compareLabel2 fw-500 col" for="showSame"><span class="d-block">Highlight the difference</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="selectValue">Selected Products <span>(3/4)</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="table-responsive tableWrapper mt-4 position-relative">
                    <table class="table position-relative mb-0 compareTable">
                        <thead>
                            <tr>
                                <th class="fixedCol" scope="col">
                                    <div class="tableTh1"><span class="mainProductHeading">Products</span></div>
                                </th>
                                <th class="" scope="col">
                                    <div class="tableTh">
                                        <div class="row compareCard align-items-center h-100 mx-0 fw-500">
                                            <div class="col-auto px-0"><img class="compareImg" src="<?php echo iii ?>assets/userside/img/compare1.png" alt=""></div>
                                            <div class="col compareProductDetail"><span>VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                            <div class="col-auto px-0"><img class="closeImg" src="<?php echo iii ?>assets/userside/img/close.png" alt=""></div>
                                        </div>
                                    </div>
                                </th>
                                <th class="" scope="col">
                                    <div class="tableTh">
                                        <div class="row compareCard align-items-center h-100 mx-0 fw-500">
                                            <div class="col-auto px-0"><img class="compareImg" src="<?php echo iii ?>assets/userside/img/compare1.png" alt=""></div>
                                            <div class="col compareProductDetail"><span>VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                            <div class="col-auto px-0"><img class="closeImg" src="<?php echo iii ?>assets/userside/img/close.png" alt=""></div>
                                        </div>
                                    </div>
                                </th>
                                <th class="" scope="col">
                                    <div class="tableTh">
                                        <div class="row compareCard align-items-center h-100 mx-0 fw-500">
                                            <div class="col-auto px-0"><img class="compareImg" src="<?php echo iii ?>assets/userside/img/compare1.png" alt=""></div>
                                            <div class="col compareProductDetail"><span>VW 80 cm (32 inches) HD Ready Smart LED TV VW32S (Black) (2021 Model)</span></div>
                                            <div class="col-auto px-0"><img class="closeImg" src="<?php echo iii ?>assets/userside/img/close.png" alt=""></div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="dividerTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Product Features</span></div>
                                </td>
                                <td colspan="3"></td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Product Category</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block highlightedText">HD LED</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block highlightedText">HD Ready SMART</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block highlightedText">Ultra HD SMart LED</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Feature</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">-</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">-</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">-</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr selected">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Application</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">Android</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">Web OS</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">Tizen</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr selected">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Origin</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">UAE</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">IN</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">CN</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Min. Order Quantity</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">100</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">250</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">190</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Price</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">AED 95.00 - 99.00 / Piece</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">AED 95.00 - 99.00 / Piece</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">AED 95.00 - 99.00 / Piece</span></div>
                                </td>
                            </tr>
                            <tr class="dividerTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Supplier Features</span></div>
                                </td>
                                <td colspan="3"></td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Supplier Name</span></div>
                                </td>
                                <td class="">
                                    <a href="javascript:;" class="tableTh text-decoration-none"><span class="d-block highlightedText">Guangzhou Soyer Electronics Technology Co., Ltd</span></a>
                                </td>
                                <td class="">
                                    <a href="javascript:;" class="tableTh text-decoration-none"><span class="d-block highlightedText">Shenzhen Freesun Technology Co.,Ltd</span></a>
                                </td>
                                <td class="">
                                    <a href="javascript:;" class="tableTh text-decoration-none"><span class="d-block highlightedText">Jiangxi Gao Su Da Digital Technology Co.,Ltd.</span></a>
                                </td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Supplier Ranking</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><div class="d-inline-flex align-items-center py-1 px-2 bg-theme1 ratingBox"><img class="me-1" src="<?php echo iii ?>assets/userside/img/whiteStar.png" alt=""><span class="d-block">4.3</span></div></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><div class="d-inline-flex align-items-center py-1 px-2 bg-theme1 ratingBox"><img class="me-1" src="<?php echo iii ?>assets/userside/img/whiteStar.png" alt=""><span class="d-block">4.3</span></div></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><div class="d-inline-flex align-items-center py-1 px-2 bg-theme1 ratingBox"><img class="me-1" src="<?php echo iii ?>assets/userside/img/whiteStar.png" alt=""><span class="d-block">4.3</span></div></div>
                                </td>
                            </tr>
                            <tr class="compareTr selected">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">No. of Years with Global Sources</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">4th Year</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">5th Year</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">12th Year</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr selected">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Year Established</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">2004</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">2013</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">2010</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Business Types</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">Manufacturer</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <ul class="compareList list-unstyled m-0">
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Manufacturer</span></li>
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Exporter</span></li>
                                        </ul>
                                        <div ><span class="d-block highlightedText seeMore">See More</span></div>
                                        <div class="showmoreContent d-none">
                                            <ul class="compareList list-unstyled m-0">
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Manufacturer</span></li>
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Exporter</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <ul class="compareList list-unstyled m-0">
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Agent</span></li>
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Distributor</span></li>
                                        </ul>
                                        <div ><span class="d-block highlightedText seeMore">See More</span></div>
                                        <div class="showmoreContent d-none">
                                            <ul class="compareList list-unstyled m-0">
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Manufacturer</span></li>
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Exporter</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Major Products</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">Gaming monitors</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <ul class="compareList list-unstyled m-0">
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Android-based TV</span></li>
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Projectors</span></li>
                                        </ul>
                                        <div ><span class="d-block highlightedText seeMore">See More</span></div>
                                        <div class="showmoreContent d-none">
                                            <ul class="compareList list-unstyled m-0">
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Projectors</span></li>
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Projectors</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <ul class="compareList list-unstyled m-0">
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">LED TVs (29-inch to 39-inch)</span></li>
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">LED TVs (40-inch to 49-inch)</span></li>
                                        </ul>
                                        <div ><span class="d-block highlightedText seeMore">See More</span></div>
                                        <div class="showmoreContent d-none">
                                            <ul class="compareList list-unstyled m-0">
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">LED TVs (40-inch to 49-inch)</span></li>
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">LED TVs (40-inch to 49-inch)</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Export Markets</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <ul class="compareList list-unstyled m-0">
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Central/South America</span></li>
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Mid East/Africa</span></li>
                                        </ul>
                                        <div ><span class="d-block highlightedText seeMore">See More</span></div>
                                        <div class="showmoreContent d-none">
                                            <ul class="compareList list-unstyled m-0">
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Central/South America</span></li>
                                                <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Mid East/Africa</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <ul class="compareList list-unstyled m-0">
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Australasia</span></li>
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">North America</span></li>
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Eastern Europe</span></li>
                                        </ul>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <ul class="compareList list-unstyled m-0">
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Central/South America</span></li>
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Asia</span></li>
                                            <li class="d-flex align-items-center"><span class="listDisc d-inline-flex me-2 rounded-circle"></span><span class="d-block">Eastern Europe</span></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="compareTr selected">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Company Certificates</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">-</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">2014/53/EU</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">ISO 9001:2015</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr selected">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Total Staff </span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">100 to 149</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">30 to 39</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">1,000 to 1,499</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr selected">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Annual Sales</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">AED 45,000,000 to 49,999,999</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">AED 2,000,000 to 2,999,999</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><span class="d-block">AED 5,000,000 to 5,999,999</span></div>
                                </td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Chat With Supplier</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><a href="javascript:;"><img class="chatWidSupplier" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><a href="javascript:;"><img class="chatWidSupplier" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                </td>
                                <td class="">
                                    <div class="tableTh"><a href="javascript:;"><img class="chatWidSupplier" src="<?php echo iii ?>assets/userside/img/icnchat.png" alt=""></a></div>
                                </td>
                            </tr>
                            <tr class="compareTr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1"><span class="d-block">Select to Inquiry</span></div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <input class="inquiryCheckbox d-none" type="checkbox" value="" id="inquiry1">
                                        <label class="inquiryLabel1 d-flex align-items-center justify-content-center" for="inquiry1"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <input class="inquiryCheckbox d-none" type="checkbox" value="" id="inquiry2">
                                        <label class="inquiryLabel1 d-flex align-items-center justify-content-center" for="inquiry2"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="tableTh">
                                        <input class="inquiryCheckbox d-none" type="checkbox" value="" id="inquiry3">
                                        <label class="inquiryLabel1 d-flex align-items-center justify-content-center" for="inquiry3"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                    </div>
                                </td>
                            </tr>
                            <tr class="compareTr selecttr">
                                <td class="fw-600 fixedCol">
                                    <div class="tableTh1">
                                        <div class="d-flex align-items-center">
                                            <input class="inquiryCheckbox d-none" type="checkbox" value="" id="inquiryAll">
                                            <label class="inquiryLabel1 d-flex align-items-center justify-content-center" for="inquiryAll"><img class="" src="<?php echo iii ?>assets/userside/img/checked.png" alt=""></label>
                                            <label class="inquiryLabel2 ms-2" for="inquiryAll"><span class="d-block">Select All</span></label>
                                        </div>
                                        <button class="btn inquiryNowBtn px-5 btnStyle2">Inquire Now</button>
                                    </div>
                                </td>
                                <td colspan="3" class="">
                                    <!-- <div class="tableTh">
                                        <button class="btn inquiryNowBtn px-5 btnStyle2">Inquire Now</button>
                                    </div> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <?php include 'layouts/footer.php' ?>
        </div>
    </div> <!-- ### SCROLL PART END ### -->
</div>
</main>
<?php include 'layouts/footer-link.php' ?>

<script>
    $('.seeMore').click(function(){
        $(this).addClass('d-none');
        $(this).parent().next().removeClass('d-none')
    });
</script>


