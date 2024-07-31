<?php 
	$hs_above_footer					= get_theme_mod('hs_above_footer', '1');
	$footer_get_in_touch_icon 			= get_theme_mod( 'footer_get_in_touch_icon','fa-phone');
	$footer_get_in_touch_title 			= get_theme_mod( 'footer_get_in_touch_title','Call Us'); 
	$footer_get_in_touch_number 		= get_theme_mod( 'footer_get_in_touch_number','+91 1234 567 890'); 		
	
	$footer_office_hours_icon 					= get_theme_mod( 'footer_office_hours_icon','fa-clock-o'); 
	$footer_office_hours_title 				= get_theme_mod( 'footer_office_hours_title','Working Hours'); 
	$footer_office_hours 						= get_theme_mod( 'footer_office_hours','Mon To Sat 10AM To 7PM Sunday close');
	
	$footer_contct_icon 				= get_theme_mod( 'footer_contct_icon','fa-map-marker');
	$footer_address_title 				= get_theme_mod( 'footer_address_title','Office Address'); 
	$footer_contact_address 			= get_theme_mod( 'footer_contact_address','1242, Fall ST,San Francisco California');
?>
	 <!-- footer section -->
    <footer class="footer-section">
        <div class="footer-top">
            <div class="container">
				<?php if($hs_above_footer=='1'){ ?>
					<div class="row">
						<?php if(!empty($footer_get_in_touch_number) || !empty($footer_get_in_touch_title)): ?>	
						<div class="col-lg-4">
							<div class="widget-contact">
								<div class="contact-info">
									<div class="contact-icon">
										<i class="fa <?php echo esc_attr($footer_get_in_touch_icon); ?>"></i>
									</div>
									<div class="contact-us">
										<span>
											<?php echo esc_html($footer_get_in_touch_title); ?>
										</span>
										<a href="tel:<?php echo esc_attr(str_replace(' ','',$footer_get_in_touch_number)); ?>">
											<?php echo esc_html($footer_get_in_touch_number); ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
					
					<?php if(!empty($footer_contact_address) || !empty($footer_address_title)): ?>	
						<div class="col-lg-4">
							<div class="widget-contact">
								<div class="contact-info">
									<div class="contact-icon">
										<i class="fa <?php echo esc_attr($footer_contct_icon); ?>"></i>
									</div>
									<div class="contact-us">
										<span>
											<?php echo esc_html($footer_address_title); ?>
										</span>
										<a href="#">
											<?php echo esc_html($footer_contact_address); ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
					
					<?php if(!empty($footer_office_hours) || !empty($footer_office_hours_title)): ?>	
						<div class="col-lg-4">
							<div class="widget-contact">
								<div class="contact-info">
									<div class="contact-icon">
										<i class="fa <?php echo esc_attr($footer_office_hours_icon); ?>"></i>
									</div>
									<div class="contact-us">
										<span>
											<?php echo esc_html($footer_office_hours_title); ?>
										</span>
										<a href="#">
											<?php echo esc_html($footer_office_hours); ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
							
						
					</div>
				<?php } ?>
            </div>
        </div>
		
		
        <div class="footer-main">
            <div class="container">
                <?php if ( is_active_sidebar( 'artech-footer-layout-first' ) ) : ?>
					<div class="row">
						<?php dynamic_sidebar( 'artech-footer-layout-first'); ?>
					</div>
				<?php endif; ?>
            </div>
        </div>
		<div class="footer-logo">
            <div class="container">
                <p class="logo-image">
					<img src="https://dev.mylifelawyer.com/wp-content/uploads/2024/07/LesterLawLogoWhite.png" alt="Lester Law"/>
				</p>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
				<div class="copyright-tagline" style="color:#eee;">
							<a href="/contact" title="contact">Contact</a>&nbsp; •  &nbsp;<a href="/disclaimer" title="disclaimer">Disclaimer</a>&nbsp; •  &nbsp;<a href="/office-policy" title="office-policy">Policies</a><br>
					<h5>Affordable Lawyer in Denver Colorado | Family Law</h5>
						</div>
                <p class="copyright-text">
					<?php do_action('artech_footer_group_third');	?>
				</p>
            </div>
        </div>
    </footer>
	
	<!-- ScrollUp -->
	 <?php 
		$hs_scroller 	= get_theme_mod('hs_scroller','1');	
		if($hs_scroller == '1') :
	?>
		<!-- scroll-top -->
    <button type="button" class="scrollingUp scroll-btn" aria-label="scrollingUp"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
	<?php endif; ?>	

<?php 	
wp_footer(); ?>
<!-- START Smith.ai Lester Law Chat -->
    <script type="text/javascript">
      window.SMITH={},window.SMITH.smithChatAccount="5e683dde-5478-4233-8e76-e8cc32862436"; var script=document.createElement("script"); script.async=!0, script.type="text/javascript",script.src="https://app.smith.ai/chat/widget-latest.js",document.getElementsByTagName("HEAD").item(0).appendChild(script);
    </script>
    <!-- END Smith.ai Lester Law Chat -->
</body>
</html>