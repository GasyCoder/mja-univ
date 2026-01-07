@if($posts->count() > 0)
<section class="pt-0 position-relative pt-lg-5">
    <div class="container">
        <!-- Title -->
    <div class="mb-2">
        <div class="d-md-flex justify-content-md-between align-items-center">
            <div>
                <h4 class="mb-1">Actualités récentes</h4>
                <p class="mb-0 text-muted">Les dernières publications de l'université.</p>
            </div>
            <div>
                <span class="me-2">Vous voulez en savoir plus ?</span>
                <a href="{{ route('all_article') }}" class="mb-0 btn btn-sm btn-primary-soft">Voir tous<i
                        class="fas fa-angle-right ms-2"></i></a>
            </div>
        </div>
    </div>

    <div class="row g-4">
    @foreach($posts as $post)
    <!-- Card item START -->
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="border-0 card h-100 shadow-sm card-hover">
           <div class="position-relative">
            <a href="{{ route('open_article', ['slug' => $post->slug]) }}" wire:navigate>
                @php
                $images = explode(',', $post->images);
                @endphp
                @if(!empty($post->images))
                <img src="{{ asset('storage/' .$images[0]) }}" class="card-img-top" alt="{{ $post->slug }}"
                    style="width: 100%; height: 180px; object-fit: cover;">
                @else
                <img src="{{ asset('assets/images/default/01.png') }}" class="card-img-top" alt="{{ $post->slug }}"
                    style="width: 100%; height: 180px; object-fit: cover;">
                @endif
                <!-- Overlay -->
                <div class="bg-overlay bg-dark opacity-2"></div>

                <div class="p-3 card-img-overlay d-flex align-items-start">
                    <!-- category -->
                    <span class="text-truncate-2 badge text-bg-{{ $post->category->color }}">
                        {{ $post->category->name }}
                    </span>
                </div>
            </a>
            </div>
            <!-- Card body -->
            <div class="card-body d-flex flex-column">
                <!-- Title -->
                <h6 class="card-title fw-bold text-truncate-2">
                    <a href="{{ route('open_article', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                </h6>
                <p class="text-truncate-2 text-muted">{{ $post->sub_title }}</p>
                <!-- Info -->
                <div class="d-flex justify-content-between align-items-center mt-auto">
                    <a href="{{ route('open_article', ['slug' => $post->slug]) }}"
                        wire:navigate
                        class="text-primary fw-semibold">
                        Lire la suite<i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <span class="small text-muted">
                        <i class="far fa-clock text-danger me-1"></i>
                        {{ $post->created_at->diffForHumans() }}
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Card item END -->
    @endforeach
</div>
<!-- Row end -->
</div>
</section>
@else
@endif
