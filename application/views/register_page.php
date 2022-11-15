<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap-5.2.2-dist/css/bootstrap.css">
	<style>
		:root {
			--style-primary: #FAFF00;
			--style-600: 600;
		}

		body {
			background-size: cover;
			background-image: url("<?php echo base_url() ?>assets/image/background-login.jpg");
		}
	</style>
</head>

<body>
	<section class="vh-100">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-10 col-lg-8 col-xl-6">
					<div class="card shadow-2-strong" style="border-top: .2em solid var(--style-primary);">
						<div class="card-body p-4 text-center">
							<form>
								<h1 class="h3 mb-3" style="font-weight: var(--style-600);">Register</h1>
								<div class="row my-3">
									<div class="col-md-6">
										<div class="form-floating">
											<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
											<label for="floatingInput">Name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-floating">
											<input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
											<label for="floatingInput">Username</label>
										</div>
									</div>
								</div>
								<div class="form-floating my-3">
									<input type="text" class="form-control" id="floatingInput" placeholder="Password">
									<label for="floatingInput">Phone Number</label>
								</div>
								<div class="form-floating my-3">
									<input type="text" class="form-control" id="floatingInput" placeholder="Password">
									<label for="floatingInput">Address</label>
								</div>
								<div class="row my-3">
									<div class="col-md-6">
										<div class="form-floating">
											<input type="password" class="form-control" id="floatingInput" placeholder="name@example.com">
											<label for="floatingPassword">Password</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class=" form-floating">
											<input type="password" class="form-control" id="floatingInput" placeholder="name@example.com">
											<label for="floatingPassword">Password Confirmation</label>
										</div>
									</div>
								</div>

								<!-- Button Register -->
								<button class="w-75 btn btn-lg fw-normal" type="submit" style="background-color: var(--style-primary);">Register</button>
								<p class="mt-2 mb-3 text-muted">Alredy have account? <a style="font-weight: var(--style-600)">Login</a></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</main>

</body>

</html>