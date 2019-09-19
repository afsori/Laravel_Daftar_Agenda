@extends('layout.main')

@section('title', 'Detail')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Halaman Detail</h3>

                            <div class="right">
                                <!-- <a href="/students/create" class="btn btn-primary ">Tambah Data Mahasiswa</a> -->

                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="card">
                                <div class=" card-body">
                                    <h3 class="card-title">{{$student->nama}}</h3>
                                    <p class="card-text">{{$student->npm}}</p>
                                    <p class="card-text">{{$student->email}}</p>
                                    <p class="card-text">{{$student->jurusan}}</p>

                                    <form action="/students/{{$student->id}}" method="post" class="demo-button">
                                    <a href="{{$student->id}}/edit" class="btn btn-primary">Edit</a>

                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        
                                    <a href="/students" class="card-link">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop