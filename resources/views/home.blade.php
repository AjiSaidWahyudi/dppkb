@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Beranda</small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="col-md-4">
                <div class="direct-chat-msg right">
                    <div class="direct-chat-text">
                        <strong>Program</strong>
                        <br>
                        <br>
                        @foreach($program as $pro)
                        <p>{{$pro->nama}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="direct-chat-msg right">
                    <div class="direct-chat-text">
                        <strong>Kegiatan</strong>
                        <br>
                        <br>
                        @foreach($kegiatan as $keg)
                        <p>{{$keg->nama}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="direct-chat-msg right">
                    <div class="direct-chat-text">
                        <strong>Subkegiatan</strong>
                        <br>
                        <br>
                        @foreach($subkeg as $sub)
                        <p>{{$sub->nama}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection