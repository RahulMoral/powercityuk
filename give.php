<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>POWER CITY UK | GIVE</title>
		<!-- Google fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" />
        <!-- Jarallax CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.css" />
		<link rel="stylesheet" href="css/app.css" />
	</head>
	<body>
		<div class="page-wrapper">
			<!-- Header -->
			<?php include(dirname(__FILE__) . '/inc/header.php') ?>
			<!-- Header end -->
			<!-- Main -->
			<main class="site-main">
				<section class="inner-banner jarallax">
                    <img alt="Inner banner image" class="jarallax-img" src="/images/inner-banner.jpg" />
                    <div class="container">
                        <div class="inner-banner-wrapper">
                            <h1>DONATIONS</h1>
                            <p>Everything we do at PowerCity International is made possible by the faithful generosity of all believers who supports our Mandate to Re-Introduce Jesus to this Generation, Equipping the Believers, to Know who they are in Christ, What they have in Christ and What Christ can Do Through them.</p>
                        </div>
                    </div>
                </section>
                <section class="give-section">
                    <div class="container">
                        <div class="give-section-wrapper">
                            <div class="give-section-header">
                                <h2 class="text-center">SERVICE OFFERINGS & DONATIONS</h2>
                                <h5 class="text-center">GIVE YOUR HONOUR, SERVICE AND PARTNERSHIP OFFERINGS</h5>
                            </div>
                            <div class="give-section-body">
                                <div class="give-section-item">
                                    <h4>Direct Bank Transfer</h4>
                                    <ul class="list-unstyled d-flex flex-column">
                                        <li>BANK NAME: TRUIST BANK (USA)</li>
                                        <li>ACCOUNT NAME: POWERCITY INTERNATIONAL CONFERENCE INC</li>
                                        <li>ACCOUNT NUMBER: 1210005879807</li>
                                        <li>ROUTING NUMBER: 055003308</li>
                                        <li>SWIFT CODE: BRBTUS33</li>
                                    </ul>
                                </div>
                                <!-- Each item -->
                                <div class="give-section-item">
                                    <h4>Zelle</h4>
                                    <ul class="list-unstyled d-flex flex-column">
                                        <li>PCIUSCANADA@GMAIL.COM</li>
                                    </ul>
                                </div>
                                <!-- Each item -->
                                <div class="give-section-item">
                                    <h4>Cash APP</h4>
                                    <ul class="list-unstyled d-flex flex-column">
                                        <li>NAME: $POWERCITYCONFERENCE</li>
                                        <li>PHONE NUMBER: +1 678-862-2855</li>
                                    </ul>
                                </div>
                                <!-- Each item -->
                            </div>
                        </div>
                    </div>
                </section>
			</main>
			<!-- Main end -->
			<!-- Footer -->
			<?php include(dirname(__FILE__) . '/inc/footer.php'); ?>
			<!-- Footer end -->
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/common.js"></script>
        <!-- Jarallax JS -->
        <script src="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.js"></script>
        <script>
			jarallax(document.querySelectorAll('.jarallax'), {
				speed: 0.4,
			});
        </script>
	</body>
</html>