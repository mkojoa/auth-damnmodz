<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="rounded10 shadow-lg auth-box" >
							<div class="content-top-agile p-20 pb-0">
                            <img src="{{ asset('images/damnmodz-logo.webp') }}" alt="Logo">

								<p class="mb-0">Sign in to continue</p>							
							</div>
							<div class="p-40">
                            <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <div class="input-group mb-3">
            <span class="input-group-text bg-transparent"><i class="ti-email text-white"></i></span>
            <input id="email" type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="input-group mb-3">
            <span class="input-group-text  bg-transparent"><i class="ti-lock text-white"></i></span>
            <input id="password" placeholder="Enter password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
        <div class="row">
        <div class="col-6">
            <div class="checkbox">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
            </div>
        </div>
       
        <div class="col-6">
            <div class="text-end">
            @if (Route::has('password.request'))
                <a class="text-white" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            </div>
        </div>
       
        <div class="col-12 text-center mt-2">
            <button style="width: 100%" type="submit" class="btn btn-primary mt-10">
            {{ __('Login') }}
            </button>
        </div>
       
        </div>
</form>	
                          
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>




