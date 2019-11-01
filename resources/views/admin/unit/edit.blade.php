@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Unit</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Unit</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Unit</h3>
                        </div>
                        <form action="{{route('unit.update', $unit->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{$unit->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_id">Bidang</label>
                                    <select class="form-control" name="bidang_id">
                                        @foreach($bidang as $bid)
                                            <option value="{{$bid->id}}" @if ($bid->id === $unit->bidang_id)
                                                selected
                                            @endif>{{$bid->nama}}</option>
                                        @endforeach
                                    </select>
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