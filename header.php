<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="https://gmpg.org/xfn/11">

			<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

			<!-- Bootstrap -->
			<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/new/css/bootstrap.min.css" />

			<!-- Font Awesome Icon -->
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/new/css/font-awesome.min.css">

			<!-- Custom stlylesheet -->
			<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/new/css/style.css" />

			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
				  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
				  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
				<![endif]-->


		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

			<!-- HEADER -->
			<header id="header">
				<!-- NAV -->
				<div id="nav">
					<!-- Top Nav -->
					<div id="nav-top">
						<div class="container">
							<!-- social -->
							<ul class="nav-social">
                                <?php
                                $linkFacebook = get_theme_mod('Facebook link');
                                if ( strlen($linkFacebook) > 0 ) {
                                    echo '<li><a href='.$linkFacebook.'><i class="fa fa-facebook"></i></a></li>';
                                }
                                $linkTwitter = get_theme_mod('Twitter link');
                                if ( strlen($linkTwitter) > 0 ) {
                                    echo '<li><a href='.$linkTwitter.'><i class="fa fa-twitter"></i></a></li>';
                                }
                                $linkGooglePlus = get_theme_mod('GooglePlusLink');
                                if ( strlen($linkGooglePlus) > 0 ) {
                                    echo '<li><a href='.$linkGooglePlus.'><i class="fa fa-google-plus"></i></a></li>';
                                }
                                $linkInstagram = get_theme_mod('Instagram Link');
                                if ( strlen($linkInstagram) > 0 ) {
                                    echo '<li><a href='.$linkInstagram.'><i class="fa fa-instagram"></i></a></li>';
                                }
                                ?>
							</ul>
							<!-- /social -->

							<!-- logo -->
							<div class="nav-logo">
								<div class="logo">
									<?php
										$custom_logo_id = get_theme_mod( 'custom_logo' );
										$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
										if ( has_custom_logo() ) {
											echo '<img src="'. esc_url( $logo[0] ) .'" alt="logo">';
										}
									?>
                                
                                </div>
							</div>

							<!-- search & aside toggle -->
							<div class="nav-btns">
								<button class="aside-btn"><i class="fa fa-bars"></i></button>
								<button class="search-btn"><i class="fa fa-search"></i></button>
								<div id="nav-search">
									<form>
										<input class="input" name="search" placeholder="Enter your search...">
									</form>
									<button class="nav-close search-close">
										<span></span>
									</button>
								</div>
							</div>
							<!-- /search & aside toggle -->
						</div>
					</div>
					<!-- /Top Nav -->

					<!-- Main Nav -->
					<div id="nav-bottom">
						<div class="container">
							<!-- nav -->
							<ul class="nav-menu">
								<li class="has-dropdown">
									<a href="index.html">Home</a>
									<div class="dropdown">
										<div class="dropdown-body">
											<?php
												wp_nav_menu(
													array(
														'menu' => 'primary',
														'container' => '',
														'theme_location' => 'primary',
														'items_wrap' => '<ul id="" class="dropdown-list">%3$s</ul>'
													)
												);
											?>
										</div>
									</div>
								</li>
								<li class="has-dropdown megamenu">
									<a href="#">Lifestyle</a>
									<div class="dropdown tab-dropdown">
										<div class="row">
											<div class="col-md-2">
												<ul class="tab-nav">
													<li class="active"><a data-toggle="tab" href="#tab1">Lifestyle</a></li>
													<li><a data-toggle="tab" href="#tab2">Fashion</a></li>
													<li><a data-toggle="tab" href="#tab1">Health</a></li>
													<li><a data-toggle="tab" href="#tab2">Travel</a></li>
												</ul>
											</div>
											<div class="col-md-10">
												<div class="dropdown-body tab-content">
													<!-- tab1 -->
													<div id="tab1" class="tab-pane fade in active">
														<div class="row">
															<!-- post -->
															<div class="col-md-4">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a href="category.html">Travel</a>
																		</div>
																		<h3 class="post-title title-sm"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
																		<ul class="post-meta">
																			<li><a href="author.html">John Doe</a></li>
																			<li>20 April 2018</li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->

															<!-- post -->
															<div class="col-md-4">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a href="category.html">Travel</a>
																			<a href="category.html">Lifestyle</a>
																		</div>
																		<h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
																		<ul class="post-meta">
																			<li><a href="author.html">John Doe</a></li>
																			<li>20 April 2018</li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->

															<!-- post -->
															<div class="col-md-4">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a href="category.html">Lifestyle</a>
																		</div>
																		<h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
																		<ul class="post-meta">
																			<li><a href="author.html">John Doe</a></li>
																			<li>20 April 2018</li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
														</div>
													</div>
													<!-- /tab1 -->

													<!-- tab2 -->
													<div id="tab2" class="tab-pane fade in">
														<div class="row">
															<!-- post -->
															<div class="col-md-4">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a href="category.html">Lifestyle</a>
																		</div>
																		<h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
																		<ul class="post-meta">
																			<li><a href="author.html">John Doe</a></li>
																			<li>20 April 2018</li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->

															<!-- post -->
															<div class="col-md-4">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a href="category.html">Fashion</a>
																			<a href="category.html">Lifestyle</a>
																		</div>
																		<h3 class="post-title title-sm"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
																		<ul class="post-meta">
																			<li><a href="author.html">John Doe</a></li>
																			<li>20 April 2018</li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->

															<!-- post -->
															<div class="col-md-4">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a href="category.html">Lifestyle</a>
																		</div>
																		<h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
																		<ul class="post-meta">
																			<li><a href="author.html">John Doe</a></li>
																			<li>20 April 2018</li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
														</div>
													</div>
													<!-- /tab2 -->

													<!-- /tab3 tab4 .. -->
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="has-dropdown megamenu">
									<a href="#">Fashion</a>
									<div class="dropdown">
										<div class="dropdown-body">
											<div class="row">
												<div class="col-md-3">
													<h4 class="dropdown-heading">Categories</h4>
													<ul class="dropdown-list">
														<li><a href="#">Lifestyle</a></li>
														<li><a href="#">Fashion</a></li>
														<li><a href="#">Technology</a></li>
														<li><a href="#">Health</a></li>
														<li><a href="#">Travel</a></li>
													</ul>
												</div>
												<div class="col-md-3">
													<h4 class="dropdown-heading">Lifestyle</h4>
													<ul class="dropdown-list">
														<li><a href="#">Lifestyle</a></li>
														<li><a href="#">Fashion</a></li>
														<li><a href="#">Health</a></li>
													</ul>
													<h4 class="dropdown-heading">Technology</h4>
													<ul class="dropdown-list">
														<li><a href="#">Lifestyle</a></li>
														<li><a href="#">Travel</a></li>
													</ul>
												</div>
												<div class="col-md-3">
													<h4 class="dropdown-heading">Fashion</h4>
													<ul class="dropdown-list">
														<li><a href="#">Fashion</a></li>
														<li><a href="#">Technology</a></li>
													</ul>
													<h4 class="dropdown-heading">Travel</h4>
													<ul class="dropdown-list">
														<li><a href="#">Lifestyle</a></li>
														<li><a href="#">Healtth</a></li>
														<li><a href="#">Fashion</a></li>
													</ul>
												</div>
												<div class="col-md-3">
													<h4 class="dropdown-heading">Health</h4>
													<ul class="dropdown-list">
														<li><a href="#">Technology</a></li>
														<li><a href="#">Fashion</a></li>
														<li><a href="#">Health</a></li>
														<li><a href="#">Travel</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</li>
								<?php
									$categories = get_categories();
									foreach($categories as $category) {
										echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<span>'.'</span></a></li>';
									}
								?>
							</ul>
							<!-- /nav -->
						</div>
					</div>
					<!-- /Main Nav -->

					<!-- Aside Nav -->
					<div id="nav-aside">
						<ul class="nav-aside-menu">
							<li><a href="index.html">Home</a></li>
							<li class="has-dropdown"><a>Categories</a>
								<ul class="dropdown">
									<li><a href="#">Lifestyle</a></li>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Technology</a></li>
									<li><a href="#">Travel</a></li>
									<li><a href="#">Health</a></li>
								</ul>
							</li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contacts</a></li>
							<li><a href="#">Advertise</a></li>
						</ul>
						<button class="nav-close nav-aside-close"><span></span></button>
					</div>
					<!-- /Aside Nav -->
				</div>
				<!-- /NAV -->
			</header>
			<!-- /HEADER -->
		<?php
