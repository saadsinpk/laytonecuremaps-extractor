<!DOCTYPE html>

<html lang="en">
	
	<head>
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		
		
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		
	</head>
	
	
	<body id="kt_body" class="bg-body">
		
		<div class="d-flex flex-column flex-root">
			
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sigma-1/14.png">
				
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						

                        <x-auth-card>
                            <x-slot name="logo">
                            </x-slot>
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="fv-row mb-10">
                                    <x-label class="form-label fs-6 fw-bolder text-dark" for="email" :value="__('Email')" />
                                    <x-input class="form-control form-control-lg form-control-solid" type="email" id="email" name="email" :value="old('email')" required autofocus />
                                </div>
                                <div class="fv-row mb-10">
                                    <div class="d-flex flex-stack mb-2">
                                        <x-label class="form-label fw-bolder text-dark fs-6 mb-0" for="password" :value="__('Password')" />
                                        @if (Route::has('password.request'))
                                        <a class="link-primary fs-6 fw-bolder" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    </div>
                                    <x-input class="form-control form-control-lg form-control-solid"  id="password" type="password" name="password" required autocomplete="current-password"  />
                                </div>
                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                            <span class="indicator-label">Continue</span>
                                        </button>
                                </div>
                            </form>
                        </x-auth-card>
						
					</div>
					
				</div>
				
				
				
			</div>
			
		</div>
		
		<script>var hostUrl = "assets/";</script>
		
		
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		
		
		<script src="assets/js/custom/authentication/sign-in/general.js"></script>
		
		
	</body>
	
</html>