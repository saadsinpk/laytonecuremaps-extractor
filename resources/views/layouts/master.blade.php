<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta
			name="description"
			content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free."
		/>
		<meta
			name="keywords"
			content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon"
		/>
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

		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>

	<body id="kt_body" style="background-image: url()" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				<div
					id="kt_aside"
					class="aside aside-extended"
					data-kt-drawer="true"
					data-kt-drawer-name="aside"
					data-kt-drawer-activate="{default: true, lg: false}"
					data-kt-drawer-overlay="true"
					data-kt-drawer-width="auto"
					data-kt-drawer-direction="start"
					data-kt-drawer-toggle="#kt_aside_toggle"
				>
					<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
						<div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
							<a href="{{ route('dashboard') }}">
								<img alt="Logo" src="assets/media/logos/logo-demo7.svg" class="h-35px" />
							</a>
						</div>

						<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
							<div
								class="hover-scroll-y mb-10"
								data-kt-scroll="true"
								data-kt-scroll-activate="{default: false, lg: true}"
								data-kt-scroll-height="auto"
								data-kt-scroll-wrappers="#kt_aside_nav"
								data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
								data-kt-scroll-offset="0px"
							>
								<ul class="nav flex-column">
									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Manage Data">
										<a
											class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light {{ Route::is('allMakeData') || Route::is('dashboard') || Route::is('allModalData') || Route::is('allGenData') || Route::is('allEngineData') || Route::is('allDataData') ? 'active' : '' }}"
											data-bs-toggle="tab"
											href="#kt_aside_nav_tab_projects"
										>
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
										</a>
									</li>

									<li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="manage users">
										<a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light {{ Route::is('allAdmins') || Route::is('addAdmins') ? 'active' : '' }}" data-bs-toggle="tab" href="#kt_aside_nav_tab_menu">
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path
														opacity="0.3"
														d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
														fill="black"
													/>
													<path
														d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
														fill="black"
													/>
												</svg>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
							<div class="d-flex align-items-center mb-10" id="kt_header_user_menu_toggle">
								<div
									class="cursor-pointer symbol symbol-40px"
									data-kt-menu-trigger="click"
									data-kt-menu-overflow="true"
									data-kt-menu-placement="top-start"
									data-bs-toggle="tooltip"
									data-bs-placement="right"
									data-bs-dismiss="click"
									title="User profile"
								>
									<img src="{{ Auth::user()->img !== '' || !empty(Auth::user()->img) ? Auth::user()->img : 'assets/media/avatars/blank.png' }}" alt="image" />
								</div>

								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="{{ Auth::user()->img !== '' || !empty(Auth::user()->img) ? Auth::user()->img : 'assets/media/avatars/blank.png' }}" />
											</div>

											<div class="d-flex flex-column">
												<div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name; }} <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"></span></div>
												<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email; }}</a>
											</div>
										</div>
									</div>

									<div class="separator my-2"></div>

									<div class="menu-item px-5">
										<a href="{{ route('profileEdit') }}" class="menu-link px-5">My Profile</a>
									</div>

									<div class="menu-item px-5">
										<form method="POST" action="{{ route('logout') }}">
											@csrf

											<x-dropdown-link
												:href="route('logout')"
												onclick="event.preventDefault();
																this.closest('form').submit();"
											>
												{{ __('Log Out') }}
											</x-dropdown-link>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="aside-secondary d-flex flex-row-fluid">
						<div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
							<div class="d-flex h-100 flex-column">
								<div
									class="flex-column-fluid hover-scroll-y"
									data-kt-scroll="true"
									data-kt-scroll-activate="true"
									data-kt-scroll-height="auto"
									data-kt-scroll-wrappers="#kt_aside_wordspace"
									data-kt-scroll-dependencies="#kt_aside_secondary_footer"
									data-kt-scroll-offset="0px"
								>
									<div class="tab-content">
										<div class="tab-pane fade {{ Route::is('allMakeData') || Route::is('dashboard') || Route::is('allModalData') || Route::is('allGenData') || Route::is('allEngineData') || Route::is('allDataData') ? 'active show' : '' }}" id="kt_aside_nav_tab_projects" role="tabpanel">
											<div
												class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0"
												id="kt_aside_menu"
												data-kt-menu="true"
											>
												<div id="kt_aside_menu_wrapper" class="menu-fit">
													<div class="menu-item menu-accordion {{ Route::is('allMakeData') ? 'show' : '' }}">
														<a class="menu-link {{ Route::is('allMakeData') ? 'active' : '' }}" href="{{ route('allMakeData') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Make</span>
														</a>
													</div>
													<div class="menu-item menu-accordion {{ Route::is('allModalData') ? 'show' : '' }}">
														<a class="menu-link {{ Route::is('allModalData') ? 'active' : '' }}" href="{{ route('allModalData') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Model</span>
														</a>
													</div>
													<div class="menu-item menu-accordion {{ Route::is('allGenData') ? 'show' : '' }}">
														<a class="menu-link {{ Route::is('allGenData') ? 'active' : '' }}" href="{{ route('allGenData') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Generation</span>
														</a>
													</div>
													<div class="menu-item menu-accordion {{ Route::is('allEngineData') ? 'show' : '' }}">
														<a class="menu-link {{ Route::is('allEngineData') ? 'active' : '' }}" href="{{ route('allEngineData') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Engine</span>
														</a>
													</div>
													<div class="menu-item menu-accordion {{ Route::is('allDataData') ? 'show' : '' }}">
														<a class="menu-link {{ Route::is('allDataData') ? 'active' : '' }}" href="{{ route('allDataData') }}">
															<span class="menu-bullet">
																<span class="bullet bullet-dot"></span>
															</span>
															<span class="menu-title">Data</span>
														</a>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane fade {{ Route::is('allAdmins') || Route::is('addAdmins') ? 'active show' : '' }}" id="kt_aside_nav_tab_menu" role="tabpanel">
											<div
												class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0"
												id="kt_aside_menu"
												data-kt-menu="true"
											>
												<div id="kt_aside_menu_wrapper" class="menu-fit">
													<div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Route::is('allAdmins') || Route::is('addAdmins') ? 'show' : '' }}">
														<span class="menu-link">
															<span class="menu-icon">
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z" fill="black" />
																		<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="black" />
																		<path
																			opacity="0.3"
																			d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
																			fill="black"
																		/>
																	</svg>
																</span>
															</span>
															<span class="menu-title">Admins </span>
															<span class="menu-arrow"></span>
														</span>
														<div class="menu-sub menu-sub-accordion menu-active-bg">
															<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
																<div class="menu-sub menu-sub-accordion menu-active-bg show" style="" kt-hidden-height="236">
																	<div class="menu-item">
																		<a class="menu-link {{ Route::is('allAdmins') ? 'active' : '' }}" href="{{ route('allAdmins') }}">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">View All</span>
																		</a>
																	</div>
																	<div class="menu-item">
																		<a class="menu-link {{ Route::is('addAdmins') ? 'active' : '' }}" href="{{ route('addAdmins') }}">
																			<span class="menu-bullet">
																				<span class="bullet bullet-dot"></span>
																			</span>
																			<span class="menu-title">Add New</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<button
						class="btn btn-sm btn-icon bg-body btn-color-gray-700 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex"
						data-kt-toggle="true"
						data-kt-toggle-state="active"
						data-kt-toggle-target="body"
						data-kt-toggle-name="aside-minimize"
						style="margin-bottom: 1.35rem"
					>
						<span class="svg-icon svg-icon-2 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
								<path
									d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
									fill="black"
								/>
							</svg>
						</span>
					</button>
				</div>

				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<div class="container-xxl d-flex align-items-center justify-content-between d-md-none" id="kt_header_container">
							<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
								<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
									<span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path
												opacity="0.3"
												d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
												fill="black"
											/>
										</svg>
									</span>
								</div>

								<h1>
									<a href="{{ route('dashboard') }}" class="d-flex align-items-center mt-1 pt-2">
										DataManagment
									</a>
								</h1>
							</div>
						</div>
					</div>

					@yield('mainContent')
				</div>
			</div>
		</div>

		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path
						d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
						fill="black"
					/>
				</svg>
			</span>
		</div>

		<script>
			var hostUrl = "assets/";
		</script>

		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>

		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>

		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/modals/create-app.js"></script>
		<script src="assets/js/custom/modals/upgrade-plan.js"></script>
	</body>
</html>
