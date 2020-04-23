@extends('AppLar.index')
@section('title','HeadTock')

@section('container')
<div class="container">
<div class="row">
<div class="col-6">
<h1 class=mt-3>Form Data
</h1>
<form action="/data/{{$data->id}}" method="post">
@method('patch')
@csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"placeholder="Masukan Nama Anda" value="{{$data->nama}}">
    @error('nama')
    <div class="invalid-feedback">
         {{$message}}
  </div>
  @enderror
        </div> 
  <div class="form-group">
    <label for="Tlp">No.Tlp</label>
    <input type="text" class="form-control @error('Tlp') is-invalid @enderror" id="Tlp" name="Tlp" placeholder="Masukan Nomer Telepon" value="{{$data->Tlp}}">
    @error('Tlp')
    <div class="invalid-feedback">
         {{$message}}
  </div>
  @enderror
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email"value="{{$data->email}}">
    @error('email')
    <div class="invalid-feedback">
         {{$message}}
  </div>
  @enderror
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="alamat" name="Alamat" placeholder="Masukan Alamat"value="{{$data->Alamat}}">
    @error('Alamat')
    <div class="invalid-feedback">
         {{$message}}
  </div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
</div>
</div>
</div>
@endsection