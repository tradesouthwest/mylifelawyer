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
									<li class="">
										<a href="https://www.tiktok.com/@affordablelawyer" title="tiktok" class="tiktoklink">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg><!--<i class="fa fa-tiktok tiktokicon"></i>-->
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/@affordablelawyer" title="youtube">
											<i class="fa fa-youtube"></i>
										</a>
									</li>
									
								</ul>
								
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->