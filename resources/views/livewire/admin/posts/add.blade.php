<div>
<style>
    .my-alert {
        background-color: red !important;
    }

    .ql-container {
        height: 320px !important;
    }
</style>
<!-- Page main content START -->
    <div class="row g-2">
        <!-- Personal Information content START -->
            <div class="card">
                <!-- Card header -->
               <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0 card-header-title">Ajouter actualité</h5>
                <a href="#" wire:click="cancelAdd()" class="badge bg-danger"><i class="fas fa-arrow-left me-2"></i>Retour</a>
                </div>
                <!-- Card body START -->
                <div class="card-body">
                    <form class="row g-4 align-items-center" wire:submit.prevent="save">
                        <!-- Input item -->
                        <div class="col-lg-8"><label>Titre</label>
                            <input type="text" wire:model="title" class="form-control" placeholder="Titre d'article">
                        </div>
                        <!-- Choice item -->
                        <div class="col-lg-4">
                            Catégorie
                            <select class="border-1 form-select js-choice z-index-9"
                                aria-label=".form-select-sm" wire:model="category_id">
                                <option value="">--choisir--</option>
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Textarea item -->
                        <div class="col-12">
                            <label class="form-label">Sous titre</label>
                            <textarea class="form-control" rows="2" wire:model="sub_title"></textarea>
                            <div class="form-text">Max 25 carractères</div>
                        </div>

                        <!-- Textarea item -->
                        <div class="col-12">
                            <label class="form-label">Contenus</label>
                            <div>
                                <div style="height: 100%;">
                                    {{-- <livewire:quill-text-editor wire:model.live="contenus" theme="snow" /> --}}
                                    <textarea class="form-control" rows="8" cols="4" wire:model="contenus"></textarea>
                                </div>
                            </div>
                        </div>


                        @include('livewire.admin.posts.upload')

                        <div class="p-4 mt-2 border g-4 row">
                        <!-- Switch item -->
                        <div class="col-lg-4">
                            <label class="form-label">Publier</label>
                            <div class="mb-0 form-check form-switch form-check-lg">
                                <input class="mt-0 form-check-input price-toggle me-2"
                                    wire:model="is_active" type="checkbox"
                                    wire:click="showShare()"
                                    id="flexSwitchCheckDefault">
                                <label class="mt-1 form-check-label" for="flexSwitchCheckDefault">Oui</label>
                            </div>
                        </div>
                        <!-- Radio items -->
                        <div class="col-lg-4">
                            <label class="form-label">Mettre en Slide?</label>
                            <div class="d-sm-flex">
                                <!-- Radio -->
                                <div class="form-check radio-bg-light me-4">
                                    <input class="form-check-input" type="radio" value="0" wire:model="is_slider"
                                        id="flexRadioDefault1" checked="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Non
                                    </label>
                                </div>
                                <!-- Radio -->
                                <div class="form-check radio-bg-light me-4">
                                    <input class="form-check-input" type="radio" value="1" wire:model="is_slider"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Oui
                                    </label>
                                </div>
                            </div>
                        </div>

                        @if($is_active == true)
                        <div class="col-lg-4">
                            <label class="form-label">Envoyer par email</label>
                            <div class="mb-0 form-check form-switch form-check-lg">
                                <input class="mt-0 form-check-input price-toggle me-2" wire:model="is_sendemail" type="checkbox"
                                    id="flexSwitchCheckDefault_2">
                                <label class="mt-1 form-check-label" for="flexSwitchCheckDefault_2">Oui</label>
                            </div>
                        </div>
                        @endif

                        </div>
                        <!-- Save button -->
                        <button class="mb-0 btn btn-sm btn-primary" type="submit"
                        wire:loading.attr="disabled" wire:target="save">
                        <span wire:loading wire:target="save">
                            <i class="spinner-border spinner-border-sm" role="status"></i> En cours d'enregistrement...
                        </span>
                        <span wire:loading.remove wire:target="save">
                            Ajouter article
                        </span>
                        </button>
                    </form>
                </div>
                <!-- Card body END -->
            </div>
        <!-- Personal Information content END -->
    </div> <!-- Row END -->
<!-- Page main content END -->
</div>



@push('scripts')
<script>
    window.addEventListener('activeStatusUpdated', event => {
    document.getElementById('emailButton').style.display = event.detail.is_active ? 'block' : 'none';
});
</script>
@endpush

