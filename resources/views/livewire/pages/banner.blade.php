<!-- ==========Main Banner START -->
<section class="pt-0" wire:ignore>
    <div class="container">
        <div class="row">
            <div class="col-12">
              @if($setting && $setting->is_slider)
                <!-- Slider START -->
                <div class="overflow-hidden tiny-slider arrow-round arrow-blur arrow-hover rounded-3">
                    <div class="tiny-slider-inner" data-autoplay="true" data-gutter="0" data-arrow="true" data-dots="false"
                        data-items="1">
                        @foreach($sliders as $slider)
                        <!-- Card item START -->
                        <x-slider-item :slider="$slider" />
                        <!-- Card item END -->
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Slider END -->
                <div class="p-3 pt-3 mt-3 bg-light rounded-3">
                    <!-- Slider START -->
                    <div class="py-1 tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
                        <div class="tiny-slider-inner" data-autoplay="true" data-gutter="80" data-arrow="true"
                            data-dots="false" data-items="5" data-items-lg="3" data-items-md="2" data-items-xs="1">

                        @foreach($typeEtabs as $row)
                            <!-- Item -->
                           <div>
                                <div class="px-1 py-2 text-center border bg-body rounded-2 position-relative">
                                    {{-- <img src="{{ asset('storage/' .$row->icon_path) }}" class="h-40px"
                                        style="width: 40px; height: 40px; object-fit: cover;" alt=""> --}}
                                    <a href="{{ route('detail_type', ['slug' => $row->slug]) }}"
                                        wire:navigate
                                        class="text-primary-hover stretched-link">
                                        <span class="h6 ms-2 text-{{ $row->bg_color }}">
                                            <i class="bi bi-mortarboard-fill"></i>
                                            {{ Str::limit($row->name, 18)}}
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                        @endforeach
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>

            </div>
        </div>
    </div>
</section>
<!-- =======================
Main Banner END -->
