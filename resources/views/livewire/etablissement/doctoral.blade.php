<!-- University -->
<div class="mt-3 row g-4">
    <h5>Écoles Doctorales</h5>
    <p>L'Université de Mahajanga compte 3 écoles doctorales.</p>
    @foreach($doctorales as $doctorale)
    <div class="col-md-6 col-xl-4">
        <!-- Card START -->
        <div class="p-4 shadow-lg card card-body align-items-start">
            @if(!empty($doctorale->image_path))
            <!-- Image -->
            <img class="rounded-1 h-60px" src="{{ asset('storage/' .$doctorale->image_path) }}"
            alt="{{ $doctorale->sigle }}">
            @else
            <img class="rounded-1 h-60px" src="{{ asset('assets/images/01.png') }}" alt="{{ $doctorale->sigle }}">
            @endif
            <!-- Title -->
            <h4 class="mt-3 mb-0 card-title">{{ $doctorale->sigle }}</h4>
            <span>{{ $doctorale->name }}</span>
            <!-- Button -->
            <a href="{{ route('single_doc', ['uuid' => $doctorale->uuid]) }}"
                wire:navigate
                class="p-0 mt-3 btn btn-lg btn-link stretched-link"><u>
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
