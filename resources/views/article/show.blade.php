<x-layout>
    <div class="container">
        <div class="row mt-3 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-4">Dettaglio dell'articolo: {{ $article->title }}</h1>
            </div>
        </div>
        <div class="row mt-3 justify-content-center py-5">
            <div class="col-12 col-md-6 mb-3">
                <div class="swiper article-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3 text-center">
                <h2 class="display-5"><span class="fw-bold">Titolo: </span>{{ $article->title }}</h2>
                <div class="d-flex flex-column justify-content-center h-75">
                    <h4 class="fw-bold">Prezzo: {{ $article->price }} €</h4>
                    <h5>Descrizione:</h5>
                    <p>{{ $article->description }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
    <a href="{{ route('article.index') }}" class="btn btn-custom ">
        ← Torna alla lista
    </a>
</div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper('.article-swiper', {
                modules: [SwiperNavigation, SwiperPagination],
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                loop: true,
            });
        });
    </script>
</x-layout>
