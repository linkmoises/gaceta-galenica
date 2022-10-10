<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); }  ?>
<?php get_header(); ?>

    <!-- Content
    ============================================= -->
		<section id="content">
			<div class="content-wrap flex-column d-flex min-vh-100 align-items-center pb-0">
				<div class="container clearfix">

					<div class="row justify-content-center mb-6">
						<div class="col-xl-6 col-lg-8 text-center">
							<h3 class="display-4 fw-bold mb-4">Galería de Arte</h3>
							<p>Cada número de la Gaceta Galénica y sección del sitio web se encuentra engalanada por una pintura perteneciente al vanguardismo y al postmodernismo. En esta sección recopilamos todas estas obras.</p>
						</div>
					</div>

				</div>

        <!-- Grid row -->
        <div class="card-columns" data-lightbox="gallery">

          <a href="<?php bloginfo('url'); ?>/images/1952-pollock-convergence.jpg" data-lightbox="gallery-item" title="1952 - Pollock - Convergence">
            <img class="img-fluid mb-4 h-op-09 op-ts" src="<?php bloginfo('url'); ?>/images/1952-pollock-convergence.jpg" alt="1952 - Pollock - Convergence">
          </a>
          <a href="<?php bloginfo('url'); ?>/images/1951-pollock-number-2.jpg" data-lightbox="gallery-item" title="1951 - Pollock - Number 2">
            <img class="img-fluid mb-4 h-op-09 op-ts" src="<?php bloginfo('url'); ?>/images/1951-pollock-number-2.jpg" alt="1951 - Pollock - Number 2">
          </a>
          <a href="<?php bloginfo('url'); ?>/images/1937-picasso-guernica.jpg" data-lightbox="gallery-item" title="1937 - Picasso - Guernica">
            <img class="img-fluid mb-4 h-op-09 op-ts" src="<?php bloginfo('url'); ?>/images/1937-picasso-guernica.jpg" alt="1937 - Picasso - Guernica">
          </a>
          <a href="<?php bloginfo('url'); ?>/images/1949-pollock-number-16.jpg" data-lightbox="gallery-item" title="1949 - Pollock - Number 16">
            <img class="img-fluid mb-4 h-op-09 op-ts" src="<?php bloginfo('url'); ?>/images/1949-pollock-number-16.jpg" alt="1949 - Pollock - Number 16">
          </a>

        </div>
        <!-- Grid row -->

			</div>
		</section><!-- #content end -->

<?php get_footer(); ?>
