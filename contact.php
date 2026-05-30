<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>POWER CITY UK | CONTACT US</title>
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
                            <h1>Contact Us</h1>
                            <ul class="list-unstyled mb-0 d-flex align-items-center gap-2">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>/</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="contacut-us">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <form id="contactForm">
                                    <div class="form-group">
                                        <h3>Any Question, Contact Us</h3>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="homeContactName">Name<span>*</span></label>
                                        <input type="text" name="name" class="form-control" required id="homeContactName" placeholder="Your full name"  />
                                    </div>
                                    <!-- Each item -->
                                    <div class="form-group">
                                        <label class="form-label" for="homeContactEmail">Email<span>*</span></label>
                                        <input type="text" name="email" class="form-control" required id="homeContactEmail" placeholder="Your email address"  />
                                    </div>
                                    <!-- Each item -->
                                    <div class="form-group">
                                        <label class="form-label" for="homeContactMobile">Mobile Number<span>*</span></label>
                                        <input type="text" required name="mobile" class="form-control" id="homeContactMobile" placeholder="Your phone number"  />
                                    </div>
                                    <!-- Each item -->
                                    <div class="form-group">
                                        <label class="form-label" for="homeContactMessage">Message<span>*</span></label>
                                        <textarea name="message" class="form-control" required id="homeContactMessage" placeholder="Write your message" rows="6"></textarea>
                                    </div>
                                    <!-- Each item -->
                                    <div class="form-group">
                                        <div class="recaptcha-wrapper">
                                            <div class="g-recaptcha" data-sitekey="6LdCjm0rAAAAAN9WBOd-2glpRiTsZ2oiDpkaR3Rh"></div>
                                        </div>
                                    </div>
                                    <!-- Each item -->
                                    <div class="form-group">
                                        <button type="submit" role="button" class="home-content-contact-submit">Submit</button>
                                    </div>
                                    <!-- Each item -->
                                    <!-- Show error under the form -->
                                    <div class="form-error" style="color: red;" id="formResponse"></div>
                                </form>
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
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
			jarallax(document.querySelectorAll('.jarallax'), {
				speed: 0.4,
			});
        </script>
        <script>
            document.getElementById('contactForm').addEventListener('submit', async function (e) {
                e.preventDefault();

                const form = e.target;
                const formData = new FormData(form);
                const responseBox = document.getElementById('formResponse');
                responseBox.innerHTML = ''; // clear old messages

                // Get field values
                //const name = form.name.value.trim();
                const email = form.email.value.trim();
                //const mobile = form.mobile.value.trim();
                //const message = form.message.value.trim();
                const recaptchaResponse = grecaptcha.getResponse();

                // Custom validation

                // if (name.length < 3) {
                //  responseBox.innerHTML = 'Please enter your name (at least 3 characters).';
                //  return;
                // }

                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    responseBox.innerHTML = 'Please enter a valid email address.';
                    return;
                }

                // if (mobile && !/^\d{11}$/.test(mobile)) {
                //  responseBox.innerHTML = 'Please enter a valid 11-digit mobile number.';
                //  return;
                // }

                // if (message.length < 10) {
                //  responseBox.innerHTML = 'Please enter a message (at least 10 characters).';
                //  return;
                // }

                if (!recaptchaResponse) {
                    responseBox.innerHTML = 'Please complete the reCAPTCHA.';
                    return;
                }

                // Add reCAPTCHA response to form
                formData.append('g-recaptcha-response', recaptchaResponse);

                // Disable submit button to prevent duplicates
                const submitBtn = form.querySelector('button[type="submit"]');
                submitBtn.disabled = true;

                try {
                    const res = await fetch('send-email.php', {
                        method: 'POST',
                        body: formData,
                    });

                    const result = await res.text();

                    if (result.includes('SUCCESS')) {
                        window.location.href = 'thank-you.html';
                    } else {
                        responseBox.innerHTML = result;
                        grecaptcha.reset();
                    }
                } catch (err) {
                    responseBox.innerHTML = 'Something went wrong. Please try again.';
                } finally {
                    submitBtn.disabled = false;
                }
            });
        </script>
	</body>
</html>