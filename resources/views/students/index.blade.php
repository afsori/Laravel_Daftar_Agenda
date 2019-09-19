@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Mahasiswa</h3>

                            <div class="right">
                                <a href="/students/create" class="btn btn-primary ">Tambah Data Mahasiswa</a>

                            </div>
                        </div>
                        <!-- <div class="right"> -->
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <!-- </div> -->

                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($students as $student)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{$student -> nama}}
                                    <a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('content1')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <a href="/students/create" class="btn btn-primary mb-2">Tambah Data Mahasiswa</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"># </th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col"> Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $mhs)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$mhs -> nama}}</td>
                        <td>{{$mhs -> npm}}</td>
                        <td>{{$mhs -> email}}</td>
                        <td>{{$mhs -> jurusan}}</td>
                        <td>
                            <a href="/students/1/edit/" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection