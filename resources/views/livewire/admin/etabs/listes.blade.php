<div>
@if(!$openTrash)
    <!-- Page main content START -->
    <div class="border page-content-wrapper">
        <!-- Title -->
        <div class="mb-3 row">
            <div class="col-12">
                <h3 class="mb-2 h3 mb-sm-0">Etablissements <span class="badge bg-orange bg-opacity-10 text-orange">
                    {{ $etabs->count() }}</span>
                </h3>
                <a href="#" wire:click="trash()" class="mb-0 btn btn-sm btn-dark">
                   <i class="bi bi-trash-fill"></i> Corbeille
                </a>
                <a href="#" class="mb-0 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addEtab">Nouvelle
                    Etablissement</a>
            </div>
        </div>
        <!-- Card START -->
        <div class="bg-transparent border card">
            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">
                    <!-- Search bar -->
                    <div class="col-md-12">
                        <form class="rounded position-relative">
                            <input class="form-control bg-body" type="search" placeholder="Rechercher..."
                                aria-label="Search">
                            <button
                                class="p-2 bg-transparent border-0 position-absolute top-50 end-0 translate-middle-y text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Search and select END -->
            </div>
            <!-- Card header END -->
            <!-- Card body START -->
            <div class="card-body">
                <!-- Course table START -->
                <div class="border-0 table-responsive rounded-3">
                    <!-- Table START -->
                    <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Nom</th>
                                <th scope="col" class="border-0">Pédagogie</th>
                                <th scope="col" class="border-0">Statistique</th>
                                <th scope="col" class="border-0">Contact/Adresse</th>
                                <th scope="col" class="border-0">Status</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>
                        <!-- Table body START -->
                        <tbody>
                            @foreach($etabs as $row)
                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Title -->
                                        <h6 class="mb-0 table-responsive-title ms-2">
                                            <a href="#" class="text-primary stretched-link bg-opacity-15">
                                                {{ $row->sigle}}
                                            </a><br>
                                            <small>{{ $row->type->name }}</small>
                                        </h6>
                                    </div>
                                </td>
                                <td>
                                    {{-- pédagogie --}}
                                    @if($row->pedagogies->contains(function ($pedagogie) {
                                    return $pedagogie->diplomes != null;
                                    }))
                                    <a href="#" wire:click="succesPedago({{ $row->id }})"
                                        class="mb-1 badge bg-success me-1 mb-md-0"
                                        data-bs-toggle="modal" data-bs-target="#pedago">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    @else
                                    <a href="#" wire:click="pedago({{ $row->id }})"
                                        class="mb-1 badge bg-primary me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#pedago">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    {{-- statistique --}}
                                    @if($row->statistiques->contains(function ($statistique) {
                                    return $statistique->enseignant != null;
                                    }))
                                    <a href="#" wire:click="succesState({{ $row->id }})" class="mb-1 badge bg-success me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#state">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    @else
                                    <a href="#" wire:click="state({{ $row->id }})"
                                        class="mb-1 badge bg-primary me-1 mb-md-0"
                                        data-bs-toggle="modal"
                                        data-bs-target="#state">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    {{-- contact/adresse --}}
                                    @if($row->contact && $row->contact->phone_1 != null)
                                    <a href="#" wire:click="succesContact({{ $row->id }})" class="mb-1 badge bg-success me-1 mb-md-0"
                                        data-bs-toggle="modal" data-bs-target="#contact">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    @else
                                    <a href="#" wire:click="contact({{ $row->id }})" class="mb-1 badge bg-primary me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#contact">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    @endif
                                </td>
                                <!-- Table data -->
                                <td>
                                    @if($row->status == true)
                                    <span class="badge bg-success">Activé</span>
                                    @else
                                    <span class="badge bg-danger">Désactivé</span>
                                    @endif
                                </td>
                                <!-- Table data -->
                                <td>
                                    <a href="#" wire:click="edit({{ $row->id }})"
                                        class="mb-1 btn btn-sm btn-success me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#editEtab">Editer
                                    </a>
                                    <button class="mb-0 btn btn-sm btn-info"
                                        wire:click="delete({{ $row->id }})">Corbeille
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <!-- Table body END -->
                    </table>
                    <!-- Table END -->
                </div>
                <!-- Course table END -->
            </div>
            <!-- Card body END -->
            <!-- Card footer START -->
            <div class="pt-0 bg-transparent card-footer">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Pagination -->
                    <nav class="mb-0 d-flex justify-content-center" aria-label="navigation">
                        <ul
                            class="mb-0 rounded pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex">
                            {{ $etabs->links() }}
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card footer END -->
        </div>
        <!-- Card END -->
    </div>
    <!-- Page main content END -->
    @include('livewire.admin.etabs.add')
    @include('livewire.admin.etabs.edit')

    @include('livewire.admin.etabs.pedagogie.index')

    @include('livewire.admin.etabs.statistique.index')

    @include('livewire.admin.etabs.contact.index')

@else
@include('livewire.admin.etabs.trash')
@endif
</div>

@push('scripts')
<script>
    var inputDomaine = document.querySelector('#pedagogie_tags');
    var tagifyDomaine = new Tagify(inputDomaine);
    tagifyDomaine.on('change', function(e){
        var tags = JSON.parse(e.detail.value).map(function(tag) { return tag.value; });
        @this.set('domaine', tags.join(','));
    });

    var inputMention = document.querySelector('#mention_tags');
    var tagifyMention = new Tagify(inputMention);
    tagifyMention.on('change', function(e){
        var tags = JSON.parse(e.detail.value).map(function(tag) { return tag.value; });
        @this.set('mention', tags.join(','));
    });

   var inputParcour = document.querySelector('#parcour_tags');
    var tagifyParcour= new Tagify(inputParcour);
    tagifyParcour.on('change', function(e){
    var tags = JSON.parse(e.detail.value).map(function(tag) { return tag.value; });
    @this.set('parcour', tags.join(','));
    });
</script>
@endpush

