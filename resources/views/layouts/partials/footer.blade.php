<!-- =======================
Footer START -->
<footer class="pt-5 bg-light">
    <div class="container">
        <!-- Row START -->
        <div class="row g-4">

            <!-- Widget 1 START -->
            <div class="col-lg-3">
                <!-- logo -->
                <a class="me-0" href="index.html">
                    <img class="light-mode-item h-50px" src="{{ asset('storage/' .get_settings()['logo']) }}" alt="logo">
                    <img class="dark-mode-item h-50px" src="{{ asset('storage/' .get_settings()['logo']) }}" alt="logo">
                </a>
                <p class="my-3 text-truncate-2">{{ get_settings()['description'] }}</p>
                <!-- Social media icon -->
                <ul class="mt-3 mb-0 list-inline">
                    <li class="list-inline-item">
                        <a class="px-2 shadow btn btn-white btn-sm text-facebook" href="{{ get_settings()['facebook'] }}" target="_blank">
                            <i class="fab fa-fw fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="px-2 shadow btn btn-white btn-sm text-twitter" href="{{ get_settings()['twitter'] }}" target="_blank">
                        <i class="fab fa-fw fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="px-2 shadow btn btn-white btn-sm text-linkedin" href="{{ get_settings()['linkdin'] }}" target="_blank">
                            <i class="fab fa-fw fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Widget 1 END -->

            <!-- Widget 2 START -->
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Link block -->
                    <div class="col-6 col-md-4">
                        <h6 class="mb-2 mb-md-4">Services</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Bibliothèque</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Bourse et Digitalisation</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Scolarité centrale</a></li>
                        </ul>
                    </div>

                    <!-- Link block -->
                    <div class="col-6 col-md-4">
                        <h6 class="mb-2 mb-md-4">Vie Universitaire</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Logement Universitaire</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Campus Universitaire</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Sports/Loisirs</a></li>
                        </ul>
                    </div>

                    <!-- Link block -->
                    <div class="col-6 col-md-4">
                        <h6 class="mb-2 mb-md-4">Relations</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Internationals </a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Projets de coopérations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Widget 2 END -->

            <!-- Widget 3 START -->
            <div class="col-lg-3">
                <h6 class="mb-2 mb-md-4">Contact & Adresse</h6>
                <!-- Time -->
                <p class="mb-0">Email:<span class="h6 fw-light ms-2">{{ get_settings()['email'] }}</span>
                </p>
                <p class="mb-0">Téléphone: <span class="h6 fw-light ms-2">{{ get_settings()['phone'] }}</span>
                </p>
                <p class="mb-2">
                    Adresse:<span class="h6 fw-light ms-2">{{ get_settings()['adresse'] }}</span>
                </p>
                <!-- Newsletter -->
                <form class="row row-cols-lg-auto g-2">
                    <div class="col-12">
                        <input type="email" class="form-control" placeholder="Abonnez-vous à news letter">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="m-0 btn btn-dark">Ok</button>
                    </div>
                </form>
                <!-- Row END -->
            </div>
            <!-- Widget 3 END -->
        </div><!-- Row END -->

        <!-- Divider -->
        <hr class="mt-4 mb-0">

        <!-- Bottom footer -->
        <div class="py-3">
            <div class="container px-0">
                <div class="py-3 text-center d-lg-flex justify-content-between align-items-center text-md-left">
                    <!-- copyright text -->
                    <div class="text-body text-primary-hover">
                        Copyrights © <?php echo date('Y'); ?> {{ get_settings()['copyright'] }}</div>
                    <!-- copyright links-->
                    <div class="mt-3 justify-content-center mt-lg-0">
                        <ul class="mb-0 nav list-inline justify-content-center">
                            <li class="list-inline-item"><a class="nav-link" href="#">Conditions d'utilisation</a></li>
                            <li class="list-inline-item"><a class="nav-link pe-0" href="#">Politique de
                                    confidentialité</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =======================
Footer END -->
