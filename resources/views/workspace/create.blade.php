@extends('layouts.base')

@section('content')
<h1>Create new workspace</h1>

<form action="/workspace" method="post">
		{{ csrf_field() }}
        <div class="form-group my-3">
		    <label for="projectTypeId">nama</label>
            <select name="projectTypeId" id="projectTypeId" class="form-select" >
                @foreach($types as $types)
                    <option value="{{$types->id}}">{{$types->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group my-3">
            <label for="title">judul</label>
            <input type="text" name="title" required="required" class="form-control">
        </div>
        <input type="submit" value="Simpan Data" class="btn bg-primary my-3" style="color: white">
</form>
@endsection