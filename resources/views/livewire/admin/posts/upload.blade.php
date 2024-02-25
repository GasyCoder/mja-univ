<!-- Upload image component -->
<div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
    x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
    x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
    <!-- Upload image START -->
    <div class="col-12">
        <div
            class="p-4 text-center border border-2 border-dashed justify-content-center align-items-center p-sm-2 position-relative rounded-3">
            <!-- Image -->
            <img src="{{ asset('assets/images/element/gallery.svg') }}" class="h-50px" alt="">
            <div>
                <h6 class="my-2">Uploadez images ici, ou<a href="#!" class="text-primary"> Parcourir</a></h6>
                <label style="cursor:pointer;">
                    <span>
                        <input class="form-control stretched-link" type="file" multiple wire:model="images" id="images"
                            accept="image/gif, image/jpeg, image/png">
                    </span>
                </label>
                <p class="mt-2 mb-0 small"><b>Note:</b> format : jpg, jpeg, png, svg.</p>
                @error('images') <span class="error">{{ $message }}</span> @enderror
            </div>
            <!-- Progress Bar -->
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
        </div>
    </div>

    @if ($images)
    @foreach ($images as $index => $image)
    <div style="position: relative; display: inline-block;">
        <img src="{{ $image->temporaryUrl() }}" width="150" height="80" style="line-height:25px">
        <a href="#!" class="text-danger" wire:click="removeImage({{ $index }})"
            style="position: absolute; top: 0; right: 0;">
            <em class="bi bi-trash-fill fw-1"></em>
        </a>
    </div>
    @endforeach
    @endif

</div>
<!-- Upload image END -->
