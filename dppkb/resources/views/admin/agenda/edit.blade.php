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
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Agenda</h3>
                        </div>
                        <form action="{{route('agenda.update', $agenda->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul" value="{{$agenda->judul}}">
                                </div>
                                <div class="form-group">
                                    <label for="label">Tanggal Mulai</label>
                                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{$agenda->tanggal_mulai}}">
                                </div>
                                <div class="form-group">
                                    <label for="label">Tanggal Selesai</label>
                                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{$agenda->tanggal_selesai}}">
                                </div>
                                <div class="form-group">
                                    <label for="label">Jam</label>
                                    <input type="time" class="form-control" id="jam" name="jam" value="{{$agenda->jam}}">
                                </div>
                                <div class="form-group">
                                    <label for="label">Detail</label>
                                    <textarea class="form-control" id="detail" name="detail" rows="3">{{$agenda->detail}}</textarea>
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