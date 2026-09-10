
<div class="card mx-auto h-100 matrix-card" style="width: 18rem;">
     <img src="..." class="card-img-top" alt="{{ $article->title }}" style="object-fit:contain; height: 200px;">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle mb-2">€{{ $article->price }}</h6>
        
         <div class="d-flex justify-content-evenly align-items-center mt-5 gap-2">
    <a href="{{ route('article.show', $article) }}" class="btn btn-custom-sm btn-red flex-fill">Dettagli</a>
    <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-custom-sm btn-blue flex-fill">{{ $article->category->name }}</a>

       
    </div>
</div>