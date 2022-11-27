@extends('layouts.base')

@section('content')
<h1>Project Types</h1>

<table class="table">
	<thead class="table-dark">
		<tr>
			<th>&nbsp;</th>
			<th>Name</th>
		</tr>
	</thead>
	@foreach($projects as $projects)
	<tbody>
		<tr>
			<td>{{$loop -> iteration}}</td>
			<td>{{ $projects->name }}</td>
		</tr>
	</tbody>
	@endforeach
</table>
@endsection