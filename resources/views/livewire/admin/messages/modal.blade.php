<!-- Popup modal for Change Password START -->
<div wire:ignore.self class="modal fade" id="openMessage" tabindex="-1" aria-labelledby="openMessageLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="openMessageLabel">{{ $name }}</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form class="row">
                    <!-- Input item -->
                    <div class="mb-3 col-12">
                        <label class="form-label">Email</label>
                        <input type="text" readonly value="{{ $email }}" class="form-control">
                    </div>
                    <!-- Input item -->
                    <div class="mb-3 col-12">
                        <label class="form-label">Objet</label>
                        <input type="text" readonly value="{{ $subject }}" class="form-control">
                    </div>
                    <p class="mt-2 mb-2 lead">
                        {{ $message }}
                    </p>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <a href="#" wire:click="read({{ $contactId }})" class="my-0 btn btn-info-soft">Marquer comme lu</a>

                <a href="#" wire:click="delete({{ $contactId }})" wire:confirm="Vous êtes sur de supprimer?"
                    class="my-0 btn btn-danger-soft">Supprimer</a>
            </div>
        </div>
    </div>
</div>
<!-- Popup modal for Change Password END -->
