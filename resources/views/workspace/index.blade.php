<h1>Hello Project Creators</h1>

<table border="1">
	<tr>
		<th>Id</th>
		<th>Project type</th>
		<th>Name</th>
	</tr>
	@foreach($workspace as $workspace)
	<tr>
		<td>{{ $workspace->id }}</td>
		<td>{{ $workspace->name }}</td>
		<td>{{ $workspace->title }}</td>
	</tr>
	@endforeach
</table>

<!-- Todo -> fix view (add bootstrap) -->