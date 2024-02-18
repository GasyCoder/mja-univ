<!-- Add Domaine modal START -->
<div wire:ignore class="modal fade" id="addStaff" tabindex="-1" aria-labelledby="addStaffLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="addStaffLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="save">
                    <!-- Titre -->
                    <div class="col-12">
                        <label class="form-label">Nom complet</label>
                        <input class="form-control" type="text" wire:model="name" placeholder="Nom complet">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-8">
                        Fonction
                        <input class="form-control" type="text" wire:model="job" placeholder="Fonction">
                        @error('job') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-4">
                        Matricule
                        <input class="form-control" type="number" wire:model="matricule" placeholder="Matricule">
                        @error('matricule') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label">Catégories</label>
                        <select class="form-control" wire:model="staff_cat_id">
                            <option value="" selected>--choisir--</option>
                            @foreach($categories as $row)
                            <option value="{{ $row->id }}">{{ $row->title }}</option>
                            @endforeach
                        </select>
                        @error('staff_cat_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">A propos</label>
                        <textarea class="form-control" wire:model="about" id="about" cols="3" rows="3"></textarea>
                        @error('about') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Photo</label>
                        <input class="form-control" type="file" wire:model="image_path">
                        @error('image_path') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Switch -->
                    <div class="mt-3 col-md-12">
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" wire:model="is_active" type="checkbox" id="publish">
                            <label class="form-check-label" for="publish">Activer</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/adminx/staff" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->
