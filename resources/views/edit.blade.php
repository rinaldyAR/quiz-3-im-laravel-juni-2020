@extends('layouts/master')

@section('content')
<form action="/article/{{$article->id}}" method="POST">
{{method_field('PUT')}}
@csrf
<input type="hidden" name="id" id="id" value="{{$article->id}}">
<label for="judul">Judul</label>
<input type="text" name="judul" id="judul" value="{{$article->judul}}">
<br>
<label for="isi">Konten</label>
<textarea type="text" name="isi" id="isi">{{$article->isi}}</textarea>
<br>
<label for="tag">Tag</label>
<input type="text" name="tag" id="tag" value="{{$article->tag}}">
<br>
<label for="writer">Id Penulis</label>
<input type="text" name="writer" id="writer" readOnly value="{{$article->writer}}">
<br>

<input type="submit" value="Submit">
</form>
@endsection