<x-layout>
    <div class="container-fluid pt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="matrix-card p-3" style="min-height:auto; cursor:default;">
                    <h1 class="text-center pb-2" style="font-size: 1.5rem;">
                        Revisor dashboard
                    </h1>
                </div>
            </div>
        </div>
    </div>

    
    @if (session()->has('message'))
    <div class="row justify-content-center">
        <div class="col-5 alert alert-matrix text-center shadow rounded">
            {{ session('message') }}
        </div>
    </div>
@endif


    @if ($article_to_check)
    <div class="row justify-content-center pt-5">
       <div class="col-md-8">
    <div class="row justify-content-center">
        @if ($article_to_check->images->count())
          @foreach ($article_to_check->images as $key => $image)
    <div class="col-6 col-md-4 mb-4 text-center">
        <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow"
            alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
    </div>
@endforeach

        @else
            @for ($i = 0; $i < 6; $i++)
                <div class="col-6 col-md-4 mb-4 text-center">
                    <img src="https://picsum.photos/300" alt="immagine segnaposto"
                        class="img-fluid rounded img-matrix">
                </div>
            @endfor
        @endif
    </div>
</div>

    <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
        <div>
            <h1>{{ $article_to_check->title }}</h1>
            <h3>Autore: {{ $article_to_check->user->name }} </h3>
            <h4>{{ $article_to_check->price }}€</h4>
            <h4 class="fst-italic text-muted">#{{ $article_to_check->category->name }}</h4>
            <p class="h6">{{ $article_to_check->description }}</p>
        </div>
        <div class="d-flex pb-4 justify-content-around">
            <form action=" {{ route ('reject' , ['article' =>$article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn btn-custom-sm btn-custom-sm-red py-2 px-5 fw-bold">Rifiuta</button>
            </form>
            <form action=" {{ route ('accept' , ['article' =>$article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="btn btn-custom-sm py-2 px-5 fw-bold">Accetta</button>
            </form>
        </div>
    </div>
    </div>
    @else
    <div class="row justify-content-center align-items-center height-custom text-center">
        <div class="col-12">
            <h1 class="fst-italic display-5">
                Nessun articolo da revisionare
            </h1>
            <a href="{{ route('homepage') }}" class="mt-5 btn btn-custom-sm">Torna all'homepage</a>
        </div>
    </div>
    @endif
</x-layout>