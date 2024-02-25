<!-- ======Related blog START -->
@if($related_posts->count() > 0)
<section class="pt-0">
    <div class="container">
        <!-- Title -->
        <div class="mt-3 mb-5 row">
            <div class="col-12">
                <h4 class="mb-0">Article similaire</h4>
            </div>
        </div>

        <!-- Slider START -->
        <div class="tiny-slider arrow-round arrow-hover arrow-dark">
            <div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false"
                data-items="3" data-items-lg="2" data-items-sm="1">

                @foreach($related_posts as $related_post)
                <!-- Slider item -->
                <div class="bg-transparent card">
                    <div class="row g-0">
                        <!-- Image -->
                        @php
                        $images = explode(',', $related_post->images);
                        @endphp
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' .$images[0]) }}" class="img-fluid rounded-start"
                                alt="image article">
                        </div>
                        <!-- Card body -->
                        <div class="col-md-8">
                            <div class="card-body">
                                <!-- Title -->
                                <h6 class="card-title text-truncate-2">
                                    <a href="{{ route('open_article', ['slug' => $related_post->slug]) }}"
                                        wire:navigate>
                                   {{ $related_post->title}}
                                </a>
                                </h6>
                                <span class="small">{{ $related_post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- Slider END -->
    </div>
</section>
@endif
<!-- =====Related blog END -->
