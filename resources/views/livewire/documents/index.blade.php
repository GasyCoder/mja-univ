<div>
@if($documents->count() > 0)
<section class="bg-light">
        <div class="container pt-0 mt-0 mt-lg-2">
            <!-- Title and SVG START -->
            <div class="pb-0 mb-0 row position-relative mb-sm-0 pb-lg-0">
                <div class="mx-auto text-center col-lg-8 position-relative">
                    <h2>Documents à télécharger!</h2>
                    <p>Télécgarer et consulter tous nos documents</p>
                </div>
            </div>
            <!-- Title and SVG END -->
        </div>
    </section>
<!-- =======================
Page content START -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main content START -->
            <div class="col-12">
                <!-- Book Grid START -->
                <div class="row g-4">
                   @foreach($documents as $document)
                    <!-- Card item START -->
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="shadow card h-100">
                            <div class="position-relative">
                                <div class="p-4 align-items-start">
                                @if(!empty($document->thumbnail))
                                <!-- Image -->
                                <img src="{{ asset('storage/' . $document->thumbnail) }}" class="rounded-1 h-70px" alt="{{ $document->original_name }}">
                                @else
                                <img src="{{ asset('assets/images/element/doc.png') }}" class="rounded-1 h-70px" alt="{{ $document->original_name }}">
                                @endif
                                </div>
                                <!-- Overlay -->
                                <div class="p-3 card-img-overlay d-flex z-index-0">
                                    <!-- Card overlay Top -->
                                    <div class="mb-auto w-100 d-flex justify-content-end">
                                        <!-- Card format icon -->
                                       <a href="#">
                                        @if($document->extension == 'pdf')
                                        <div class="icon-md bg-danger rounded-circle fs-5">
                                            <i class="text-white bi bi-file-earmark-pdf"></i>
                                        </div>
                                        @elseif($document->extension == 'doc' || $document->extension == 'docx')
                                        <div class="icon-md bg-primary rounded-circle fs-5">
                                            <i class="text-white bi bi-file-earmark-word"></i>
                                        </div>
                                        @elseif($document->extension == 'xlsx')
                                        <div class="icon-md bg-success rounded-circle fs-5">
                                            <i class="text-white bi bi-file-earmark-excel"></i>
                                        </div>
                                        @elseif($document->extension == 'ppt' || $document->extension == 'pptx')
                                        <div class="icon-md bg-orange rounded-circle fs-5">
                                            <i class="text-white bi bi-file-earmark-ppt"></i>
                                        </div>
                                        @elseif($document->extension == 'txt')
                                        <div class="icon-md bg-secondary rounded-circle fs-5">
                                           <i class="bi bi-file-earmark-text"></i>
                                        </div>
                                        @else
                                        <div class="icon-md bg-outline-info rounded-circle fs-5">
                                            <i class="bi bi-link-45deg"></i>
                                        </div>
                                        @endif
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card body -->
                            <div class="px-3 card-body">
                                <!-- Title -->
                                <h6 class="mb-0 card-title">
                                    @if($document->file_path)
                                    <a href="#!" wire:click.prevent="download('{{ $document->uuid }}')" target="_blank" class="stretched-link">
                                        {{ $document->original_name }}
                                    </a>
                                    @else
                                    <a href="{{ $document->file_url }}" target="_blank" class="stretched-link">
                                        {{ $document->original_name }}
                                    </a>
                                    @endif
                                </h6>
                            </div>
                            <hr>
                            <!-- Card footer -->
                            <div class="px-3 pt-0 card-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    @if($document->file_path)
                                    <small class="mb-0 h6 fw-light">Taille: {{ $bytesToHuman($document->size) }}</small>
                                    <!-- dowloand -->
                                    <a href="" class="mb-0 h4 text-info">
                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                    </a>
                                    @else
                                    <small class="mb-0 h6 fw-light">Source Google Drive</small>
                                    <!-- dowloand -->
                                    <a href="{{ $document->file_url }}" target="_blank" class="mb-0 h5 text-info">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    @endforeach
                </div>
                <!-- Book Grid END -->
                <!-- Pagination START -->
                <div class="col-12">
                    <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                        <ul class="mb-0 rounded pagination pagination-primary-soft d-inline-block d-md-flex">
                           {{ $documents->links()}}
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Main content END -->
        </div><!-- Row END -->
    </div>
</section>
@else
    <div class="pt-8 pb-8 d-flex justify-content-center align-items-center">
        <div class="shadow">
            <div class="py-2 mb-0 alert alert-danger d-flex align-items-center">
                <div class="text-center">
                    <small class="mb-0">Aucun données disponible ici pour le moment.</small>
                </div>
            </div>
        </div>
    </div>
@endif
</div>
