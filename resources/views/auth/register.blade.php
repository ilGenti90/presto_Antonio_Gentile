<x-layout>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5">
                    Registrati
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('register') }}" class="matrix-card p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control form-control-matrix" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control form-control-matrix" id="registerEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control form-control-matrix" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma la password:</label>
                        <input type="password" class="form-control form-control-matrix" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-custom">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>