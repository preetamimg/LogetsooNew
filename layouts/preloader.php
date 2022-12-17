
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
</div>