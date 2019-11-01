@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Subkegiatan</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Subkegiatan</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Subkegiatan</h3>
                        </div>
                        <form action="{{route('subkeg.update', $subkeg->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{$subkeg->nama}}">
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
                                    <label for="user_id">User</label>
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
                                    <label for="user_id">Kasubid</label>
                                    <select class="form-control" name="user3_id">
                                        @foreach($user as $u)
                                            <option value="{{$u->id}}">{{$u->email}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="label">Detail</label>
                                    <textarea class="form-control" id="detail" name="detail" rows="3">{{$subkeg->detail}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="label">Status</label>
                                    <div class="radio">
                                        <label>
                                            <input {{$subkeg->status == "Belum_terlaksana" ? "checked" : ""}} type="radio" name="status" id="Belum_terlaksana" value="Belum_terlaksana">Belum Terlaksana
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input {{$subkeg->status == "Sudah_terlaksana" ? "checked" : ""}} type="radio" name="status" id="Sudah_terlaksana" value="Sudah_terlaksana">Sudah Terlaksana
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