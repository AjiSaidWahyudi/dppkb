@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Agenda</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Agenda</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Input Agenda
                            </button>
                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Detail</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach($agenda as $ag)
                                <tr>
                                    <td>183</td>
                                    <td>{{$ag->judul}}</td>
                                    <td>{{$ag->tanggal_mulai}} @if($ag->tanggal_selesai) - {{$ag->tanggal_selesai}} @endif</td>
                                    <td>@if($ag->jam) {{$ag->jam}} WITA @endif</td>
                                    <td>{{$ag->detail}}</td>
                                    <td>
                                        <form action="{{route('agenda.destroy', $ag->id)}}" method="post">
                                            <div class="btn-group">
                                                <a href="{{route('agenda.show', $ag->slug)}}" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('agenda.edit', $ag->id)}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <form action="{{route('agenda.store')}}" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Input Agenda</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="label">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <label for="label">Tanggal Mulai</label>
                                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <label for="label">Tanggal Selesai</label>
                                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <label for="label">Jam</label>
                                    <input type="time" class="form-control" id="jam" name="jam" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <label for="label">Detail</label>
                                    <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection