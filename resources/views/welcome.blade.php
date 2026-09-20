<x-layout>
    <div class="container-fluid header">
        <div class="row vh-100 align-items-center">
            <div class="col-12 content text-center" id="intro">

                <!-- TERMINAL H1 -->
                <h1 class="display-4 fw-bold terminal-h1">
                    <span class="cmdline">
                        <span class="prompt"></span><span id="cmdPrefix"></span><span id="cursor" class="cursor">_</span>
                    </span>
                    <span class="wordline">
                        <span id="cmdWord" class="rotating-word"></span>
                    </span>
                </h1>

                @if (session('status'))
                <div class="alert alert-matrix">
                    {{ session('status') }}
                </div>
                @endif

                 @if (session('message'))
                <div class="alert alert-matrix">
                    {{ session('message') }}
                </div>
                @endif

                

                @if (session()->has('errorMessage'))
                <div class="alert alert-matrix-danger text-center shadow rounded w-50">
                    {{ session('errorMessage') }}
                </div>
                @endif

                <p class="header-sub mt-3">
                   {{__('ui.EyNiOc')}}
                </p>
                <span class="text-white">{{__('ui.BsT:')}}</span>

                <div class="d-flex justify-content-center flex-wrap mt-3">
                    <button class="btn btn-custom btn-red" onclick="window.location.href='{{ route('homepage') }}'"> {{__('ui.FoM')}}</button>
                    <button class="btn btn-custom btn-blue" onclick="window.location.href='{{ route('homepage') }}'">Click Here</button>
                    
                     <div>
                    @auth
                        <a class="btn btn-custom" onclick="window.location.href='{{ route('create.article') }}'">{{__('ui.PaA')}}</a>
                    @endauth
                </div>
                </div>

            </div>
        </div>
    </div>

<!-- SEZIONE ARTICOLI RECENTI -->
<div class="container-fluid">
    <div class="row justify-content-center align-items-center py-5">
        @forelse ($articles as $article)
        <div class="col-12 col-md-3">
            <x-card :article="$article" />
        </div>
        @empty
        <div class="col-12">
            <h3 class="text-center">
               {{__('ui.ThereAreNoArticles')}}
            </h3>
        </div>
        @endforelse
    </div>
</div>
<!--FINE ARTICOLI RECENTI-->

</x-layout>