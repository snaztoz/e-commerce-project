@extends('layouts.base')

@section('content')
<h1>Your Workspaces</h1>

<table class="table">
	<thead class="table-dark">
		<tr>
			<th>&nbsp;</th>
			<th>Project type</th>
			<th>Name</th>
			<th>actions</th>
		</tr>
	</thead>
	@foreach($workspace as $workspace)
	<tbody>
		<tr>
			<td>{{$loop -> iteration}}</td>
			<td>{{ $workspace->name }}</td>
			<td>{{ $workspace->title }}</td>
			<td>
				<a href="/workspace/{{$workspace->id}}/edit" class="btn bg-primary" style="color: white">Edit</a>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
@endsection