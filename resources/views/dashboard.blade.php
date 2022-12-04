@extends('layouts.base')

@section('content')
<h1>Welcome username!</h1>
<p>Your current subscription, monthly sub</p>

<h3>Your projects</h3>
<table class="table">
    <thead class="table-dark">
		<tr>
			<th>&nbsp;</th>
			<th>Project Name</th>
			<th>actions</th>
		</tr>
	</thead>
	@foreach(Auth::user()->workspaces as $workspace)
	<tbody>
		<tr>
			<td>{{$loop -> iteration}}</td>
			<td>{{ $workspace->title }}</td>
			<td>
				<a href="/workspace/{{$workspace->id}}/edit" class="btn bg-primary" style="color: white">Edit</a>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
@endsection