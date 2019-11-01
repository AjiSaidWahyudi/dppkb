@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Pengumuman</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Pengumuman</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Pengumuman</h3>
                        </div>
                        <form action="{{route('pengumuman.update', $pengumuman->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" value="{{$pengumuman->judul}}">
                                </div>
                                <div class="form-group">
                                    <label for="label">File</label>
                                    <input type="file" class="form-control" id="file" name="file" placeholder="File">
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