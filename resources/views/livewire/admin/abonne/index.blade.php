<div>
    <!-- Page main content START -->
    <div>
        <!-- Page main content START -->
        <div class="col-lg-12">
            <div class="shadow card h-100">
                <!-- Card header -->
                <div class="p-4 card-header border-bottom">
                    <h5 class="card-header-title">Liste des abonnées
                        <span class="badge bg-orange bg-opacity-10 text-orange">
                            {{ $abonnes->where('is_subscribed', true)->count() }}
                        </span>
                    </h5>
                    <a href="#" class="mb-0 btn btn-sm btn-primary"
                    data-bs-toggle="modal" data-bs-target="#Addemail">Nouvelle Email</a>
                </div>
                @if($abonnes->count() > 0)
                <!-- All review table START -->
                <div class="p-4 card-body">
                    <!-- Table START -->
                    <div class="table-responsive border-0">
                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 rounded-start">#</th>
                                    <th scope="col" class="border-0">Email</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>
                            <!-- Table body START -->
                            <tbody>
                                <!-- Table row -->
                                @foreach($abonnes as $key => $abonne)
                                <tr>
                                    <!-- Table data -->
                                    <td>{{ $key+1 }}</td>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="mb-0">
                                                    {{ $abonne->email }}<br>
                                                    <small>{{ $abonne->created_at->diffForHumans() }}</small>
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- Table data -->
                                    <td>
                                       @if($abonne->is_subscribed == true)
                                       <a href="#" wire:click="desabonne({{ $abonne->id }})"
                                        class="btn btn-sm btn-danger-soft mb-0">Désabonner
                                        </a>
                                        @else
                                        <a href="#" wire:click="reabonne({{ $abonne->id }})"
                                            class="btn btn-sm btn-info-soft mb-0">Réabonner
                                        </a>
                                        @endif
                                    </td>
                                    <!-- Table data -->
                                    <td>
                                        <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Supprimer" data-bs-original-title="Delete"
                                            wire:click="delete({{ $abonne->id }})"
                                            wire:confirm="Vous êtes sur de supprimer?">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Table END -->
                    <!-- Card footer START -->
                    <div class="card-footer bg-transparent px-0">
                        <!-- Pagination START -->
                        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                            <!-- Pagination -->
                            <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                                <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                  {{ $abonnes->links() }}
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
                            <small class="mb-0">Aucun abonnés pour le moment</small>
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
    <div wire:ignore.self class="modal fade" id="Addemail" tabindex="-1" aria-labelledby="AddemailLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal header -->
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="AddemailLabel">Ajouter</h5>
                    <button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="modal"
                        aria-label="Close"><i class="bi bi-x-lg"></i></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form class="row" wire:submit.prevent="save">
                        <!-- Input item -->
                        <div class="col-12 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" wire:model="email" placeholder="Saisir email" class="form-control">
                        </div>
                      <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success-soft my-0">Ajouter</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for Change Password END -->
</div>
