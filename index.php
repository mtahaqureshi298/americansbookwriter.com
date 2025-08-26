<?php include "include/header.php" ?>

<!-- 1st section start content done-->
<section class="main-banner-bg head-serv-bg" style="background-image: url(assets/images/new_sec/s-banner-bg.webp);margin-top: 8% !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6  my-auto">
                <div class="banner-content">
                    <!-- <h1>Collaborate With The Best Book <span class="aner_con">Writing Services In USA</span></h1> -->
                    <div class="animated-heading">
                        <!-- <h1>Collaborate With The Best Book <span id="words">Writing</span> Services In USA</h1> -->
                        <h1>Collaborate With The Best Book <span class="word"></span> Services In USA</h1>
                    </div>

                    <p>When we get your manuscript the first priority set by our expert online book writers for the
                        project is elevating the literature. Connect with a creative and affordable book writing
                        agency, a team of professionals who have the expertise to bring your aspirations to life.
                        Hire custom book writers that can help you convert your big dreams into pleasant reality.
                    </p>
                    <div class="d-flex my-3 bane_btns">
                        <div class="btn-3">
                            <a href="javascript:" class="btn  various btn-home" data-fancybox=""
                                data-src="#popupform">Get a Free Quote</a>
                        </div>
                        <div class="btn-4">
                            <a href="javascript:" class="btn btn-transparent chat chat">Live Chat</a>
                        </div>
                    </div>
                    <div class="banner-bages">
                        <div class="owl-carousel bages-carousel owl-theme owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 646px;">
                                    <!-- <div class="owl-item active" style="width: 151.5px; margin-right: 10px;">
                                            <div class="item">
                                                <a href="">
                                                    <div class="ratsite">
                                                        <img loading="lazy" src="assets/images/new_sec/trustpilot.webp" alt="review_icon">
                                                    </div>
                                                    <div class="ratings_cont">
                                                        <h3>4.6</h3>
                                                        <div class="ratings_rate">
                                                            <img loading="lazy" src="assets/images/new_sec/rating-half.webp" class="img-fluid" alt="TWT imgs">
                                                            <p>Ratings</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div> -->
                                    <div class="owl-item active" style="width: 151.5px; margin-right: 10px;">
                                        <div class="item">
                                            <a href="">
                                                <div class="ratsite">
                                                    <img loading="lazy" src="assets/images/new_sec/bark.webp"
                                                        class="img-fluid" alt="TWT imgs">
                                                </div>
                                                <div class="ratings_cont">
                                                    <h3>5.0</h3>
                                                    <div class="ratings_rate">
                                                        <img loading="lazy" src="assets/images/new_sec/rating-full.webp"
                                                            class="img-fluid" alt="TWT imgs">
                                                        <p>Ratings</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 151.5px; margin-right: 10px;">
                                        <div class="item">
                                            <a href="">
                                                <div class="ratsite">
                                                    <img loading="lazy" src="assets/images/new_sec/clutch.webp"
                                                        class="img-fluid" alt="TWT imgs">
                                                </div>
                                                <div class="ratings_cont">
                                                    <h3>5.0</h3>
                                                    <div class="ratings_rate">
                                                        <img loading="lazy" src="assets/images/new_sec/rating-full.webp"
                                                            class="img-fluid" alt="TWT imgs">
                                                        <p>Ratings</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 151.5px; margin-right: 10px;">
                                        <div class="item">
                                            <a href="">
                                                <div class="ratsite">
                                                    <img loading="lazy" src="assets/images/site-jabbar.svg"
                                                        class="img-fluid" alt="TWT imgs">
                                                </div>
                                                <div class="ratings_cont">
                                                    <h3>4.9</h3>
                                                    <div class="ratings_rate">
                                                        <img loading="lazy"
                                                            src="assets/images/new_sec/rating-almost-full.webp"
                                                            alt="ratings">
                                                        <p>Ratings</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                    class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button"
                                    role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 m-auto">
                <div class="">
                    <img loading="lazy" src="assets/images/new_sec/services.webp" class="img-fluid" alt="TWT imgs">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var words = ['Writing', 'Publishing', 'Marketing'],
        part,
        i = 0,
        offset = 0,
        len = words.length,
        forwards = true,
        skip_count = 0,
        skip_delay = 15,
        speed = 70;
    var wordflick = function () {
        setInterval(function () {
            if (forwards) {
                if (offset >= words[i].length) {
                    ++skip_count;
                    if (skip_count == skip_delay) {
                        forwards = false;
                        skip_count = 0;
                    }
                }
            } else {
                if (offset == 0) {
                    forwards = true;
                    i++;
                    offset = 0;
                    if (i >= len) {
                        i = 0;
                    }
                }
            }
            part = words[i].substr(0, offset);
            if (skip_count == 0) {
                if (forwards) {
                    offset++;
                } else {
                    offset--;
                }
            }
            $('.word').text(part);
        }, speed);
    };

    $(document).ready(function () {
        wordflick();
    });
</script>
<!-- 1st section end -->

<section class="ftr-logo">
    <div class="container">
        <div class="owl-carousel owl-site-logo">
            <div class="item">
                <img src="assets/images/bbc-1.webp" alt="twt_img">
            </div>
            <div class="item">
                <img src="assets/images/bbc-2.webp" alt="twt_img">
            </div>
            <div class="item">
                <img src="assets/images/bbc-3.webp" alt="twt_img">
            </div>
            <div class="item">
                <img src="assets/images/bbc-4.webp" alt="twt_img">
            </div>
            <div class="item">
                <img src="assets/images/bbc-5.webp" alt="twt_img">
            </div>
            <div class="item">
                <img src="assets/images/bbc-6.webp" alt="twt_img">
            </div>
        </div>
    </div>
</section>

<!-- 2st section start content done-->
<section class="strugglesec">
    <div class="container">
        <div class="row align-self-center">
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                <h2 class="main-heading">Hire Professional Book Writing Company For Your Custom Books?</h2>
                <p class="main-para">Get an absolutely phenomenal TOC from an expert online book writing agency. A
                    team of professional online book writers who have the expertise to write your imagination on a
                    piece of paper. Here’s why you’d need a ghost book writing services, to achieve your aspirations
                    as an established author.</p>
                <div class="">
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Custom Ghost Book Writing</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Niche Oriented Content Written</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Expert Editing/Proofreading Services</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Efficient Book Marketing</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Simplest Publishing Solutions</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Elevating The Literature</li>
                    </ul>
                    <div class="mtpx-25 strugglbtns">
                        <a href="javascript:" class="btn  various btn-home on_mob" data-fancybox=""
                            data-src="#popupform">Get Started</a>
                        <a href="javascript:" class="btn btn-transparent chat chat on_mob">Live Chat</a>
                        <a href="tel:(904) 643-2199" class="btn  various btn-home on_mob">Call Us (904) 643-2199</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                <div class="strgle-img">
                    <figure>
                        <img class="lazy loaded" src="assets/images/new_sec/struglee.webp"
                            data-src="assets/images/strugle.webp" alt="strugle" width="784" height="600"
                            data-was-processed="true">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 2st section end -->

<!-- 3rd section start content done-->
<section class="about sec_pb sec_pt">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-8 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500">
                <h3>What Benefits Does A Professional Book Writing Agency Bring to You ?</h3>
                <p>We started as an online book writing services, with the aim of serving aspiring authors with
                    affordable ghost book writing company, ensuring that your book outshines the book publishing
                    industry. You can trust us when it comes to getting expert book advice on your write-ups. Get
                    your very own best book, edited according to the latest industry trends by the best online book
                    writing services in the USA. Professional ghost bookwriters who are dedicated to fulfilling your
                    writing needs, whether it’s fiction, non-fiction, horror, or a reality-based book that you want
                    to put out in the book industry.</p>
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="about_box">
                            <div class="about_icon">
                                <img src="assets/images/new_sec/about_img1.png" alt="twt_img">
                            </div>
                            <h3>Quality Over<br>Anything</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="about_box">
                            <div class="about_icon">
                                <img src="assets/images/new_sec/about_img2.png" alt="about_img">
                            </div>
                            <h3>Timely<br>Delivery</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="about_box">
                            <div class="about_icon">
                                <img src="assets/images/new_sec/about_img3.png" alt="twt_img">
                            </div>
                            <h3>Cost-Effective <br> Packages</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="about_box">
                            <div class="about_icon">
                                <img src="assets/images/new_sec/about_img4.png" alt="twt_img">
                            </div>
                            <h3>Royalties<br>Delivered</h3>
                        </div>
                    </div>
                </div>
                <a href="javascript:" class="btn  various btn-home" data-fancybox="" data-src="#popupform">Get a
                    Free Quote</a>
            </div>
        </div>
    </div>
    <!-- <img src="assets/images/new_sec/about_girl.png" alt="twt_img" class="about_girl aos-init aos-animate men_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200"> -->
    <img src="assets/images/new_sec/about_girl_44.webp" alt="twt_img" class="about_girl aos-init aos-animate men_img"
        data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
</section>
<!-- 3rd section end -->

<!-- service section start -->
<style>
    .hexagon-home {
        background-image: url(/wp-content/themes/directive-2018/assets/orion/speckled-black.jpg);
        background-size: cover;
        padding: 50px;
    }

    @media (max-width: 800px) {
        .hexagon-home {
            padding: 4rem 0
        }
    }

    .hexagon-home h2 {
        color: white;
        font-size: 32px;
        letter-spacing: -.02em;
        line-height: 44px;
        margin: 0 auto 1rem;
        max-width: 800px;
        text-align: center;
        font-weight: 700;
    }

    .graphic h3 {
        color: white;
    }

    @media (max-width: 800px) {
        .hexagon-home h2 {
            font-size: 24px;
            line-height: 36px;
            margin: 0 auto 2rem
        }
    }

    .graphic ul li {
        list-style: circle !important;
        font-size: 13px !important;
        color: white;
        font-weight: 400 !important;
    }

    .hexagon-home .graphic {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: space-between
    }

    @media (max-width: 640px) {
        .hexagon-home .graphic {
            -webkit-box-orient: vertical;
            -webkit-box-direction: reverse;
            -ms-flex-direction: column-reverse;
            flex-direction: column-reverse
        }
    }

    .hexagon-home .graphic .selected-wrap {
        overflow-y: hidden;
        position: relative;
        width: 600px
    }

    @media (max-width: 640px) {
        .hexagon-home .graphic .selected-wrap {
            margin: 2rem;
            width: auto
        }
    }

    .hexagon-home .graphic .selected-wrap .selected {
        color: #fff;
        position: relative;
        top: 0;
        -webkit-transition: top .2s;
        transition: top .2s
    }

    .hexagon-home .graphic .selected-wrap .selected .details h3 {
        font-size: 50px;
        line-height: 50px;
        padding-left: 20px;
        font-weight: 600;
    }

    .hexagon-home .graphic .selected-wrap .selected .details p {
        font-size: 14px;
        line-height: 24px;
        margin-left: 20px;
        color: white;
    }

    .hexagon-home .graphic .selected-wrap .selected .details ul {
        margin-left: 20px;
        padding: 15px;
    }

    .hexagon-home .graphic .selected-wrap .selected .details ul li {
        font-size: 16px;
        line-height: 24px
    }

    .hexagon-home .graphic .selected-wrap .selected .details:first-child h3 {
        background: url(/wp-content/themes/directive-2018/assets/img/icon-directive-blue.svg) no-repeat 0
    }

    .hexagon-home .graphic .selected-wrap .selected .details:nth-child(2) h3 {
        background: url(/wp-content/themes/directive-2018/assets/img/icon-directive-green.svg) no-repeat 0
    }

    .hexagon-home .graphic .selected-wrap .selected .details:nth-child(3) h3 {
        background: url(/wp-content/themes/directive-2018/assets/img/icon-directive-purple.svg) no-repeat 0
    }

    .hexagon-home .graphic .selected-wrap .selected .details:nth-child(5) h3 {
        background: url(/wp-content/themes/directive-2018/assets/img/icon-directive-yellow.svg) no-repeat 0
    }

    .hexagon-home .graphic .selected-wrap .selected .details:nth-child(6) h3 {
        background: url(/wp-content/themes/directive-2018/assets/img/icon-directive-pink.svg) no-repeat 0
    }

    .hexagon-home .graphic .selected-wrap .selected .details:nth-child(7) h3 {
        background: url(/wp-content/themes/directive-2018/assets/img/icon-directive-red.svg) no-repeat 0
    }

    .hexagon-home .graphic .entries {
        --n-rows: 3;
        --n-cols: 6;
        --l: calc(600px/var(--n-cols));
        --hl: calc(var(--l)*0.5);
        --ri: calc(var(--l)*0.86603);
        grid-gap: var(--hl) 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        display: grid;
        grid-template: repeat(var(--n-rows), var(--l))/repeat(var(--n-cols), var(--ri));
        height: 600px;
        margin: 0;
        overflow: hidden;
        place-content: center;
        width: 600px
    }

    @media (max-width: 800px) {
        .hexagon-home .graphic .entries {
            --l: calc(400px/var(--n-cols));
            height: 400px;
            width: 400px
        }
    }

    @media (max-width: 640px) {
        .hexagon-home .graphic .entries {
            --l: calc(100vw/var(--n-cols));
            height: 100vw;
            width: 100vw
        }
    }

    .hexagon-home .graphic .entries .hex-cell {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);
        clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);
        color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        grid-column-end: span 2;
        justify-content: center;
        margin: calc(var(--hl)*-1) 0;
        overflow: hidden;
        position: relative;
        -webkit-transform: scale(.95);
        -ms-transform: scale(.95);
        transform: scale(.95);
        -webkit-transition: background-color .3s;
        transition: background-color .3s
    }

    .hexagon-home .graphic .entries .hex-cell:nth-of-type(5n+1) {
        grid-column-start: 2
    }

    .hexagon-home .graphic .entries .hex-cell span {
        text-align: center
    }

    .hexagon-home .graphic .entries .hex-cell:not(.center) {
        background: #fff;
        cursor: pointer
    }

    .hexagon-home .graphic .entries .hex-cell:not(.center) .hex-cell-inner {
        background: #000;
        bottom: 2px;
        -webkit-clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);
        clip-path: polygon(50% 0, 100% 25%, 100% 75%, 50% 100%, 0 75%, 0 25%);
        left: 2px;
        position: absolute;
        right: 2px;
        top: 2px;
        -webkit-transition: background-color .3s;
        transition: background-color .3s;
        z-index: 1
    }

    .hexagon-home .graphic .entries .hex-cell:not(.center) span {
        position: relative;
        z-index: 2
    }

    .hexagon-home .graphic .entries .hex-cell:not(.center):first-child.active,
    .hexagon-home .graphic .entries .hex-cell:not(.center):first-child.active .hex-cell-inner,
    .hexagon-home .graphic .entries .hex-cell:not(.center):first-child:hover,
    .hexagon-home .graphic .entries .hex-cell:not(.center):first-child:hover .hex-cell-inner {
        background-color: #34635d
    }

    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(2).active,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(2).active .hex-cell-inner,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(2):hover,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(2):hover .hex-cell-inner {
        background-color: #00bb7e
    }

    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(3).active,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(3).active .hex-cell-inner,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(3):hover,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(3):hover .hex-cell-inner {
        background-color: #fe7a6d
    }

    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(5).active,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(5).active .hex-cell-inner,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(5):hover,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(5):hover .hex-cell-inner {
        background-color: #258f7d
    }

    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(6).active,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(6).active .hex-cell-inner,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(6):hover,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(6):hover .hex-cell-inner {
        background-color: #bd1a1b
    }

    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(7).active,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(7).active .hex-cell-inner,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(7):hover,
    .hexagon-home .graphic .entries .hex-cell:not(.center):nth-child(7):hover .hex-cell-inner {
        background-color: #6a1206
    }


    #a {
        display: none;
    }

    #c {
        display: none;
    }

    #d {
        display: none;
    }

    #e {
        display: none;
    }

    #f {
        display: none;
    }

    .cacascasc {
        background-image: url(assets/images/new_sec/background_image_2.jpg);
        background-position: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<div class="orion-section-wrap  block-3">
    <section id="orion_interactive_0a0d54f7dd7712d3c9c83f435a08a365"
        class="orion_interactive 0a0d54f7dd7712d3c9c83f435a08a365 0a0d54f7dd7712d3c9c83f435a08a365 cacascasc">
        <div class="interactive-wrapper">
            <div class="hexagon-home" id="hexagon-home">
                <div class="container-fluid">
                    <div class="inner">
                        <h3 class="wow fadeInUp" data-wow-delay=".0s" style="color: white;
    font-size: 32px;
    letter-spacing: -.02em;
    line-height: 44px;
    margin: 0 auto 1rem;
    max-width: 800px;
    text-align: center;
    font-weight: 700;">Partner With The Best Bookwriting Company Online That Covers All Your Writing Needs</h3>
                        <div class="graphic">
                            <div class="selected-wrap">
                                <div class="selected">
                                    <div class="details hide" id="a">
                                        <h3>Ghostwriting Services</h3>
                                        <p>Our comprehensive ghostwriting services aim to serve you with the
                                            superpower to take your author journey to another level of literary
                                            success. Ensure the best quality of your book by joining hands with
                                            expert ghostwriters who are passionate about writing, and elevating the
                                            level of your book by conveying your book idea with authenticity.</p>
                                        <p>We not only aim to write your aspirations exactly how you imagined them
                                            to be but we also aspire to serve you with a book that will enhance your
                                            author journey with exceptional brilliance.</p>
                                        <ul>
                                            <li>Relevant TOC</li>
                                            <li>Chapter-wise Drafting</li>
                                            <li>Authenticity Delivered</li>
                                            <li>Readability Prioritised</li>
                                        </ul>
                                    </div>

                                    <div class="details" id="b">
                                        <h3>Book Editing Services</h3>
                                        <p>Even if you’re an experienced writer, you still need to get your book
                                            through the eyes of a professional editor and proofreader, who’ll not
                                            only help you compile your bunch of stories but also assist you in
                                            eliminating all the errors in your literary piece.</p>
                                        <p>Book editing absolutely changes the shape of your book and by hiring an
                                            expert for editing and proofreading purposes you can serve your book
                                            with the dedication that your book really deserves. Ensure the best
                                            quality of your manuscript before getting it published on global
                                            platforms.</p>
                                        <ul>
                                            <li>Grammar & Punctuation Errors</li>
                                            <li>Readability Check</li>
                                            <li>Relevancy Of The Information</li>
                                            <li>Originality Of The Content</li>
                                        </ul>
                                    </div>

                                    <div class="details" id="f">
                                        <h3>Book Publishing Services</h3>
                                        <p>Americans Book Writer also has a team of expert book publishers who have the
                                            expertise to help eliminate all the limitations and serve you with
                                            access to a global audience, setting no boundaries for your book in
                                            terms of readers. Collaborate with a publishing firm that’s basically a
                                            hub of writers who are experts in different genres to navigate you
                                            through the journey on the go.</p>
                                        <p>Whatever genre your book belongs to, our book publishing experts are
                                            dedicated to helping you grab the right attention of readers globally.
                                            Publish your book following the simplest procedure by collaborating with
                                            the best in the field.</p>
                                        <ul>
                                            <li>Simplest Publishing Process</li>
                                            <li>Global Distribution</li>
                                            <li>Keyword Targeting</li>
                                            <li>Covering Major Platforms</li>
                                        </ul>
                                    </div>

                                    <div class="details"></div>
                                    <div class="details" id="c">
                                        <h3>Book Cover Design Services</h3>
                                        <p>A creative book cover design serves you with a visually captivating
                                            approach, gives your book the chance the grab the right attention, and
                                            leaves a lasting impression on your readers. The book cover design of
                                            your book deserves the right attention as it’s the first thing that gets
                                            noticed by the readers in the first place.</p>
                                        <p>Considering the phrase, “First impression is the last impression”. Focus
                                            on leaving a lasting impression on the readers who actually feel
                                            attracted to your book. Our creative team of designers is dedicated to
                                            serving you with an engaging first impression.</p>
                                        <ul>
                                            <li>Animated Book Covers</li>
                                            <li>Hard-Back Covers</li>
                                            <li>Paperback Covers</li>
                                            <li>Ebook Covers</li>
                                        </ul>
                                    </div>
                                    <div class="details" id="e">
                                        <h3>Book Printing Services</h3>
                                        <p>Whether you need to publish an eBook or you aspire to publish a printed
                                            book with a hardcover, we have the expertise to help you get a book that
                                            enhances your literary experience completely and uplifts your author
                                            journey to another level.</p>
                                        <p>Book printing can turn out to be a daunting task but Americans Book Writer is
                                            a team whose main motive is to fulfill all your author needs to ensure
                                            you the best services through the journey. At least get some number of
                                            copies of your book to send to the audience that has been waiting for
                                            your manuscript since the pre-hype.</p>
                                        <ul>
                                            <li>Print-Books</li>
                                            <li>Magazines</li>
                                            <li>Year-Books</li>
                                            <li>Ebooks</li>
                                        </ul>
                                    </div>
                                    <div class="details" id="d">
                                        <h3>Book Marketing Services</h3>
                                        <p>Our marketing experts are extremely professional in serving you with
                                            compelling marketing strategies that are strategized according to your
                                            needs. From identifying your target niche to applying marketing
                                            campaigns that will actually work for you, and help you get what you
                                            have always desired for your literary journey.</p>
                                        <p>Hire professional book marketers who are not only educated but are
                                            passionate about the work they do, no need to worry about your book
                                            reaching your potential audience by connecting with experts at Americans Book Writer.</p>
                                        <ul>
                                            <li>Social Media Marketing</li>
                                            <li>Press Releases/Articles</li>
                                            <li>Content Marketing</li>
                                            <li>Proxy Marketing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="entries">
                                <div class="hex-cell wow fadeIn" data-wow-delay=".1s" onclick="myFunction_a()">
                                    <div class="hex-cell-inner"></div>
                                    <span>Ghostwriting <br> Services</span>
                                </div>
                                <div class="hex-cell wow fadeIn" data-wow-delay=".2s" onclick="myFunction_b()">
                                    <div class="hex-cell-inner"></div>
                                    <span>Book Editing <br> Services</span>
                                </div>
                                <div class="hex-cell wow fadeIn" data-wow-delay=".3s" onclick="myFunction_f()">
                                    <div class="hex-cell-inner"></div>
                                    <span>Book <br> Publishing <br> Services</span>
                                </div>
                                <div class="hex-cell center wow fadeIn" data-wow-delay=".4s">
                                    <div class="hex-cell-inner"></div>
                                    <span></span>
                                </div>
                                <div class="hex-cell wow fadeIn" data-wow-delay=".5s" onclick="myFunction_c()">
                                    <div class="hex-cell-inner"></div>
                                    <span>Book Cover <br> Design <br> Services</span>
                                </div>
                                <div class="hex-cell wow fadeIn" data-wow-delay=".6s" onclick="myFunction_e()">
                                    <div class="hex-cell-inner"></div>
                                    <span>Book Printing <br> Services</span>
                                </div>
                                <div class="hex-cell wow fadeIn" data-wow-delay=".7s" onclick="myFunction_d()">
                                    <div class="hex-cell-inner"></div>
                                    <span>Book Marketing <br> Services</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function myFunction_a() {
                    var a = document.getElementById("a");
                    var b = document.getElementById("b");
                    var f = document.getElementById("f");
                    var d = document.getElementById("d");

                    if (a.style.display === "none") {
                        a.style.display = "block";
                        b.style.display = "none";
                        c.style.display = "none";
                        f.style.display = "none";
                        d.style.display = "none";
                    } else {
                        a.style.display = "none";
                    }
                }

                function myFunction_b() {
                    var b = document.getElementById("b");
                    var a = document.getElementById("a");
                    var f = document.getElementById("f");
                    var e = document.getElementById("e");
                    var d = document.getElementById("d");

                    if (b.style.display === "none") {
                        b.style.display = "block";
                        a.style.display = "none";
                        c.style.display = "none";
                        f.style.display = "none";
                        e.style.display = "none";
                        d.style.display = "none";

                    } else {
                        b.style.display = "none";
                    }
                }

                function myFunction_c() {
                    var c = document.getElementById("c");
                    var b = document.getElementById("b");
                    var a = document.getElementById("a");
                    var f = document.getElementById("f");
                    var e = document.getElementById("e");
                    var d = document.getElementById("d");

                    if (c.style.display === "none") {
                        c.style.display = "block";
                        a.style.display = "none";
                        b.style.display = "none";
                        f.style.display = "none";
                        e.style.display = "none";
                        d.style.display = "none";

                    } else {
                        c.style.display = "none";
                    }
                }

                function myFunction_d() {
                    var d = document.getElementById("d");
                    var c = document.getElementById("c");
                    var b = document.getElementById("b");
                    var a = document.getElementById("a");
                    var f = document.getElementById("f");
                    var e = document.getElementById("e");

                    if (d.style.display === "none") {
                        d.style.display = "block";
                        a.style.display = "none";
                        b.style.display = "none";
                        c.style.display = "none";
                        f.style.display = "none";
                        e.style.display = "none";

                    } else {
                        d.style.display = "none";
                    }
                }

                function myFunction_e() {
                    var e = document.getElementById("e");
                    var d = document.getElementById("d");
                    var c = document.getElementById("c");
                    var b = document.getElementById("b");
                    var a = document.getElementById("a");
                    var f = document.getElementById("f");

                    if (e.style.display === "none") {
                        e.style.display = "block";
                        a.style.display = "none";
                        b.style.display = "none";
                        c.style.display = "none";
                        d.style.display = "none";
                        f.style.display = "none";

                    } else {
                        e.style.display = "none";
                    }
                }

                function myFunction_f() {
                    var f = document.getElementById("f");
                    var e = document.getElementById("e");
                    var d = document.getElementById("d");
                    var c = document.getElementById("c");
                    var b = document.getElementById("b");
                    var a = document.getElementById("a");

                    if (f.style.display === "none") {
                        f.style.display = "block";
                        a.style.display = "none";
                        b.style.display = "none";
                        c.style.display = "none";
                        d.style.display = "none";
                        e.style.display = "none";
                    } else {
                        f.style.display = "none";
                    }
                }
            </script>

        </div>
    </section>
</div>
<!-- service section end -->

<!-- 4th section start content done-->
<section class="stellar-step">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Professional Book Writer's For Hire To Cater To Your <span>Book Writing Needs</span>! </h3>
            </div>
            <div class="rtech_item col-md-3">
                <span class="rt_icon">
                    <img loading="lazy" src="assets/images/new_sec/placement.webp" class="img-fluid aos-init"
                        alt="twt_img" data-aos-anchor-placement="center-center">
                </span>
                <h3>Place<br>Your Order</h3>
                <p>Our book writing process involves you subscribing through our website and then our qualified
                    representatives will get back to you so that they can gather all the necessary information from
                    you concerning your very own book.</p>
            </div>
            <div class="rtech_item r3 col-md-3">
                <span class="rt_icon">
                    <img loading="lazy" src="assets/images/new_sec/feedback.webp" class="img-fluid aos-init"
                        alt="twt_img" data-aos-anchor-placement="center-center">
                </span>
                <h3>Approval <br> For TOC </h3>
                <p>Once we get all the information from you about your very own book. Our book ghost writing team
                    will serve you with the TOC for your manuscript, once they get the approval on the TOC, they’ll
                    start with the writing process instantly.</p>
            </div>
            <div class="rtech_item col-md-3">
                <span class="rt_icon">
                    <img loading="lazy" src="assets/images/new_sec/revision.webp" class="img-fluid aos-init"
                        alt="twt_img" data-aos-anchor-placement="center-center">
                </span>
                <h3>Drafting <br> Chapter-wise</h3>
                <p>You’ll be receiving drafts chapter-wise so that all the changes become a part of the process for
                    you, eliminating the hassle for our creative ghost book writers.</p>
            </div>
            <div class="rtech_item col-md-3">
                <span class="rt_icon">
                    <img loading="lazy" src="assets/images/new_sec/publishing.webp" class="img-fluid aos-init"
                        alt="twt_img" data-aos-anchor-placement="center-center">
                </span>
                <h3>Global <br> Publishing</h3>
                <p>Set your target audience on a global level by publishing your book on more than 10 platforms. We
                    are not only a professional ghostwriting team but also expert publishers to help you bring your
                    dreams to life.</p>
            </div>
        </div>
    </div>
</section>
<!-- 4th section end -->

<!-- 5th section start content done-->
<section class="cta-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 my-auto">
                <div class="cta-head">
                    <h5>Book Writing Services Online - Eliminating Complications From Your Literary Legacy!</h5>
                    <p>We are a team of online custom book writers who take pride in ensuring the highest book
                        writing quality for your manuscript before publishing your book. Our expert book writing
                        services are dedicated to bringing your aspirations to life making your book outshine the
                        author industry.</p>
                </div>
                <div class="d-flex mt-md-3">
                    <div class="btn-1">
                        <a href="javascript:" class="btn  various btn-home" data-fancybox="" data-src="#popupform">GET A
                            QUOTE</a>
                    </div>
                    <div class="btn-2">
                        <a href="javascript:" class="btn btn-transparent chat chat">Live Chat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="edit-img">
                    <img loading="lazy" src="assets/images/new_sec/wri-edi-simg.webp" class="img-fluid" alt="cta_img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 5th section end -->

<!-- 6th section start content done-->
<section class="own-book-sec">
    <div class="container-xl">
        <div class="own-book-inner-txt">
            <div class="wrapper-own-book-1">
                <h3 data-aos="fade-up">What Awaits You If You Choose Expert Book Writing Services?</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <p data-aos="fade-up">Online book writers are required by authors to fulfill their
                            aspirations as book writing can be a daunting task if you choose to execute your best
                            book idea on your own. Most authors aspire to inspire and to inspire you need plenty of
                            different experiences so that you can justify your thoughts to all sorts of readers
                            globally. Hire an expert ghost book writer from the industry to help your manuscript
                            stand out in the book marketing industry by including relevant information in an
                            engaging manner for you. Even if a ghost book writing has to write his own book, it can
                            be difficult to manage a number of things altogether at the same time.</p>
                        <p data-aos="fade-up">The first complication faced by most book authors is to identify
                            whether the book writing idea they want to execute has the potential to engage with a
                            wider books audience or not and our expert ghost book writing company have the expertise
                            to help you identify your top book idea’s potential as well as suggest you with a better
                            one according to your aspirations. As a book writing services, we have our two cents of
                            experience to contribute to elevating your literary legacy by ensuring you from the very
                            start that your book has the potential to make it to New York’s Best book writing seller
                            List.</p>
                    </div>
                    <div class="col-lg-6">
                        <p data-aos="fade-up">Another complication that book writers usually face is having to pay
                            undivided attention to a blank screen fighting with writer’s block struggling to join
                            words down in the form of a story. New book writers might consider the initial stage of
                            book writing the toughest of them all, but the actual thing is that you need to figure
                            out a hardscape to keep working on your project.</p>
                        <p data-aos="fade-up">People also mistakenly believe that they are done with the book after
                            completing the writing of the book but that’s not true, even professional book writing
                            company can make a bunch of mistakes in their write-ups if they have to work in bulk.
                            You must consider getting your book edited and book proofread by an expert so that you
                            can ensure the best quality for your published manuscript.</p>
                        <p data-aos="fade-up">published globally. The smartest approach to fulfill your author
                            aspirations can be connecting to a professional ghostwriting agency like us so that you
                            can get done with the complete process in no time.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- 6th section end -->

<!-- 7th section start content done-->
<section class="author-about">
    <div class="container">
        <div class="col-md-8">
            <h4>Online Book Writing Company</h4>
            <ul class="list-arrow">
                <li class="first">We work closely with you to ensure that our ghostwriters understand your
                    aspirations from your book.</li>
                <li>Finalizing Table Of Contents for your book.</li>
                <li>Creative ghost book writing original content with efficiency and authenticity.</li>
                <li>Unlimited revisions as per your feedback and guidance.</li>
                <li>Editing to eliminate all the errors from your book.</li>
                <li>Formatting and typewriting to ease up the publication process for you.</li>
                <li>Publishing book consultancy to help you figure out the best solutions for your journey.</li>
                <li>Creative yet professional book cover design.</li>
                <li>On-call availability for discussions and consultation throughout the project.</li>
            </ul>
            <p>Allow professional book ghost writers for hire to help you analyze whether your book writings idea
                has the potential to outshine the publishing company with expert book writing services. An online
                ghost book writing company that also has the expertise to assist you in publishing your book
                globally.</p>
            <a href="javascript:" class="btn  various btn-home" style="border: none;">Talk to an Expert</a>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>

<section class="own-book-sec">
    <div class="container-xl">
        <div class="own-book-inner-txt">
            <div class="wrapper-own-book-1">

                <div class="wrapper-own-book-2">
                    <h3>Hire Affordable Yet Professional Book Ghost Writers</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li data-aos="fade-up">Hiring an expert online book writer who is passionate and
                                    dedicated concerning their contributions to your book. Time frame is a delicate
                                    factor and you need to discuss it with the experienced ghost book writer who is
                                    going to work on your book idea at the time of hiring so you can eliminate all
                                    the unnecessary delays on the project. Whether you are an entrepreneur or a job
                                    person, it can be a daunting task for you to execute the book writing phase on
                                    your own. No matter how good you are at book writing, for the sake of
                                    efficiency, you need a Top book ghost writing services to help you through the
                                    best book writing process. Hire the best book writing company in the industry
                                    which can assist you in editing, proofreading, and formatting your manuscript in
                                    the best possible shape.</li>
                                <br>
                                <li data-aos="fade-up">If you are an author who desires full control over the
                                    writing progress of your book, you can also ask for chapter-wise draft
                                    submission from the professional book ghost writer you choose to get done with
                                    your manuscript. For a creative process like book writing your aspirations,
                                    you’d need expert assistance from an expert so that you can elevate your author
                                    persona.</li>
                                <br>
                                <li data-aos="fade-up">Hire creative book writers online but only trust someone who
                                    has the expertise to do justice to your aspirations. Ideally, you should choose
                                    an affordable ghostwriter from an established book writing firm. Collaborate
                                    with a professional book writing agency that has the vision to help you with
                                    affordable yet efficient assistance for your book writing project to ensure that
                                    your book reaches the right audience, that too on a wider scale than you
                                    imagined.</li>
                                <br>
                                <li data-aos="fade-up">Hiring an experienced ghostwriter can make your life a
                                    thousand times better as an author, but if you make the wrong choice, the same
                                    overwhelming experience can turn out to be a devastating one for you. A
                                    professional ghost book writer who actually possesses diverse expertise in
                                    writing will always initiate your project after understanding your vision
                                    correctly so that your manuscript highlights your author persona.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="strgle-img">
                                <figure>
                                    <img class="lazy loaded" src="assets/images/new_sec/strugle.webp"
                                        data-src="assets/images/strugle.webp" alt="strugle" width="784" height="600"
                                        data-was-processed="true">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 7th section end -->

<!-- 8th section start content done & imgs not edit-->
<section class="portfolio_sec sec_pt sec_pb">
    <div class="container">
        <div class="sec_title text-center white_hd">
            <h2 data-aos="fade-up" data-aos-duration="1500" class="aos-init aos-animate">Our Portfolio</h2>
        </div>
        <div class="portfolio_tabs">
            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active aos-init" id="nav0-tab" data-toggle="tab" href="#nav0" role="tab"
                        aria-controls="nav0" aria-selected="true" data-aos="zoom-in" data-aos-delay="100"
                        data-aos-duration="1500">All</a>
                    <a class="nav-item nav-link aos-init" id="nav1-tab" data-toggle="tab" href="#nav1" role="tab"
                        aria-controls="nav1" aria-selected="true" data-aos="zoom-in" data-aos-delay="100"
                        data-aos-duration="1500">Fiction</a>
                    <a class="nav-item nav-link aos-init" id="nav2-tab" data-toggle="tab" href="#nav2" role="tab"
                        aria-controls="nav2" aria-selected="true" data-aos="zoom-in" data-aos-delay="200"
                        data-aos-duration="1500">Biography</a>
                    <a class="nav-item nav-link aos-init" id="nav3-tab" data-toggle="tab" href="#nav3" role="tab"
                        aria-controls="nav3" aria-selected="true" data-aos="zoom-in" data-aos-delay="300"
                        data-aos-duration="1500">Non-Fiction</a>
                    <a class="nav-item nav-link aos-init" id="nav4-tab" data-toggle="tab" href="#nav4" role="tab"
                        aria-controls="nav4" aria-selected="true" data-aos="zoom-in" data-aos-delay="400"
                        data-aos-duration="1500">Informative</a>
                    <a class="nav-item nav-link aos-init" id="nav5-tab" data-toggle="tab" href="#nav5" role="tab"
                        aria-controls="nav5" aria-selected="true" data-aos="zoom-in" data-aos-delay="500"
                        data-aos-duration="1500">Memoir</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav0" role="tabpanel" aria-labelledby="nav0-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1500">
                            <img class="lazy"
                                data-src="assets/images/new_sec/portfolio/book_01-removebg-preview (1).webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_02-removebg-preview.webp"
                                alt="our_books">

                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_03-removebg-preview.webp"
                                alt="our_books">

                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1500">
                            <img class="lazy"
                                data-src="assets/images/new_sec/portfolio/book_04-removebg-preview (1).webp"
                                alt="our_books">

                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1500">
                            <img class="lazy"
                                data-src="assets/images/new_sec/portfolio/book_05-removebg-preview (1).webp"
                                alt="our_books">

                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_06-removebg-preview.webp"
                                alt="our_books">

                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_07-removebg-preview.webp"
                                alt="our_books">

                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_08-removebg-preview.webp"
                                alt="our_books">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_09-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_10-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_11-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_12-removebg-preview.webp"
                                alt="our_books">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_13-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_14-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_15-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_16-removebg-preview.webp"
                                alt="our_books">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_17-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_18-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="1500">
                            <img class="lazy"
                                data-src="assets/images/new_sec/portfolio/book_19-removebg-preview (1).webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_20-removebg-preview.webp"
                                alt="our_books">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_21-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1500">
                            <img class="lazy"
                                data-src="assets/images/new_sec/portfolio/book_22-removebg-preview (1).webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="1500">
                            <img class="lazy"
                                data-src="assets/images/new_sec/portfolio/book_01-removebg-preview (1).webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_02-removebg-preview.webp"
                                alt="our_books">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav5" role="tabpanel" aria-labelledby="nav5-tab">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_03-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_15-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_07-removebg-preview.webp"
                                alt="our_books">
                        </div>
                        <div class="col-md-3 col-sm-6 col-6 mb-4 aos-init" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1500">
                            <img class="lazy" data-src="assets/images/new_sec/portfolio/book_12-removebg-preview.webp"
                                alt="our_books">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec_btn text-center aos-init" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500">
            <!-- <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup">Let's Get Started</a> -->

            <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup" data-fancybox=""
                data-src="#popupform">Let's Get Started</a>
        </div>
    </div>
</section>
<!-- 8th section end -->

<!-- 9th section start -->
<section class="best-selling">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/new_sec/best-selling2.png" alt="twt_img">
            </div>

            <div class="col-md-6">
                <h2 class="heading">Best Ghost Book Writing Company In the USA!</h2>
                <h3>Offering professional ghostwriting services online, hire the best book ghostwriters online</h3>
                <p>We are professional book writing firm that has the expertise to fulfill your book writing needs
                    by serving you a fascinating piece of work in the shape of your very own manuscript. Let expert
                    ghost book writers help you become the next literary sensation by getting your manuscript
                    published, globally.</p>
                <p>Americans Book Writer can be considered a one-stop station that can help you outshine the publishing
                    industry by elevating your literary skills by utilizing the latest industry trends and involving
                    professionalism in the ghostwriting process for your book. Engage with a wider audience, and
                    communicate with the readers efficiently by serving them with the best book ghost writing
                    services.</p>
                <div class="btn-block">
                    <a href="javascript:" class="btn btn-black various" data-fancybox="" data-src="#popupform">Get a
                        Free Quote</a>
                    <a href="javascript:" class="btn btn-transparent chat">Live Chat</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- 9th section end -->

<!-- 10th section start content done-->
<section class="cta nonfiction-writing-cta rhyme-cta">
    <div class="container-xl">
        <div class="cta-hdg">
            <h4 data-aos="fade-up" class="aos-init aos-animate">Hire a Professional Book Writer Now! </h4>
            <p data-aos="fade-up" class="aos-init aos-animate">Want to enhance your literature by uplifting your
                <br> writing game? online expert book writing services to assist you in finalizing <br> the best
                book writers for yourself.</p>
            <div class="cta-btns">
                <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup" data-fancybox=""
                    data-src="#popupform">Let's Get Started</a>
                <a href="tel:(904) 643-2199" class="default_btn">Call</a>
                <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup">Live
                    Chat</a>
            </div>
        </div>
    </div>
</section>
<!-- 10th section end -->

<!-- 11th section start content done-->
<div class="container faq_sec">
    <div class="row">
        <div class="col-sm-12">
            <div class="frequently-heading">
                <h3>FAQs</h3>
                <p>Here’s a list of frequently asked questions you might have about our book writing company.</p>
            </div>

            <div class="accordion" id="faq">
                <div class="card">
                    <div class="card-header" id="faqhead1">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1"
                            aria-expanded="false" aria-controls="faq1">How much do your book writing services
                            cost?</a>
                    </div>

                    <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                        <div class="card-body">
                            <p>We have collected the most professional book writing team of account managers who can
                                serve you with the best book writing consultancy and they can also serve you with
                                custom book packages just according to your needs. Americans Book Writer is a expert
                                team that aims to eliminate all the literary complications that are faced by authors
                                globally.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faqhead2">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                            aria-expanded="true" aria-controls="faq2">Is it illegal to write a book about someone
                            else?</a>
                    </div>

                    <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                        <div class="card-body">
                            <p>No, you can write about anything all that is needed to be noticed is biasedness as a
                                reader. Mostly when people write something about someone else they portray what they
                                think about the person and that can be considered illegal. But, if you just need to
                                put out a book story that speaks about the pros and cons of an individual, it won’t
                                be counted as illegal.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faqhead3">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq3">Why should I hire a book writer?</a>
                    </div>

                    <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                        <div class="card-body">
                            <p>Even if you have the time to write your book, you’d still need an expert editor to
                                proofread your manuscript before it is actually published. Everything needs to be
                                executed by an expert, and we have a team of book writers for hire, who have the
                                expertise to ensure that your book is written with keen attention to detail.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead4">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                            aria-expanded="true" aria-controls="faq4">How can I find someone to write my book?</a>
                    </div>

                    <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                        <div class="card-body">
                            <p>There are many book writing agencies that can help you with the book writing process
                                but what matters is to gain trust, and that we can assure you of as our account
                                managers won’t ask you for any money until they clear all your queries concerning
                                our creative book writing process.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead5">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                            aria-expanded="true" aria-controls="faq5">How Does the Book Writing Process Work?</a>
                    </div>

                    <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                        <div class="card-body">
                            <p>As it is a creative book writing process, it varies on the book ghostwriter you hire,
                                every person works on a different creative thought process that is derived from
                                their comfort zone. Our professional book writers get connected with you and tell
                                you how are they going to execute your very own manuscript and they work with you
                                closely ensuring that your book meets your expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead6">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                            aria-expanded="true" aria-controls="faq6">Are your services 100% confidential?</a>
                    </div>

                    <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                        <div class="card-body">
                            <p>Absolutely yes, we understand the importance of maintaining a healthy relationship
                                with our clients by prioritizing confidentiality regarding their data, whatsoever
                                you provide us with, it all stays between you and an assigned account manager.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 11th section end -->

<!-- 12th section start -->
<section class="content testimonial-sec">
    <div class="container">
        <div class="row cntr-content posRel">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 animate fadeInLeft">
                <h3>TESTIMONIALS</h3>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="testi_slides">
                                <div class="box">
                                    <p>They have served me with tremendous ghostwriting services. Being a working
                                        woman, I could hardly manage
                                        time to complete my book for myself but thanks to Americans Book Writer, their
                                        ghostwriting team has the
                                        diverse experience to write your aspirations with literary excellence.
                                    </p>
                                    <h6>Tamatha M. Harkins</h6>
                                </div>
                                <div class="box">
                                    <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in the
                                        form of a compiled book
                                        with absolutely no errors and helped me execute everything concerning my
                                        book in a very short span of time.
                                    </p>
                                    <h6>Tom J. Moore</h6>
                                </div>
                                <div class="box">
                                    <p>I’m thoroughly impressed by the creative minds that are a part of Americans Book Writer
                                        writing team. I brought a concept to them and they did creative justice to
                                        it!
                                    </p>
                                    <h6>Nicolas McCormick</h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testi_slides">
                                <div class="box">
                                    <p>Professional, streamlined, meticulous, and creative, the team at Americans Book Writer are my
                                        go-to for anything and everything that I want written and published!
                                    </p>
                                    <h6>Angelo Long</h6>
                                </div>
                                <div class="box">
                                    <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their writing
                                        team is
                                        phenomenal and their services are amazing! I’m definitely going to bring
                                        more projects to them.”
                                    </p>
                                    <h6>Malcolm Gibbs</h6>
                                </div>
                                <div class="box">
                                    <p>They have served me with tremendous ghostwriting services. Being a working
                                        woman, I could hardly manage
                                        time to complete my book for myself but thanks to Americans Book Writer, their
                                        ghostwriting team has the
                                        diverse experience to write your aspirations with literary excellence.
                                    </p>
                                    <h6>Tamatha M. Harkins</h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="testi_slides">
                                <div class="box">
                                    <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their writing
                                        team is
                                        phenomenal and their services are amazing! I’m definitely going to bring
                                        more projects to them.”
                                    </p>
                                    <h6>Malcolm Gibbs</h6>
                                </div>
                                <div class="box">
                                    <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in the
                                        form of a compiled book
                                        with absolutely no errors and helped me execute everything concerning my
                                        book in a very short span of time.
                                    </p>
                                    <h6>Tom J. Moore</h6>
                                </div>
                                <div class="box">
                                    <p>Professional, streamlined, meticulous, and creative, the team at Americans Book Writer are my
                                        go-to for anything and everything that I want written and published!
                                    </p>
                                    <h6>Angelo Long</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- 12th section end -->

<?php include "include/footer.php" ?>