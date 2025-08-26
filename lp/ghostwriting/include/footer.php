    <footer class="footer-main">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="get-in-touch">
                            <p>Get in Touch With us
                                <a href="tel:(904) 643-2199"><i class="fa fa-phone" aria-hidden="true"></i> (904) 643-2199</a>
                                <a href="mailto:info@authorbookwriter.com"><i class="fa fa-envelope"
                                        aria-hidden="true"></i>
                                    info@authorbookwriter.com</a>
                                <a href="javascript:;"><i class="fa fa-map-marker" aria-hidden="true"></i> 2285 Kingsley
                                    Ave Suite A Orange Park, FL 32073</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-last">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="copyright">
                            <p>Copyright © Author Book Writer 2024. All rights reserved. <a href="javaavoid:;"
                                    data-toggle="modal" data-target="#staticBackdrop1">Terms of Services</a> | <a
                                    href="javaavoid:;" data-toggle="modal" data-target="#staticBackdrop1">Privacy
                                    Policy</a>
                                | Powered By Author Book Writer
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="disclaimer-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="disclaimer">
                            <strong>Disclaimer:</strong><br />
                            The services provided by Author Book Writer become clients' property once delivered. Americans Book Writer will not hold any ownership rights once your work is successfully accepted by a
                            publishing
                            house.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!--modal -->

    <a href="javascript:;" data-target="#staticBackdrop1" data-toggle="modal">
        <div class="black_friday">
            <div class="black_friday_top">
                <p>SALE</p>
            </div>
            <h2>Get <span>50% Off</span></h2>
            <div class="countdown">
                <span>00</span>
                <span>:</span>
                <span id="mins">3</span>
                <span id="mins-text">минут</span>
                <span>:</span>
                <span id="secs">0</span>
                <span id="secs-text">секунд</span>
            </div>

        </div>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/lenis@1.1.2/dist/lenis.min.js"></script>
    <script src="js/custom.min.js"></script>
    <?php
        if (isset($_SESSION['email_sent']) && $_SESSION['email_sent']) {
            echo '
            <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "Email Sent Successfully"
            });
            </script>';
            // Unset the session variable to prevent the alert from showing again on refresh
            unset($_SESSION['email_sent']);
        }
    ?>
    </body>

    </html>