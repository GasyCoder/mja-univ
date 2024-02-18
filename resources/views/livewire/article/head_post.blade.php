@if(!empty($images[0]))
<section class="bg-blue py-7 position-relative"
    style="background-image:url({{ asset('storage/' .$images[0]) }});
    background-position: center left; background-size: cover;">
@else
<section class="bg-blue py-7 position-relative"
        style="background-image:url({{ asset('assets/images/default/post.png') }});
    background-position: center left; background-size: cover;">
    @endif
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row justify-content-lg-between">
            <div class="col-lg-10">
                <!-- Title -->
                <h1 class="text-light">{{ $title }}</h1>
                <p class="text-light">{{ $sub_title }}</p>
                <!-- Content -->
                <ul class="mb-5 list-inline">
                    <li class="mb-0 text-secondary list-inline-item">
                        <span class="text-secondary">
                            <i class="fas fa-clock text-secondary me-1"></i>{{ $created->diffForHumans() }}</span><span
                            class="mx-2">|</span>
                        <span class="text-secondary"><i class="fas fa-eye me-1"></i>25 Vu</span><span
                            class="mx-2">|</span>
                        <div class="badge text-bg-success"><i class="fas fa-folder me-1"></i>{{ $category }}</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-end">
            <a href="/" wire:navigate class="btn btn-sm btn-outline-warning">
                <i class="fas fa-arrow-left me-1"></i>
                Retour au précedent
            </a>
        </div>
    </div>

@if(!empty($images[0]))
</section>
@else
</section>
@endif

