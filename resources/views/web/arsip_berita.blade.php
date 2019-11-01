@extends('layouts.web')
@section('newsticker')
    <ul id="js-news-ticker">
        @foreach($berita as $b)
        <li class="news-item"><a href="{{route('berita.show', $b->slug)}}" title="{{$b->judul_berita}}" rel="bookmark">{{$b->judul_berita}}</a></li>
        @endforeach
    </ul>
@endsection
@section('content')
    <section id="main-wrapper">
        <div class="container column-wrapper">
            <div class="row row-wrapper">
                <div id="main-container" class="col-md-8 main-content">
                    <ol id="breadcrumb" class="breadcrumb">
                        <li><a href="https://pixellab-themes.com/bayan/">Beranda</a></li>
                        <li class="active">Berita</li>
                    </ol>
                    <h4 class="content-head" >
                        <span class="content_head">Arsip Berita</span>
                    </h4>
                    <div class="blog-box push_bottom_30">
                        <div class="box-content row">
                            @foreach($berita as $b)
                            <article id="post-56" class="article thumb-style col-md-12 post-56 post type-post status-publish format-standard has-post-thumbnail hentry category-technology category-uncategorized tag-tech">
                                <div class="article-entry row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="article-image">
                                            <a class="pixel-article" href="{{route('berita.show', $b->slug)}}" title="Permalink to Workdesk Mess and Professional Photography Gear" rel="bookmark">
                                                <img width="346" height="220" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive aligncenter pixel-home-medium lazy-img" alt="Workdesk Mess and Professional Photography Gear" title="Workdesk Mess and Professional Photography Gear" data-src="{{asset($b->foto_berita)}}" />
                                                @foreach($b->tag as $tb)
                                                <span class="category-title">{{$tb->label}}</span>
                                                @endforeach
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="article-meta">
                                            <li class="article-date"><span>{{$b->created_at}}</span></li>
                                            <li class="article-views"><i class="fa fa-eye"></i><span>{{$b->views}}</span></li>
                                            <li class="article-comment"><span>0</span></li>
                                        </ul>
                                        <h3 class="article-title">
                                            <a  href="{{route('berita.show', $b->slug)}}" title="Permalink to Workdesk Mess and Professional Photography Gear" rel="bookmark">{{$b->judul_berita}}</a>
                                        </h3>
                                        <p class="article-excerpt">{!!substr($b->isi_berita,0,50)!!}...</p>         
                                        <a  href="{{route('berita.show', $b->slug)}}" title="Permalink to Workdesk Mess and Professional Photography Gear" rel="bookmark" class="btn btn-default">Selengkapnya</a>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="pagination push_bottom_30">
                        <li>{{$berita->appends(Request::all())->links()}}</li>
                    </ul>      
                </div>
                <aside class="sidebar col-md-4">
                    <div class="widget widget_apsc_widget push_bottom_40" id="apsc_widget-2">
                        <div class="apsc-icons-wrapper clearfix apsc-theme-1" >
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
                    <div class="widget widget_categories push_bottom_40" id="categories-4">
                        <h3 class="widget-title"><span>Tag</span></h3>
                        <ul>
                            @foreach($tag as $t)
                            <li class="cat-item cat-item-2">
                                <a href="#">{{$t->label}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="clear"></div>
                </aside>
            </div>
        </div>
    </section>
@endsection