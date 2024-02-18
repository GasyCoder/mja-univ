<!-- University -->
<div class="row g-4 mt-3">
    <h5>Écoles Doctorales</h5>
    <p>L'Université de Mahajanga compte 3 écoles doctorales.</p>
    @foreach($doctorales as $doctorale)
    <div class="col-md-6 col-xl-4">
        <!-- Card START -->
        <div class="card card-body shadow-lg p-4 align-items-start">
            <!-- Image -->
            <img class="rounded-1 h-60px" src="{{ asset('storage/' .$doctorale->image_path) }}" alt="{{ $doctorale->sigle }}">
            <!-- Title -->
            <h4 class="card-title mt-3 mb-0">{{ $doctorale->sigle }}</h4>
            <span>{{ $doctorale->name }}</span>
            <!-- Button -->
            <a href="{{ route('single_etab', ['uuid' => $doctorale->uuid]) }}"
                wire:navigate
                class="btn btn-lg btn-link p-0 mt-3 stretched-link"><u>
                    Détails</u>
            </a>
        </div>
        <!-- Card END -->
    </div>
    @endforeach
</div>
<!-- Pagination START -->
<nav class="mt-5 d-flex justify-content-center" aria-label="navigation">
    <ul class="mb-0 rounded pagination pagination-primary-soft">
        {{ $doctorales->links() }}
    </ul>
</nav>
<!-- Pagination END -->
