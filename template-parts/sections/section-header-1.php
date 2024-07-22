<!--===// Start: Preloader
=================================-->
<?php
$hide_show_social_icon 		= get_theme_mod( 'hide_show_social_icon','1'); 

$hide_show_email_details 	= get_theme_mod( 'hide_show_email_details','1');
$tlh_email_icon 			= get_theme_mod( 'tlh_email_icon','fas fa-envelope');						
$tlh_email 					= get_theme_mod( 'tlh_email','email@company.com');

$hide_show_cntct_details 	= get_theme_mod( 'hide_show_cntct_details','1'); 
$tlh_contct_icon 			= get_theme_mod( 'tlh_contct_icon','fa-map-marker');
$tlh_contact_address 		= get_theme_mod( 'tlh_contact_address','25 N Grant Street, Laxington');

do_action('artech_preloader'); 
?>
<!--===// End: Preloader ==================================-->
<!-- Header Start -->
<header class="header-main">
    <div class="topbar"> <!--topbar start-->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="widget-header">
                        <?php if ($hide_show_email_details == '1' && !empty($tlh_email)): ?>
                            <div class="widget-contact">
                                <div class="contact-info">
                                    <div class="contact-icon widget-social">
										<ul>
											<li>
												<a href="#">
													<i class="fa <?php echo esc_attr($tlh_email_icon); ?>"></i>
												</a>
											</li>
										</ul>
									</div>
                                    <div class="contact-info">
                                        <a href="mailto:<?php echo esc_attr($tlh_email); ?>"><?php echo esc_html($tlh_email); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($hide_show_cntct_details == '1' && !empty($tlh_contact_address)): ?>
                            <div class="widget-contact">
                                <div class="contact-info">
                                    <div class="contact-icon widget-social">
										<ul>
											<li>
												<a href="#">
													<i class="fa <?php echo esc_attr($tlh_contct_icon); ?>"></i>
												</a>
											</li>
										</ul>
                                    </div>
                                    <div class="contact-info">
                                        <a href="#"><?php echo esc_html($tlh_contact_address); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="widget-header">
                        <?php if ($hide_show_social_icon == '1') : ?>
                            <div class="widget-social">
                                <?php do_action('artech_abv_hdr_social'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--topbar end-->

    <div class="menu-bar <?php echo esc_attr(artech_sticky_menu()); ?>"> <!--menu-bar-->
        <div class="container">
            <div class="menubar-inner">
                <div class="logo">
                    <?php do_action('artech_logo_content'); ?>
                </div>
                <div class="menubar_bg">
                    <nav class="navbar navbar-expand-lg">
                        <button class="btn-bars d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar" aria-controls="navbar" aria-label="button toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar" aria-labelledby="navbarLabel">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            <div class="offcanvas-body">
                                <?php do_action('artech_primary_navigation'); ?>
                            </div>
                        </div>
                    </nav>
                    <div class="right-menu">
                        <ul>
                            <?php do_action('artech_navigation_cart'); ?>
                            <li>
								<?php
								$hide_show_search = get_theme_mod('hide_show_search', '1');
								if ($hide_show_search == '1') :
								?>
								<ul class="social-media-links nav navbar-nav navbar-right">
									<li>
										<a href="http://www.facebook.com/msLaurenLester" title="facebook">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/MsLaurenLester" title="instagram">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="http://www.linkedin.com/in/MsLaurenLester" title="linkedin">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/MsLaurenLester" title="youtube">
											<i class="fa fa-youtube"></i>
										</a>
									</li>
									<li>
										<a href="https://www.tiktok.com/MsLaurenLester" title="tiktok">
											<i class="fa-brand fa-tiktok"></i>
										</a>
									</li>
								</ul>
									<!--<a href="#" aria-label="<?php echo esc_attr__('search', 'artech'); ?>" data-bs-toggle="modal" data-bs-target="#search">
										<i class="fa fa-search"></i>
									</a>-->
								<?php endif; ?>

								<div class="modal fade" id="search">
									<div class="modal-dialog modal-fullscreen">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
											</div>
											<?php
											$hide_show_search = get_theme_mod('hide_show_search', '1');
											if ($hide_show_search == '1') :
											?>

												<div class="modal-body">
													<div class="header-search">
														<form method="get" class="search-form" action="#" aria-label="<?php echo esc_attr__('Search', 'artech'); ?>">
															<div>
																<input type="search" class="form-control" placeholder="<?php echo esc_attr__('Search', 'artech'); ?>" name="s">
																<button type="submit" class="submit-search"><i class="fa fa-search"></i></button>
															</div>
														</form>
													</div>
												</div>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</li>

                            <?php
                            $tlh_btn_lbl = get_theme_mod('tlh_btn_lbl', 'Buy Now');
                            $tlh_btn_link = get_theme_mod('tlh_btn_link', '#');
                            if (!empty($tlh_btn_lbl)) :
                            ?>
                                <li>
                                    <a href="<?php echo esc_url($tlh_btn_link); ?>" class="btn_main" aria-label="book now button"><?php echo esc_html($tlh_btn_lbl); ?></a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->