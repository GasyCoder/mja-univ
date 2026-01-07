<!-- =======================
Event START -->
@if($events->count() > 0)
<section class="pt-2">
    <div class="container">
        <!-- Title -->
        <div class="mb-3">
            <h4 class="mb-1">Evènements à venir</h4>
            <p class="mb-0 text-muted">Conférences, séminaires et rendez-vous académiques.</p>
        </div>
        <div class="row g-4">
        @foreach($events as $event)
            <div class="col-lg-6">
                <!-- Card START -->
                <div class="border-0 card shadow-sm h-100">
                    <div class="card-body d-flex gap-3">
                        <div class="text-center">
                            <div class="px-3 py-2 bg-primary text-white rounded-3">
                                <div class="h4 mb-0">{{ $event->dateStart->format('d') }}</div>
                                <small class="text-uppercase">{{ $event->dateStart->format('M') }}</small>
                            </div>
                            <small class="d-block mt-2 text-muted">{{ $event->dateStart->format('Y') }}</small>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-2">
                                <a href="{{ route('detail_event', ['uuid' => $event->uuid]) }}"
                                    wire:navigate
                                    class="stretched-link text-decoration-none">{{ $event->title }}</a>
                            </h5>
                            <p class="mb-1 text-muted">
                                <i class="bi bi-geo-alt-fill ms-0"></i> {{ $event->location }}
                            </p>
                            <p class="mb-0 text-muted">
                                <i class="bi bi-clock-fill me-1"></i> {{ $event->hourStart->format('h:i a') }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card END -->
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
