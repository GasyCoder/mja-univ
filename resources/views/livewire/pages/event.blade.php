<!-- =======================
Event START -->
@if($events->count() > 0)
<section class="pt-2">
    <div class="container">
        <!-- Title -->
        <div class="mb-3">
            <h4 class="mb-0 border-bottom">Evènements à venir</h4>
        </div>
        <div class="row justify-content-between">
        @foreach($events as $event)
            <div class="col-md-6">
                <!-- Card START -->
                <div class="bg-transparent card">
                    <div class="row align-items-center">
                        <div class="col-sm-4 col-lg-3">
                            <div class="p-3 mb-2 text-center bg-secondary rounded-2 mb-sm-0">
                                <h2 class="text-danger">{{ $event->dateStart->format('d') }}</h2>
                                <span class="text-danger">{{ $event->dateStart->format('M Y') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-lg-9">
                            <div class="p-0 card-body">
                                <h5 class="">
                                    <a href="{{ route('detail_event', ['uuid' => $event->uuid]) }}"
                                        wire:navigate
                                        class="stretched-link">{{ $event->title }}</a>
                                </h5>
                                <p class="mb-0">
                                    <i class="bi bi-geo-alt-fill ms-0"></i> {{ $event->location }}
                                    <i class="bi bi-clock-fill ms-3 text-end"></i> {{ $event->hourStart->format('h:i a') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card END -->
                <hr class="my-4">
            </div>
         @endforeach
        </div>
        @if($events->count() > 4)
        <!-- Button -->
        <div class="mt-5 text-center">
            <a href="#" class="mb-0 btn btn-primary-soft">Voir plus<i class="fas fa-sync ms-2"></i></a>
        </div>
        @endif
    </div>
</section>
@endif
<!-- =======================
Event END -->
