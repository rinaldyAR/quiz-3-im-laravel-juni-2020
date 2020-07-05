@extends('layouts/master')

@section('content')
<h3>List of Articles</h3>
<h5><a href="/article/create">+ add article</a></h5>
<table class="table table-bordered">
    <thead>                  
      <tr>
        <th style="width: 10px">No</th>
        <th>judul artikel</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($article as $key => $item)
        <tr>
          <td>{{$key+1}}</td>
        <td><a href="/article/{{$item->id}}">{{$item->judul}}</a></td>
        <td>
            <a href="/article/edit/{{$item->id}}">
                <input type="submit" class="btn btn-success" value="Edit"/>
            </a>
            <form action="/article/{{$item->id}}" method="POST">
                @method('delete')
                @csrf
               <input type="submit" class="btn btn-danger" value="Delete"/>
            </form>
        </td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
@endsection
@push('script')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush