@extends('AppLar.index')
@section('title','HeadTock')

@section('container')
<div class="container">
    <div class="row">
    <div class="col-6">
    <h1 class=mt-3>Detail Mahasiswa</h1>
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$data->nama}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$data->Tlp}}</h6>
        <p class="card-text">{{$data->email}}</p>
        <p class="card-text">{{$data->Alamat}}</p>
        <form action="{{$data->id}}" method="post" class="d-inline" >
        @method('delete')
        @csrf
        <a href="{{$data->id}}/edit"class="btn btn-primary">Edit</a>
        <button type="submit" class="btn btn-danger">Delet</button>
        <a href="/data" class="card-link">Kembali</a>
        </form>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection