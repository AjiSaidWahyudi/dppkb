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
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Infografis</h3>
                        </div>
                        <form action="{{route('infografis.update', $infografis->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{$infografis->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="label">Foto</label>
                                    @if($infografis->foto)
                                        <br><span>Saat ini</span><br>
                                        <img src="{{asset($infografis->foto)}}" width="120px">
                                        <br><br>
                                    @endif
                                    <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto">
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