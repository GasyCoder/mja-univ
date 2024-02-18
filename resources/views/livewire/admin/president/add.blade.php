<!-- Add Domaine modal START -->
<div wire:ignore class="modal fade" id="addStory" tabindex="-1" aria-labelledby="addStoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="addStoryLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="save">
                    <!-- Titre -->
                    <div class="col-12">
                        <label class="form-label">Nom complet</label>
                        <input class="form-control" type="text" wire:model="president_name" placeholder="Nom complet">
                        @error('president_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-8">
                        Année
                        <input class="form-control" type="text" wire:model="president_year" placeholder="Année">
                        @error('president_year') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-4">
                        Mandat
                        <input class="form-control" type="text" wire:model="mandat" placeholder="Mandat">
                        @error('president_year') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Décret</label>
                        <input class="form-control" type="text" wire:model="decret" placeholder="Décret de nomination">
                        @error('decret') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Photo(s)</label>
                        <input class="form-control" type="file" multiple wire:model="president_avatar">
                        @error('president_avatar.*') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Radio items -->
                    <div class="col-lg-6">
                        <label class="form-label">Par intérim?</label>
                        <div class="d-sm-flex">
                            <!-- Radio -->
                            <div class="form-check radio-bg-light me-4">
                                <input class="form-check-input" type="radio" value="0" wire:model="is_interim"
                                    id="flexRadioDefault1" checked="">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Non
                                </label>
                            </div>
                            <!-- Radio -->
                            <div class="form-check radio-bg-light me-4">
                                <input class="form-check-input" type="radio" value="1" wire:model="is_interim"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Oui
                                </label>
                            </div>
                        </div>
                    </div>
                     <!-- Radio items -->
                    <div class="col-lg-6">
                        <label class="form-label">Décedé?</label>
                        <div class="d-sm-flex">
                            <!-- Radio -->
                            <div class="form-check radio-bg-light me-4">
                                <input class="form-check-input" type="radio" value="0" wire:model="is_dead"
                                    id="flexRadioDefault1" checked="">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Non
                                </label>
                            </div>
                            <!-- Radio -->
                            <div class="form-check radio-bg-light me-4">
                                <input class="form-check-input" type="radio" value="1" wire:model="is_dead"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Oui
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Switch -->
                    <div class="mt-2 col-md-12">
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" wire:model="is_current" type="checkbox" id="publish">
                            <label class="form-check-label" for="publish">En exercice?</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/adminx/president-list" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->
