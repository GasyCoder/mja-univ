<div>
    <section class="py-0 pt-4 mb-6">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="p-3 rounded-3 position-relative p-sm-0">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6">
                                <!-- Title -->
                                <h5 class="text-primary">Abonnez-vous à la liste de diffusion pour recevoir les dernières actualités et événements!</h5>
                                <p class="mb-0">Ne ratez pas nos dernières mises à jour.</p>
                            </div>
                            <!-- Form -->
                            <div class="col-md-6">
                               @session('sent')
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Merci!</strong> {{ $value}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endsession
                                @session('status')
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Félicitation!</strong> {{ $value}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endsession
                                <form class="p-1 mt-3 rounded bg-light" wire:submit.prevent="abonner">
                                    <div class="input-group">
                                        <input class="border-0 form-control me-1"
                                            type="email"
                                            wire:model="email"
                                            placeholder="Entrer votre Email">
                                           <button class="mb-0 btn btn-blue rounded-2"
                                            type="submit"
                                            wire:loading.attr="disabled"
                                            wire:target="abonner">
                                            <span wire:loading wire:target="abonner">
                                                <i class="spinner-border spinner-border-sm" role="status"></i> En cours d'envoi...
                                            </span>
                                            <span wire:loading.remove wire:target="abonner">
                                                S'abonner
                                            </span>
                                        </button>
                                    </div>
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </form>
                                <small>Vous pouvez vous désabonner à tout moment, lire notre <a href="{{ route('show_regle', ['slug' => get_rule_one()['slug'], 'uuid' => get_rule_one()['uuid']]) }}">politique de confidentialité</a>.</small>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
</div>
