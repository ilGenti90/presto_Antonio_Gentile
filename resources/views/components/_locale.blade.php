<form action="{{route('setLocale' , $lang) }}" method="POST" class="d-inline me-1">
    @csrf
    <button type="submit" class="btn-custom-sm">
        <img src="{{ asset('vendor/blade-flags/country-' . $lang . '.svg') }}" width="32" height="32">
    </button>
</form>