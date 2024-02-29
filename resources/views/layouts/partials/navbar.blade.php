<!-- Main navbar START -->
<div class="navbar-collapse w-100 collapse" id="navbarCollapse2">
    <!-- Nav Main menu START -->
    <ul class="mx-auto navbar-nav navbar-nav-scroll">
        <!-- Nav item 1 Demos -->
        <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('home')) active @endif" href="/" wire:navigate>
                <i class="bi bi-house-fill me-2"></i>Accueil
            </a>
        </li>

        <!-- Nav item 3 Account -->
        <li class="nav-item dropdown">
            <a class="nav-link @if(request()->routeIs('historiqueIndex')
                        || request()->routeIs('organigramme')
                        || request()->routeIs('staff_page')) active @endif dropdown-toggle" href="#" id="accounntMenu"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-bank me-2"></i>Université</a>
            <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                <a class="dropdown-item @if(request()->routeIs('historiqueIndex')) active @endif"
                    href="{{ route('historiqueIndex') }}" wire:navigate>Historique</a>
                <a class="dropdown-item @if(request()->routeIs('organigramme')) active @endif"
                    href="{{ route('organigramme') }}" wire:navigate>Organigramme</a>
                <a class="dropdown-item @if(request()->routeIs('staff_page')) active @endif"
                    href="{{ route('staff_page') }}" wire:navigate>Staff & Leadership</a>
                <a class="dropdown-item" href="#" wire:navigate>Textes et arrêtés</a>
                <a class="dropdown-item" href="#" wire:navigate>Office du Bacc</a>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link @if(request()->routeIs('doctoral')) active @endif
                                        dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-lightbulb-fill me-2"></i>Recherche</a>
            <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                <a class="dropdown-item @if(request()->routeIs('doctoral')) active @endif"
                    href="{{ route('doctoral') }}" wire:navigate>Ecoles Doctorale</a>
                <a class="dropdown-item" href="#" wire:navigate>Laboratoires</a>
                <a class="dropdown-item" href="#" wire:navigate>Publications Scientifique</a>
                <a class="dropdown-item" href="#" wire:navigate>Université d'Eté</a>
                <a class="dropdown-item" href="#" wire:navigate>Séminaires</a>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <a class="dropdown-item" href="#">Jardin Botanique</a>
                <a class="dropdown-item" href="#">Musées</a>
            </ul>
        </li>

        <!-- Nav item 3 Account -->
        <li class="nav-item dropdown">
            <a class="nav-link @if(request()->routeIs('offres')) active @endif
                                        dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-pen-fill me-2"></i>Formations</a>
            <ul class="dropdown-menu" aria-labelledby="accounntMenu">
                <a class="dropdown-item @if(request()->routeIs('offres')) active @endif" href="{{ route('offres') }}"
                    wire:navigate>Offres des formations</a>
                <a class="dropdown-item" href="#" wire:navigate>Système LMD
                    <a class="dropdown-item" href="#" wire:navigate>Resources numérique</a>
            </ul>
        </li>

        <!-- Nav item 4 Component-->
        <li class="nav-item"><a class="nav-link @if(request()->routeIs('etablissement')) active @endif"
                href="{{ route('etablissement') }}" wire:navigate>
                <i class="bi bi-mortarboard-fill me-2"></i>Etablissements</a>
        </li>

    </ul>
</div>
<!-- Main navbar END -->
