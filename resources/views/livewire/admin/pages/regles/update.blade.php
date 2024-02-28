<div class="d-flex align-items-center justify-content-center">
    <style>
        .my-alert {
            background-color: red !important;
        }

        .ql-container {
            height: 400px !important;
        }
    </style>
    <!-- Page main content START -->
    <div class="border row g-2 page-content-wrapper col-xl-12 col-lg-12 col-md-12 col-12">
        <!-- Personal Information content START -->
        <div class="">
            <!-- Card header -->
            <div class="card-header">
                <h5 class="card-header-title">Mot du président</h5>
            </div>
            <!-- Card body START -->
            <div class="card-body">
                <form class="row g-4 align-items-center" wire:submit.prevent="updateRegle">
                    <!-- Input item -->
                    <div class="col-lg-12">Titre</label>
                        <input type="text" wire:model="title" class="form-control" placeholder="Titre">
                    </div>
                    <!-- Choice item -->
                    <!-- Textarea item -->
                    <div class="col-12" wire:ignore>
                        <label class="form-label">Contenus</label>
                        <div>
                            <div style="height: 100%;">
                                <livewire:quill-text-editor wire:model.defer="body" theme="snow" />
                            </div>
                        </div>
                    </div>
                    <!-- Save button -->
                    <div class="d-sm-flex justify-content-start">
                        <button type="submit" class="mb-0 btn btn-success">Mettre à jour</button>
                    </div>
                </form>
            </div>
            <!-- Card body END -->
        </div>
        <!-- Personal Information content END -->
    </div> <!-- Row END -->
    <!-- Page main content END -->
</div>


@push('scripts')

@endpush
