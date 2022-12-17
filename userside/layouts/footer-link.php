

<!-- Optional JavaScript -->
<script src="<?php echo iii ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- tagify -->
<script src="<?php echo iii ?>assets/libs/tagify/jQuery.tagify.min.js"></script>
<!-- dropify -->
<script src="<?php echo iii ?>assets/libs/dropify/dropify.min.js"></script>
<!-- glightbox -->
<script src="<?php echo iii ?>assets/libs/glightbox/glightbox.min.js"></script>
<!-- owl-carousel -->
<script src="<?php echo iii ?>assets/libs/owl-carousel/owl.carousel.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="<?php echo iii ?>assets/userside/js/app.js"></script>


<script>

    if(localStorage.getItem("rtlUserStyle") == '' || localStorage.getItem("rtlUserStyle") == null) {
        localStorage.setItem("rtlBootstrap", "<?php echo iii ?>assets/css/bootstrap.min.css");
        localStorage.setItem("rtlUserStyle", "<?php echo iii ?>assets/css/userStyle.min.css");
        localStorage.setItem("setLanguage", "en");
        localStorage.setItem("changeLanguageKey", 0);
        $('#changeLanguage option:eq(0)').prop('selected', true);
        $('body').addClass('en');

    } else {

    }
    $('.rtlBootstrap').attr('href', localStorage.getItem("rtlBootstrap"));
    $('.rtlUserStyle').attr('href', localStorage.getItem("rtlUserStyle"));
    $(`#changeLanguage option:eq(${localStorage.getItem("changeLanguageKey")})`).prop('selected', true);
    $('body').addClass(localStorage.getItem("setLanguage"));




    function changeLang() {
        var bootstrapVar = document.getElementById("changeLanguage").value;
        $('body').prepend(`
            <div class="preloader" style="z-index: 100000000; background-color: #ffffffeb;">
            <style>
            .preloader {
                display: flex;
                align-items: center;
                justify-content: center;
                position: fixed;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
            }
            .preloader-orbit-loading {
                position: relative;
                width: 6.25em;
                height: 6.25em;
                border-radius: 50%;
                -o-border-radius: 50%;
                -ms-border-radius: 50%;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                perspective: 48.75em
            }
            .preloader-orbit-loading::before {
                content: '';
                background-image: url(http://localhost/logestoo_frontend_ui/assets/img/favicon-16.svg);
                position: absolute;
                inset: 0;
                width: 1.875em;
                height: 1.875em;
                background-size: cover;
                margin: auto;
                z-index: 1000000;
                border-radius: 0.5em;
            }

            .preloader-orbit-loading .cssload-inner {
                position: absolute;
                width: 100%;
                height: 100%;
                box-sizing: border-box;
                -o-box-sizing: border-box;
                -ms-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                border-radius: 50%;
                -o-border-radius: 50%;
                -ms-border-radius: 50%;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%
            }

            .preloader-orbit-loading .cssload-inner.cssload-one {
                left: 0%;
                top: 0%;
                animation: cssload-rotate-one 1.15s linear infinite;
                -o-animation: cssload-rotate-one 1.15s linear infinite;
                -ms-animation: cssload-rotate-one 1.15s linear infinite;
                -webkit-animation: cssload-rotate-one 1.15s linear infinite;
                -moz-animation: cssload-rotate-one 1.15s linear infinite;
                border-bottom: 6px solid #298ec6
            }

            .preloader-orbit-loading .cssload-inner.cssload-two {
                right: 0%;
                top: 0%;
                animation: cssload-rotate-two 1.15s linear infinite;
                -o-animation: cssload-rotate-two 1.15s linear infinite;
                -ms-animation: cssload-rotate-two 1.15s linear infinite;
                -webkit-animation: cssload-rotate-two 1.15s linear infinite;
                -moz-animation: cssload-rotate-two 1.15s linear infinite;
                border-right: 6px solid #298ec6
            }

            .preloader-orbit-loading .cssload-inner.cssload-three {
                right: 0%;
                bottom: 0%;
                animation: cssload-rotate-three 1.15s linear infinite;
                -o-animation: cssload-rotate-three 1.15s linear infinite;
                -ms-animation: cssload-rotate-three 1.15s linear infinite;
                -webkit-animation: cssload-rotate-three 1.15s linear infinite;
                -moz-animation: cssload-rotate-three 1.15s linear infinite;
                border-top: 6px solid #298ec6
            }

            @keyframes cssload-rotate-one {
                0% {
                    transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg)
                }

                100% {
                    transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg)
                }
            }

            @-webkit-keyframes cssload-rotate-one {
                0% {
                    -webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg)
                }

                100% {
                    -webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg)
                }
            }

            @keyframes cssload-rotate-two {
                0% {
                    transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg)
                }

                100% {
                    transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg)
                }
            }

            @-webkit-keyframes cssload-rotate-two {
                0% {
                    -webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg)
                }

                100% {
                    -webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg)
                }
            }

            @keyframes cssload-rotate-three {
                0% {
                    transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg)
                }

                100% {
                    transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg)
                }
            }

            @-webkit-keyframes cssload-rotate-three {
                0% {
                    -webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg)
                }

                100% {
                    -webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg)
                }
            }
            </style>
            <div class="preloader-orbit-loading">
                    <div class="cssload-inner cssload-one"></div>
                    <div class="cssload-inner cssload-two"></div>
                    <div class="cssload-inner cssload-three"></div>
                </div>
            </div>`);
        if (bootstrapVar==1) {
            localStorage.setItem("rtlBootstrap", "<?php echo iii ?>assets/css/bootstrap.min.css");
            $('.rtlBootstrap').attr('href', localStorage.getItem("rtlBootstrap"));
            localStorage.setItem("rtlUserStyle", "<?php echo iii ?>assets/css/userStyle.min.css");
            $('.rtlUserStyle').attr('href', localStorage.getItem("rtlUserStyle"));
            localStorage.setItem("changeLanguageKey", 0);
            localStorage.setItem("setLanguage", "en");
            $('body').addClass('en');
            $('body').removeClass('ar');
        } else {
            localStorage.setItem("rtlBootstrap", "<?php echo iii ?>assets/css/bootstrap.rtl.min.css");
            $('.rtlBootstrap').attr('href', localStorage.getItem("rtlBootstrap"));
            localStorage.setItem("rtlUserStyle", "<?php echo iii ?>assets/css/userStyle.rtl.min.css");
            $('.rtlUserStyle').attr('href', localStorage.getItem("rtlUserStyle"));
            localStorage.setItem("changeLanguageKey", 1);
            localStorage.setItem("setLanguage", "ar");
            $('body').addClass('ar');
            $('body').removeClass('en');
        }
        setTimeout(() => {
            $('.preloader').remove();
        }, 1000);
    }
</script>


</body>

</html>