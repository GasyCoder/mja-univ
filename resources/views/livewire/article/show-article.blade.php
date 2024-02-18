<div>
    <style>
        .bg-blue::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(14, 14, 14, 0.836); /* Vous pouvez ajuster l'opacité ici */
        z-index: 1;
        }
    </style>

@include('livewire.article.head_post')

<!--Page content START -->
<section class="pt-3 pt-xl-5">
    <div class="container" data-sticky-container="">
        <div class="row g-4">
            <!-- Main content START -->
            <div class="col-xl-8">
                <div class="row g-4">
                    <!-- Contenus Start -->
                    <div class="mt-4 col-12">
                        <div class="border card rounded-3">
                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Contenus -->
                                <div>
                                    <p class="mb-0">
                                       {!! $contenus !!}
                                    </p>
                                </div>
                                <!-- Image START -->
                                <div class="mt-4 row g-4">
                                    @foreach ($images as $image)
                                    <div class="col-sm-6 col-md-4">
                                        <a href="{{ asset('storage/' . $image) }}" wire:navigate data-glightbox="" data-gallery="image-popup">
                                            <img src="{{ asset('storage/' . $image) }}" class="rounded-3" alt="">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Image END -->
                                @include('livewire.article.share')
                                <hr> <!-- Divider -->
                            </div>
                            <!-- Card body START -->
                        </div>
                    </div>
                    <!-- FAQs END -->
                </div>
            </div>
            <!-- Main content END -->
            @include('livewire.article.sidebar')
            @include('livewire.article.related_post')
        </div><!-- Row END -->
    </div>
</section>
<!-- =======================
Page content END -->
</div>
