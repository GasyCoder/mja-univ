<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/' . $images[0]) }}" class="card-img-top" alt="Image de l'article">
    <div class="card-body">
        <h5 class="card-title">Un nouvel article a été publié : {{ $post->title }}</h5>
        <p class="card-text">Voici le nouvel article :</p>
        <a href="{{ url('/posts/' . $post->slug) }}" class="btn btn-primary">Découvrir</a>
    </div>
</div>
<p>Si vous n'avez pas demandé cela, vous pouvez ignorer cet e-mail.</p>
