@props(['name'])

<div class="invalid-feedback">
  @error($name) {{ $message }} @enderror
</div>
