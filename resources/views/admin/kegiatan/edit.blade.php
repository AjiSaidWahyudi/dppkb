@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Program</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Program</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Program</h3>
                        </div>
                        <form action="{{route('kegiatan.update', $kegiatan->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{$kegiatan->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_id">Program</label>
                                    <select class="form-control" name="program_id">
                                        @foreach($program as $pro)
                                            <option value="{{$pro->id}}">{{$pro->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Kadis</label>
                                    <select class="form-control" name="user_id">
                                        @foreach($user as $u)
                                            <option value="{{$u->id}}">{{$u->email}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Kabid</label>
                                    <select class="form-control" name="user2_id">
                                        @foreach($user as $u)
                                            <option value="{{$u->id}}">{{$u->email}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Kabid</label>
                                    <select class="form-control" name="user2_id">
                                        @foreach($user as $u)
                                            <option value="{{$u->id}}">{{$u->email}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="label">Detail</label>
                                    <textarea class="form-control" id="detail" name="detail" rows="3">{{$kegiatan->detail}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="label">Status</label>
                                    <div class="radio">
                                        <label>
                                            <input {{$kegiatan->status == "Belum_terlaksana" ? "checked" : ""}} type="radio" name="status" id="Belum_terlaksana" value="Belum_terlaksana">Belum Terlaksana
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input {{$kegiatan->status == "Sudah_terlaksana" ? "checked" : ""}} type="radio" name="status" id="Sudah_terlaksana" value="Sudah_terlaksana">Sudah Terlaksana
                                        </label>
                                    </div>
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