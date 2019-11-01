@extends('layouts.web')
@section('newsticker')
    <ul id="js-news-ticker">
        @foreach($berita as $b)
        <li class="news-item"><a href="{{route('tampil_berita', $b->slug)}}" title="{{$b->judul_berita}}" rel="bookmark">{{$b->judul_berita}}</a></li>
        @endforeach
    </ul>
@endsection
@section('content')
    <div class="column-wrapper light-wrapper no-background " id="column-wrapper-1">
        <div class="container">
            <div class="row row-wrapper" id="column-content-1">
                <div class="col-md-12 full-content" id="main-container-1">
                    <div class="row">
                        <section class="col-md-12 push_bottom_40 featured layout-4 ">
                            <div class="carousel slide" data-ride="carousel" id="46_carousel" dara-interval="2500">
                                <div class="carousel-inner" role="listbox">
                                    @foreach($infografis->take(2) as $i)
                                    <div class="item @if($loop->first) active @endif">
                                        <img width="1024" height="576" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive aligncenter pixel-home-big lazy-img" title="{{$i->nama}}" data-src="{{asset($i->foto)}}" />
                                    </div>
                                    @endforeach
                                </div>
                                <a class="left carousel-control" href="#46_carousel" role="button" data-slide="prev">
                                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#46_carousel" role="button" data-slide="next">
                                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="column-wrapper light-wrapper no-background " id="column-wrapper-2">
        <div class="container">
            <div class="row row-wrapper" id="column-content-2">
                <div class="col-md-8 widget widget-tabbed push_bottom_40" id="widget_tabs-2">
                    <div class="panel-group">
                        <ul class="nav nav-tabs" role="tablist" id="tab-widget_tabs-2">
                            <li class="active"><a href="#recent_widget_tabs-2" role="tab" data-toggle="tab">Sekretariat</a></li>
                            <li><a href="#popular_widget_tabs-2" role="tab" data-toggle="tab">Bidang I</a></li>
                            <li><a href="#comments_widget_tabs-2" role="tab" data-toggle="tab">Bidang II</a></li>
                            <li><a href="#tags_widget_tabs-2" role="tab" data-toggle="tab">Bidang III</a></li>
                            <li><a href="#tambah_widget_tabs-2" role="tab" data-toggle="tab">Bidang IV</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane box-content row active" id="recent_widget_tabs-2">
                                @foreach($bidang as $bid)
                                @if($bid->nama == 'Sekretariat')
                                @foreach($bid->unit as $count => $un)
                                <p><strong>Unit: {{$un->nama}}</strong></p>
                                @foreach($un->program as $pro)
                                <p><a href="{{route('program.show', $pro->slug)}}">Program: {{$pro->nama}}</a></p>
                                @endforeach
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                            <div class="tab-pane box-content row" id="popular_widget_tabs-2">
                                @foreach($bidang as $bid)
                                @if($bid->nama == 'Bidang I')
                                @foreach($bid->unit as $count => $un)
                                <p><strong>Unit: {{$un->nama}}</strong></p>
                                @foreach($un->program as $pro)
                                <p><a href="{{route('program.show', $pro->slug)}}">Program: {{$pro->nama}}</a></p>
                                @endforeach
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                            <div class="tab-pane box-content row" id="comments_widget_tabs-2">
                                @foreach($bidang as $bid)
                                @if($bid->nama == 'Bidang II')
                                @foreach($bid->unit as $count => $un)
                                <p><strong>Unit: {{$un->nama}}</strong></p>
                                @foreach($un->program as $pro)
                                <p><a href="{{route('program.show', $pro->slug)}}">Program: {{$pro->nama}}</a></p>
                                @endforeach
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                            <div class="tab-pane box-content" id="tags_widget_tabs-2">
                                @foreach($bidang as $bid)
                                @if($bid->nama == 'Bidang III')
                                @foreach($bid->unit as $count => $un)
                                <p><strong>Unit: {{$un->nama}}</strong></p>
                                @foreach($un->program as $pro)
                                <p><a href="{{route('program.show', $pro->slug)}}">Program: {{$pro->nama}}</a></p>
                                @endforeach
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                            <div class="tab-pane box-content" id="tambah_widget_tabs-2">
                                @foreach($bidang as $bid)
                                @if($bid->nama == 'Bidang IV')
                                @foreach($bid->unit as $count => $un)
                                <p><strong>Unit: {{$un->nama}}</strong></p>
                                @foreach($un->program as $pro)
                                <p><a href="{{route('program.show', $pro->slug)}}">Program: {{$pro->nama}}</a></p>
                                @endforeach
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <a href="{{route('tampil_program.index')}}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-4 sidebar" id="sidebar-2">
                    <div class="widget widget_apsc_widget push_bottom_30" id="apsc_widget-3"><div class="apsc-icons-wrapper clearfix apsc-theme-1" >
                        <div class="apsc-each-profile">
                            <a  class="apsc-facebook-icon clearfix" href="https://facebook.com/Pixellabdotnet" target="_blank" >
                                <div class="apsc-inner-block">
                                    <span class="social-icon"><i class="fa fa-facebook apsc-facebook"></i><span class="media-name">Facebook</span></span>
                                    <span class="apsc-count">300</span><span class="apsc-media-type">Fans</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a  class="apsc-twitter-icon clearfix"  href="https://twitter.com/Alaa_AlBawaneh" target="_blank"  >
                                <div class="apsc-inner-block">
                                    <span class="social-icon"><i class="fa fa-twitter apsc-twitter"></i><span class="media-name">Twitter</span></span>
                                    <span class="apsc-count">72</span><span class="apsc-media-type">Followers</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a  class="apsc-google-plus-icon clearfix" href="https://plus.google.com/" target="_blank"  >
                                <div class="apsc-inner-block">
                                    <span class="social-icon"><i class="apsc-googlePlus fa fa-google-plus"></i><span class="media-name">google+</span></span>
                                    <span class="apsc-count">530</span><span class="apsc-media-type">Followers</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a  class="apsc-instagram-icon clearfix" href="https://instagram.com/bawanehcoder" target="_blank"   >
                                <div class="apsc-inner-block">
                                    <span class="social-icon"><i class="apsc-instagram fa fa-instagram"></i><span class="media-name">Instagram</span></span>
                                    <span class="apsc-count">51</span><span class="apsc-media-type">Followers</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget widget-tabbed push_bottom_40" id="widget_tabs-2">
                    <div class="panel-group">
                        <ul class="nav nav-tabs" role="tablist" id="tab-widget_tabs-2">
                            <li class="active"><a href="#recent_widget_tabs-2" role="tab" data-toggle="tab">Terbaru</a></li>
                            <li><a href="#popular_widget_tabs-2" role="tab" data-toggle="tab">Terpopuler</a></li>
                            <li><a href="#comments_widget_tabs-2" role="tab" data-toggle="tab">Komentar</a></li>
                            <li><a href="#tags_widget_tabs-2" role="tab" data-toggle="tab">Tag</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane box-content row active" id="recent_widget_tabs-2">
                                @foreach($berita as $b)
                                <article class="article other-article side-article col-md-12">
                                    <div class="article-image">
                                        <a href="{{route('tampil_berita', $b->slug)}}" title="Traffic: a Lot of Cars Driving Across The Golden Gate Bridge">
                                            <img width="90" height="90" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive aligncenter pixel-home-small lazy-img" alt="Traffic: a Lot of Cars Driving Across The Golden Gate Bridge" title="Traffic: a Lot of Cars Driving Across The Golden Gate Bridge" data-src="{{asset($b->foto_berita)}}" />
                                        </a>
                                    </div>
                                    <ul class="article-meta">
                                        <li class="article-date"><span>{{$b->created_at}}</span></li>
                                    </ul>
                                    <h4 class="article-title">
                                        <a href="{{route('tampil_berita', $b->slug)}}" title="Traffic: a Lot of Cars Driving Across The Golden Gate Bridge">
                                            {{$b->judul_berita}}
                                        </a>
                                    </h4>
                                </article>
                                @endforeach
                            </div>
                            <div class="tab-pane box-content row" id="popular_widget_tabs-2">
                                @foreach($berita2 as $b2)
                                <article class="article other-article side-article col-md-12">
                                    <div class="article-image">
                                        <a href="{{route('tampil_berita', $b2->slug)}}" title="Fearless Man Challenge Everything Pose">
                                            <img width="90" height="90" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive aligncenter pixel-home-small lazy-img" alt="Fearless Man Challenge Everything Pose" title="Fearless Man Challenge Everything Pose" data-src="{{asset($b2->foto_berita)}}" />
                                        </a>
                                    </div>
                                    <ul class="article-meta">
                                        <li class="article-date"><span>{{$b2->created_at}}</span></li>
                                    </ul>
                                    <h4 class="article-title">
                                        <a href="{{route('tampil_berita', $b2->slug)}}" title="Fearless Man Challenge Everything Pose">
                                            {{$b2->judul_berita}}
                                        </a>
                                    </h4>
                                </article>
                                @endforeach
                            </div>
                            <div class="tab-pane box-content row" id="comments_widget_tabs-2">
                                <div class="article other-article side-article col-md-12 widget-comments-item" >
                                    <div class="article-image">
                                        <a href="https://pixellab-themes.com/bayan/2017/09/07/portrait-of-sheep-in-winter/#comment-5">
                                            <img alt='' src='https://secure.gravatar.com/avatar/3b91ac39312c204004ec207c40230d96?s=85&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/3b91ac39312c204004ec207c40230d96?s=170&#038;d=mm&#038;r=g 2x' class='img-responsive avatar-85 photo' height='85' width='85' />
                                        </a>
                                    </div>
                                    <a href="https://pixellab-themes.com/bayan/2017/09/07/portrait-of-sheep-in-winter/#comment-5">
                                        Sed condimentum risus in leo accumsan blandit ultrices vitae.....
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane box-content" id="tags_widget_tabs-2">
                                <div class="tagcloud">
                                    @foreach($tag as $t)
                                    <a href="#" style="font-size: 8pt;" aria-label="aircraft (1 item)">{{$t->label}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="column-wrapper light-wrapper no-background " id="column-wrapper-4">
        <div class="container">
            <div class="row row-wrapper" id="column-content-4">
                <div class="col-md-4 sidebar" id="sidebar-4">
                    <div class="widget advertisement-widget push_bottom_30" id="ads2col_widget-2"><h3 class="widget-title"><span>Galeri</span></h3>
                        <div class="ads2col row">
                            @foreach($album as $a)
                            <div class="ads-2-col ads-block col-sm-6 col-md-6">
                                <a target="_blank" href="#">
                                    <img class="img-responsive" src="{{asset($a->cover)}}" alt="top banner">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-8 main-content" id="main-container-4">
                    <div class="row">
                        <section class="col-sm-6 ">
                            <div class="widget widget_categories push_bottom_30" id="categories-3"><h3 class="widget-title"><span>Pengumuman</span></h3>
                                @foreach($pengumuman as $p)
                                <ul>
                                    <li class="cat-item cat-item-2"><a href="{{route('pengumuman.download', $p->id)}}">{{$p->judul}}</a></li>
                                </ul>
                                @endforeach
                            </div>    
                        </section>
                        <section class="col-sm-6 ">
                            <div class="widget widget_categories push_bottom_30" id="categories-3"><h3 class="widget-title"><span>Agenda</span></h3>
                                @foreach($agenda as $ag)
                                <ul>
                                    <li class="cat-item cat-item-2"><a href="https://pixellab-themes.com/bayan/category/nature/animals/">{{$ag->judul}} ({{$ag->tanggal_mulai}})</a></li>
                                </ul>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection