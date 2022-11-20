<h1>Hello Project Creators</h1>

<table border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
	</tr>
	@foreach($projects as $projects)
	<tr>
		<td>{{ $projects->id }}</td>
		<td>{{ $projects->name }}</td>
	</tr>
	@endforeach
</table>

<!-- Todo -> fix view (add bootstrap) -->