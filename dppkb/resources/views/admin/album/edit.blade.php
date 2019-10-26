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
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Album</h3>
                        </div>
                        <form action="{{route('album.update', $album->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" value="{{$album->judul}}">
                                </div>
                                <div class="form-group">
                                    <label for="label">Detail</label>
                                    <textarea class="form-control" id="detail" name="detail" placeholder="Detail" rows="3">{{$album->detail}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="label">File</label>
                                    <input type="file" class="form-control" id="cover" name="cover" placeholder="File">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection