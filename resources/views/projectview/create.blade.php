<h1>Create your project</h1>

<form action="/project/store" method="post">
		{{ csrf_field() }}
		<label for="name">nama</label>
        <input type="text" name="name" required="required"> <br/>
		<input type="submit" value="Simpan Data">
</form>