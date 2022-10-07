<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); }  ?>
<?php get_header(); ?>

    <!-- Document Wrapper
  	============================================= -->
  	<div id="wrapper" class="clearfix">

  		<!-- Content
  		============================================= -->
  		<section id="content">
  			<div class="content-wrap py-0">

  				<div class="row align-items-stretch justify-content-between block-contact-1 g-0">

  					<div class="col-md-6" data-animate="fadeInLeft fast">
  						<div class="dark h-100 min-vh-md-100 d-flex flex-column justify-content-between p-5" style="background: url('images/1949-pollock-number-16.jpg') center center /cover"></div>
  					</div>

  					<div class="col-md-6 p-5 px-lg-6 d-flex flex-column align-self-center">
  						<div class="form-widget">

  							<div class="form-result"></div>

  							<form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

  								<div class="form-process">
  									<div class="css3-spinner">
  										<div class="css3-spinner-scaler"></div>
  									</div>
  								</div>

  								<div class="row">
  									<div class="col-md-6 form-group mb-5">
  										<label for="template-contactform-name">Name: <small class="text-danger">*</small></label>
  										<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="form-control required" placeholder="John Doe" />
  									</div>

  									<div class="col-md-6 form-group mb-5">
  										<label for="template-contactform-phone">Phone: <small class="text-danger">*</small></label>
  										<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="form-control required" placeholder="+00 111 232 11 33" />
  									</div>

  									<div class="w-100"></div>

  									<div class="col-12 form-group mb-5">
  										<label for="template-contactform-email">Email Address: <small class="text-danger">*</small></label>
  										<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email form-control" placeholder="johndoe@unknown.com" />
  									</div>

  									<div class="w-100"></div>

  									<div class="col-12 form-group mb-5">
  										<label for="template-contactform-message">Message: <small class="text-danger">*</small></label>
  										<textarea class="required form-control" id="template-contactform-message" name="template-contactform-message" rows="3" placeholder="Write your message here..."></textarea>
  									</div>

  									<div class="col-12 form-group mb-5 d-none">
  										<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control" />
  									</div>

  									<div class="col-12 form-group mb-0">
  										<button class="button button-large rounded m-0 float-end py-3 px-5" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit" style="background-color: #3D1144;">Send Message</button>
  									</div>
  								</div>

  								<input type="hidden" name="prefix" value="template-contactform-">

  							</form>
  						</div>
  					</div>

  				</div>

  			</div>
  		</section><!-- #content end -->


  	</div><!-- #wrapper end -->

<?php get_footer(); ?>
