<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Rank#1 Book Publishing Company | Americans Book Writer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link href="css/pro.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.png" type="images/favicon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/css/intlTelInput.css">
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">
</head>
<style type="text/css">
	.serv-col-main a {
		color: #000;
	}

	.serv-col-main a:hover {
		color: #000;
	}

	.thankyou-banner {
		height: 800px;
		display: flex;
		align-items: center;
	}
</style>

<body>
	<div class="top-bar-main new-header-set-top">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
					<ul>
						<li><a href="tel:(904) 643-2199"><img width="27" height="15" alt="Americans Book Writer"
									src="images/flag.webp" class="img-fluid" alt="img">(904) 643-2199</a></li>
						<li><a href="mailto:info@americansbookwriter.com"><i class="far fa-envelope"></i></a></li>
						<li><a href="javascript:;" onclick="Tawk_API.toggle()"><i class="fal fa-comment"></i>Live
								Chat</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="head_top">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo">
						<img width="100%" height="100%" alt="Americans Book Writer" src="images/logo.png" data-toggle="modal"
							data-target="#staticBackdrop1">
					</div>
				</div>
				<div class="col-sm-8">
					<div class="serv-cta-btn inr-tab-btn header-btn cta-tab-btn">
						<a href="tel:(904) 643-2199" class="serv-cta-tel"><img width="27" height="15" alt="Americans Book Writer"
								src="images/flag.webp">(904) 643-2199</a>
						<a href="javascript:;" data-toggle="modal" data-target="#staticBackdrop1"
							class="serv-cta-tel">Get Started</a>
						<a href="javascript:;" class="serv-cta-chat chats" onclick="Tawk_API.toggle()">Live Chat</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="main-banner thankyou-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="bnr-txt">
						<h1 class="wow fadeInUp" data-wow-duration="1s">Thank you for Sign Up</h1>
						<p class="wow fadeInUp" data-wow-duration="3s">Our customer service representative will contact you shortly.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade " id="staticBackdrop1" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="halloween-popup inlineBlock" id="halloween-popup">
					<button type="button" class="fancybox-close-small close" data-dismiss="modal" aria-label="Close">
						X
					</button>
					<!-- <div class="halloween-circle">
                    <img width="100%" height="100%" alt="Americans Book Writer" src="images/text.webp" class="halloween-circle-home" alt/>
                    <div class="halloween-blur"></div>
                </div> -->
					<div class="halloween-popup-inner">
						<h3>Avail Amazing <span>65% Discount Now!</span></h3>
						<form action="email.php" method="GET">
							<div class="halloween-filed d-block" id="form1">
								<input type="text" placeholder="Enter your Name" name="name">
								<input type="email" placeholder="Enter your Email" name="email">
								<input type="tel" placeholder="Enter your Phone Number" name="phone">
								<textarea placeholder="Talk About Your Project" name="message" class="txt"></textarea>
								<button type="submit" class="halloween_btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="floatbutton">
		<div class="btns_wrap">
			<a href="javascript:;" class="chat_wrap borderOnly" onclick="Tawk_API.toggle()">
				<span class="icoo"><i class="fa-comment fas"></i></span>
				<span>Chat With Us</span> </a>
			<a href="tel:(904) 643-2199" class="call_wrap borderOnly">
				<span class="icoo"><i class="fa-phone-alt fas"></i></span>
				<span>(904) 643-2199</span> </a>
		</div>
		<div class="clickbutton borderOnly">
			<div class="crossplus">Get 65% Off Today</div>
		</div>
		<div class="banner-form borderOnly">
			<button id="cross-side-bar-btn"><span><i class="fal fa-times"></i></span></button>
			<h3>Chat With Us to Avail <br><span>65% Discount Now!</span></h3>
			<div class="banform">
				<div>
					<div class="row">
						<div class="ban-form">
							<form action="email.php" method="GET">
								<div class="row">
									<div class="col-lg-12">
										<div class="fldset">
											<input name="name" type="text" placeholder="Enter your name">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="fldset">
											<input type="email" name="email" placeholder="Enter email here" />
										</div>
									</div>
									<div class="col-lg-12">
										<div class="fldset">
											<input name="phone" type="tel" placeholder="Phone Number" />
										</div>
									</div>
									<div class="col-lg-12">
										<div class="fldset">
											<input type="submit" placeholder="Connect With Us">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="floatbutton2">

		<div class="clickbutton2">
			<div class="crossplus">Get Free Quote</div>
		</div>
		<div class="banner-form">
			<button id="cross-side-bar-btn2"><span><i class="fal fa-times"></i></span></button>
			<h3>Chat With Us to Avail <br><span>65% Off Today</span></h3>
			<div class="banform">
				<div>
					<div class="row">
						<div class="ban-form">
							<form action="email.php" method="GET">
								<div class="row">
									<div class="col-lg-12">
										<div class="fldset">
											<input name="name" type="text" placeholder="Enter your name">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="fldset">
											<input type="text" name="email" placeholder="Enter email here" />
										</div>
									</div>
									<div class="col-lg-12">
										<div class="fldset">
											<input name="phone" type="tel" placeholder="Phone Number" />
										</div>
									</div>
									<div class="col-lg-12">
										<div class="fldset">
											<input type="submit" placeholder="Connect With Us">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <a rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=+0000000&amp;text=Welcome%21%20to%20" class="float" target="_blank">
      
        <svg xmlns="http://www.w3.org/2000/svg" class="my-float" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" id="footer-sample-full" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16" class="iconify iconify--icomoon-free"><path fill="currentColor" d="M13.641 2.325A7.869 7.869 0 0 0 8.032 0C3.663 0 .107 3.556.107 7.928c0 1.397.366 2.763 1.059 3.963L.041 16l4.203-1.103a7.929 7.929 0 0 0 3.787.966h.003c4.369 0 7.928-3.556 7.928-7.928a7.887 7.887 0 0 0-2.322-5.609zm-5.607 12.2a6.583 6.583 0 0 1-3.356-.919l-.241-.144l-2.494.653l.666-2.431l-.156-.25a6.537 6.537 0 0 1-1.009-3.506a6.599 6.599 0 0 1 6.594-6.591c1.759 0 3.416.688 4.659 1.931a6.554 6.554 0 0 1 1.928 4.662c-.003 3.637-2.959 6.594-6.591 6.594zm3.613-4.937c-.197-.1-1.172-.578-1.353-.644s-.313-.1-.447.1c-.131.197-.512.644-.628.778c-.116.131-.231.15-.428.05s-.838-.309-1.594-.984c-.588-.525-.987-1.175-1.103-1.372s-.013-.306.088-.403c.091-.088.197-.231.297-.347s.131-.197.197-.331c.066-.131.034-.247-.016-.347s-.447-1.075-.609-1.472c-.159-.388-.325-.334-.447-.341c-.116-.006-.247-.006-.378-.006s-.347.05-.528.247c-.181.197-.694.678-.694 1.653s.709 1.916.809 2.05c.1.131 1.397 2.134 3.384 2.991c.472.203.841.325 1.128.419c.475.15.906.128 1.247.078c.381-.056 1.172-.478 1.338-.941s.166-.859.116-.941c-.047-.088-.178-.137-.378-.238z"></path></svg>
</a>
 -->



	<footer class="footer-main">

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="get-in-touch">
							<p>Get in Touch With Us
								<a href="tel:(904) 643-2199"><i class="fa fa-phone" aria-hidden="true"></i> (904) 643-2199</a>
								<a href="mailto:info@americansbookwriter.com"><i class="fa fa-envelope"
										aria-hidden="true"></i>
									info@americansbookwriter.com</a>
								<a href="javascript:;"><i class="fa fa-map-marker" aria-hidden="true"></i> 2285 Kingsley Ave Suite A Orange Park, FL 32073</a>
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
							<p>Copyright © Americans Book Writer 2023. All rights reserved. <a href="javaavoid:;"
									data-toggle="modal" data-target="#staticBackdrop1">Terms of Services</a> | <a
									href="javaavoid:;" data-toggle="modal" data-target="#staticBackdrop1">Privacy
									Policy</a> | Powered By Americans Book Writer
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
							The services provided by Americans Book Writer become clients' property once delivered. Americans Book Writer will not hold any ownership rights once your work is successfully accepted by a
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
			<h2>Get <span>65% Off</span></h2>
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
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox.js"></script>
	<script src="js/slick.js"></script>
	<!-- <script src="js/accordian-jquery-ui.js"></script> -->
	<script src="js/owl.carousel.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/intlTelInput.min.js"></script> -->

	<script src="js/custom.js"></script>
	<script src="js/chat.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
</body>

</html>