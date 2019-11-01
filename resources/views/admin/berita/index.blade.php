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
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                Input Berita
                            </button>
                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>No.</th>
                                    <th>Judul/Penulis</th>
                                    <th>Tag</th>
                                    <th>Gambar</th>
                                    <th>Isi Berita</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach($berita as $b)
                                <tr>
                                    <td>183</td>
                                    <td>{{$b->judul_berita}}<br>{{$b->user->name}}</td>
                                    <td>
                                        @foreach($b->tag as $t)
                                            <span class="badge bg-blue">{{$t->label}}</span>
                                        @endforeach
                                    </td>
                                    <td><img src="{{asset($b->foto_berita)}}" width="100px"></td>
                                    <td>{!!substr($b->isi_berita,0,200)!!}</td>
                                    <td>
                                        <form action="{{route('berita.destroy', $b->id)}}" method="post">
                                            <div class="btn-group">
                                                <a href="{{route('berita.show', $b->slug)}}" type="button" class="btn btn-primary" target="_blank"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('berita.edit', $b->id)}}" type="button" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <form action="{{route('berita.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Input Berita</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="label">Judul Berita</label>
                                    <input type="text" class="form-control" id="judul_berita" name="judul_berita" placeholder="Judul Berita">
                                </div>
                                <div class="form-group">
                                    <label for="label">Foto Berita</label>
                                    <input type="file" class="form-control" id="foto_berita" name="foto_berita" placeholder="Foto Berita">
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
                                    <textarea id="isi_berita" name="isi_berita" rows="10" cols="80"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
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