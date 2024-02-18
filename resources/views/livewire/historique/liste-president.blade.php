<!-- Table -->
<div class="row mt-4">
    <div class="col-12">
        <div class="table-responsive-md border-0">
            <!-- Table START -->
            <table class="table table caption-top table-bordered align-middle p-4 mb-0">

                <!-- Title -->
                <caption class="h5 mb-0 bg-primary text-white ps-4 rounded-top">Les Présidents (ou Recteurs) successifs
                    (avec le décret de nomination)
                </caption>

                <!-- Table head -->
                <thead class="border-0">
                    <tr class="border-top-0 table-border-color">
                        <th scope="col">Présidents</th>
                        <th scope="col">Année</th>
                        <th scope="col">Décret de nomination</th>
                    </tr>
                </thead>

                <!-- Table body START -->
                <tbody class="border-top-0">
                @foreach($liste_presidents as $liste_president)
                <!-- Table item -->
                <tr>
                    <!-- Table data -->
                    <td>
                        <!-- Avatar group and content -->
                        <div class="d-sm-flex align-items-center">
                            <!-- Avatar group -->
                            <ul class="avatar-group mb-2 mb-sm-0">
                                @foreach(explode(',', $liste_president->president_avatar) as $avatar)
                                    <li class="avatar avatar-md">
                                        <img class="avatar-img rounded-circle border-white" src="{{ asset('storage/' . $avatar) }}" alt="avatar">
                                    </li>
                                @endforeach
                            </ul>
                            <!-- Content -->
                            <div class="ms-sm-2">
                                <h6 class="mb-1">{{ $liste_president->president_name }}</h6>
                                <p class="mb-0">
                                    <span class="text-success">{{ $liste_president->is_current ? 'En exercice' : '' }}</span> {{ $liste_president->is_interim ? 'Commuté Intérimaire' : '' }} -
                                    {{$liste_president->mandat .' mandat ' }} - {{ $liste_president->is_dead ? 'Décédé' : '' }}
                                </p>
                            </div>
                        </div>
                    </td>
                    <!-- Table data -->
                    <td>
                        <span class="text-body">{{ $liste_president->president_year }}</span>
                    </td>
                    <!-- Table data -->
                    <td>
                        <span class="text-body">{{ $liste_president->decret }}</span>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <!-- Table body END -->
            </table>
            <!-- Table END -->
        </div>
    </div>
</div>
