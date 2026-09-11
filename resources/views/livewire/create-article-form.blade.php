<form class="matrix-card p-5 my-5" wire:submit.prevent="store">
    @if (session()->has('success'))
        <div class="alert alert-matrix text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" class="form-control form-control-matrix @error('title') is-invalid @enderror" id="title" wire:model.blur="title">
            @error('title')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea id="description" cols="30" rows="10" class="form-control form-control-matrix @error('description') is-invalid @enderror" wire:model.blur="description"></textarea>
            @error('description')
            <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo:</label>
        <input type="text" class="form-control form-control-matrix" id="price" wire:model.blur="price">
    </div>
    <div class="mb-3">
        <select id="category" wire:model.blur="category" class="form-control form-control-matrix @error('category') is-invalid @enderror">
            <option label disabled> Seleziona una categoria </option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
        <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-custom">Crea</button>
    </div>
</form>