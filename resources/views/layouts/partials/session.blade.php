@session('status')
<div class="container mt-3">
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Félicitation!</strong> {{ $value}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
@endsession

@session('sent')
<div class="container mt-3">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Merci!</strong> {{ $value}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
@endsession

@session('error')
<div class="container mt-3">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Attention!</strong> {{ $value}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
@endsession
