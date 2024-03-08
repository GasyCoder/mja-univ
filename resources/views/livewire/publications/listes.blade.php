<ul class="px-3 mb-4 nav nav-pills nav-pills-bg-soft justify-content-sm-center" id="course-pills-tab" role="tablist">
    @foreach($publicationsByAnnee as $annee => $publications)
    <!-- Tab item -->
    <li class="nav-item me-2 me-sm-5">
        <button class="nav-link mb-2 mb-md-0 @if($loop->first) active @endif" id="course-pills-tab-{{ $annee }}"
            data-bs-toggle="pill" data-bs-target="#course-pills-tabs-{{ $annee }}" type="button" role="tab"
            aria-controls="course-pills-tabs-{{ $annee }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{
            $annee }}</button>
    </li>
    @endforeach
</ul>
<!-- Tabs END -->

<!-- Tabs content START -->
<div class="tab-content" id="course-pills-tabContent">
    @foreach($publicationsByAnnee as $annee => $publications)
    <!-- Content START -->
    <div class="tab-pane fade show @if($loop->first) active @endif" id="course-pills-tabs-{{ $annee }}" role="tabpanel"
        aria-labelledby="course-pills-tab-{{ $annee }}">
        <div class="row g-4">
            @foreach($publications as $pub)
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="bg-transparent border card action-trigger-hover">
                    <!-- Image -->
                    <div class="overflow-hidden rounded card card-metro">
                        <img src="{{ asset('assets/images/element/pdf3.png') }}" class="p-4" alt="">
                        <div class="p-2 card-img-overlay d-flex flex-column z-index-1">
                            <div>
                                <span class="badge text-bg-light bg-opacity-8">
                                    {{ $bytesToHuman($pub->size) }}
                                </span>
                            </div>
                        </div>
                        <!-- Image overlay -->
                        <div class="card-img-overlay d-flex">
                            <!-- Info -->
                            <div class="mt-auto card-text">
                                <a href="{{ route('download_revue', ['revue_id' => $pub->revue_id, 'uuid' => $pub->uuid]) }}"
                                    target="_blank" class="mt-auto text-white h5 stretched-link">
                                    {{ $pub->revue->sigle }} - {{ $pub->annee->annee }}
                                </a>
                                <div class="text-white">
                                    <a href="#" class="fw-bold text-dark badge bg-warning bg-opacity-2">
                                        {{ $pub->volume->volumeName }}</a>
                                    <a href="#" class="text-white badge bg-success bg-opacity-10">
                                        p.{{ $pub->startPage }}-{{ $pub->endPage }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <small class="ms-4">{{ 'ISSN: ' . ($pub->issn ? Str::limit($pub->issn, 17) : 'N/A') }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- Row END -->
    </div>
    <!-- Content END -->
    @endforeach
</div>
<!-- Tabs content END -->
