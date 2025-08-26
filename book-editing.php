<?php include "include/header.php" ?>

<style>
    .myeditinh {
        background-image: url(assets/images/editbg.PNG);
        background-position: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 100px;
    }
</style>

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
                    <h1>Expert Book Editor’s <span class="aner_con">For Hire</span></h1>
                    <p>Through the years we have been able to manage to team up with professional online book
                        editing services we are dedicated to eliminating all the errors in your manuscript whether
                        it consists of grammatical or punctuation errors. We are a best book proofreading company
                        that will help you publish a perfect book following the latest industry trends concerning
                        the formatting of your book. Get professional ebook proofreading services and outshine the
                        publishing industry with your literary legacy.</p>
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
                    <img loading="lazy" src="assets/images/Editing/05-01.png" class="img-fluid" alt="TWT imgs">
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

<!-- 2nd section start -->
<section class="best-selling">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/new_sec/side%20image%20%203.webp" alt="twt_img">
            </div>

            <div class="col-md-6">
                <h2 class="heading">Connect with Top Book Proofreaders Online For Your Manuscript</h2>
                <h3>Get help from professional book editors online</h3>
                <p>Our diligent and thorough ebook proofreading services will help you gain more confidence in the
                    overall content of your manuscript, whether your book is authored by our ghostwriters or you are
                    done with the writing process yourself. When it comes to correcting errors and improving the
                    quality of the existing material, no page is left unturned by our expert book editors. We are an
                    affordable book-proofreading company online, with a team of expert book proofreaders for hire.
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
<!-- 2nd section end -->

<!-- 3rd section start -->
<section class="feature_sec sec_pb">
    <div class="container">
        <div class="sec_title text-center aos-init aos-animate" data-aos="fade-down" data-aos-duration="1500">
            <h2>Your Experience With Best Proofreading And Editing Services!</h2>
        </div>
        <div class="row feature_sec_Slider">
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon1.png" alt="twt_img">
                    <h5>Expert Editors Team
                    </h5>
                    <p>A group of competent and experienced proofreaders who have the expertise to serve in a
                        variety of genres ensuring the highest quality.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="500"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon2.png" alt="twt_img">
                    <h5>Creativity Alongside Authenticity</h5>
                    <p>We are a dedicated team of best editors in town who aim to serve you with expertly written
                        books that are a mixture of relevant and authentic information according to your book idea.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="800"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon3.png" alt="twt_img">
                    <h5>Proper Formatting</h5>
                    <p>Our formatters are experienced enough to follow the latest industry trends while formatting
                        your manuscript properly before publishing.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="1100"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon4.png" alt="twt_img">
                    <h5>Original Content</h5>
                    <p>Whether it is articles/blogs or affordable book editing services for your book, we have a
                        team of writers who are dedicated to providing you original content for your readers.
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
                    <h5>Best Book Proofreaders For Hire - Enhancing Your Author Journey, With Professional Book
                        Editing Company!</h5>
                    <p>We are a professional team of book editors online, who aim to assist you in elevating your
                        reader’s experience in an uplifting manner. It won’t be wrong if you consider us one of the
                        top book editing services in the USA. Let the best book proofreading services help you
                        engage with your readers better.</p>
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
                    <h3>Helping Authors Uplift Their Literary Journey, Professional Book Proofreading Services
                        Online!</h3>
                    <p>Do you also aspire to turn your ideas into an eBook editing that captivates readers globally?
                        We are a USA-based eBook proofreading service that aims to assist authors globally and help
                        them reach another level of literature excellence. Hire expert book editors to eliminate all
                        the errors in your very own book and execute the proofreading/editing phase of your book
                        ensuring absolutely affordable proofreading services. Get custom online editing assistance,
                        and packages that cater to your editing needs, Elevate your composition with the superior
                        knowledge and skills of our expert editing services.</p>
                    <p>To target a wider audience and increase the readability of your book with the professional
                        proofreading services online. We are a professional editing agency that has the expertise to
                        enhance your book proofreading experience in a positive way.</p>
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
                <h2 class="heading">Best Book <span>Editing Services</span>
                    in <span>4</span> Simple Steps</h2>
                <h3>Read about our straightforward, four-step procedure.</h3>
                <a href="javascript:" class="btn chat">Get in Touch with us</a>
            </div>
            <div class="col-md-7">
                <div class="row top_space">
                    <div class="col-md-6">
                        <h5>01</h5>
                        <p>
                            <span>Initial Edits</span>
                            We are a professional book proofreading company that is dedicated to serving your draft
                            with early adjustments, but all the changes are made visible only when you approve them.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>02</h5>
                        <p>
                            <span>Let the Writing Begin!</span>
                            After getting the information about your project, we begin writing. The first chapter
                            has
                            been completed and sent to you for review.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h5>03</h5>
                        <p>
                            <span>Review and Proofreading</span>
                            After you’ve approved our editing styles and all the changes are made according to you,
                            our ebook proofreading services revise your draft submission one by one before making it
                            to level four.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>04</h5>
                        <p>
                            <span>Project Delivery</span>
                            Once your content is done with the editing, we begin with final book proofreading to
                            ensure the quality of your final manuscript before delivering it to you.
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
                        <img loading="lazy" src="assets/images/Editing/08.png" class="img-fluid" alt="twt_img">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="b_book_data">
                        <h3>Have a Look at the Professional eBook Editing Services that We Offer.</h3>
                        <p>We are a book editing service provider in the USA that only teams up with professional
                            proofreaders who are experienced in looking after your manuscript and ensuring that your
                            piece of art is error-free and ready to be published. A team of book editors for hire
                            who are experienced in dealing with extensive workloads, and a variety of genres,
                            ensuring the best shape of your manuscript.</p>
                        <div class="book_pera">
                            <ul>
                                <li>Expert Book Proofreading Services</li>
                                <li>Professional Audiobooks</li>
                                <li>Best Web-Design & Internet SEO</li>
                            </ul>
                            <ul>
                                <li>Publishing Assistance</li>
                                <li>Video Book Trailers</li>
                                <li>Branding and Marketing Campaigns</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 7th section end -->

<!-- 10th section start content done-->
<section class="cta nonfiction-writing-cta rhyme-cta">
    <div class="container-xl">
        <div class="cta-hdg">
            <h4 data-aos="fade-up" class="aos-init aos-animate">Hire the Best Editing Services Online!
            </h4>
            <p data-aos="fade-up" class="aos-init aos-animate">We are an affordable book proofreading company that
                is a one-stop <br> shop that aims to provide affordable editing/proofreading services catering to
                the needs of all aspiring <br> and established authors.
            </p>
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
                            aria-expanded="false" aria-controls="faq1">What is the difference between a book editor
                            and a proofreader?</a>
                    </div>

                    <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                        <div class="card-body">
                            <p>A book editor is the one who esure the tone of the content included in your book and
                                the proofreader is supposed to eliminate grammatical and punctuational errors from
                                your very own book.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faqhead2">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                            aria-expanded="true" aria-controls="faq2">Can I pay someone to proofread my book?
                        </a>
                    </div>

                    <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                        <div class="card-body">
                            <p>Yes, you can find people with epertise who can help you ensure the best quality of
                                your manuscript before it’s actually published globally. You can easily find an
                                expert proofreader online and pay them to help you out with the services you have
                                been looking for.</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faqhead3">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq3">Should I hire an editor for my book?
                        </a>
                    </div>

                    <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                        <div class="card-body">
                            <p>If you are not sure about the authenticity and efficiency of your literature then yes
                                you can hire an editor to uplift your literary journey. Your literary journey is
                                what we aim to boost to make you outshine the author industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead4">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                            aria-expanded="true" aria-controls="faq4">How do I find a proofreader for my book?
                        </a>
                    </div>

                    <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                        <div class="card-body">
                            <p>You can find numerous service provider online who aim to assist you proofread your
                                very own book to enhance the quality of your book and make you stand out as an
                                author.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead5">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                            aria-expanded="true" aria-controls="faq5">How do I get hired as a professional
                            proofreader?
                        </a>
                    </div>

                    <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                        <div class="card-body">
                            <p>If you have the expertise to proofread your book and outshine other aspiration in an
                                elevating industry itself then you can sure signup as a proofreader as a freelancer
                                or connect with a proofreading agency as an employee.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead6">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                            aria-expanded="true" aria-controls="faq6">Why is proofreading important for a book?
                        </a>
                    </div>

                    <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                        <div class="card-body">
                            <p>A proofreader can help you save a lot of time in the writing process so that you can
                                focus on the other aspects of your publishing journey, and elevate your author
                                experience on the go. Ensuring that your book is in the best possible shape.
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