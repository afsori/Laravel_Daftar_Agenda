@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Agenda</h3>
                            <a href="/agendas/create" class="btn btn-primary pull-right">Tambah Agenda</a>
                            <br>
                            <br>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        <div class="panel-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"># </th>
                                        <th scope="col">Nama Agenda</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($agendas as $agenda)
                                    <tr>
                                        <th scope="row">{{$loop -> iteration}}</th>
                                        <td>{{$agenda -> nama_agenda}}</td>
                                        <td>
                                            <a href="/agendas/{{$agenda->id}}" class="label label-info">detail</a>
                                            <a href="/agendas/{{$agenda->id}}/edit" class="label label-success">edit</a>
                                            <a href="/agendas/{{$agenda->id}}/delete" class="label label-danger" onclick="return confirm('Anda akan menghapus data?')">delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop