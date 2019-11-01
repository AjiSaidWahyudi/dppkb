@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Album</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Album</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Input Album
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
                                    <th>Detail</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach($album as $al)
                                <tr>
                                    <td>183</td>
                                    <td>{{$al->judul}}</td>
                                    <td>{{$al->detail}}</td>
                                    <td><img src="{{asset($al->cover)}}" width="120px"></td>
                                    <td>
                                        <form action="{{route('album.destroy', $al->id)}}" method="post">
                                            <div class="btn-group">
                                                <a href="{{route('album.show', $al->id)}}" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('album.edit', $al->id)}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
                    <form action="{{route('album.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Input Album</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="label">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <label for="label">Detail</label>
                                    <textarea class="form-control" id="detail" name="detail" placeholder="Detail" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="label">Cover</label>
                                    <input type="file" class="form-control" id="cover" name="cover" placeholder="Cover">
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