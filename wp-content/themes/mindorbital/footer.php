<!--   Footer area Start-->
<div class="overflow-hidden d-flex flex-column">
	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-one">
						<div class="footer-add">
							<?php
							if (is_active_sidebar("footer-1")) {
								dynamic_sidebar("footer-1");
							}
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-two">
						<div class="footer-page">
							<?php
							if (is_active_sidebar("footer-2")) {
								dynamic_sidebar("footer-2");
							}
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-three">
						<div class="footer-follow">
							<?php
							if (is_active_sidebar("footer-3")) {
								dynamic_sidebar("footer-3");
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<hr class="color-white">
			<div class="footer-bottom text-center">
				<?php
				if (is_active_sidebar("footer-bottom")) {
					dynamic_sidebar("footer-bottom");
				}
				?>
			</div>
			<div class="footer-shape-1"></div>
			<div class="footer-shape-2"></div>
			<div class="footer-shape-3"></div>
		</div>
		<div class="go-top">
			<i class="fa-sharp fa-solid fa-arrow-up"></i>
		</div>
	</footer>
</div>

<!--   Footer area End-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/asset/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>