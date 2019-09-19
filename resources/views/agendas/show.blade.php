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
                            <h2 class="panel-title">Halaman Show</h2>

                            <!-- <div class="right"> -->
                            <!-- <a href="/students/create" class="btn btn-primary ">Tambah Data Mahasiswa</a> -->

                            <!-- @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div> -->
                        </div>
                        <div class="panel-body">
                            <div class="card">
                                <div class=" card-body">
                                    <h3 class="card-title">{{$agenda->nama_agenda}}</h3>
                                    <p class="card-text">{{$agenda->tanggal_mulai}}</p>
                                    <p class="card-text">{{$agenda->durasi}}</p>
                                    <p class="card-text">{{$agenda->lokasi}}</p>
                                    <p class="card-text">{{$agenda->status}}</p>



                                    <a href="/agendas" class="btn btn-primary">Kembali</a>
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