<div>
   <!-- =======================
Page Banner START -->
<section class="pt-5 pb-0"
    style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="mx-auto text-center col-lg-8 col-xl-6">
                <!-- Title -->
                <h6 class="text-primary">Contactez-nous</h6>
                <h3 class="mb-4">Nous sommes là pour toute question !</h3>
            </div>
        </div>

        <!-- Contact info box -->
        <div class="mt-0 row g-4 g-md-5 mt-lg-3">
            <!-- Box item -->
            <div class="col-lg-4 mt-lg-0">
                <div class="py-5 text-center shadow card card-body bg-primary h-100">
                    <!-- Title -->
                    <h5 class="mb-3 text-white">Web Email</h5>
                    <ul class="mb-0 list-inline">
                        <!-- Address -->
                        <li class="mb-3 list-item">
                            <a href="https://mail.univ-mahajanga.edu.mg/" target="_blank" class="text-white btn btn-sm btn-dark">
                                Ancien Web Email
                            </a>
                            <a href="https://webmail.mahajanga-univ.mg/" target="_blank" class="btn btn-sm btn-warning text-dark">
                                Nouveau Web Email
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Box item -->
            <div class="col-lg-4 mt-lg-0">
                <div class="py-5 text-center shadow card card-body h-100">
                    <!-- Title -->
                    <h5 class="mb-3">Contact Adresse</h5>
                    <ul class="mb-0 list-inline">
                        <!-- Phone number -->
                        <li class="mb-3 list-item h6 fw-light">
                            <a href="#"> <i class="fas fa-fw fa-phone-alt me-2"></i>{{ get_settings()['phone'] }} </a>
                        </li>
                        <!-- Email id -->
                        <li class="mb-0 list-item h6 fw-light">
                            <a href="#"> <i class="far fa-fw fa-envelope me-2"></i>{{ get_settings()['email'] }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Box item -->
            <div class="col-lg-4 mt-lg-0">
                <div class="py-5 text-center shadow card card-body h-100">
                    <!-- Title -->
                    <h5 class="mb-3">Adresse du bureau principal</h5>
                    <ul class="mb-0 list-inline">
                        <!-- Address -->
                        <li class="mb-3 list-item h6 fw-light">
                            <a href="#"> <i class="mt-1 fas fa-fw fa-map-marker-alt me-2"></i>{{ get_settings()['adresse'] }}</a>
                        </li>
                        <!-- Email id -->
                        <li class="mb-0 list-item h6 fw-light">
                            <a href="#"> <i class="far fa-fw fa-clock me-2"></i>8h00 à 11h30 - 14h30 à 17h30 </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Image and contact form START -->
<section>
    <div class="container">
        <div class="row g-4 g-lg-0 align-items-center">

            <div class="text-center col-md-6 align-items-center">
                <!-- Image -->
                <img src="assets/images/element/contact.svg" class="h-400px" alt="">

                <!-- Social media button -->
                <div class="mt-2 d-sm-flex align-items-center justify-content-center mt-sm-4">
                    <h5 class="mb-0">Suivez-nous sur:</h5>
                    <ul class="mb-0 list-inline ms-sm-2">
                        <li class="list-inline-item"> <a class="fs-5 me-1 text-facebook" href="{{ get_settings()['facebook'] }}"><i
                                    class="fab fa-fw fa-facebook-square"></i></a> </li>
                        <li class="list-inline-item"> <a class="fs-5 me-1 text-twitter" href="{{ get_settings()['twitter'] }}"><i
                                    class="fab fa-fw fa-twitter"></i></a> </li>
                        <li class="list-inline-item"> <a class="fs-5 me-1 text-linkedin" href="{{ get_settings()['linkdin'] }}"><i
                                    class="fab fa-fw fa-linkedin-in"></i></a> </li>
                    </ul>
                </div>
            </div>

            <!-- Contact form START -->
            <div class="col-md-6">
                <h2 class="mt-4 mt-md-0">Envoyez-nous message</h2>
                <p>Contactez-nous directement ou remplissez le formulaire et nous vous répondrons dans les plus brefs délais.</p>

                @session('status')
                <div class="alert alert-success">
                    {{ $value }}
                </div>
               @endsession

                <form wire:submit.prevent="send" id="contactForm">
                   @csrf
                    <div class="row">
                        <div class="mb-4 col-lg-6 bg-light-input">
                            <label for="name" class="form-label">Nom complet *</label>
                            <input type="text" class="form-control form-control-lg" wire:model="name" id="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4 col-lg-6 bg-light-input">
                            <label for="email" class="form-label">Adresse Email *</label>
                            <input type="email" class="form-control form-control-lg" wire:model="email" id="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-4 bg-light-input">
                        <label for="subject" class="form-label">Objet *</label>
                        <input type="text" class="form-control form-control-lg" wire:model="subject" id="subject">
                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4 bg-light-input">
                        <label for="message" class="form-label">Message * (<span class="small">250 caractères maximum</span>)</label>
                        <textarea class="form-control" id="message" wire:model="message" rows="4"></textarea>
                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Votre code existant... -->
                    @if ($recaptchaError)
                    <div class="alert alert-danger">
                        {{ $recaptchaError }}
                    </div>
                    @endif
                    <div class="mb-3 d-grid">
                        <button class="mb-0 btn btn-lg btn-primary g-recaptcha"
                            type="submit"
                            wire:loading.attr="disabled"
                            wire:target="send"
                            data-sitekey="{{ config('services.recaptcha.site_key') }}"
                            data-callback='onSubmit'
                            data-action='send'>
                            <span wire:loading wire:target="send">
                                <i class="spinner-border spinner-border-sm" role="status"></i> En cours d'envoi...
                            </span>
                            <span wire:loading.remove wire:target="send">
                                Envoyer le message
                            </span>
                        </button>
                        <input type="hidden" wire:model="recaptcha_token">
                    </div>
                </form>
            </div>
            <!-- Contact form END -->
        </div>
    </div>
</section>

<!-- =======================
Image and contact form END -->

<!-- =======================
Map START -->
<section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <iframe class="rounded w-100 h-400px grayscale"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4567.6721269612735!2d46.35068041308311!3d-15.701382341714492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2203fa7b5da7f4dd%3A0xa2ec2fb1c3016dc8!2sUniversit%C3%A9%20de%20Mahajanga!5e0!3m2!1sen!2smg!4v1708163982341!5m2!1sen!2smg"
                    height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Map END -->
</div>

@push('scripts')
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
<script>
    grecaptcha.ready(function () {
    grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', { action: 'send' })
        .then(function (token) {
            @this.set('recaptcha_token', token);
        });
});
</script>
@endpush
