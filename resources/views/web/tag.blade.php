@extends('layouts.web')
@section('content')
    <section id="main-wrapper">
        <div class="container column-wrapper">
            <div class="row row-wrapper">
                <div id="main-container" class="col-md-8 main-content">
                    <ol id="breadcrumb" class="breadcrumb">
                        <li><a href="/">Beranda</a></li>
                        <li class="active">Berita</li>
                    </ol>
                    <h4 class="content-head" >
                        <span class="content_head">Arsip Berita</span>
                    </h4>
                    <div class="blog-box push_bottom_30">
                        <div class="box-content row">
                            @foreach($tag->berita as $tb)
                            <article id="post-56" class="article thumb-style col-md-12 post-56 post type-post status-publish format-standard has-post-thumbnail hentry category-technology category-uncategorized tag-tech">
                                <div class="article-entry row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="article-image">
                                            <a class="pixel-article" href="{{route('berita.show',$tb->slug)}}" title="Permalink to Workdesk Mess and Professional Photography Gear" rel="bookmark">
                                                <img width="346" height="220" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive aligncenter pixel-home-medium lazy-img" alt="Workdesk Mess and Professional Photography Gear" title="Workdesk Mess and Professional Photography Gear" data-src="{{asset($tb->foto_berita)}}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <ul class="article-meta">
                                            <li class="article-date"><span>{{$tb->created_at}}</span></li>
                                            <li class="article-views"><i class="fa fa-eye"></i><span>{{$tb->views}}</span></li>
                                            <li class="article-comment"><span>0</span></li>
                                        </ul>
                                        <h3 class="article-title">
                                            <a  href="{{route('berita.show', $tb->slug)}}" title="Permalink to Workdesk Mess and Professional Photography Gear" rel="bookmark">{{$tb->judul_berita}}</a>
                                        </h3>
                                        <p class="article-excerpt">{!!substr($tb->isi_berita,0,50)!!}...</p>         
                                        <a  href="{{route('berita.show', $tb->slug)}}" title="Permalink to Workdesk Mess and Professional Photography Gear" rel="bookmark" class="btn btn-default">Selengkapnya</a>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="clearfix"></div>     
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
                    </div>
                    <div class="clear"></div>
                </aside>
            </div>
        </div>
    </section>
@endsection