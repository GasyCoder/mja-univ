<div>
    @if(!session()->has('cookies_accepted') && !session()->has('cookies_declined'))
    <div class="alert alert-light fade show position-fixed start-0 bottom-0 z-index-99 rounded-3 shadow p-4 ms-3 mb-3 col-10 col-md-4 col-lg-3 col-xxl-2"
        role="alert">
        <div class="text-dark text-center">
            <!-- Image -->
            <img src="assets/images/element/27.svg" class="h-50px mb-3" alt="cookie">
            <!-- Content -->
           <p>Ce site stocke des cookies. Consultez notre <a class="text-dark" href="#"><u>Politique de confidentialité</u></a>
            pour en savoir plus.</p>
            <!-- Buttons -->
            <div class="mt-3">
                <button type="button" wire:click="acceptCookies" class="btn btn-success-soft btn-sm mb-0">
                    <span aria-hidden="true">Accepter</span>
                </button>
                <button type="button" wire:click="declineCookies" class="btn btn-danger-soft btn-sm mb-0">
                    <span aria-hidden="true">Déclin</span>
                </button>
            </div>
        </div>
    </div>
    @endif
</div>
