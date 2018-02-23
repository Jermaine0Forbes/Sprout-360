<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container p-3 p-md-5">
			<div class="row footer-block block-1">
                <div class=" col-md-12 col-lg-4">
                    <?php echo '<a class="logo" href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                    <div class="w-100"></div>
                    <p class="summary">
                        Lorem ipsum dolor amet hashtag vinyl kickstarter, raw denim pinterest biodiesel jianbing snackwave copper mug
                    </p>

					<p class="phone-links">
						<a href="#"><strong>US & CAN</strong>: 1-800-867-5309</a>
						<a href="#"><strong>Worldwide</strong>: 1-800-867-5309</a>
					</p>
<!--                    <div class="w-100"></div>-->
                </div>
                <div class="col-md-12 col-lg-8 ">
                    <div class="row">
                        <div class="col-md-3">
                        <h4 >learn more</h4>
                        <ul>
                            <li><a href="#">how it works?</a></li>
                            <li><a href="#">meeting tools</a></li>
                            <li><a href="#">pricing</a></li>
                            <li><a href="#">sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 >support</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">contact us</a></li>
                            <li><a href="#">bellhook plugin</a></li>
                            <li><a href="#">phone contacts</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 >about us</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">careers</a></li>
                            <li><a href="#">terms and service</a></li>
                            <li><a href="#">private policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <a class="btn" href="#">try it free</a>
						<div class="social-links">
							<a href="#" ><span class="fa fa-facebook"></span></a>
							<a href="#" ><span class="fa fa-linkedin"></span></a>
							<a href="#" ><span class="fa fa-youtube"></span></a>
							<a href="#" ><span class="fa fa-twitter"></span></a>
						</div>
                    </div>
                    
                    
                    </div>
                    

                </div>
			</div>
			<div class="row  footer-block block-2 ">
                <div class="site-info border-top w-100 py-2">
                    &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                    <span class="sep"> | </span>
                    <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="Wordpress Technical Support" alt="Bootstrap Wordpress Theme"><?php echo esc_html__('Bootstrap Wordpress Theme','wp-bootstrap-starter'); ?></a>

                </div><!-- close .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
