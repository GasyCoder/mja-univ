<div>
@if($staffCats->isEmpty())
   <section class="bg-light">
        <div class="container">
            <div class="row position-relative pb-4">
                <div class="col-lg-8 position-relative">
                    <h1 class="m-0">Nos staffs</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-start">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/" wire:navigate>Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tous nos staffs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-4 col-sm-3">
                <div class="nav flex-column nav-pills navbar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <nav class="nav nav-pills nav-pill-soft flex-column">
                    @foreach ($staffCats as $staffCat)
                    <a class="nav-link fw-semi-bold {{ $loop->first ? 'active' : '' }}" id="v-pills-tab-{{ $staffCat->id }}"
                        data-bs-toggle="pill" href="#v-pills-{{ $staffCat->id }}" role="tab"
                        aria-controls="v-pills-{{ $staffCat->id }}" aria-selected="{{ $loop->first }}">
                        <i class="bi bi-caret-right"></i> {{ $staffCat->title }}
                    </a>
                    @endforeach
                    </nav>
                </div>
            </div>
            <div class="col-8 col-sm-9">
                <div class="tab-content pt-0" id="v-pills-tabContent">
                    @foreach ($staffCats as $staffCat)
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="v-pills-{{ $staffCat->id }}"
                        role="tabpanel" aria-labelledby="v-pills-tab-{{ $staffCat->id }}">
                        <div class="row g-4">
                            @foreach ($staffCat->staffs as $staff)
                            <div class="col-lg-10 col-xl-6">
                                <div class="card shadow p-2">
                                    <div class="row g-0">
                                        <!-- Image -->
                                        <div class="col-md-3">
                                            <img src="{{ asset('storage/' .$staff->image_path)}}" class="rounded-2" alt="...">
                                        </div>
                                        <!-- Card body -->
                                        <div class="col-md-9">
                                            <div class="card-body">
                                                <!-- Title -->
                                                <div class="d-sm-flex justify-content-sm-between mb-0 mb-sm-0">
                                                    <div>
                                                        <h6 class="mb-0">
                                                           {{ $staff->name }}
                                                        </h6>
                                                        <p class="small mb-0 mb-sm-0">
                                                            {{ $staff->job }}
                                                            - IM: {{ $staff->matricule }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <p class="text-truncate-2 mb-0">
                                                    {{ $staff->about }}
                                                </p>
                                                <!-- Info -->
                                                <div class="d-sm-flex justify-content-sm-between align-items-center">
                                                    <!-- Title -->
                                                    <h6 class="text-orange mb-0">{{ $staff->staffCat->title }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </section>
@else
<div class="d-flex justify-content-center align-items-center pt-8 pb-8">
    <div class="shadow">
            <div class="py-2 mb-0 alert alert-danger d-flex align-items-center">
                <div class="text-center">
                    <small class="mb-0">Aucun données disponible ici pour le moment.</small>
                </div>
            </div>
    </div>
</div>
@endif
</div>
