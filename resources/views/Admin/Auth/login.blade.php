<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Login </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('Back/img/favicon.ico')}}">

    <!-- Template -->
    <link rel="stylesheet" href="{{asset('Back/graindashboard/css/graindashboard.css')}}">
  </head>

  <body class="">

    <main class="main">

      <div class="content">

			<div class="container-fluid pb-5">

				<div class="row justify-content-md-center">
					<div class="card-wrapper col-12 col-md-4 mt-5">
						<div class="brand text-center mb-3">
							<a href="/"><img src="{{asset('Back/img/logo.png')}}"></a>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Login Admin</h4>
								<form action="{{ route('postlogin') }}" method="POST">
									
									@csrf

									<div class="form-group">
										<label for="email">E-Mail Address</label>
										<input  type="email" class="form-control" name="email" required>
										@if ($errors->has('email'))
										<span class="text-danger">{{ $errors->first('email') }}</span>
										@endif
									</div>
									

									<div class="form-group">
										<label for="password">Password
										</label>
										<input type="password" class="form-control" name="password" required>
										@if ($errors->has('password'))
										<span class="text-danger">{{ $errors->first('password') }}</span>
										@endif
									</div>			  
									
							

									<div class="form-group">
										<div class="form-check position-relative mb-2">
										  <input type="checkbox" class="form-check-input d-none" id="remember" name="remember">
										  <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember"
												 data-icon="&#xe936">Remember Me</label>
										</div>
									</div>

									<div class="form-group no-margin">
										<button type="submit" class="btn btn-primary btn-block">
											Sign In
										</button>
									</div>
									
								</form>
							</div>
						</div>
						
					</div>
				</div>



			</div>

      </div>
    </main>

	<script src="{{asset('Back/graindashboard/js/graindashboard.js')}}"></script>
    <script src="{{asset('Back/graindashboard/js/graindashboard.vendor.js')}}"></script>
  </body>
</html>