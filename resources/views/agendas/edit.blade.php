@extends('layout/main')

@section('title', 'Form Edit Data Agenda')


@section('content')


<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Form Ubah Data Agenda</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/agendas/{{$agenda->id}}">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="nama_agenda">Nama Agenda</label>
                                    <input type="text" class="form-control @error('nama_agenda') is-invalid @enderror" id="nama_agenda" placeholder="Masukkan nama" name="nama_agenda" value="{{ $agenda->nama_agenda }}">
                                    @error('nama_agenda')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group dates">
                                    <label for="tanggal_mulai">Tanggal Mulai</label>
                                    <input type="text" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="usr1" placeholder="YYYY-MM-DD" name="tanggal_mulai" value="{{ $agenda->tanggal_mulai }}">
                                    @error('tanggal_mulai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="durasi">Durasi</label>
                                    <input type="text" class="form-control @error('durasi') is-invalid @enderror" id="durasi" placeholder="Masukkan durasi" name="durasi" value="{{ $agenda->durasi }}">
                                    @error('durasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" placeholder="Masukkan lokasi" name="lokasi" value="{{ $agenda->lokasi }}">
                                    @error('lokasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" value="{{$agenda->status}}">
                                        <option value="Sudah Dikerjakan">Sudah Dikerjakan</option>
                                        <option value="Belum Dikerjakan">Belum Dikerjakan</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Ubah Data !</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
