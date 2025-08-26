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
                    <h1>We are a Custom Book Cover <span class="aner_con">Design Company!</span></h1>
                    <p>You might have heard the phrase, “Never judge a book by its cover”. But in reality, the first

                        element based on which your book would be judged is your book’s cover. Hire creative book
                        cover designers and get an eye-catching book cover that will help you leave a lasting first
                        impression on the audience. We are a custom book cover design company that has the potential
                        to captivate minds and portray your aspirations with excellence, Americans Book Writer has the
                        expertise to help you get the best book cover design online and uplift your publishing game.

                        element based on which your book would be judged is your book’s cover. Hire creative book cover
                        designers and get an eye-catching book cover that will help you leave a lasting first impression
                        on the audience. We are a custom book cover design company that has the potential to captivate
                        minds and portray your aspirations with excellence, Americans Book Writer has the expertise to
                        help
                        you get the best book cover design online and uplift your publishing game.

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
                    <img loading="lazy" src="assets/images/Book%20Cover/13.png" class="img-fluid" alt="TWT imgs">
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
                <img src="assets/images/new_sec/side%20image%20%202.webp" alt="twt_img">
            </div>

            <div class="col-md-6">
                <h2 class="heading">Custom Book Cover Designers In The USA!
                </h2>

                <p>You should never judge a book based on its cover. Unless of course, you are referring to a
                    physical book rather than a metaphor for a person. When your first batch of books reaches the
                    shelves, to get picked up, your book cover design is the element that will motivate the readers
                    to pick it up from the shelf, and initially, it is judged based on your book cover. Hire a
                    creative book cover designer as according to statistics, the title, cover, and back cover
                    content of a book are the first few things that a person notices before opening it to read some
                    of the content.
                </p>
                <p>The best book cover design acts as a motivator for the readers to have a look at your book and
                    read the title as well as the back cover information. Your book would normally collect dust on
                    the shelves if it doesn’t have an outstanding and professional book cover design. With book
                    cover designers online, ensure that your manuscript is in good hands.

                    <p>You should never judge a book based on its cover. Unless of course, you are referring to a
                        physical
                        book rather than a metaphor for a person. When your first batch of books reaches the shelves, to
                        get
                        picked up, your book cover design is the element that will motivate the readers to pick it up
                        from
                        the shelf, and initially, it is judged based on your book cover. Hire a creative book cover
                        designer
                        as according to statistics, the title, cover, and back cover content of a book are the first few
                        things that a person notices before opening it to read some of the content.
                    </p>
                    <p>The best book cover design acts as a motivator for the readers to have a look at your book and
                        read
                        the title as well as the back cover information. Your book would normally collect dust on the
                        shelves if it doesn’t have an outstanding and professional book cover design. With book cover
                        designers online, ensure that your manuscript is in good hands.

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

    <section class="feature_sec sec_pt sec_pb">

        <div class="container">
            <div class="sec_title text-center aos-init aos-animate" data-aos="fade-down" data-aos-duration="1500">
                <h2>Collaborate With Creative Book Cover Designers And Captivate Readers Instantly</h2>
            </div>
            <div class="row feature_sec_Slider">
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200"
                    data-aos-duration="1500">
                    <div class="feature_box">
                        <img src="assets/images/new_sec/feature_icon1.png" alt="twt_img">
                        <h5>Dust Jacket

                        </h5>

                        <p>A creative dust jacket cover not only protects the original cover but also showcases the
                            blurb and back cover of your book in a captivating manner.

                            <p>A creative dust jacket cover not only protects the original cover but also showcases the
                                blurb
                                and back cover of your book in a captivating manner.

                            </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="500"
                    data-aos-duration="1500">
                    <div class="feature_box">
                        <img src="assets/images/new_sec/feature_icon2.png" alt="twt_img">
                        <h5>Hard Cover
                        </h5>
                        <p>There’s nothing quite like the feel of a well-made hardcover for your book! Our designers can

                            serve you with perfect hardcovers that not only protect the pages of your book but also help
                            you captivate minds.

                            serve you with perfect hardcovers that not only protect the pages of your book but also help
                            you
                            captivate minds.

                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="800"
                    data-aos-duration="1500">
                    <div class="feature_box">
                        <img src="assets/images/new_sec/feature_icon3.png" alt="twt_img">
                        <h5>Paper Back
                        </h5>

                        <p>Depending on your needs, If you have a lot to show in your cover design, or if you simply
                            want to give your book a more modern approach, Americans Book Writer can create the most
                            beautiful paperback cover for you!

                            <p>Depending on your needs, If you have a lot to show in your cover design, or if you simply
                                want to
                                give your book a more modern approach, Americans Book Writer can create the most
                                beautiful paperback
                                cover for you!

                            </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="1100"
                    data-aos-duration="1500">
                    <div class="feature_box">
                        <img src="assets/images/new_sec/feature_icon4.png" alt="twt_img">
                        <h5>Print Book
                        </h5>

                        <p>Whether it’s hardcover or paperback that you need, Americans Book Writer can create expertly
                            printed covers that capture the soul of your book, and draw potential reader's attention.

                            <p>Whether it’s hardcover or paperback that you need, Americans Book Writer can create
                                expertly printed
                                covers that capture the soul of your book, and draw potential reader's attention.

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

                        <h5>Book Cover Designers Online - That Assist Your Captivating Global Audience And Uplifting
                            Your Author Aspirations!</h5>
                        <p>There are plenty of sizes and forms available to choose from for your custom book cover
                            design. Regardless of the size of your book or cover, we are a professional book cover
                            design firm that is dedicated to serving you with spectacular designs.</p>

                        <h5>Book Cover Designers Online - That Assist Your Captivating Global Audience And Uplifting
                            Your
                            Author Aspirations!</h5>
                        <p>There are plenty of sizes and forms available to choose from for your custom book cover
                            design.
                            Regardless of the size of your book or cover, we are a professional book cover design firm
                            that
                            is dedicated to serving you with spectacular designs.</p>

                    </div>
                    <div class="d-flex mt-md-3">
                        <div class="btn-1">
                            <a href="javascript:" class="btn  various btn-home" data-fancybox=""
                                data-src="#popupform">GET A
                                QUOTE</a>
                        </div>
                        <div class="btn-2">
                            <a href="javascript:" class="btn btn-transparent chat chat">Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="edit-img">
                        <img loading="lazy" src="assets/images/new_sec/wri-edi-simg.webp" class="img-fluid"
                            alt="cta_img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 5th section end -->

    <!-- 5th section start -->
    <section>

        <div class="container">

            <div class="contaienr">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="amer_data">
                            <h3>Helping Authors Uplift Their Literary Journey, Creative yet Professional Book Cover
                                Services
                                Online!</h3>

                            <p>Do you also aspire to turn your ideas into an eBook that captivates readers globally? We
                                are
                                a USA-based book cover designer team that aims to assist authors globally and help them
                                reach another level of literature excellence. Hire creative book cover designers who
                                have
                                diverse expertise in the book cover design industry and know how to make your book
                                outshine
                                the industry by creating an eye-catching book cover for your story. Get custom eBook
                                cover
                                design and packages that cater to your author needs, Elevate your composition with the
                                superior knowledge and skills of our creative design team.

                                <p>Do you also aspire to turn your ideas into an eBook that captivates readers globally?
                                    We are a
                                    USA-based book cover designer team that aims to assist authors globally and help
                                    them reach
                                    another level of literature excellence. Hire creative book cover designers who have
                                    diverse
                                    expertise in the book cover design industry and know how to make your book outshine
                                    the industry
                                    by creating an eye-catching book cover for your story. Get custom eBook cover design
                                    and
                                    packages that cater to your author needs, Elevate your composition with the superior
                                    knowledge
                                    and skills of our creative design team.

                                </p>
                                <p>To target a wider audience and increase the readability of your book with the best as
                                    well as
                                    creative book cover designers. We are the best book cover design services that have
                                    the
                                    expertise to assist you in captivating readers globally.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- 5th section end -->

    <section class="book-size">
        <div class="container">
            <div class="info-text text-center">
                <h2>
                    Book Cover Sizes
                </h2>
                <p>

                    A book is available in a variety of sizes and forms. Regardless of the size of the book or cover,
                    our

                    A book is available in a variety of sizes and forms. Regardless of the size of the book or cover,
                    our

                    designers are experienced at creating spectacular designs. With our team of experts, size doesn't
                    matter.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz1.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                Pocket Book
                            </h4>
                            <p>4.25 x 6.875 in | 108 x 175 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz2.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                Digest
                            </h4>
                            <p>5.5 x 8.5 in | 140 x 216 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz3.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                A5
                            </h4>
                            <p>5.83 x 8.27 in | 148 x 210 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz4.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                US Trade
                            </h4>
                            <p>6 x 9 in | 152 x 229 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz5.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                Royal
                            </h4>
                            <p>6.14 x 9.21 in | 156 x 234 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz6.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                Comic Book
                            </h4>
                            <p>6.63 x 10.25 in | 168 x 260 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz7.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                Executive
                            </h4>
                            <p>7 x 10 in | 178 x 254 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz8.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                Crown Quarto
                            </h4>
                            <p>7.44 x 9.68 in | 189 x 246 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz9.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                Small Square
                            </h4>
                            <p>7.5 x 7.5 in | 190 x 190 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz10.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                A4
                            </h4>
                            <p>8.27 x 11.69 in | 210 x 297 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz11.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                US Letter
                            </h4>
                            <p>8.5 x 11 in | 216 x 279 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz12.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                Square
                            </h4>
                            <p>8.5 x 8.5 in 216 x 216 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz13.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                Small Landscape
                            </h4>
                            <p>9 x 7 in | 229 x 178 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz14.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                US Letter Landscape
                            </h4>
                            <p>11 x 8.5 in | 279 x 216 mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-size">
                        <img src="assets/images/sz15.webp" alt="twt_img">
                        <div class="text-size">
                            <h4>
                                A4 Landscape
                            </h4>
                            <p>11.69 x 8.27 in | 297 x 210 mm</p>
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
                            <img loading="lazy" src="assets/images/Book%20Cover/12.png" class="img-fluid" alt="twt_img">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="b_book_data">
                            <h3>Have a Look at Our Custom Book Cover Design</h3>

                            <p>We are an ebook publishing service provider in the USA that only teams up with creative
                                book cover designers who are experienced in helping you get a captivating animated book
                                cover design for your book. A team of professional book cover designers for hire who are
                                experienced in dealing with extensive workloads, and a variety of genres, ensuring the
                                best shape of your manuscript.</p>

                            <p>We are an ebook publishing service provider in the USA that only teams up with creative
                                book
                                cover designers who are experienced in helping you get a captivating animated book cover
                                design for your book. A team of professional book cover designers for hire who are
                                experienced in dealing with extensive workloads, and a variety of genres, ensuring the
                                best
                                shape of your manuscript.</p>

                            <div class="book_pera">
                                <ul>
                                    <li>Creative yet Professional Cover Services</li>
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

                <h4 data-aos="fade-up" class="aos-init aos-animate">Tired of searching for professional yet affordable
                    book cover designers?</h4>
                <p data-aos="fade-up" class="aos-init aos-animate">Get an animated book cover design for your manuscript
                    and elevate your <br> literary journey. Collaborate with professional book cover designers <br> near
                    you and captivate readers globally.

                    <h4 data-aos="fade-up" class="aos-init aos-animate">Tired of searching for professional yet
                        affordable book
                        cover designers?</h4>
                    <p data-aos="fade-up" class="aos-init aos-animate">Get an animated book cover design for your
                        manuscript and
                        elevate your <br> literary journey. Collaborate with professional book cover designers <br> near
                        you and
                        captivate readers globally.

                    </p>
                    <div class="cta-btns">
                        <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup"
                            data-fancybox="" data-src="#popupform">Let's Get Started</a>
                        <a href="tel:(904) 643-2199" class="default_btn">Call</a>

                        <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup">Live
                            Chat</a>

                        <a href="javascript:" class="default_btn orange_btn btn_space hvr-radial-in open_popup">Live
                            Chat</a>

                    </div>
            </div>
        </div>
    </section>
    <!-- 10th section end -->


    <!-- 11th section start content done-->
    <div class="contaienr faq_sec">
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
                                aria-expanded="false" aria-controls="faq1">How much do book cover designers make?</a>
                        </div>

                        <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                            <div class="card-body">
                                <p>It depends on the utilizitaion of the creative thought process, and on the type of
                                    design
                                    that you desire for your manuscript, is it an animated cover, or a 3D book cover,
                                    realistic or what so ever.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="faqhead2">
                            <a style="background: #307d82; color: white; padding: 15px;" href="#"
                                class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                aria-expanded="true" aria-controls="faq2">How much should an artist charge for a book
                                cover?
                            </a>
                        </div>

                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body">
                                <p>It all depends on the services you need a designer to serve you with, the amount of
                                    energy and creativity you require is the factor on the basis of which the designer
                                    will
                                    charge you for the services.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a style="background: #307d82; color: white; padding: 15px;" href="#"
                                class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                aria-expanded="true" aria-controls="faq3">What is the best book cover competition?
                            </a>
                        </div>

                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body">
                                <p>A captivating book cover is what actually eliminates the competition for your book
                                    and
                                    help you stand out in the publishing industry and captivate readers globally with a
                                    creative book cover design. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead4">
                            <a style="background: #307d82; color: white; padding: 15px;" href="#"
                                class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                aria-expanded="true" aria-controls="faq4">How do I find Best book cover Design Company?

                            </a>
                        </div>

                        <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                            <div class="card-body">
                                <p>Invest your money wisely and ensure that your book standsout in the book shelf, and
                                    captivates the right attention. The best book cover designer is the one who can
                                    create a
                                    book cover that not only helps you attract more readers but also communicate your
                                    aspirations with new readers for better conversions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead5">
                            <a style="background: #307d82; color: white; padding: 15px;" href="#"
                                class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                                aria-expanded="true" aria-controls="faq5">Best free book cover design software?

                            </a>
                        </div>

                        <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                            <div class="card-body">
                                <p>In todays era it’s very easy to find a book cover design software for free but
                                    anything
                                    that is free might bring copyright strikes your way and as an author you won’t be
                                    needing that at any cost. Ensure that your book cover is originally designed for you
                                    only.
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

        /* <!-- 11th section start content done--> */
    </style>

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
                                aria-expanded="false" aria-controls="faq1">How much do book cover designers make?</a>
                        </div>


                        <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                            <div class="card-body">
                                <p>It depends on the utilizitaion of the creative thought process, and on the type of
                                    design that you desire for your manuscript, is it an animated cover, or a 3D book
                                    cover, realistic or what so ever.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="faqhead2">
                            <a style="background: #307d82; color: white; padding: 15px;" href="#"
                                class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                aria-expanded="true" aria-controls="faq2">How much should an artist charge for a book
                                cover?
                            </a>
                        </div>

                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body">
                                <p>It all depends on the services you need a designer to serve you with, the amount of
                                    energy and creativity you require is the factor on the basis of which the designer
                                    will charge you for the services.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a style="background: #307d82; color: white; padding: 15px;" href="#"
                                class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                aria-expanded="true" aria-controls="faq3">What is the best book cover competition?
                            </a>
                        </div>

                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body">
                                <p>A captivating book cover is what actually eliminates the competition for your book
                                    and help you stand out in the publishing industry and captivate readers globally
                                    with a creative book cover design. </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead4">
                            <a style="background: #307d82; color: white; padding: 15px;" href="#"
                                class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                                aria-expanded="true" aria-controls="faq4">How do I find Best book cover Design Company?

                            </a>
                        </div>

                        <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                            <div class="card-body">
                                <p>Invest your money wisely and ensure that your book standsout in the book shelf, and
                                    captivates the right attention. The best book cover designer is the one who can
                                    create a book cover that not only helps you attract more readers but also
                                    communicate your aspirations with new readers for better conversions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead5">
                            <a style="background: #307d82; color: white; padding: 15px;" href="#"
                                class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                                aria-expanded="true" aria-controls="faq5">Best free book cover design software?

                            </a>
                        </div>

                        <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                            <div class="card-body">
                                <p>In todays era it’s very easy to find a book cover design software for free but
                                    anything that is free might bring copyright strikes your way and as an author you
                                    won’t be needing that at any cost. Ensure that your book cover is originally
                                    designed for you only.
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

                                            <p>They have served me with tremendous ghostwriting services. Being a
                                                working woman,
                                                I could hardly manage

                                                time to complete my book for myself but thanks to Americans Book Writer,
                                                their
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

                                            <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in
                                                the form
                                                of a compiled book
                                                with absolutely no errors and helped me execute everything concerning my
                                                book in
                                                a very short span of time.

                                            </p>
                                            <h6>Tom J. Moore</h6>
                                    </div>
                                    <div class="box">
                                        <p>I’m thoroughly impressed by the creative minds that are a part of Americans Book Writer

                                            writing team. I brought a concept to them and they did creative justice to
                                            it!

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

                                            <p>Professional, streamlined, meticulous, and creative, the team at
                                                Americans Book Writer
                                                are my

                                                go-to for anything and everything that I want written and published!
                                            </p>
                                            <h6>Angelo Long</h6>
                                    </div>
                                    <div class="box">

                                        <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their
                                            writing
                                            team is
                                            phenomenal and their services are amazing! I’m definitely going to bring
                                            more projects to them.”

                                            <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their
                                                writing team
                                                is
                                                phenomenal and their services are amazing! I’m definitely going to bring
                                                more
                                                projects to them.”

                                            </p>
                                            <h6>Malcolm Gibbs</h6>
                                    </div>
                                    <div class="box">

                                        <p>They have served me with tremendous ghostwriting services. Being a working
                                            woman, I could hardly manage

                                            <p>They have served me with tremendous ghostwriting services. Being a
                                                working woman,
                                                I could hardly manage

                                                time to complete my book for myself but thanks to Americans Book Writer,
                                                their
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

                                        <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their
                                            writing
                                            team is
                                            phenomenal and their services are amazing! I’m definitely going to bring
                                            more projects to them.”

                                            <p>“I’m so lucky to have discovered Americans Book Writer for myself. Their
                                                writing team
                                                is
                                                phenomenal and their services are amazing! I’m definitely going to bring
                                                more
                                                projects to them.”

                                            </p>
                                            <h6>Malcolm Gibbs</h6>
                                    </div>
                                    <div class="box">

                                        <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in the
                                            form of a compiled book
                                            with absolutely no errors and helped me execute everything concerning my
                                            book in a very short span of time.

                                            <p>Best Ghostwriters in town!!! They made my ugly write-ups look so good in
                                                the form
                                                of a compiled book
                                                with absolutely no errors and helped me execute everything concerning my
                                                book in
                                                a very short span of time.

                                            </p>
                                            <h6>Tom J. Moore</h6>
                                    </div>
                                    <div class="box">

                                        <p>Professional, streamlined, meticulous, and creative, the team at Americans Book Writer are my

                                            <p>Professional, streamlined, meticulous, and creative, the team at
                                                Americans Book Writer
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
            <h3>Our ghostwriters never run out of relevant content for you, Americans Book Writer has served a variety
                of
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