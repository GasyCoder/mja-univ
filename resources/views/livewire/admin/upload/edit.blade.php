<!-- Edit Domaine modal START -->
<div wire:ignore class="modal fade" id="editUploader" tabindex="-1" aria-labelledby="editUploaderLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="editUploaderLabel">Modifier</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
            <form class="row text-start g-3" novalidate="" wire:submit.prevent="update">
                <!-- Titre -->
                <div class="col-12">
                    <label class="form-label">Nom de fichier</label>
                    <input class="form-control" type="text" wire:model="original_name" placeholder="Nom de fichier">
                    @error('original_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- Chebox items -->
                {{-- <div class="col-lg-4">
                    <label class="form-label">Type de Fichier</label>
                    <div class="d-sm-flex">
                        <!-- Radio -->
                        <div class="form-check radio-bg-light me-4">
                            <input class="form-check-input" type="checkbox" wire:click="TypeFile()" value="{{ $type_file ? 1 : 0 }}"
                                wire:model="type_file" id="flexRadioDefault1" {{ $type_file ? 'checked' : '' }}>
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{ $type_file ? 'File URL' : 'Fichier' }}
                            </label>
                        </div>
                    </div>
                </div> --}}
                <div class="col-12 file-input">
                    <label class="form-label">Fichier</label>
                    <input class="form-control" type="file" wire:model="file_path">
                    @error('file_path') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-12 url-input" style="display: ;">
                    <label class="form-label">Lien de fichier</label>
                    <input class="form-control" type="url" wire:model="file_url">
                    @error('file_url') <span class="text-danger">{{ $message }}</span> @enderror
                    <div>
                        {{ $file_url }}
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Thumbnail</label>
                    <input class="form-control" type="file" wire:model="thumbnail">
                    @error('thumbnail') <span class="text-danger">{{ $message }}</span> @enderror
                    <div>
                       <img src="{{ asset('storage/' . $thumbnail) }}" class="rounded-1 h-40px" alt="">
                    </div>
                </div>
                <!-- Switch -->
                <div class="col-lg-3">
                    <label class="form-label">Publier</label>
                   <div class="form-check form-switch form-check-md">
                        @if($is_active == true)
                        <input class="mt-0 form-check-input price-toggle me-2" checked wire:model="is_active" type="checkbox"
                            id="flexSwitchCheckDefault">
                        @else
                        <input class="mt-0 form-check-input price-toggle me-2" wire:model="is_active" type="checkbox"
                            id="flexSwitchCheckDefault">
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/adminx/uploader" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                    <button type="submit" class="my-0 btn btn-success">Mettre à jour</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->
@push('scripts')
<script>
    document.getElementById('flexRadioDefault1').addEventListener('change', function() {
        if (this.checked) {
            document.querySelector('.file-input').style.display = 'none';
            document.querySelector('.url-input').style.display = 'block';
        } else {
            document.querySelector('.file-input').style.display = 'block';
            document.querySelector('.url-input').style.display = 'none';
        }
    });
</script>
@endpush
