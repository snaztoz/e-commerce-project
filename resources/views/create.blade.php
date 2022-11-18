<!DOCTYPE html>
<html>
<head>
	<title>Ref and Write</title>
</head>
<body>
 
	<h2>Bibliografi</h2>
 
	<a href="/bibliographies">Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/bibliographies/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="id" required="required"> <br/>
		Type <input type="text" name="type" required="required"> <br/>
		Judul <input type="text" name="title" required="required"> <br/>
		Tahun <input name="year" required="required"></textarea> <br/>
        DOI <input type="number" name="doi" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>