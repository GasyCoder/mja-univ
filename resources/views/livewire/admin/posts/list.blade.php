<!-- Card header START -->
<div class="card-header bg-light">
    <!-- Search and select START -->
    <div class="row g-3 align-items-center justify-content-between">

        <!-- Search bar -->
        <div class="col-md-12">
            <form class="rounded position-relative">
                <input class="form-control bg-body" type="search" placeholder="Rechercher..." aria-label="Search">
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
<!-- All review table START -->
<div class="pb-0 mt-4 mb-4 bg-transparent border card card-body">

    <!-- Table START -->
    <div class="border-0 table-responsive">
        <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
            <!-- Table head -->
            <thead>
                <tr>
                    <th scope="col" class="border-0 rounded-start">#</th>
                    <th scope="col" class="border-0">Articles</th>
                    <th scope="col" class="border-0">Slide</th>
                    <th scope="col" class="border-0">Catégorie</th>
                    <th scope="col" class="border-0">Ajouté</th>
                    <th scope="col" class="border-0">Mis à jour</th>
                    <th scope="col" class="border-0">Status</th>
                    <th scope="col" class="border-0 rounded-end">Action</th>
                </tr>
            </thead>

            <!-- Table body START -->
            <tbody>
                @foreach($posts as $key => $post)
                <!-- Table row -->
                <tr>
                    <!-- Table data -->
                    <td>{{ $key+1 }}</td>
                    <!-- Table data -->
                    <td>
                        <div class="d-flex align-items-center position-relative">
                            <!-- Image -->
                            <div class="w-60px">
                                @if(!empty($post->images))
                                @php
                                $images = explode(',', $post->images);
                                @endphp
                                <img src="{{ asset('storage/' . $images[0]) }}" class="rounded" alt="">
                                @else
                                <img src="{{ asset('assets/images/default/post.png') }}" class="rounded" alt="">
                                @endif
                            </div>
                            <!-- Title -->
                            <span class="mb-0 table-responsive-title ms-2">
                                <a href="#" class="">{{ Str::limit($post->title, 35) }}</a>
                            </span>
                        </div>
                    </td>
                    <!-- Table data -->
                    <td>
                        <span class="badge {{ $post->is_slider ? 'bg-success' : 'bg-danger' }}">
                            {{ $post->is_slider ? 'Oui' : 'Non' }}
                        </span>
                    </td>
                    <td>
                        <span class="text-{{ $post->category->color }}">{{ $post->category->name }}</span>
                    </td>
                    <!-- Table data -->
                    <td>{{ $post->created_at->format('d-M-y') }}</td>
                    <td>{{ $post->updated_at->format('d-M-y') }}</td>
                    <!-- Table data -->
                    <td>
                       @if($post->is_active == true)
                       <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" value="1" wire:click="active({{ $post->id }})" checked  type="checkbox" id="checkPrivacy1">
                        </div>
                        @else
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" value="0" wire:click="desactive({{ $post->id }})" type="checkbox" id="checkPrivacy2">
                        </div>
                        @endif
                    </td>

                    <!-- Table data -->
                    <td>
                        <a href="#" wire:click="edit({{ $post->id }})"
                            class="mb-1 btn btn-success-soft btn-round me-1 mb-md-0"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top" title="" data-bs-original-title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <button
                            wire:click="delete({{ $post->id }})"
                            class="mb-1 btn btn-warning-soft btn-round me-1 mb-md-0"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top" title=""
                            data-bs-original-title="Corbeille">
                            <i class="bi bi-trash"></i>
                        </button>
                        {{-- <a href="#" class="mb-0 btn btn-sm btn-info-soft" data-bs-toggle="modal"
                            data-bs-target="#viewReview">View</a> --}}
                    </td>
                </tr>
                @endforeach

            </tbody>
            <!-- Table body END -->
        </table>
    </div>
    <!-- Table END -->

    <!-- Card footer START -->
    <div class="px-0 bg-transparent card-footer">
        <!-- Pagination START -->
        <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
            <!-- Content -->
            <!-- Pagination -->
            <nav class="mb-0 d-flex justify-content-center" aria-label="navigation">
                <ul class="mb-0 rounded pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex">
                    {{ $posts->links() }}
                </ul>
            </nav>
        </div>
        <!-- Pagination END -->
    </div>
    <!-- Card footer END -->
</div>
<!-- All review table END -->
