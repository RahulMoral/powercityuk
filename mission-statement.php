<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>POWER CITY UK | DISCLAIMER</title>
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
                            <h1>MISSION & ANTI DISCRIMINTION STATEMENT</h1>
                        </div>
                    </div>
                </section>
                <section class="disclaimer">
                    <div class="container">
                        <div class="disclaimer-wrapper">
                            <div class="disclaimer-item">
                                <h2 class="text-center">Mission Statement</h2>
                                <p class="text-center">We are a none profit organisation, we support everyone in our community. We provide welfare support where we can, we tell people abt the love of Christ.</p>
                            </div>
                            <!-- Each item -->
                            <div class="disclaimer-item">
                                <h2 class="text-center">Anti Discrimintion Statement</h2>
                                <p class="text-center">We againest all forms of discrimination, race or gender. We support everyone in our community we care for people welfare.</p>
                            </div>
                            <!-- Each item -->
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