<!DOCTYPE html>
<html>
<head>
  <title>Ref and Write</title>
  </head>
  <body>
    <h2>Bibliografi</h2>
    <a href="/bibliographies/create"> + Tambah Bibliografi Baru</a>
	<br/>
	<br/>
	<table border="1">
	  <tr>
		<th>ID</th>
		<th>Type</th>
		<th>Judul</th>
		<th>Tahun</th>
		<th>DOI</th>
	  </tr>
	  @foreach($bibliographies as $bibliographies)
	  <tr>
		<td>{{ $bibliographies->id }}</td>
		<td>{{ $bibliographies->type }}</td>
		<td>{{ $bibliographies->title }}</td>
		<td>{{ $bibliographies->year }}</td>
		<td>{{ $bibliographies->doi }}</td>
		<td>
		  <a href="/bibliographies/destroy/{{ $bibliographies->id }}">Hapus</a>
		</td>
	  </tr>
	  @endforeach
	</table>
</body>
</html>