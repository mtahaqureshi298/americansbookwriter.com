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
                    <h1>Hire a Top Book Printing Company To Help You Leave A Lasting <span class="aner_con">Impression
                            On Your Audience.</span></h1>
                    <p>Hire USA's best book printers online and elevate your author experience by ensuring that your

                        book is remarkable and absolutely error-free. As the best custom book printing company in
                        the USA, we understand the value of elevating your book’s readability. Convert your big
                        dreams as an author, to big realities.

                        book is remarkable and absolutely error-free. As the best custom book printing company in the
                        USA, we understand the value of elevating your book’s readability. Convert your big dreams as an
                        author, to big realities.

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
                    <img loading="lazy" src="assets/images/book-printing/Book%20Printing.png" class="img-fluid"
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

<!-- 2nd section start -->
<section class="best-selling">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/book-printing/Book%20Printing%202.jpg" alt="twt_img">
            </div>

            <div class="col-md-6">
                <h2 class="heading">Best Book Printing Company In The USA!
                </h2>
                <p>We are known as an experienced book printing company online and we aim to serve you with the best

                    publishing as well as custom book printing services to uplift your author persona and assist you
                    in building a network globally.</p>
                <p>We are an affordable book printing service that helps authors boost their audience by serving
                    them with the best possible services and helping them leave a lasting impression over the
                    readers by delivering them with absolutely top-notch deliverables that outshine instantly with
                    their efficient quality.

                    publishing as well as custom book printing services to uplift your author persona and assist you in
                    building a network globally.</p>
                <p>We are an affordable book printing service that helps authors boost their audience by serving them
                    with the best possible services and helping them leave a lasting impression over the readers by
                    delivering them with absolutely top-notch deliverables that outshine instantly with their efficient
                    quality.

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
            <h2>Americans Book Writer - Establish Your Dreams In 4 Simple Steps!</h2>
        </div>
        <div class="row feature_sec_Slider">
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon1.png" alt="twt_img">
                    <h5>Book Formatting

                    </h5>
                    <p>Our designers will take care of the formatting to ensure the best quality for your top-notch
                        printed book that is going to get the attention of the world.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="500"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon2.png" alt="twt_img">
                    <h5>Approval On The Project
                    </h5>

                    <p>Once our designers are done with the creative process for your print book, we need you to
                        approve the formatting size.

                    <p>Once our designers are done with the creative process for your print book, we need you to approve
                        the formatting size.

                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="800"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon3.png" alt="twt_img">
                    <h5>Expert Printing
                    </h5>

                    <p>We have a team that works according to your requirements and serves you with services that
                        you have been looking for all around the USA.

                    <p>We have a team that works according to your requirements and serves you with services that you
                        have been looking for all around the USA.

                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="1100"
                data-aos-duration="1500">
                <div class="feature_box">
                    <img src="assets/images/new_sec/feature_icon4.png" alt="twt_img">
                    <h5>Project delivery
                    </h5>

                    <p>Being a custom book printing company we aim to assist you with all your author needs and
                        serve you with the best possible deliverables.

                    <p>Being a custom book printing company we aim to assist you with all your author needs and serve
                        you with the best possible deliverables.

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
                    <h5>Print Book Publishing - Serving Authors Globally, Enhancing Author Experiences</h5>

                    <p>We know that as an author, you must have aspired to see your book on the shelf of the book
                        near your street. As a book printing company, we have been able to team up with industry
                        professionals and bring their author personas to life. Hire custom book printing services
                        and leave all the complexities on the team that is experienced to cater to all of them.</p>

                    <p>We know that as an author, you must have aspired to see your book on the shelf of the book near
                        your street. As a book printing company, we have been able to team up with industry
                        professionals and bring their author personas to life. Hire custom book printing services and
                        leave all the complexities on the team that is experienced to cater to all of them.</p>

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
                    <h3>Assisting Authors In Leaving a Lasting Impression Over The Readers Globally.
                    </h3>
                    <p>Do you also want to leave a lasting impression on your readers globally? Do you also want to

                        publish a printed book to uplift your author persona? Hire professional book printing
                        services that enhance your author experience by serving you with extremely professional
                        print book publishing online.
                    </p>
                    <p>Know that your book is meant to outshine the publishing industry by getting the attention of
                        your potential readers through a creative book cover design that will elevate the reader's
                        experience of your audience instantly.

                        publish a printed book to uplift your author persona? Hire professional book printing services
                        that enhance your author experience by serving you with extremely professional print book
                        publishing online.
                    </p>
                    <p>Know that your book is meant to outshine the publishing industry by getting the attention of your
                        potential readers through a creative book cover design that will elevate the reader's experience
                        of your audience instantly.

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
                <h2 class="heading"> Best Book Printing Services <span>In The USA</span>
                </h2>
                <h3>Six easy steps to get your book published</h3>
                <a href="javascript:" class="btn chat">Get in Touch with us</a>
            </div>
            <div class="col-md-7">
                <div class="row top_space">
                    <div class="col-md-6">
                        <h5>01</h5>
                        <p>
                            <span>Tell us Your Book Length</span>

                            The first thing that you need to tell our account manager is to identify your
                            book-length and the number of pages your book has.

                            The first thing that you need to tell our account manager is to identify your book-length
                            and the number of pages your book has.

                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>02</h5>
                        <p>
                            <span>Paperback or Hard Cover</span>
                            According to your aspirations and needs, Our account managers will let you know the
                            price-per-piece for your printed book.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h5>03</h5>
                        <p>
                            <span>Black and White Printing</span>
                            If your book doesn’t include any pictures, then we suggest you go with black and white
                            printing for your book to save some money.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>04</h5>
                        <p>
                            <span>Colour Premium</span>
                            Go with the colored printed book, if you are aspiring to publish a children’s book then
                            color printing is the thing you need for your book as your book must contain captivating
                            illustrations to engage with the audience better.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h5>05</h5>
                        <p>
                            <span>Glossy Cover Finish</span>
                            A glossy cover finish is the most attractive for Gen-Z readers, if you are putting out a

                            book that targets young readers then you should go with a glossy cover finish for your
                            book.

                            book that targets young readers then you should go with a glossy cover finish for your book.

                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>06</h5>
                        <p>
                            <span>Matte Cover Finish</span>
                            A matte cover finish is attractive to aged/mature readers globally as the touch feels
                            premium if you go with the matte cover finish.
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
                        <img loading="lazy" src="assets/images/book-printing/Book%20Mockup.png" class="img-fluid"
                            alt="twt_img">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="b_book_data">
                        <h3>Searching For Affordable Book Printing Services Online?</h3>

                        <p>Print book publishing near you has a team of expert designers who are experienced in
                            looking after the formatting and ensuring that your book is printed and delivered to
                            your provided address, the services for printing books we offer:

                        <p>Print book publishing near you has a team of expert designers who are experienced in looking
                            after the formatting and ensuring that your book is printed and delivered to your provided
                            address, the services for printing books we offer:

                        </p>
                        <div class="book_pera">
                            <ul>
                                <li>Realistic Book Cover</li>
                                <li>Card-Board Book </li>
                                <li>Animated Book Cover</li>
                            </ul>
                            <ul>
                                <li>Paper-Back Book</li>
                                <li>Ebook Services</li>
                                <li>Hard Book Cover</li>
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

            <h4 data-aos="fade-up" class="aos-init aos-animate">Connect yourself with the best custom book printing
                <br> company online!</h4>

            <h4 data-aos="fade-up" class="aos-init aos-animate">Connect yourself with the best custom book printing <br>
                company online!</h4>

            <p data-aos="fade-up" class="aos-init aos-animate">Have you also been aspiring to add richness to your
                writings? Collaborate <br> with the best in the publishing industry and enhance your literary legacy
                <br> in a positive manner.
            </p>
            <div class="cta-btns">
                <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup" data-fancybox=""
                    data-src="#popupform">Let's Get Started</a>
                <a href="tel:(904) 643-2199" class="default_btn">Call</a>

                <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup">Live
                    Chat</a>

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
                            aria-expanded="false" aria-controls="faq1">how to start a book printing company
                        </a>
                    </div>

                    <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                        <div class="card-body">
                            <p>Connect yourself with a printing agency and make a contract with them on the basis of

                                which you can get your orders printed by a third party and make money by becoming
                                the middleman in the process.

                                which you can get your orders printed by a third party and make money by becoming the
                                middleman in the process.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faqhead2">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"

                            aria-expanded="true" aria-controls="faq2">How much does it cost to print a book on
                            average?

                            aria-expanded="true" aria-controls="faq2">How much does it cost to print a book on average?

                        </a>
                    </div>

                    <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                        <div class="card-body">

                            <p>There are a lot of factors on which the average cost of a book might differ like, if
                                you need a paperback, it’ll cost you different and if you go for a hardcover, it
                                might cost you different, the average price for printing a book can be considered
                                around 15-18$ per piece.

                            <p>There are a lot of factors on which the average cost of a book might differ like, if you
                                need a paperback, it’ll cost you different and if you go for a hardcover, it might cost
                                you different, the average price for printing a book can be considered around 15-18$ per
                                piece.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="faqhead3">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq3">Where do people print books?

                        </a>
                    </div>

                    <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                        <div class="card-body">

                            <p>You can connect with a professional book printer for help in printing your book or
                                you can get done with the process through various online platforms that you can find
                                if you search the same question on the search engine but trust someone who has been
                                doing things for minimum a year now or have a number of clients that they have
                                already served.

                            <p>You can connect with a professional book printer for help in printing your book or you
                                can get done with the process through various online platforms that you can find if you
                                search the same question on the search engine but trust someone who has been doing
                                things for minimum a year now or have a number of clients that they have already served.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead4">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                            aria-expanded="true" aria-controls="faq4">Can you print a book on a normal printer?
                        </a>
                    </div>

                    <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                        <div class="card-body">
                            <p>No, a book can not be printed in a normal printer as every book is different in

                                specifications and hardcover/paperbacks might not be printed in the best quality if
                                you go with a normal printer. A book printer is a bit different from a normal
                                printer.

                                specifications and hardcover/paperbacks might not be printed in the best quality if you
                                go with a normal printer. A book printer is a bit different from a normal printer.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead5">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                            aria-expanded="true" aria-controls="faq5">Why do people prefer reading printed books?
                        </a>
                    </div>

                    <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                        <div class="card-body">
                            <p>For various reasons, people prefer to go with a printed book when it comes to the
                                reader's perspective as a book is captivating and it’s easy to keep track of your

                                readings with the help of a bookmark in a printed book but it can be difficult if
                                you choose an online book.

                                readings with the help of a bookmark in a printed book but it can be difficult if you
                                choose an online book.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="faqhead6">
                        <a style="background: #307d82; color: white; padding: 15px;" href="#"
                            class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                            aria-expanded="true" aria-controls="faq6">Why printed books are better than audiobooks?
                        </a>
                    </div>

                    <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                        <div class="card-body">

                            <p>It varies from person to person, everything depends on the reader's personal
                                preference but as an author, printed books are more likely to get potential
                                conversions and attract more readers because most people prefer printed books from a
                                reader's point of view.

                            <p>It varies from person to person, everything depends on the reader's personal preference
                                but as an author, printed books are more likely to get potential conversions and attract
                                more readers because most people prefer printed books from a reader's point of view.

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

                                    <p>They have served me with tremendous ghostwriting services. Being a working woman,
                                        I could hardly manage

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

                                    <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in the form
                                        of a compiled book
                                        with absolutely no errors and helped me execute everything concerning my book in
                                        a very short span of time.

                                    </p>
                                    <h6>Tom J. Moore</h6>
                                </div>
                                <div class="box">
                                    <p>I’m thoroughly impressed by the creative minds that are a part of Americans Book Writer

                                        writing team. I brought a concept to them and they did creative justice to
                                        it!

                                        writing team. I brought a concept to them and they did creative justice to it!

                                    </p>
                                    <h6>Nicolas McCormick</h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testi_slides">
                                <div class="box">

                                    <p>Professional, streamlined, meticulous, and creative, the team at Americans Book Writer are my

                                    <p>Professional, streamlined, meticulous, and creative, the team at Americans Book Writer
                                        are my

                                        go-to for anything and everything that I want written and published!
                                    </p>
                                    <h6>Angelo Long</h6>
                                </div>
                                <div class="box">

                                    <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their writing
                                        team is
                                        phenomenal and their services are amazing! I’m definitely going to bring
                                        more projects to them.”

                                    <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their writing team
                                        is
                                        phenomenal and their services are amazing! I’m definitely going to bring more
                                        projects to them.”

                                    </p>
                                    <h6>Malcolm Gibbs</h6>
                                </div>
                                <div class="box">

                                    <p>They have served me with tremendous ghostwriting services. Being a working
                                        woman, I could hardly manage

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

                                    <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their writing
                                        team is
                                        phenomenal and their services are amazing! I’m definitely going to bring
                                        more projects to them.”

                                    <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their writing team
                                        is
                                        phenomenal and their services are amazing! I’m definitely going to bring more
                                        projects to them.”

                                    </p>
                                    <h6>Malcolm Gibbs</h6>
                                </div>
                                <div class="box">

                                    <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in the
                                        form of a compiled book
                                        with absolutely no errors and helped me execute everything concerning my
                                        book in a very short span of time.

                                    <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in the form
                                        of a compiled book
                                        with absolutely no errors and helped me execute everything concerning my book in
                                        a very short span of time.

                                    </p>
                                    <h6>Tom J. Moore</h6>
                                </div>
                                <div class="box">

                                    <p>Professional, streamlined, meticulous, and creative, the team at Americans Book Writer are my

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