@extends('layouts.web')
@section('content')
    <div class="container column-wrapper">
        <div class="row row-wrapper">
            <div id="main-container" class="col-md-8 main-content ">
                <ol id="breadcrumb" class="breadcrumb"><li><a href="/">Beranda</a></li><li><a href="#">kegiatan</a></li><li class="active">{{$kegiatan->nama}}</li></ol>
                <article id="post-391" class="article-content push_bottom_40 post-391 post type-post status-publish format-standard has-post-thumbnail hentry category-transportation tag-aircraft tag-airplanes tag-airport tag-bright">
                    <h2 class="single-article-title">{{$kegiatan->nama}}</h2>
                    <ul class="article-meta post-meta list-inline">
                        <li class="post-date"><span>{{$kegiatan->created_at}}</span></li>
                    </ul>
                    <div class="post-entry">    
                        <p>{{$kegiatan->detail}}</p>
                        <a href="{{route('subkeg.show', $subkeg->slug)}}" type="button" target="_blank">{{$subkeg->nama}}</a>
                    </div>
                </article>
            </div>
            <aside class="sidebar col-md-4">
                <div class="widget widget_apsc_widget push_bottom_40" id="apsc_widget-2"><div class="apsc-icons-wrapper clearfix apsc-theme-1" >
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
                <div class="clear"></div>
            </aside>
        </div>
    </div>
@endsection