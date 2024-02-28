<div>
    @if(!session()->has('cookies_accepted') && !session()->has('cookies_declined'))
    <div class="bottom-0 p-3 mb-3 shadow alert alert-light fade show position-fixed start-0 z-index-99 rounded-3 ms-3 col-10 col-md-4 col-lg-3 col-xxl-3"
        role="alert">
        <div class="text-center text-dark">
            <!-- Image -->
            <img src="{{ asset('assets/images/element/27.svg') }}" class="mb-3 h-50px" alt="cookie">
            <!-- Content -->
           <p>Notre site Web utilise des cookies pour améliorer votre expérience.
            En poursuivant, vous acceptez la
            <a class="text-dark" href="{{ route('show_regle', ['slug' => get_rule_one()['slug'], 'uuid' => get_rule_one()['uuid']]) }}"><u>Politique de cookies</u></a>.</p>
            <!-- Buttons -->
            <div class="mt-3">
                <button type="button" wire:click="acceptCookies" class="mb-0 btn btn-success-soft btn-sm">
                    <span aria-hidden="true">Accepter</span>
                </button>
                <button type="button" wire:click="declineCookies" class="mb-0 btn btn-danger-soft btn-sm">
                    <span aria-hidden="true">Déclin</span>
                </button>
            </div>
        </div>
    </div>
    @endif
</div>
