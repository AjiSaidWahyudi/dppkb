@extends('layouts.web')
@section('content')
    <div class="column-wrapper light-wrapper no-background " id="column-wrapper-2">
        <div class="container">
            <div class="row row-wrapper" id="column-content-2">
                <div class="col-md-12 main-content" id="main-container-2">
                    <div class="row">
                        <section class="col-md-12 ">
                            <div class="category-box box-style11 push_bottom_40" id="pixel_block_2_1">
                                <div class="box-title">
                                    <h3><span>Kegiatan Bidang</span></h3>
                                     @foreach($bidang as $bid)
                                    <div class="alignright box-actions">
                                        <ul class="box-btns">
                                            <li><a href="#" data-id="3" class="category-box-btn">{{$bid->nama}}</a></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="box-content row">
                                    @foreach($bidang as $bid)
                                    <p><strong>Bidang: {{$bid->nama}}</strong></p>
                                    @foreach($bid->unit as $un)
                                    <p><strong>Unit: {{$un->nama}}</strong></p>
                                    @foreach($program as $pro)
                                    <p><strong>Program: {{$pro->nama}}</strong></p>
                                    @foreach($pro->kegiatan as $keg)
                                    <p>Kegiatan: {{$keg->nama}}</p>
                                    @foreach($keg->subkeg as $sub)
                                    <p><small>Subkegiatan: {{$sub->nama}}</small></p>
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection