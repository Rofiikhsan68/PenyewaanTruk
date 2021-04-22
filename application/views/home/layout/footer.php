<!-- start footer Area -->
<footer class="footer-area section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>About Us</h6>
					<p>
						WeTrif merupakan bisnis yang bergerak dibidang fashion, kami mengedepankan barang - barang original dan berkualitas.
					</p>
				</div>
			</div>
			<div class="col-lg-4  col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Newsletter</h6>
					<p>Stay update with our latest</p>
					<div class="" id="mc_embed_signup">

						<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

							<div class="d-flex flex-row">

								<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


								<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>

								<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
							</div>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-3  col-md-6 col-sm-6">
				<div class="single-footer-widget mail-chimp">
					<h6 class="mb-20">Instragram Feed</h6>
					<ul class="instafeed d-flex flex-wrap">
						<!-- <li><img src="<?= base_url() ?>assets/img/i1.jpg" alt=""></li>
							<li><img src="<?= base_url() ?>assets/img/i2.jpg" alt=""></li>
							<li><img src="<?= base_url() ?>assets/img/i3.jpg" alt=""></li>
							<li><img src="<?= base_url() ?>assets/img/i4.jpg" alt=""></li>
							<li><img src="<?= base_url() ?>assets/img/i5.jpg" alt=""></li>
							<li><img src="<?= base_url() ?>assets/img/i6.jpg" alt=""></li>
							<li><img src="<?= base_url() ?>assets/img/i7.jpg" alt=""></li>
							<li><img src="<?= base_url() ?>assets/img/i8.jpg" alt=""></li> -->
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6>Follow Us</h6>
					<p>Let us be social</p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
			<p class="footer-text m-0">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved | WeTrif
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
		</div>
	</div>
</footer>
<!-- End footer Area -->

<script src="<?= base_url() ?>assets/home/js/vendor/jquery-2.2.4.min.js"></script>
<script src="<?= base_url()?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/home/js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/home/js/jquery.ajaxchimp.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/home/js/jquery.nice-select.min.js"></script> -->
<script src="<?= base_url() ?>assets/home/js/jquery.sticky.js"></script>
<script src="<?= base_url() ?>assets/home/js/nouislider.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/home/js/countdown.js"></script> -->
<script src="<?= base_url() ?>assets/home/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets/home/js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="<?= base_url() ?>assets/home/js/gmaps.min.js"></script>
<script src="<?= base_url() ?>assets/home/js/main.js"></script>
<script src="<?= base_url() ?>assets/home/js/alert.js"></script>
<script src="<?= base_url() ?>assets/home/js/cart.js"></script>
<script src="<?= base_url() ?>assets/home/js/toastr.js"></script>
<script src="<?= base_url() ?>assets/home/cart.js"></script>
<script src="<?= base_url() ?>assets/alert.js"></script>
<script src="<?= base_url() ?>assets/home/transaksi.js"></script>
<script src="<?= base_url(); ?>assets/admin/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    bsCustomFileInput.init();
  });
</script>

<script>
	pesan = document.getElementById('pesan');
	if (pesan != null) {
		swal({
			title: document.getElementById('title').innerHTML,
			text: pesan.innerHTML,
			icon: document.getElementById('type').innerHTML,
		});
	}
</script>
<script>
	var text_toastr = document.getElementById('text_toastr');
	if (text_toastr != null) {
		var type_toastr = document.getElementById('type_toastr').innerHTML;
		console.log(type_toastr);
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		if (type_toastr == "success") {

			toastr.success(text_toastr.innerHTML);
		} else {
			toastr.error(text_toastr.innerHTML);
		}
	}
</script>
</body>

</html>