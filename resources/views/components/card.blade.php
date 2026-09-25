
<div class="card mx-auto h-100 matrix-card" style="max-width: 18rem;">
     <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}"
    class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">


    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle mb-2">€{{ $article->price }}</h6>
        
         <div class="d-flex justify-content-evenly align-items-center mt-5 gap-2 flex-wrap" style="min-width: 0;">
    <a href="{{ route('article.show', $article) }}" class="btn btn-custom-sm btn-red flex-fill" style="min-width: 0;">Dettagli</a>
    <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-custom-sm btn-blue flex-fill" style="min-width: 0;">{{ $article->category->name }}</a>

         </div>
    </div>
</div>