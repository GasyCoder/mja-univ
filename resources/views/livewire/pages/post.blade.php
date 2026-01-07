@if($posts->count() > 0)
<section class="pt-0 position-relative pt-lg-5">
    <div class="container">
        <!-- Title -->
    <div class="mb-2">
        <div class="d-md-flex justify-content-md-between align-items-center">
            <h4 class="mb-2 border-bottom">Actualités récentes</h4>
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
        <div class="bg-transparent card">
           <div class="overflow-hidden rounded-3">
            <a href="{{ route('open_article', ['slug' => $post->slug]) }}" wire:navigate>
                @php
                $images = explode(',', $post->images);
                @endphp
                @if(!empty($post->images))
                <img src="{{ asset('storage/' .$images[0]) }}" class="card-img" alt="{{ $post->slug }}"
                    style="width: 100%; height: 160px; object-fit: cover;">
                @else
                <img src="{{ asset('assets/images/default/01.png') }}" class="card-img" alt="{{ $post->slug }}"
                    style="width: 100%; height: 160px; object-fit: cover;">
                @endif
                <!-- Overlay -->
                <div class="bg-overlay bg-dark opacity-4"></div>

                <div class="p-3 card-img-overlay d-flex align-items-end">
                    <!-- category -->
                    <span href="#" class="text-truncate-2 badge text-bg-{{ $post->category->color }}">{{ $post->category->name }}</span>
                </div>
            </a>
            </div>
            <!-- Card body -->
            <div class="card-body">
                <!-- Title -->
                <h6 class="card-title fw-bold text-truncate-2">
                    <a href="{{ route('open_article', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                </h6>
                <p class="text-truncate-2">{{ $post->sub_title }}</p>
                <!-- Info -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('open_article', ['slug' => $post->slug]) }}"
                        wire:navigate
                        class="text-primary">
                        Lire la suite<i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <span class="small">
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
