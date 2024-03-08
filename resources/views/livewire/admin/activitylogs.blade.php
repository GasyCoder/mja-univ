<div class="table-responsive">
    <table class="table align-middle table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Adresse IP</th>
                <th scope="col">Browser</th>
                <th scope="col">OS</th>
                <th scope="col">Lieu</th>
                <th scope="col">Url</th>
                <th scope="col">Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->user_id }}</td>
                <td>{{ $log->ip_address }}</td>
                <td>
                    @if (strpos($log->browser, 'Chrome') !== false)
                    <i class="bi bi-browser-chrome"></i>
                    @elseif (strpos($log->browser, 'Firefox') !== false)
                    <i class="bi bi-browser-firefox"></i>
                    @elseif(strpos($log->browser, 'Edge') !== false)
                    <i class="bi bi-browser-edge"></i>
                    @else
                    {{$log->browser}}
                    @endif
                </td>
                <td>
                    @if (strpos($log->os, 'Windows') !== false)
                    <i class="bi bi-windows"></i>
                    @elseif (strpos($log->os, 'Android') !== false)
                    <i class="bi bi-android2"></i>
                    @else
                    {{$log->os}}
                    @endif
                </td>
                <td>{{ $log->location }}</td>
                <td>{{ $log->url }}</td>
                <td>{{ $log->created_at->diffForHumans() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Card footer START -->
<div class="px-0 bg-transparent card-footer">
    <!-- Pagination START -->
    <div class="d-sm-flex justify-content-sm-center align-items-sm-center">
        <!-- Content -->
        <!-- Pagination -->
        <nav class="mb-0 d-flex justify-content-center" aria-label="navigation">
            <ul class="mb-0 rounded pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex">
                {{ $logs->links() }}
            </ul>
        </nav>
    </div>
    <!-- Pagination END -->
</div>
<!-- Card footer END -->
