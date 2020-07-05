@extends('layouts/master')

@section('content')
<form action="/article" method="POST">
@csrf
<label for="judul">Judul</label><br>
<input type="text" name="judul" id="judul">
<br>
<label for="isi">Konten</label><br>
<textarea type="text" name="isi" id="isi"></textarea>
<br>
<label for="tag">Tag (pisah dengan koma)</label><br>
<input type="text" name="tag" id="tag">
<br>
<label for="writer">Id Penulis</label><br>
<input type="text" name="writer" id="writer">
<br><br>

<input type="submit" value="Submit">
</form>
@endsection