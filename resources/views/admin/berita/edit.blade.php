@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Berita</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Berita</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Berita</h3>
                        </div>
                        <form action="{{route('berita.update', $berita->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Judul Berita</label>
                                    <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="{{$berita->judul_berita}}">
                                </div>
                                <div class="form-group">
                                    <label for="label">Foto</label>
                                    @if($berita->foto_berita)
                                        <br><span>Saat ini</span><br>
                                        <img src="{{asset($berita->foto_berita)}}" width="120px">
                                        <br><br>
                                    @endif
                                    <input type="file" class="form-control" id="foto_berita" name="foto_berita" placeholder="Foto">
                                </div>
                                <div class="form-group">
                                    <label for="label">Tag</label>
                                    <select class="form-control tag" multiple="multiple" name="tag[]" data-placeholder="Pilih Tag" style="width: 100%;">
                                    @foreach($tag as $t)
                                        <option value="{{$t->id}}">{{$t->label}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="label">Isi Berita</label>
                                    <textarea id="isi_berita" name="isi_berita" rows="10" cols="80">{{$berita->isi_berita}}</textarea>
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
    <script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('isi_berita')
        })
    </script>
    <script type="text/javascript">
        $(".tag").select2({
            maximumSelectionLength: 3
        });
    </script>
@endsection