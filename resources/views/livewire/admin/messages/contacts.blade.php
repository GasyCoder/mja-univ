<div>
    <!-- Page main content START -->
    <div>
        <!-- Page main content START -->
        <div class="col-lg-12">
            <div class="shadow card h-100">
                <!-- Card header -->
                <div class="p-4 card-header border-bottom">
                    <h5 class="card-header-title">Messages lu
                        <span class="badge bg-orange bg-opacity-10 text-orange">{{ $contacts->where('is_read', false)->count() }}</span>
                    </h5>
                </div>
                @if($contacts->count() > 0)
                <!-- All review table START -->
                <div class="p-4 card-body">
                    <!-- Table START -->
                    <div class="border-0 table-responsive">
                        <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 rounded-start">#</th>
                                    <th scope="col" class="border-0">Nom</th>
                                    <th scope="col" class="border-0">Objet</th>
                                    <th scope="col" class="border-0">Email</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>
                            <!-- Table body START -->
                            <tbody>
                                <!-- Table row -->
                                @foreach($contacts as $key => $contact)
                                <tr>
                                    <!-- Table data -->
                                    <td>{{ $key+1 }}</td>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="mb-0">
                                                    <a href="#" wire:click="open({{ $contact->id }})"
                                                        data-bs-toggle="modal" data-bs-target="#openMessage"
                                                        class="stretched-link">{{ $contact->name }}</a><br>
                                                    <small>{{ $contact->created_at->diffForHumans() }}</small>
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- Table data -->
                                    <td>
                                        <h6 class="mb-0 table-responsive-title text-truncate-2">
                                            <a href="#">
                                                {{ $contact->subject }}
                                            </a>
                                        </h6>
                                    </td>
                                    <!-- Table data -->
                                    <td>
                                        {{ $contact->email }}
                                    </td>
                                    <!-- Table data -->
                                    <td>
                                        <button class="mb-1 btn btn-danger-soft btn-round me-1 mb-md-0"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Supprimer"
                                            data-bs-original-title="Delete" wire:click="delete({{ $contact->id }})"
                                            wire:confirm="Vous êtes sur de supprimer?">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <a href="#" wire:click="open({{ $contact->id }})"
                                            class="mb-0 btn btn-sm btn-info-soft" data-bs-toggle="modal"
                                            data-bs-target="#openMessage">Voir</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Table END -->
                    <!-- Card footer START -->
                    <div class="card-footer border-top">
                        <div class="py-2 mb-0 alert alert-success d-flex align-items-center">
                            <div>
                                <small class="mb-0">{{ $contacts->count() }} boîte de réception</small>
                            </div>
                            <div class="ms-auto">
                                <a class="mb-0 btn btn-sm btn-success-soft" href="{{ route('contact') }}"> Voir tous
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card footer START -->
                    <!-- Card footer START -->
                    <div class="px-0 bg-transparent card-footer">
                        <!-- Pagination START -->
                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                            <!-- Pagination -->
                            <nav class="mb-0 d-flex justify-content-center" aria-label="navigation">
                                <ul
                                    class="mb-0 rounded pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex">
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- Card footer END -->
                </div>
                <!-- All review table END -->
                @else
                <div class="card-footer border-top">
                    <div class="py-2 mb-0 alert alert-danger d-flex align-items-center">
                        <div>
                            <small class="mb-0">Aucun contact pour le moment</small>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <!-- Page main content END -->
        </div>
    </div>
    <!-- Page main content END -->
    <!-- Popup modal for Change Password START -->
    @include('livewire.admin.messages.modal')
    <!-- Popup modal for Change Password END -->
</div>
