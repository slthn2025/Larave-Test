@extends('AppLar.index')
@section('title','HeadTock')

@section('container')
<div class="container">
<div class="row">
<div class="col-6">
<h1 class=mt-3>DATA KAMI
</h1>
<a href="/data/create"class="btn btn-primary my-3">+Tambah Data!!</a>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<ul class="list-group">
@foreach ($data as $data)
  <li class="list-group-item d-flex justify-content-between align-items-center">
       {{$data->nama}}
   <a href="/data/{{$data->id}}"class="badge badge-info">Detail</a>
  </li>
</ul>
@endforeach
</div>
</div>
</div>
@endsection