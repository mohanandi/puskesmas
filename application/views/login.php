<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Puskesmas Percontohan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/login.css">

</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url('<?= base_url('assets/') ?>images/bg-1.jpg')">
					<span class="login100-form-title-1">
						PUSKESMAS <span style="color: #16b3ac;"> PERCONTOHAN </span>
					</span>
					<span class="login100-form-title-1">
						LOGIN
					</span>
				</div>
				<?= $this->session->flashdata('message'); ?>
				<form class="login100-form validate-form" method="post" action="<?= base_url('auth'); ?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Kode</span>
						<input class="input100" type="text" name="kode" placeholder="Masukan Kode">
						<span class="focus-input100"></span>
					</div>
					<?= form_error('kode'); ?>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukan password">
						<span class="focus-input100"></span>
					</div>
					<?= form_error('kode'); ?>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ingat Saya
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Lupa Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


</body>

</html>