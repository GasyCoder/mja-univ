<!-- Sidebar START -->
<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">
    <!-- Navbar brand for xl START -->
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="index.html">
            <img class="navbar-brand-item" src="{{ asset('storage/' . get_settings()['logo']) }}" alt="">
        </a>
    </div>
    <!-- Navbar brand for xl END -->
    <div class="flex-row offcanvas offcanvas-start custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasSidebar">
        <div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">
            <!-- Sidebar menu START -->
            <ul class="navbar-nav flex-column" id="navbar-sidebar">
                <!-- Menu item 1 -->
                <li class="nav-item"><a href="{{ route('admin') }}" class="nav-link active"><i
                class="bi bi-house fa-fw me-2"></i>Dashboard</a></li>
                <!-- Title -->
                <li class="my-2 nav-item ms-2">Pages</li>
                <!-- menu item 2 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsepage" role="button"
                        aria-expanded="false" aria-controls="collapsepage">
                        <i class="bi bi-newspaper fa-fw me-2"></i>Actualités
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsepage" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('article') }}">Tous les actualités</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('categorie') }}">Categories</a>
                        </li>
                    </ul>
                </li>
                <!-- Menu item 3 -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('event') }}">
                        <i class="fas fa-calendar fa-fw me-2"></i>Evènements
                    </a>
                </li>
                <!-- Menu item 4 -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('president') }}" role="button">
                        <i class="fas fa-user-tie fa-fw me-2"></i>Mot du président
                    </a>
                </li>
                <!-- Menu item 8 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseauthentication" role="button" aria-expanded="false"
                        aria-controls="collapseauthentication">
                        <i class="bi bi-list fa-fw me-2"></i>Etablissements
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('profil_etab') }}">Licence/Master</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('ecole_doctorale') }}">Doctorales</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('type_etab') }}">Types</a></li>
                    </ul>
                </li>
                <!-- Menu item 5 -->
                <li class="nav-item"> <a class="nav-link" href="{{ route('domaines') }}"><i
                class="far fa-edit fa-fw me-2"></i>Offres de formations</a>
                </li>
                <!-- Menu item 8 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseuniv" role="button" aria-expanded="false"
                        aria-controls="collapseuniv">
                        <i class="bi bi-list-ol fa-fw me-2"></i>Universités
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapseuniv" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('orga') }}">Organigramme</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Office du Bacc</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('historique') }}">Historique</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('staff') }}">List des Staffs</a></li>
                    </ul>
                </li>
               <!-- Menu item 7 -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">
                        <i class="fas fa-envelope fa-fw me-2"></i>Contacts
                        <span class="badge text-bg-success rounded-circle ms-2">
                           {{ App\Models\Contact::where('is_read', true)->count() }}
                        </span>
                    </a>
                </li>

                <!-- Menu item 7 -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('abonne') }}">
                        <i class="fas fa-envelope fa-fw me-2"></i>Abonnés
                    </a>
                </li>
                <!-- Menu item 8 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapsepages" role="button" aria-expanded="false"
                        aria-controls="collapsepages">
                        <i class="bi bi-file fa-fw me-2"></i>Pages
                    </a>
                    <!-- Submenu -->
                    <ul class="nav collapse flex-column" id="collapsepages" data-bs-parent="#navbar-sidebar">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('regles') }}">Règles</a></li>
                        <li class="nav-item"> <a class="nav-link" href="#">Menus</a></li>
                    </ul>
                </li>
                <!-- Title -->
                <li class="my-2 nav-item ms-2">Paramètres & Utilisateurs</li>
                <!-- Menu item 9 -->
                <li class="nav-item"> <a class="nav-link" href="#"><i
                    class="far fa-user fa-fw me-2"></i>
                    Unitlisateurs</a>
                </li>
                <!-- Menu item 7 -->
                <li class="nav-item"> <a class="nav-link" href="#">
                        <i class="fas fa-user-cog fa-fw me-2"></i>Roles & Persmissions</a>
                </li>
            </ul>
            <!-- Sidebar menu end -->

            <!-- Sidebar footer START -->
            <div class="px-3 pt-3 mt-auto">
                <div class="d-flex align-items-center justify-content-between text-primary-hover">
                    <a class="mb-0 h5 text-body" href="{{ route('settings') }}" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Settings">
                        <i class="bi bi-gear-fill"></i>
                    </a>
                    <a class="mb-0 h5 text-body" href="/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Home">
                        <i class="bi bi-globe"></i>
                    </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" class="mb-0 h5 text-body"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Sign out"
                        :href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <i class="bi bi-power"></i>
                    </a>
                </form>
                </div>
            </div>
            <!-- Sidebar footer END -->

        </div>
    </div>
</nav>
<!-- Sidebar END -->
