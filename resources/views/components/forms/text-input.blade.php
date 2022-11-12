@props(['opt' => false, 'name'])

<input
    class="form-control @error($name) is-invalid @enderror"
    name={{ $name }}
    { $opt? 'required': '' }
    {{ $attributes }} />
