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
$header_menu_id = get_menu_id( 'primary' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open();?>
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
                                <a class="logo" href="<?php
									if (!is_home()) {
										echo get_option('home');
									}
									else {
									    echo '#';
                                    }
									?>/">
									<?php
										$custom_logo_id = get_theme_mod( 'custom_logo' );
										$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
										if ( has_custom_logo() ) {
											echo '<img src="'. esc_url( $logo[0] ) .'" alt="logo">';
										}
									?>
                                
                                </a>
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
					<div class="container">
                        <ul class="nav-menu">
							<?php
								if ( ! empty( $header_menus ) && is_array( $header_menus ) ) {
									?>
										<?php
											foreach ( $header_menus as $menu_item ) {
												if ( ! $menu_item->menu_item_parent ) {
													
													$child_menu_items = get_child_menu_items( $header_menus, $menu_item->ID );
													$has_children = ! empty( $child_menu_items ) && is_array( $child_menu_items );
													$has_sub_menu_class = ! empty( $has_children ) ? 'has-submenu' : '';
													
													if ( ! $has_children ) {
														?>
                                                        <li>
                                                            <a href="<?php echo esc_url( $menu_item->url ); ?>">
																<?php echo esc_html( $menu_item->title ); ?>
                                                            </a>
                                                        </li>
														<?php
													} else {
														?>
                                                        <li class="has-dropdown">
                                                            <a href="<?php echo esc_url( $menu_item->url ); ?>">
																<?php echo esc_html( $menu_item->title ); ?>
                                                            </a>
                                                            <div class="dropdown">
                                                                <div class="dropdown-body">
                                                                    <ul class="dropdown-list">
				                                                        <?php
					                                                        foreach ($child_menu_items as $child_menu_item) {
						                                                        ?>
                                                                                <li>
                                                                                    <a class="dropdown-item"
                                                                                       href="<?php echo esc_url($child_menu_item->url); ?>">
								                                                        <?php echo $child_menu_item->title ?>
                                                                                    </a>
                                                                                </li>
						                                                        <?php
					                                                        }
				                                                        ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
														<?php
													}
													?>
													<?php
												}
											}
										?>
									<?php
								}
							?>
                        </ul>
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
