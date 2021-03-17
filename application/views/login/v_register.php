
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb banner-bg">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1 class="color-black">Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a class="color-black" href="">Home<span class="lnr lnr-arrow-right"></span></a>
						<a class="color-black" href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url() ?>assets/home/img/login.jpg" alt="">
						<div class="hover">
							<h4>Sudah Punya Akun ?</h4>
							<p>Silahkan Login untuk melakukan penyewaan !</p>
							<a class="primary-btn" href="<?= base_url() ?>login/">Log in</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Form Register</h3>
						<form class="row login_form" action="<?= base_url() ?>register/processRegister" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password" onfocus="this.placeholder = 'Konfirmasi Password'" onblur="this.placeholder = 'Konfirmasi Password'">
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Daftar</button>
								<!-- <a href="#">Forgot Password?</a> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->