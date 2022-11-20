<h1>Create your project</h1>

<form action="/workspace/store" method="post">
		{{ csrf_field() }}
		<label for="projectTypeId">nama</label>
        <select name="projectTypeId" id="projectTypeId">
            @foreach($types as $types)
                <option value="{{$types->id}}">{{$types->name}}</option>
            @endforeach
        </select>
		<label for="title">judul</label>
        <input type="text" name="title" required="required"> <br/>
		<input type="submit" value="Simpan Data">
</form>

<!-- Todo -> fix view (add bootstrap) -->