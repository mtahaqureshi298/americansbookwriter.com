<?php include "include/header.php" ?>

<style>
    /* <!-- 1st section start --> */

    section.main-banner-bg {
        margin: 0px 0 0 !important;
        padding: 60px 0;
        background-size: cover;
        background-repeat: no-repeat
    }

    .main-banner-bg h1 {
        font-size: 40px;
        font-weight: 400;
        color: #fff;
        line-height: 56px
    }

    .ratsite {
        min-height: 45px;
        display: flex;
        align-items: center
    }

    .ratings_cont {
        display: flex;
        align-items: center;
        margin-top: 8px
    }

    .ratings_cont h3 {
        font-size: 28px;
        font-weight: 400;
        color: #fff;
        margin-right: 10px
    }

    .ratings_rate {
        display: block;
        line-height: 15px
    }

    .ratings_cont p {
        font-size: 10px;
        color: #17333c;
        margin-bottom: 0;
        font-weight: 600
    }

    .head-serv-bg h5 {
        color: #73c361;
        padding: 10px 0;
        border-left: 4px solid #73c361;
        padding-left: 11px;
    }

    .btn-3 a,
    .btn-3 button {
        background: #01838c;
        border-radius: 5px;
        color: #fff;
        padding: 10px 30px !important;
        border: 2px solid #ffffff;
        margin: 0 !important;
    }

    .banner-content span {
        color: #00efff;
        font-weight: 600;
    }

    .main-banner-bg p {
        font-size: 18px;
        color: #fff;
    }

    .btn-4 a {
        border: 2px solid #ffffff;
        border-radius: 5px;
        color: #ffffff;
        padding: 10px 20px;
        margin: 0 0 0 15px !important;
        background: #01838c;
        margin-left: 10px !important;
    }

    .my-3 {
        margin-top: 2rem !important;
        margin-bottom: 2rem !important;
    }

    /* <!-- 1st section end --> */

    /* <!-- 9th section start --> */

    .best-selling {
        padding: 50px;
    }

    /* <!-- 9th section end --> */

    /* <!-- 3rd section end --> */
    .feature_sec {
        padding-top: 40px !important;
        padding-bottom: 60px !important;
    }

    .feature_box img {
        margin-bottom: 30px;
    }

    .feature_box h5 {
        font-size: 17px;
        font-weight: 600;
        text-transform: capitalize;
        color: #262626;
        margin-bottom: 18px;
        border-bottom: 1px solid #3d5a80;
        padding-bottom: 18px;
    }

    .feature_box p {
        font-size: 16px;
    }

    .feature_sec {
        padding-top: 40px !important;
        padding-bottom: 60px !important;
    }

    .feature_box img {
        margin-bottom: 30px;
    }

    .feature_box h5 {
        font-size: 17px;
        font-weight: 600;
        text-transform: capitalize;
        color: #262626;
        margin-bottom: 18px;
        border-bottom: 1px solid #3d5a80;
        padding-bottom: 18px;
    }

    .feature_box p {
        font-size: 16px;
    }

    .sec_title h2 {
        margin-bottom: 40px;
        font-size: 30px;
        font-weight: 600;
    }

    /* <!-- 3rd section end --> */

    /* <!-- 5th section end --> */

    .cta-bg {
        background: #00838c;
        padding: 20px 0;
    }

    .cta-head h5 {
        color: #fff;
        padding-bottom: 15px;
        font-size: 30px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .cta-head p {
        font-size: 14px;
        font-weight: 300;
        padding: 0 0 15px;
        color: #fff;
    }

    .edit-img img {
        height: 300px;
    }

    .btn-1 a,
    .btn-1 button {
        background: #17333c;
        border-radius: 5px;
        color: #fff;
        padding: 10px 30px !important;
        border: 2px solid #17333c;
        margin: 0 !important;
    }

    .btn-2 a {
        border: 2px solid #17333c;
        border-radius: 5px;
        color: #17333c;
        padding: 10px 20px;
        margin: 0 0 0 15px !important;
    }

    .cta-call {
        padding-left: 25px;
    }

    .cta-call a {
        color: #201b1c;
        text-decoration: none;
        font-size: 20px;
    }

    /* <!-- 5th section end --> */

    /* <!-- 5th section start --> */
    .amer_data {
        text-align: center;
        padding: 20px 150px;
    }

    .amer_data h3 {
        font-size: 33px;
        font-weight: 700;
        color: black;
    }

    .amer_data p {
        font-size: 14px;
        font-weight: 300;
        margin-top: 17px;
    }

    /* <!-- 5th section end --> */

    /* <!-- 7th section start --> */
    .b_book_img img {
        height: 300px;
    }

    .b_book_img {
        text-align: center;
    }

    .b_book_data h3 {
        font-size: 35px;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .b_book_data p {
        font-size: 14px;
    }

    .book_pera {
        display: flex;
        margin-top: 25px;
        justify-content: space-around;
    }

    .b_bookarea {
        padding: 50px;
    }



    /* <!-- 7th section end --> */

    /* <!-- 10th section start --> */
    .rhyme-cta {
        background-image: url(assets/images/new_sec/cta-bg.webp);
        padding: 30px 0;
        background-image: -moz-linear-gradient(90deg, #154890, #1d6bda 100%);
        background-image: -webkit-linear-gradient(90deg, #154890, #1d6bda 100%);
        background-image: -ms-linear-gradient(90deg, #154890, #1d6bda 100%);
        background-color: rgba(21, 72, 144, .99608);
        background-repeat: no-repeat;
        text-align: center;
        padding: 60px 0 30px;
        position: relative;
        background-size: cover;
    }

    .cta::before {
        content: "";
        position: absolute;
        background: url(assets/images/new_sec/cta-before.webp) center/100% no-repeat;
        width: 600px;
        height: 377px;
        left: 0;
        bottom: -22%;
        background-position-x: -31px;
        top: -1%;
        background-size: 70%;
    }

    .rhyme-cta::after {
        width: 327px;
        background-size: cover;
        height: 333px;
        background-position-x: 0;
        top: 71%;
        background-position: right;
        background-image: url(assets/images/new_sec/cta-after.webp);
        content: "";
        position: absolute;
        background: url(assets/images/new_sec/cta-after.webp) center/cover no-repeat;
        right: 0;
        transform: translateY(-50%);
    }

    .cta-hdg>h4 {
        color: #fff;
        font-size: 36px;
        margin-bottom: 15px;
        font-weight: 400;
    }

    .rhyme-cta .cta-hdg p {
        margin-bottom: 40px;
        color: #fff;
        font-size: 18px;
        line-height: 22px;
    }

    .default_btn {
        font-size: 14px;
        padding: 9px 15px;
        margin-right: 20px;
        background-color: #000;
        color: #fff;
        font-weight: 600;
        padding: 11px 30px;
        font-family: 'Poppins', sans-serif;
        border-radius: 100px;
        transition: all 0.25s ease-in-out;
    }

    /* <!-- 10th section end --> */

    /* <!-- 11th section start --> */
    .frequently-asked-questions .frequently-heading {
        text-align: center;
    }

    .frequently-asked-questions .frequently-heading h3,
    .frequently-heading h5 {
        font-family: Poppins, sans-serif;
        text-align: center;
        font-weight: 700;
        text-transform: capitalize;
        margin: 30px 0;
        font-size: 46px;
        color: #00112b;
        width: 75%;
        margin: 20px auto 20px;

    }

    .frequently-asked-questions .frequently-heading p {
        font-family: Poppins, sans-serif;

        font-size: 18.01px;

        margin: 0 0 45px;
        color: #353a4d;
        font-weight: 500;
    }

    .frequently-asked-questions .frequently-heading p span {
        display: block;
    }

    .faq_sec {
        width: 80%;
        text-align: center;
        margin: 0 auto;
        padding: 50px;
    }

    /* <!-- 11th section end --> */
</style>


<!-- 1st section start content done-->
<section class="main-banner-bg head-serv-bg"
    style="background-image: url(assets/images/new_sec/s-banner-bg.webp);margin-top: 8% !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6  my-auto">
                <div class="banner-content">
                    <h1>Online Book Marketing Services At <span class="aner_con">Reasonable Rates Aligning With
                            Extreme</span> Professionalism</h1>
                    <p>Acknowledge the potential in your book idea and know that you can reach the pinnacle of your
                        writing journey by partnering with the best book marketing agency. We are an online book
                        promotion service, that considers their success when your royalties elevate.
                    </p>
                    <div class="d-flex my-3">
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
                    <img loading="lazy" src="assets/images/Book%20Marketing/Book%20Marketing.png" class="img-fluid"
                        alt="TWT imgs">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1st section end -->

<section class="site-logos text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h3>
                    Sell Your <br>
                    Books On
                </h3>
            </div>
            <div class="col-md-10">
                <div class="owl-site-logo2 owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/images/site-logo3.webp" alt="twt_img">
                    </div>
                    <div class="item">
                        <img src="assets/images/site-logo4.webp" alt="twt_img">
                    </div>
                    <div class="item">
                        <img src="assets/images/site-logo5.webp" alt="twt_img">
                    </div>
                    <div class="item">
                        <img src="assets/images/site-logo6.webp" alt="twt_img">
                    </div>
                    <div class="item">
                        <img src="assets/images/site-logo7.webp" alt="twt_img">
                    </div>
                    <div class="item">
                        <img src="assets/images/site-logo8.webp" alt="twt_img">
                    </div>
                    <div class="item">
                        <img src="assets/images/site-logo9.webp" alt="twt_img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="best-selling mark-selling">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/Book%20Marketing/Book%20Marketing%202.jpg" alt="twt_img">
            </div>
            <div class="col-md-6">
                <h2 class="heading">Understand the Basics, and Learn the Tactics With a Professional Book Marketing
                    Agency.
                </h2>
                <p>Americans Book Writer is a digital book marketing service platform that offers you with the best services
                    in the USA to make your book attract potential conversions and catch the right attention. Through
                    the years we have been able to team up with the top book marketing experts that aim to uplift your
                    author persona through affective book marketing strategies.
                </p>
                <p>Collaborate with a team of professional book marketing experts that not only help you with work but
                    also assist you in understanding, what they are planning on doing with your marketing strategies
                    through all the platforms you want them to look after.
                </p>
                <div class="btn-block">
                    <a href="javascript:" class="btn btn-black various" data-fancybox="" data-src="#popupform">Get a
                        Free Quote</a>
                    <a href="javascript:" class="btn btn-transparent chat">Live Chat</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3rd section start -->
<section class="feature_sec sec_pb">
    <div class="container">
        <div class="sec_title text-center aos-init aos-animate" data-aos="fade-down" data-aos-duration="1500">
            <h2>Partner with the best book marketing agency online and attract potential conversions instantly.</h2>
        </div>
        <div class="row feature_sec_Slider">
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon1.png" alt="twt_img">
                    <h5>Book Marketing
                    </h5>
                    <p>Our expert book marketing team will take care of the potential conversions that your very own
                        book attracts, ensuring that all the royalties belong to you by serving you with an online sales
                        portal.

                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="500"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon2.png" alt="twt_img">
                    <h5>Social Media Promotions
                    </h5>
                    <p>We are an affordable book marketing agency that offers you the best social media promotion
                        services to help you engage with your audience better and elevate your legacy.

                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="800"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon3.png" alt="twt_img">
                    <h5>Content Calendar
                    </h5>
                    <p>Our professional book marketers for hire make sure that your social media engages with your
                        audience serving your literary legacy with a lasting impression on the readers globally.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="1100"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon4.png" alt="twt_img">
                    <h5>Potential Conversions
                    </h5>
                    <p>Our online book marketing expert team will ensure that your online sales portal is optimized and
                        they execute your marketing structure with such proficiency to ensure potential conversions are
                        attracted.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 3rd section end -->

<!-- 5th section start content done-->
<section class="cta-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 my-auto">
                <div class="cta-head">
                    <h5>Online Book Promotion Services To Ensure That Your Book Attracts Potential Readers!</h5>
                    <p>We are a team of expert book marketers who not only want your book to attract potential
                        conversions but also want your very own manuscript to catch the eye of the readers who are
                        actually interested in your book.
                    </p>
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

<!-- 5th section start -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="amer_data">
                    <h3>Choose the top book marketing experts online and uplift you literary legacy!
                    </h3>
                    <p>A book marketer is an essential team member to partner with as an author so that you have an
                        expert assistance to target your book to your potential readers and attract converions globally.
                        We are an affordable book marketing firm that will cater to all of your needs in a very
                        reasonable rate because we understand that your conversions turn out to be your motivation to
                        keep going as an author.
                    </p>
                    <p>Hire the best digital book marketing services to grab the attention of your potential readers,
                        globally through affective marketing campaigns.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 5th section end -->

<section class="our-shelf">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="heading">Expert Book <span>Marketers</span> For Hire!</h2>
                <h3>With Our Simple Four Step Process </h3>
                <a href="javascript:" class="btn chat">Get in Touch with us</a>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <h5>01</h5>
                        <p>
                            <span>Content Calender
                            </span>
                            If you choose to work with us the first thing that will be shared to you by our marketing
                            experts is the content calender for your digital platforms whether it’s social media, amazon
                            or online sales portal that you need to optimize for more potential conversions, we have the
                            expertise to help you with everything.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>02</h5>
                        <p>
                            <span>Social Media Optimization
                            </span>
                            Our book marketing experts understand the importance of optimizing your social media
                            platforms to attract better audience to engage with and enhanmce the number of conversions
                            for your book.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h5>03</h5>
                        <p>
                            <span>Social Media Post Design</span>
                            Our marketing experts will ensure the best possible designs for your social media posts to
                            engage with the audience better and help you leave behind a lasting impression over the
                            audience that your book attracts.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>04</h5>
                        <p>
                            <span>Social Media Ad Campaigns</span>
                            Know how much you’d need to invest in your social media ad campaigns by professional book
                            marketing experts who are waiting to working on your project and uplifting your sales,
                            digitally and globally.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>05</h5>
                        <p>
                            <span>Author website</span>
                            Get an author website that will work as an online sales portal where you can keep the track
                            on your royalties and own the complete revenue that your book generates through sales.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>04</h5>
                        <p>
                            <span>Search Engine Optimization</span>
                            Get your online sales portal optimized by the search engines by utilizing potential keywords
                            that target to your niche, the readers that are actually interested in your book to give it
                            a read and learn from your aspirations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7th section start -->
<section>
    <div class="b_bookarea">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="b_book_img">
                        <img loading="lazy" src="assets/images/Book%20Marketing/Book%20Marketing%203.png"
                            class="img-fluid" alt="twt_img">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="b_book_data">
                        <h3>Wanting To Enhance Your Sales? Hire Expert Book Marketers!</h3>
                        <p>Marketing a self-published book can be a daunting task but, if you make the right choice and
                            choose an expert team of book marketers or hire an online book marketing agency can also
                            help you boost your sales and top-grade your literary legacy.
                        </p>
                        <div class="book_pera">
                            <ul>
                                <li>Social Media Promotions</li>
                                <li>Track On Royalties</li>
                                <li>SEO Optimization</li>
                                <li>Content Calendars</li>
                            </ul>
                            <ul>
                                <li>Amazon Optimization</li>
                                <li>Targetting Potential Buyers</li>
                                <li>Online Sales Portal</li>
                                <li>Amazon PPC</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 7th section end -->

<section class="our-market text-center">
    <div class="container">
        <h2 class="heading">
            We offer a variety of book marketing services <br> to help put your book out there
        </h2>
        <div class="row">
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark1.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Author Network
                        </h4>
                        <p>
                            Our author network is an amalgamation of the best services for aspiring authors looking to
                            launch their book.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark2.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Advertising &amp; Marketing
                        </h4>
                        <p>
                            With the right advertising and strategic marketing, we can effectively help your book become
                            the next bestseller.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark3.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Public Relations
                        </h4>
                        <p>
                            Our public relations services will always give your audience something to talk about when it
                            comes to your book!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark4.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Self-Publishing
                        </h4>
                        <p>
                            We offer assistance for aspiring authors who are looking to become self-published. We’ll
                            provide you with all the info you need.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark5.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Branding, Logos &amp; Design
                        </h4>
                        <p>
                            To get the most from your book, we will help you build your brand, create a logo for it too,
                            and design a captivating book cover.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark6.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Social Media
                        </h4>
                        <p>
                            We can help build your social media presence so that your published book is given the
                            maximum digital reach it deserves.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark7.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Author Website
                        </h4>
                        <p>
                            To create an online platform for you and your books, our marketing services also include
                            designing and developing your own website.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark8.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            B&N Book Edition
                        </h4>
                        <p>
                            We can help make your book a Barnes & Noble exclusive edition to give you the necessary
                            upper edge over the competition.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark9.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            SEO & Content Marketing
                        </h4>
                        <p>
                            Effective SEO and content marketing strategies will help ensure your book stays on top of
                            internet search results!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark10.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Book Trailers
                        </h4>
                        <p>
                            A book trailer can mean the difference between your book selling or catching dust. We’ll
                            help design a reader-engaging book trailer for your book.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark11.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Audio Books
                        </h4>
                        <p>
                            Need an audio-only version for your published book? Our audiobook readers will ensure they
                            deliver creative justice to your book.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-market">
                    <figure>
                        <img src="assets/images/mark12.webp" alt="twt_img">
                    </figure>
                    <div class="text-mark">
                        <h4>
                            Artical Writing
                        </h4>
                        <p>
                            A good article for a good book is a great way of giving your readers a glimpse of what to
                            expect from your book when they buy it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 10th section start content done-->
<section class="cta nonfiction-writing-cta rhyme-cta">
    <div class="container-xl">
        <div class="cta-hdg">
            <h4 data-aos="fade-up" class="aos-init aos-animate">Best Online Book Marketing Services To Hire!</h4>
            <p data-aos="fade-up" class="aos-init aos-animate">Struggling to elevate your author persona? Hire the most
                professional <br> team of book marketers to hire in the USA.
            </p>
            <div class="cta-btns">
                <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup" data-fancybox=""
                    data-src="#popupform">Let's Get Started</a>
                <a href="tel:(904) 643-2199" class="default_btn">Call</a>
                <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup">Live Chat</a>
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
                            aria-expanded="false" aria-controls="faq1">how to write a marketing plan for a book?
                        </a>
                    </div>

                    <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                        <div class="card-body">
                            <p>Firstly you need to identify your target niche and then research about the platforms
                                where your target niche is most likely to be found. It can be facebook, amazon,
                                instagram, and you need to strategize your marketing according to the algorithms of
                                individual platforms.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faqhead2">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                            aria-expanded="true" aria-controls="faq2">Can I hire someone to market my book?

                        </a>
                    </div>

                    <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                        <div class="card-body">
                            <p>Yes you can hire a plenty of professionals online to market your book but it can be a
                                daunting task to find reliable book marketer online, a teamof professional whom you can
                                truly trust.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faqhead3">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq3">Where do I market my book?


                        </a>
                    </div>

                    <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                        <div class="card-body">
                            <p>Identify your target niche and the platforms where your targetted audience is meant to be
                                found and strategize your book marketing campaign according to the algorithms of the
                                respective platforms.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead4">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                            aria-expanded="true" aria-controls="faq4">how to start a digital marketing agency book?

                        </a>
                    </div>

                    <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                        <div class="card-body">
                            <p>If you have the expertise of digital marketing, all you need to do is surf the internet
                                and look for the people searching for your services and once you find one potential
                                buyer, boom! You just established a digital marketing agency online.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead5">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                            aria-expanded="true" aria-controls="faq5">how to find a best book marketing company?

                        </a>
                    </div>

                    <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                        <div class="card-body">
                            <p>You can find numerous book marketing companies online but gaining trust on the service
                                provider can be a daunting task, though you can run through the reviews and positive
                                feedbacks from the clients to ensure yourself of trusting the well-known in the market.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead6">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                            aria-expanded="true" aria-controls="faq6">Who can I pay to market my book?

                        </a>
                    </div>

                    <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                        <div class="card-body">
                            <p>Anyone who’s able to win your trust concerning your book marketing strategy by proving
                                their skills by any means can turn out to be the best choice for you, connect and
                                communicate with a number of professional book marketing companies and choose the best
                                among them.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 11th section end -->

<!-- 12th section start -->
<style>
    /* <!-- 12th section start --> */
    .testimonial-sec {
        padding: 50px 100px;
        position: relative;
        z-index: 99;
        background: linear-gradient(rgb(0 131 140), rgb(65 79 116 / 58%)), url(assets/images/new_sec/testimonials-bg.webp);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 100% 100%;
    }

    .heading-sep .seperator-left {
        position: relative;
        width: 60px;
        height: 3px;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        background: #00112b;
        display: inline-block;
    }

    .heading-sep .seperator-left:before {
        content: '';
        width: 10px;
        height: 3px;
        background: #ffffff;
        position: absolute;
        left: 10px;
        top: 0;
    }

    .testimonial-sec h3 {
        color: #fff;
        margin-bottom: 17px;
        font-size: 46px;
        line-height: 54px;
        font-weight: 700;
        height: 200px;
    }

    .testimonial-sec .primary-btn {
        width: 100px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid #fff;
        background: linear-gradient(218deg, rgba(253, 200, 48, 1) 0%, rgba(243, 115, 53, 1) 60%, rgba(243, 115, 53, 1) 100%);
        color: #fff;
        text-transform: capitalize;
        font-size: 14px;
        font-weight: 600;
        margin: 15px 0 0 0;
        padding: 0;
        border-radius: 50px;
        transition: all 0.2s ease-in-out;
    }


    .testimonial-sec .posRel {
        position: relative;
    }

    .testimonial-sec .testimonail-col {
        overflow-x: hidden;
        overflow-y: visible;
        flex: 100%;
        top: -25px;
        position: absolute;
        padding-bottom: 100px;
        padding-left: 0;
    }

    .testimonial-sec .testimonial-slider .owl-item {
        width: 402px !important;
        height: 274px;
        background: #fff;
        float: left;
        position: relative;
    }

    .testimonial-sec .testimonial-slider .owl-item i {
        position: absolute;
        bottom: -38px;
        right: 31px;
        font-size: 70px;
        color: #cb1d60;

    }

    .testi_slides {
        display: flex;
    }

    .box {
        border: 1px solid white;
        padding: 10px 20px;
        min-height: 255px;
        background: white;
        margin: 0px 8px;
        width: 100%;
    }

    .box h6 {
        color: #282828;
        font-size: 16px;
        font-weight: 500;
        position: absolute;
        bottom: 8px;
        border-top: 1px solid darkgrey;
        padding-top: 14px;
    }

    .box p {
        color: #4a4a4a;
        font-size: 12px;
    }

    /* <!-- 12th section end --> */
</style>


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
                                    <p>They have served me with tremendous ghostwriting services. Being a working woman,
                                        I could hardly manage
                                        time to complete my book for myself but thanks to Americans Book Writer, their
                                        ghostwriting team has the
                                        diverse experience to write your aspirations with literary excellence.
                                    </p>
                                    <h6>Tamatha M. Harkins</h6>
                                </div>
                                <div class="box">
                                    <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in the form
                                        of a compiled book
                                        with absolutely no errors and helped me execute everything concerning my book in
                                        a very short span of time.
                                    </p>
                                    <h6>Tom J. Moore</h6>
                                </div>
                                <div class="box">
                                    <p>I’m thoroughly impressed by the creative minds that are a part of Americans Book Writer
                                        writing team. I brought a concept to them and they did creative justice to it!
                                    </p>
                                    <h6>Nicolas McCormick</h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testi_slides">
                                <div class="box">
                                    <p>Professional, streamlined, meticulous, and creative, the team at Americans Book Writer
                                        are my
                                        go-to for anything and everything that I want written and published!
                                    </p>
                                    <h6>Angelo Long</h6>
                                </div>
                                <div class="box">
                                    <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their writing team
                                        is
                                        phenomenal and their services are amazing! I’m definitely going to bring more
                                        projects to them.”
                                    </p>
                                    <h6>Malcolm Gibbs</h6>
                                </div>
                                <div class="box">
                                    <p>They have served me with tremendous ghostwriting services. Being a working woman,
                                        I could hardly manage
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
                                    <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their writing team
                                        is
                                        phenomenal and their services are amazing! I’m definitely going to bring more
                                        projects to them.”
                                    </p>
                                    <h6>Malcolm Gibbs</h6>
                                </div>
                                <div class="box">
                                    <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in the form
                                        of a compiled book
                                        with absolutely no errors and helped me execute everything concerning my book in
                                        a very short span of time.
                                    </p>
                                    <h6>Tom J. Moore</h6>
                                </div>
                                <div class="box">
                                    <p>Professional, streamlined, meticulous, and creative, the team at Americans Book Writer
                                        are my
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

<section class="book-cta">
    <div class="container">
        <h2 class="heading">
            Want to publish <br>
            your very own book?
        </h2>
        <h3>Our ghostwriters never run out of relevant content for you, Americans Book Writer has served a variety of
            clients including, established authors, aspiring authors, large
            and small businesses, and more.
        </h3>
        <div class="btn-block">
            <a href="javascript:" class="btn btn-black various" data-fancybox="" data-src="#popupform">Get a Free
                Quote</a>
            <a href="javascript:" class="btn btn-transparent chat">Live Chat</a>
        </div>
    </div>

</section>
<!-- 12th section end -->

<style>
    .foo_box a h3 {
        font-size: 30px;
        color: black;
    }

    .foo_box a p {
        font-size: 14px;
        margin-top: 12px;
    }

    .foo_box {
        border-right: 1px dotted #0d0d0d;
        padding: 50px;
    }

    .foo_box a h3 i {
        color: #00838c;
    }
</style>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="foo_box">
                    <a href="mailto:info@americansbookwriter.com">
                        <h3><i class="fa fa-envelope" aria-hidden="true"></i> Email</h3>
                        <p>info@americansbookwriter.com</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="foo_box">
                    <a href="">
                        <h3><i class="fa fa-globe" aria-hidden="true"></i> Contact Us</h3>
                        <p>2285 Kingsley Ave Suite A
Orange Park, FL 32073</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="foo_box">
                    <a href="tel:(904) 643-2199">
                        <h3><i class="fa fa-phone-square" aria-hidden="true"></i> Phone</h3>
                        <p>(904) 643-2199</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<button id="opener-modal" data-fancybox="" data-src="#popupform" class="d-none">opener</button>

<style>
    footer ul.social li a {
        background: white !important;
    }

    footer ul.social li a i {
        color: #070707;
    }
</style>


<?php include "include/footer.php" ?>