<div>
    <!-- =======================
Main Banner END -->
    @if($etabs->count() > 0)
    <section class="bg-light">
        <!-- ... le reste de votre code ... -->
        <section class="pt-2 mb-6">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if(Route::is('etablissement'))
                        <!-- ... le reste de votre code ... -->
                        @else
                        @if(isset($doctorales) && $doctorales->count() > 0)
                        @include('livewire.etablissement.doctoral')
                        @else
                        <div class="mt-4 text-center alert alert-warning" role="alert">
                            <p>Aucun données disponible ici pour le moment.</p>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </section>
        @else
        <div class="pt-8 pb-8 d-flex justify-content-center align-items-center">
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
