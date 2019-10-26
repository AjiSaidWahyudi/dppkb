@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Foto</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Foto</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="/foto/create/{{$album->id}}" class="btn btn-primary">Input Foto</a>
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
                                @foreach($album->foto as $fo)
                                <tr>
                                    <td>183</td>
                                    <td>{{$fo->judul}}</td>
                                    <td>{{$fo->detail}}</td>
                                    <td><img src="{{asset($fo->image)}}" width="120px"></td>
                                    <td>
                                        <form action="{{route('foto.destroy', $fo->id)}}" method="post">
                                            <div class="btn-group">
                                                <a href="{{route('foto.show', $fo->id)}}" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('foto.edit', $fo->id)}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
        </section>
    </div>
@endsection