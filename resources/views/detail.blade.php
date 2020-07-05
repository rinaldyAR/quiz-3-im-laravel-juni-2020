@extends('layouts/master')

@section('content')
    <h3>Judul: {{$article->judul}}</h3>
    <div>Written by {{$article->name}}</div>
    <div>Slug: {{$article->slug}}</div>
    <div>Tags:
        @foreach ($article->tag as $item)
            <div class="btn btn-sm btn-info" >{{$item}}</div>
        @endforeach
        </div>
    <div style="margin-top:20px">konten: {{$article->isi}}</div>
    
@endsection