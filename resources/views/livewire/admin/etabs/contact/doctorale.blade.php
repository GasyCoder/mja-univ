<!-- Add Categorie modal START -->
<div wire:ignore class="modal fade" id="contactDoc" tabindex="-1" aria-labelledby="contactDocLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="contactDocLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="submitContact">
                    <!-- Téléphone 1 -->
                    <div class="col-12">
                        <label class="form-label" for="phone_1">Téléphone 1</label>
                        <input class="form-control" type="text" id="phone_1" wire:model="phone_1" autofocus>
                        @error('phone_1') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Téléphone 2 -->
                    <div class="col-12">
                        <label class="form-label" for="phone_2">Téléphone 2</label>
                        <input class="form-control" type="text" id="phone_2" wire:model="phone_2">
                        @error('phone_2') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email -->
                    <div class="col-12">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" id="email" wire:model="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Site Web -->
                    <div class="col-12">
                        <label class="form-label" for="siteweb">Site Web</label>
                        <input class="form-control" type="url" id="siteweb" wire:model="siteweb">
                        @error('siteweb') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Facebook -->
                    <div class="col-12">
                        <label class="form-label" for="facebook">Facebook</label>
                        <input class="form-control" type="url" id="facebook" wire:model="facebook">
                        @error('facebook') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Adresse -->
                    <div class="col-12">
                        <label class="form-label" for="adresse">Adresse</label>
                        <input class="form-control" type="text" id="adresse" wire:model="adresse">
                        @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="modal-footer">
                        <a href="/adminx/doctorale-ecole" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-success">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->
