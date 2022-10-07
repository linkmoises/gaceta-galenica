<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); }  ?>
<?php get_header(); ?>

    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element swiper_wrapper border-top border-light min-vh-100" data-grab="false">
      <div class="slider-inner">

        <div class="swiper-container swiper-parent">
          <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="row justify-content-center align-items-center g-0 h-100">

                <div class="col-md-6 h-100" data-animate="fadeInLeft fast" style="background: url('images/1952-pollock-convergence.jpg') center center /cover; min-height: 360px;">
                  <!-- <div class="d-flex align-items-center">
                    <div class="slider-arrow-left slider-arrows"><i class="icon-angle-left"></i></div>
                    <div class="slider-arrow-right slider-arrows"><i class="icon-angle-right"></i></div>
                  </div> -->
                </div>

                <div class="col-md-6 mt-5 mt-md-0">
                  <div class="px-5">
                    <div class="heading-block border-bottom-0 mb-4">
                      <h5 class="mb-2 fw-normal text-black-50 text-uppercase ls3" data-animate="fadeInUp">27 Septiembre 2022</h5>
                      <h2 class="fw-bold ls0 nott font-secondary" data-animate="fadeInUp">Vol. 1 No. 1</h2>
                    </div>

                    <p data-animate="fadeInUp">Este es el primer número del boletín científico, la Gaceta Galénica, a cargo de la Coordinación de Docencia de la Policlínica Lic. Manuel María Valdés. En este número hablamos un poco sobre Manuel María Valdés, gestor  y fundador de la Caja de Seguro Social y también su primer director. Como tema central tenemos una revisión sobre fibrilación auricular a la luz de la evidencia actual.</p>

                    <div class="bottommargin-sm d-flex align-items-center" data-animate="fadeInUp">
                      <a href="static/gacetagalenica-V01N01.pdf"><button type="button" class="btn btn-success btn-lg btn3d"><i class="icon-download"></i> Descargar</button></a>
                      <h5 class="mb-0 ms-4 fw-normal">Autores: <a href="#" class="fw-semibold">Moisés Serrano Samudio</a></h5>
                    </div>
                  </div>

                  <div class="ms-5 mt-4" data-animate="fadeInUp">
                    <div class="heading-block border-bottom-0 mb-4">
                      <h3 class="fw-bold ls0 nott font-secondary" data-animate="fadeInUp">Números anteriores</h3>
                    </div>
                    <div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="20"  data-autowidth="true" data-nav="true" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-lg="4" data-items-xl="4">
                      <a href="static/gacetagalenica-V01N01.pdf"><img src="images/gacetagalenica-V01N01.jpg" alt="Vol. 1 No. 1"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide-bg" style="background: linear-gradient(to right, rgba(255,255,255,0.75), rgba(255,255,255,1)), url('images/1952-pollock-convergence.jpg') center center /cover;"></div>
            </div>

          </div>
        </div>

      </div>
    </section>

<?php get_footer(); ?>
