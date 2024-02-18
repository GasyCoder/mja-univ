<div>
    <!-- Page main content START -->
    <div class="border page-content-wrapper">
        <!-- Title -->
        <div class="row">
            <div class="mb-3 col-12">
                <h1 class="mb-2 h3 mb-sm-0">Tableau de bord</h1>
            </div>
        </div>
        @include('livewire.admin.counter')
        <!-- Chart and Ticket START -->
        <div class="mb-4 row g-4">

            <!-- Chart START -->
            <div class="col-xxl-8">
                <div class="shadow card h-100">

                    <!-- Card header -->
                    <div class="p-4 card-header border-bottom">
                        <h5 class="card-header-title">Statistiques</h5>
                    </div>

                    <!-- Card body -->
                    <div class="card-body">
                        <!-- Apex chart -->
                        <div id="ChartPayout"></div>
                    </div>
                </div>
            </div>
            <!-- Chart END -->

            <!-- Ticket START -->
            <div class="col-xxl-4">
                <div class="shadow card h-100">
                    <!-- Card header -->
                    <div class="p-4 card-header border-bottom d-flex justify-content-between align-items-center">
                        <h5 class="card-header-title">Abonnement</h5>
                        <a href="#" class="p-0 mb-0 btn btn-link">View all</a>
                    </div>

                    <!-- Card body START -->
                    <div class="p-4 card-body">

                        <!-- Ticket item START -->
                        <div class="d-flex justify-content-between position-relative">
                            <div class="d-sm-flex">
                                <!-- Avatar -->
                                <div class="flex-shrink-0 avatar avatar-md">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg"
                                        alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="mt-2 ms-0 ms-sm-2 mt-sm-0">
                                    <h6 class="mb-0"><a href="#" class="stretched-link">Lori Stevens</a></h6>
                                    <p class="mb-0">New ticket #759 from Lori Stevens for General Enquiry</p>
                                    <span class="small">8 hour ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- Ticket item END -->

                        <hr><!-- Divider -->

                        <!-- Ticket item START -->
                        <div class="d-flex justify-content-between position-relative">
                            <div class="d-sm-flex">
                                <!-- Avatar -->
                                <div class="flex-shrink-0 avatar avatar-md">
                                    <div class="avatar-img rounded-circle bg-purple bg-opacity-10">
                                        <span
                                            class="text-purple position-absolute top-50 start-50 translate-middle fw-bold">DB</span>
                                    </div>
                                </div>
                                <!-- Info -->
                                <div class="mt-2 ms-0 ms-sm-2 mt-sm-0">
                                    <h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
                                    <p class="mb-0">Comment from Billy Vasquez on ticket #659</p>
                                    <span class="small">8 hour ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- Ticket item END -->

                        <hr><!-- Divider -->

                        <!-- Ticket item START -->
                        <div class="d-flex justify-content-between position-relative">
                            <div class="d-sm-flex">
                                <!-- Avatar -->
                                <div class="flex-shrink-0 avatar avatar-md">
                                    <div class="avatar-img rounded-circle bg-orange bg-opacity-10">
                                        <span
                                            class="text-orange position-absolute top-50 start-50 translate-middle fw-bold">WB</span>
                                    </div>
                                </div>
                                <!-- Info -->
                                <div class="mt-2 ms-0 ms-sm-2 mt-sm-0">
                                    <h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
                                    <p class="mb-0"><b>Webestica</b> assign you a new ticket for <b>Eduport theme</b>
                                    </p>
                                    <span class="small">5 hour ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- Ticket item END -->

                        <hr><!-- Divider -->

                        <!-- Ticket item START -->
                        <div class="d-flex justify-content-between position-relative">
                            <div class="d-sm-flex">
                                <!-- Avatar -->
                                <div class="flex-shrink-0 avatar avatar-md">
                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg"
                                        alt="avatar">
                                </div>
                                <!-- Info -->
                                <div class="mt-2 ms-0 ms-sm-2 mt-sm-0">
                                    <h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
                                    <p class="mb-0">Thanks for contact us with your issues.</p>
                                    <span class="small">9 hour ago</span>
                                </div>
                            </div>
                        </div>
                        <!-- Ticket item END -->

                    </div>
                    <!-- Card body END -->
                </div>
            </div>
            <!-- Ticket END -->
        </div>
        <!-- Chart and Ticket END -->

        <!-- Page main content START -->
            <div class="col-lg-12">
                <div class="shadow card h-100">
                    <!-- Card header -->
                    <div class="p-4 card-header border-bottom">
                        <h5 class="card-header-title">Messages non lu
                            <span class="badge bg-orange bg-opacity-10 text-orange">{{ $contacts->where('is_read', true)->count() }}</span></h5>
                    </div>
                @if($contacts->count() > 0)
                <!-- All review table START -->
                <div class="p-4 card-body">
                    <!-- Table START -->
                    <div class="table-responsive border-0">
                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
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
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#openMessage"
                                                    class="stretched-link">{{ $contact->name }}</a><br>
                                                    <small>{{ $contact->created_at->diffForHumans() }}</small>
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- Table data -->
                                    <td>
                                        <h6 class="table-responsive-title text-truncate-2 mb-0">
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
                                        <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Supprimer"
                                            data-bs-original-title="Delete"
                                            wire:click="delete({{ $contact->id }})"
                                            wire:confirm="Vous êtes sur de supprimer?">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <a href="#" wire:click="open({{ $contact->id }})" class="btn btn-sm btn-info-soft mb-0"
                                            data-bs-toggle="modal"
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
                                <a class="mb-0 btn btn-sm btn-success-soft" href="{{ route('contact') }}"> Voir tous </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card footer START -->
                    <!-- Card footer START -->
                    <div class="card-footer bg-transparent px-0">
                        <!-- Pagination START -->
                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                            <!-- Pagination -->
                            <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
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
<div wire:ignore.self class="modal fade" id="openMessage" tabindex="-1" aria-labelledby="openMessageLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="openMessageLabel">{{ $name }}</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal" aria-label="Close"><i
                            class="bi bi-x-lg"></i></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form class="row">
                        <!-- Input item -->
                        <div class="col-12 mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" readonly value="{{ $email }}" class="form-control">
                        </div>
                        <!-- Input item -->
                        <div class="col-12 mb-3">
                            <label class="form-label">Objet</label>
                            <input type="text" readonly value="{{ $subject }}" class="form-control">
                        </div>
                        <p class="lead mb-2 mt-2">
                            {{ $message }}
                        </p>
                    </form>
                </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <a href="#" wire:click="read({{ $contactId }})"
                class="btn btn-info-soft my-0">Marquer comme lu</a>

                <a href="#" wire:click="delete({{ $contactId }})"
                wire:confirm="Vous êtes sur de supprimer?"
                class="btn btn-danger-soft my-0">Supprimer</a>
            </div>
        </div>
    </div>
</div>
<!-- Popup modal for Change Password END -->
</div>


