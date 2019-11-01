@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Kelola Program</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Kelola Program</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Kelola Program</h3>
                        </div>
                        <form action="{{route('kelola_program.store')}}" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Label</label>
                                    <select class="form-control" id="bidang" name="bidang" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        @foreach($bidang as $key => $bid)
                                            <option value="{{$key}}">{{$bid}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="label">Unit</label>
                                    <select name="unit" id="bidang" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="label">Program</label>
                                    <select name="program" id="unit" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="label">Kegiatan</label>
                                    <select name="kegiatan" id="program" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="label">Subkeg</label>
                                    <select name="subkeg" id="kegiatan" class="form-control">
                                        <option value="" selected disabled>Select</option>
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
@section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $('select[name="bidang"]').on('change',function(){
                var bidang_id = $(this).val();
                if (bidang_id) {
                    $.ajax({
                        url: '/getUnit/'+bidang_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            console.log(data);
                            $('select[name="unit"]').empty();
                            $.each(data,function(key,value){
                                $('select[name="unit"]').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="unit"]').empty();
                    $('select[name="program"]').empty();
                    $('select[name="kegiatan"]').empty();
                    $('select[name="subkeg"]').empty();
                }
            });
            $('select[name="unit"]').on('change',function(){
                var unit_id = $(this).val();
                if (unit_id) {
                    $.ajax({
                        url: '/getProgram/'+unit_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            console.log(data);
                            $('select[name="program"]').empty();
                            $.each(data,function(key,value){
                                $('select[name="program"]').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="program"]').empty();
                    $('select[name="kegiatan"]').empty();
                    $('select[name="subkeg"]').empty();
                }
            });
            $('select[name="program"]').on('change',function(){
                var program_id = $(this).val();
                if (program_id) {
                    $.ajax({
                        url: '/getKegiatan/'+program_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            console.log(data);
                            $('select[name="kegiatan"]').empty();
                            $.each(data,function(key,value){
                                $('select[name="kegiatan"]').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="kegiatan"]').empty();
                    $('select[name="subkeg"]').empty();
                }
            });
            $('select[name="kegiatan"]').on('change',function(){
                var kegiatan_id = $(this).val();
                if (kegiatan_id) {
                    $.ajax({
                        url: '/getSubkeg/'+kegiatan_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            console.log(data);
                            $('select[name="subkeg"]').empty();
                            $.each(data,function(key,value){
                                $('select[name="subkeg"]').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="subkeg"]').empty();
                }
            });
        });
    </script>
@endsection