<div>
    <div>
        @if (count($searchResults) > 0)
        <section class="py-4">
            <div class="container">
               <div class="row align-items-center">
                    <div class="col-sm-12 col-xl-12">
                        <div class="p-0 text-center rounded-3">
                            <div class="alert alert-success" role="alert">
                                Vous avez {{ count($searchResults) }} résultats sur "{{ $search }}"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        @if (count($searchResults) == 0)
        <section class="py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-xl-12">
                        <div class="p-0 text-center rounded-3">
                            <div class="alert alert-danger" role="alert">
                                Aucun résultat trouvé pour "{{ $search }}"
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
        <section class="pt-2">
            <div class="container">
                <!-- resulats list START -->
                <div class="row g-4 justify-content-center">
                <!-- Search option START -->
                   @if (count($searchResults) > 0)
                    <div class="row align-items-center">
                        <!-- Search bar -->
                        <div class="col-sm-12 col-xl-12">
                            <form class="p-2 border rounded" method="GET" action="{{ route('search.results') }}">
                                <div class="input-group input-borderless">
                                    <input class="form-control me-1" wire:model="search" type="search" name="search"
                                        placeholder="Rechercher...">
                                    <button type="submit" class="mb-0 rounded btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                    <!-- Search option END -->
                    @foreach ($searchResults as $result)
                    <!-- Card item START -->
                    <div class="col-lg-4 col-xl-4">
                        <div class="p-2 shadow card">
                            <div class="row g-0">
                                <!-- Card body -->
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <!-- Title -->
                                        <div class="mb-2 d-sm-flex justify-content-sm-between mb-sm-3">
                                            <div>
                                                <h6 class="mb-0 card-title">
                                                    <a href="{{ $result['type'] == 'Etab' ? ($result['type_id'] == 5 ? route('single_doc', ['uuid' => $result['uuid']]) : route('single_etab', ['uuid' => $result['uuid']])) : route('open_article', ['slug' => $result['slug']]) }}"">
                                                        @if ($result['type'] == 'Etab')
                                                        {{ $result['name'] }}
                                                        @else
                                                        {{ $result['title'] }}
                                                        @endif
                                                    </a>
                                                </h6>
                                                <p class="mb-2 small mb-sm-0">{{ $result['type'] }}</p>
                                            </div>
                                        </div>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                            <!-- Title -->
                                            <a href="{{ $result['type'] == 'Etab' ? ($result['type_id'] == 5 ? route('single_doc', ['uuid' => $result['uuid']]) : route('single_etab', ['uuid' => $result['uuid']])) : route('open_article', ['slug' => $result['slug']]) }}"
                                                class="mb-0 text-orange">En savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                    @endforeach

                    @if (count($searchResults) == 0)
                    <!-- Search option START -->
                    <div class="row align-items-center">
                        <p class="mt-4 mb-4">Recherchez à nouveau et corrigez correctement votre mot-clé.</p>
                        <!-- Search bar -->
                        <div class="col-sm-12 col-xl-12">
                            <form class="p-2 border rounded" method="GET" action="{{ route('search.results') }}">
                                <div class="input-group input-borderless">
                                    <input class="form-control me-1" wire:model="search" type="search"
                                    name="search"
                                    placeholder="Rechercher...">
                                    <button type="submit" class="mb-0 rounded btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Search option END -->
                    @endif
                </div>
                <!-- Instructor list END -->
            </div>
        </section>
        <!-- =======================
        Inner part END -->
    </div>
</div>
