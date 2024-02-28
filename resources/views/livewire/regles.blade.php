<div>
    <section class="bg-primary bg-opacity-10">
        <div class="container">
            <div class="row">
                <div class="mx-auto text-center col-lg-8">
                    <!-- Title -->
                    <h1>{{ $title }} </h1>
                    <p>Dernière mise à jour: {{ $updated_at }}</p>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <section class="d-flex justify-content-center align-items-center vh-80">
        <div class="card w-50">
            <div class="card-body">
                <div class="container">
                    <div class="row g-4">
                        <!-- Left side START -->
                        <div class="col-md-12">
                            <!-- Get Started content START -->
                                <div class="bg-transparent card">
                                    <!-- Article Info -->
                                    <div class="px-0 pb-0 card-body">
                                        <p>
                                            {!! $body !!}
                                        </p>
                                    </div>
                                </div>
                             <!-- Get Started content END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
