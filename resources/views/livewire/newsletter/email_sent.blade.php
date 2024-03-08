<x-guest-layout>
    @session('status')
    <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
       {{ $value}}
    </div>
    @endif
    @session('error')
    <div class="container mt-3">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Attention!</strong> {{ $value}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endsession
</x-guest-layout>
