<div>
    @if(!$cat)
    <!-- Page main content START -->
    <div class="border page-content-wrapper">
        <!-- Title -->
        <div class="mb-3 row">
            <div class="col-12 ">
                <h3 class="mb-2 h3 mb-sm-0">Liste des staffs
                    <span class="badge bg-orange bg-opacity-10 text-orange">
                        {{$staffs->count() }}
                    </span>
                </h3>
                <a href="#" wire:click="AddCat()" class="mb-0 btn btn-sm btn-primary">
                    Catégories
                </a>
                <a href="#" class="mb-0 btn btn-sm btn-primary"
                    data-bs-toggle="modal" data-bs-target="#addStaff">
                    Nouvelle staffs
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
                                <th scope="col" class="border-0 rounded-start">Staffs</th>
                                <th scope="col" class="border-0">Fonction</th>
                                <th scope="col" class="border-0">IM</th>
                                <th scope="col" class="border-0">Status</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>
                        <!-- Table body START -->
                        <tbody>
                            @foreach($staffs as $staff)
                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            @if(!empty($staff->image_path))
                                            <img src="{{ asset('storage/' . $staff->image_path) }}"
                                                class="avatar-img rounded-circle" alt="">
                                            @else
                                            <img src="{{ asset('assets/images/courses/4by3/08.jpg') }}" class="rounded"
                                                alt="">
                                            @endif
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">
                                                {{ $staff->name }} <br>
                                                <small>{{ $staff->staffCat->title }}</small>
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{ $staff->job }}
                                </td>
                                 <td>
                                    <div class="d-flex align-items-center">
                                        <small class="mb-0 fw-light">{{ $staff->matricule }}</small>
                                    </div>
                                </td>
                                <!-- Table data -->
                                <td>
                                    @if($staff->is_active == true)
                                    <span class="badge bg-success">Actif</span>
                                    @else
                                    <span class="badge bg-danger">Désactif</span>
                                    @endif
                                </td>
                                <!-- Table data -->
                                <td>
                                    <a href="#" wire:click="edit({{ $staff->id }})"
                                        class="mb-1 btn btn-sm btn-success me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#editStaff">Editer</a>
                                    <button class="mb-0 btn btn-sm btn-danger" wire:confirm="Vous voulez supprimer?"
                                        wire:click="delete({{ $staff->id }})">Supprimer</button>
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
                            {{ $staffs->links() }}
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
    @include('livewire.admin.universite.addStaff')
    @include('livewire.admin.universite.editStaff')

    @else
    @include('livewire.admin.universite.cates.index')
    @endif
</div>
