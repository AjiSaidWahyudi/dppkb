@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Subkeg</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Subkeg</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Input Subkeg
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
                                    <th>Nama</th>
                                    <th>Kegiatan</th>
                                    <th>Program</th>
                                    <th>Unit</th>
                                    <th>Bidang</th>
                                    <th>Detail</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach($subkeg as $sub)
                                <tr>
                                    <td>183</td>
                                    <td>{{$sub->nama}}</td>
                                    <td>{{$sub->kegiatan->nama}}</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td>{{$sub->detail}}</td>
                                    <td>
                                        <form action="{{route('subkeg.destroy', $sub->id)}}" method="post">
                                            <div class="btn-group">
                                                <a href="{{route('subkeg.edit', $sub->id)}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
                    <form action="{{route('subkeg.store')}}" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Input Subkeg</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_id">Kegiatan</label>
                                    <select class="form-control" name="kegiatan_id">
                                        @foreach($kegiatan as $keg)
                                            <option value="{{$keg->id}}">{{$keg->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="label">Detail</label>
                                    <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="label">File</label>
                                    <input type="file" class="form-control" id="file" name="file" placeholder="File">
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