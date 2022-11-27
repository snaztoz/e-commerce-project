@extends('layouts.base')

@section('content')
<h1>Add new project type</h1>

<form action="/types/store" method="post">
		{{ csrf_field() }}
		<div class="form-group my-3">
			<label for="name">nama</label>
			<input type="text" name="name" required="required" class="form-control">
		</div>
		<input type="submit" value="Simpan Data">
</form>
@endsection