<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>POWER CITY UK | HOME</title>
		<!-- Google fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" />
		<link rel="stylesheet" href="css/app.css" />
	</head>
	<body>
		<div class="page-wrapper">
			<!-- Header -->
			<?php include(dirname(__FILE__) . '/inc/header.php') ?>
			<!-- Header end -->
			<!-- Main -->
			<main class="site-main">
				<!-- Home banner -->
                <section class="live-stream">
                    <div class="container">
                        <h1 class="text-center">Live Stream start 6:00 PM Monday to Friday! <a href="#findMoreContent">Find out more.</a></h1>
                    </div>
                </section>
                <section class="youtube-video">
                    <iframe src="https://www.youtube.com/embed/vzv7Xzjl5oc?si=qIstDZkkO61ouxAD" title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media;" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </section>
				<!-- Home banner end -->
				<!-- Home content -->
				<section class="home-content" id="findMoreContent">
					<div class="container">
						<div class="home-content-wrapper">
							<div class="home-content-contact">
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
							<div class="home-content-info">
								<div class="home-content-info-address">
									<h3 class="d-flex flex-column">
                                        London Zone Campuses
                                        <span class="d-block">Phone Number: 00000000000</span>
                                    </h3>
									<div class="home-content-info-items">
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>CROYDON CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>CROYDON CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>LEONARDO HOTEL, WELLESLEY RD CROYDON, CR0 9XY</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>SHIRLEY CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>SHIRLEY CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>ORCHARD PARK HIGH SCHOOL ORCHARD WAY SHIRLEY CR0 7NJ</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>KIDBROOKE CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>KIDBROOKE CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>THOMAS TALLIS SCHOOL, 154 KIDBROOKE PARK RD, LONDON SE3 9PX.</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>COVENTRY CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>COVENTRY CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>7 LAMB STREET, CVI 4AE COVENTRY.</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>BERKSHIRE CAMPUS SLOUGH</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>BERKSHIRE CAMPUS SLOUGH</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>DITTON PARK ACADEMY, KINGS REACH, SLOUGH SL3 7UX</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>NORTH LONDON CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>NORTH LONDON CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>SIXTH FORM BUILDING, CHRIST COLLEGE SECONDARY, EAST END RD, LONDON, N2 0SE</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>HAMPSHIRE CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>HAMPSHIRE CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>C BLOCK HALL WAVELL CAMPUS LEISURE, THE WAVELL SCHOOL LYNCHFORD ROAD, FARNBOROUGH, GU14 6BH HAMPSHIRE</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>PECKHAM CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>PECKHAM CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>NEWLANDS ACADEMY STUART RD, PECKHAM RYE, SE153AZ</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
									</div>
								</div>
								<div class="home-content-info-address">
									<h3 class="d-flex flex-column">
                                        UK Zone Campuses
                                        <span class="d-block">Phone Number: 00000000000</span>
                                    </h3>
									<div class="home-content-info-items">
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>BiRMINGHAM CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>BiRMINGHAM CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>369 City Edgbaston City Road, B16 0NB</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>MANCHESTER CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>MANCHESTER CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>The Albion Academy, London Street, salford, M6 6QT</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>DUBLIN CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>DUBLIN CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>Ringsend & Irishtown Community Centre, Thorncastle Street Dublin, D04 P4F3, Ireland</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>HUNTINGDON CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>HUNTINGDON CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>73 Bassenthwaite Huntingdon, PE29 6UN</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
										<div class="home-content-info-item">
											<a href="javascript:void(0);" class="home-content-info-item-trigger">
												<span>NEWCASTLE CAMPUS</span>
												<span>Details</span>
											</a>
											<div class="home-content-info-item-popups">
												<div class="home-content-info-item-popups-container">
													<div class="home-content-info-item-popups-header">
														<h5>NEWCASTLE CAMPUS</h5>
														<button type="button" role="button" class="home-content-info-item-popups-close">
															<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
															</svg>
														</button>
													</div>
													<div class="home-content-info-item-popups-body">
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
															<span>35  Friars Wharf, Gateshead Newcastle, NE10 0QX</span>
														</div>
														<!-- Each item -->
														<div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
															<span>Phone number not found</span>
														</div>
														<!-- Each item -->
													</div>
												</div>
											</div>
										</div>
										<!-- Each item -->
                                        <div class="home-content-info-item">
                                            <a href="javascript:void(0);" class="home-content-info-item-trigger">
                                                <span>Nottingham Campus</span>
                                                <span>Details</span>
                                            </a>
                                            <div class="home-content-info-item-popups">
                                                <div class="home-content-info-item-popups-container">
                                                    <div class="home-content-info-item-popups-header">
                                                        <h5>Nottingham Campus</h5>
                                                        <button type="button" role="button" class="home-content-info-item-popups-close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="home-content-info-item-popups-body">
                                                        <div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
																	<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
																</svg>
															</span>
                                                            <span>35  Friars Wharf, Gateshead Newcastle, NE10 0QX</span>
                                                        </div>
                                                        <!-- Each item -->
                                                        <div class="home-content-info-item-popups-item">
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
																</svg>
															</span>
                                                            <span>Phone number not found</span>
                                                        </div>
                                                        <!-- Each item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Each item -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Home content end -->
			</main>
			<!-- Main end -->
			<!-- Footer -->
			<?php include(dirname(__FILE__) . '/inc/footer.php'); ?>
			<!-- Footer end -->
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/common.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
				// 	responseBox.innerHTML = 'Please enter your name (at least 3 characters).';
				// 	return;
				// }

				if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
					responseBox.innerHTML = 'Please enter a valid email address.';
					return;
				}

				// if (mobile && !/^\d{11}$/.test(mobile)) {
				// 	responseBox.innerHTML = 'Please enter a valid 11-digit mobile number.';
				// 	return;
				// }

				// if (message.length < 10) {
				// 	responseBox.innerHTML = 'Please enter a message (at least 10 characters).';
				// 	return;
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