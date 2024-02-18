<div>
    <!-- Page main content START -->
    <div class="border page-content-wrapper">
        <!-- Title -->
        <div class="mb-3 row">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h3 class="mb-2 h3 mb-sm-0">Liste des Présidents
                    <span class="badge bg-orange bg-opacity-10 text-orange">
                        {{$presidents->count() }}
                    </span>
                </h3>
                <a href="#" class="mb-0 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addStory">
                    Nouvelle Insertion
                </a>
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
                                <th scope="col" class="border-0 rounded-start">Président</th>
                                <th scope="col" class="border-0">Année</th>
                                <th scope="col" class="border-0">En exercice</th>
                                <th scope="col" class="border-0">Décedé</th>
                                <th scope="col" class="border-0">Par intérim</th>
                                <th scope="col" class="border-0">Décret</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>
                        <!-- Table body START -->
                        <tbody>
                            @foreach($presidents as $president)
                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            @if(!empty($president->president_avatar))
                                            @php
                                            $images = explode(',', $president->president_avatar);
                                            @endphp
                                            <img src="{{ asset('storage/' . $images[0]) }}" class="avatar-img rounded-circle" alt="">
                                            @else
                                            <img src="{{ asset('assets/images/courses/4by3/08.jpg') }}" class="rounded" alt="">
                                            @endif
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">
                                                {{ $president->president_name }}<br>
                                            </h6>
                                            <small class="">Mandat: {{ $president->mandat }}</small>
                                        </div>
                                    </div>
                                </td>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <small class="mb-0 fw-light">{{ $president->president_year }}</small>
                                    </div>
                                </td>
                                <td>
                                    @if($president->is_current == true)
                                    <span class="badge bg-success">Oui</span>
                                    @else
                                    <span class="badge bg-danger">Non</span>
                                    @endif
                                </td>
                                <td>
                                    @if($president->is_dead == true)
                                    <span class="badge bg-success">Oui</span>
                                    @else
                                    <span class="badge bg-danger">Non</span>
                                    @endif
                                </td>
                                <td>
                                    @if($president->is_interim == true)
                                    <span class="badge bg-success">Oui</span>
                                    @else
                                    <span class="badge bg-danger">Non</span>
                                    @endif
                                </td>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <small class="mb-0 fw-light">{{ $president->decret }}</small>
                                    </div>
                                </td>
                                <!-- Table data -->
                                <td>
                                    <a href="#" wire:click="edit({{ $president->id }})"
                                        class="mb-1 btn btn-sm btn-success me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#editStory">Editer</a>
                                    <button class="mb-0 btn btn-sm btn-danger" wire:confirm="Vous voulez supprimer?"
                                        wire:click="delete({{ $president->id }})">Supprimer</button>
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
                            {{ $presidents->links() }}
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
    @include('livewire.admin.president.add')
    @include('livewire.admin.president.edit')
</div>
