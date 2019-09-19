@extends('layout/main')

@section('title', 'Edit Data')


@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Halaman Edit Data</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/students">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{$student-> nama}}">
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="npm">NPM</label>
                                    <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Masukkan npm" name="npm" value="{{$student-> npm}}">
                                    @error('npm')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{$student-> email}}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{$student-> jurusan}}">
                                    @error('jurusan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<!-- @section('content1')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Data Mahasiswa</h1>

            <form method="post" action="/students/{{$students->id}}/update">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{$students-> nama}}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Masukkan npm" name="npm" value="{{$students-> npm}}">
                    @error('npm')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{$students-> email}}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{$students-> jurusan}}">
                    @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>
</div>
@endsection -->