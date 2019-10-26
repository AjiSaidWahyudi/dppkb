@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Tag</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Tag</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Input Tag
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
                                    <th>Label</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach($tag as $t)
                                <tr>
                                    <td>183</td>
                                    <td>{{$t->label}}</td>
                                    <td>
                                        <form action="{{route('tag.destroy', $t->id)}}" method="post">
                                            <div class="btn-group">
                                                <a href="{{route('tag.show', $t->slug)}}" type="button" class="btn btn-primary" target="_blank"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('tag.edit', $t->id)}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
                    <form action="{{route('tag.store')}}" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Input Tag</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="label">Label</label>
                                    <input type="text" class="form-control" id="label" name="label" placeholder="Label">
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