<div>
<section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-4 text-center bg-light rounded-3">
                        <h2 class="m-0">{{ $sigle }}</h2>
                        <p>{{ $sub_title }}</p>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('listes_revue') }}" wire:navigate>Publications scientifiques</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $sigle }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container pt-4">
        <!-- Title -->
        <div class="row">
            <div class="col-lg-8 col-xl-9">
            @include('livewire.publications.listes')
            </div>
            @include('livewire.publications.sidebar')
        </div>
    </div>
</section>
</div>
