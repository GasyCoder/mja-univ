<!-- Header START -->
<header class="navbar-light navbar-sticky">
	<!-- Nav START -->
	<nav class="navbar navbar-expand-xl z-index-9">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="/">
                <img class="light-mode-item h-40px navbar-brand-item" src="{{ asset('storage/' . get_settings()['logo']) }}"
                    alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="{{ asset('storage/' . get_settings()['logo']) }}" alt="logo">
            </a>
			<!-- Logo END -->
			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<!-- Nav Search START -->
				<div class="col-xxl-6">
					<div class="px-4 my-3 nav my-xl-0 flex-nowrap align-items-center">
						<div class="nav-item w-100">
							<form class="rounded position-relative">
								<input class="border-0 form-control pe-5 bg-secondary bg-opacity-10"
                                type="search" placeholder="Rechercher..." aria-label="Search">
								<button class="px-2 py-0 bg-transparent btn btn-link position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
							</form>
						</div>
					</div>
				</div>
				<!-- Nav Search END -->

				<!-- Nav Main menu START -->
				<ul class="navbar-nav navbar-nav-scroll ms-auto">
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="https://bacc.mahajanga.digital.gov.mg/" target="_blank">Office du BACC</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('resultat_inscription') ? 'active' : '' }}"
                            href="{{ route('resultat_inscription') }}" wire:navigate>Pré-inscription
                        </a>
                    </li>
					<li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('documents') ? 'active' : '' }}" href="{{ route('documents') }}">Documents</a>
                    </li>
                    <!-- Nav item End -->
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Profile and notification START -->
			<ul class="flex-row nav align-items-center list-unstyled ms-xl-auto">
				<!-- Notification dropdown START -->
				<li class="nav-item ms-2 ms-sm-3 dropdown">
					<!-- Notification button -->
					<a class="mb-0 btn btn-light btn-round" href="{{ route('contact_page') }}" wire:navigate>
                    <i class="bi bi-envelope fs-5"></i></i>
					</a>
					<!-- Notification dote -->
					<span class="notif-badge animation-blink"></span>
				</li>
				<!-- Notification dropdown END -->

				<!-- Profile dropdown START -->
				<li class="nav-item ms-3 dropdown">
					<a class="p-0 mb-0 avatar avatar-sm btn btn-light btn-round" href="#" id="darkmode" role="button"
                        data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="true">
                        <i class="bi bi-gear fs-5"></i>
                    </a>
                    <ul class="pt-3 shadow dropdown-menu dropdown-animation dropdown-menu-end" aria-labelledby="darkmode">
                        @if (Route::has('login'))
                        @auth
                        <!-- Profile info -->
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="shadow avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jp') }}g"
                                        alt="avatar">
                                </div>
                                <div>
                                    <a class="h6" href="#">{{ Auth::user()->name }}</a>
                                    <p class="m-0 small">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Links -->
                        <li>
                            <a class="dropdown-item" href="{{ url('/mja/dashboard') }}">
                                <i class="bi bi-gear fa-fw me-2"></i>
                                Paneau d'Administration
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item bg-danger-soft-hover" href="#" :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    <i class="bi bi-power fa-fw me-2"></i>Se déconnecter
                                </a>
                            </form>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @endauth
                        @endif
                        <!-- Dark mode options START -->
                        <div x-data="{ theme: localStorage.getItem('theme') || 'auto' }" x-init="setTheme(theme)">
                            <li>
                                <div class="p-1 mt-0 rounded bg-light dark-mode-switch theme-icon-active d-flex align-items-center">
                                    <button type="button" class="mb-0 btn btn-sm" :class="{ 'active': theme === 'light' }"
                                        @click="theme = 'light'; setTheme(theme)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-sun fa-fw mode-switch" viewbox="0 0 16 16">
                                            <path
                                                d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                                            </path>
                                            <use href="#"></use>
                                        </svg> Light
                                    </button>
                                    <button type="button" class="mb-0 btn btn-sm" :class="{ 'active': theme === 'dark' }"
                                        @click="theme = 'dark'; setTheme(theme)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-moon-stars fa-fw mode-switch" viewbox="0 0 16 16">
                                            <path
                                                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z">
                                            </path>
                                            <path
                                                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                                            </path>
                                            <use href="#"></use>
                                        </svg> Dark
                                    </button>
                                    <button type="button" class="mb-0 btn btn-sm" :class="{ 'active': theme === 'auto' }"
                                        @click="theme = 'auto'; setTheme(theme)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-circle-half fa-fw mode-switch" viewbox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                                            <use href="#"></use>
                                        </svg> Auto
                                    </button>
                                </div>
                            </li>
                        </div>
                    </ul>
						</li>
						<!-- Dark mode options END-->
					</ul>
					<!-- Profile dropdown END -->
				</li>
			</ul>
			<!-- Profile and notification END -->
		</div>
	</nav>
	<!-- Nav END -->

	<hr class="my-0">

	<!-- Category Nav link START -->
	<nav class="navbar navbar-expand-xl nav-category">
		<div class="container px-0">

			<!-- Responsive navbar toggler -->
			<button class="m-auto navbar-toggler w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse2" aria-controls="navbarCollapse2" aria-expanded="false" aria-label="Toggle navigation">
				<i class="bi bi-grid-fill"></i> MENUS
			</button>

            @include('layouts.partials.navbar')

			</div>
	</nav>
	<!-- Category Nav link END -->

</header>
<!-- Header END -->
