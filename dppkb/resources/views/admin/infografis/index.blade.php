@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Infografis</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Infografis</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Input Infografis
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
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach($infografis as $i)
                                <tr>
                                    <td>183</td>
                                    <td>{{$i->nama}}</td>
                                    <td><img src="{{asset($i->foto)}}" width="100px"></td>
                                    <td>
                                        <form action="{{route('infografis.destroy', $i->id)}}" method="post">
                                            <div class="btn-group">
                                                <a href="{{route('infografis.edit', $i->id)}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
                    <form action="{{route('infografis.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Input Infografis</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="label">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto">
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