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
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Foto</h3>
                        </div>
                        <form action="{{route('foto.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <input type="hidden" name="album_id" id="album_id" value="{{$album_id}}">
                                <div class="form-group">
                                    <label for="judul">Nama Foto</label>
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <label for="detail">Detail Foto</label>
                                    <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Foto</label>
                                    <input type="file" class="form-control" id="image" name="image" placeholder="Input Foto">
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