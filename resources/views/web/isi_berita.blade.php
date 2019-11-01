@extends('layouts.web')
@section('newsticker')
    <ul id="js-news-ticker">
        @foreach($ber as $b)
        <li class="news-item"><a href="{{route('berita.show', $b->slug)}}" title="{{$b->judul_berita}}" rel="bookmark">{{$b->judul_berita}}</a></li>
        @endforeach
    </ul>
@endsection
@section('content')
    <div class="container column-wrapper">
        <div class="row row-wrapper">
            <div id="main-container" class="col-md-8 main-content ">
                <ol id="breadcrumb" class="breadcrumb"><li><a href="/">Beranda</a></li><li><a href="#">Berita</a></li><li class="active">{{$berita->judul_berita}}</li></ol>
                <article id="post-391" class="article-content push_bottom_40 post-391 post type-post status-publish format-standard has-post-thumbnail hentry category-transportation tag-aircraft tag-airplanes tag-airport tag-bright">
                    <ul class="post-categories list-inline">
                        @foreach($berita->tag as $t)
                        <li class="transportation-color-label"><a href="https://pixellab-themes.com/bayan/category/business/transportation/" title="{{$t->label}}">{{$t->label}}</a></li>
                        @endforeach
                    </ul>
                    <h2 class="single-article-title">{{$berita->judul_berita}}</h2>
                    <ul class="article-meta post-meta list-inline">
                        <li class="post-date"><span>{{$berita->created_at}}</span></li>
                        <li class="post-author"><i class="fa fa-user"></i><span>{{$berita->user->name}}</span></li>
                        <li class="post-views"><i class="fa fa-eye"></i><span>{{$berita->views}}</span></li>
                        <li class="post-comments"><a href="#">0</a></li>
                    </ul>
                    <div class="single-article-header">
                        <img width="744" height="370" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive aligncenter pixel-home-big lazy-img" alt="Airplane Wing Through Window During Take Off" title="{{$berita->judul_berita}}" data-src="{{asset($berita->foto_berita)}}" />
                    </div>
                    <div class="post-entry">    
                        <p>{!!$berita->isi_berita!!}</p>
                    </div>
                    <div class="post-tagcloud">
                        <span>Tag : </span>
                        @foreach($berita->tag as $t)
                        <a href="#" rel="tag">{{$t->label}}</a>
                        @endforeach
                    </div>
                </article>
                <div class="post-share push_bottom_30" id="post-share">
                    <a class="facebook-share" data-toggle="tooltip" data-placement="top" title="" target="_blank" href="http://www.facebook.com/sharer.php?u=https://pixellab-themes.com/bayan/2019/02/17/airplane-wing-through-window-during-take-off/&amp;t=" data-original-title="Share on Facebook">Facebook</a>
                    <a class="twitter-share" data-toggle="tooltip" data-placement="top" title="" href="http://twitter.com/share?text=&amp;url=https://pixellab-themes.com/bayan/2019/02/17/airplane-wing-through-window-during-take-off/&amp;via=twitter&amp;related=coderplus%3AWordpress+Tips%2C+jQuery+and+more" rel="nofollow" target="_blank" data-original-title="Share on Twitter">Twitter</a>
                </div>
                <ul class="post-links pager push_bottom_40">
                    @if($prev)
                    <li class="previous">
                        <a href="{{route('berita.show', ['slug' => $prev->slug])}}" rel="prev"><img width="90" height="90" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive alignleft lazy-img wp-post-image" alt="" data-src="{{asset($prev->foto_berita)}}" /><span>Sebelumnya</span>{{ $prev->judul_berita }}</a>
                    </li>
                    @endif
                    @if($next)
                    <li class="next">
                        <a href="{{route('berita.show', ['slug' => $next->slug])}}" rel="next"><img width="90" height="90" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive alignright lazy-img wp-post-image" alt="" data-src="{{asset($next->foto_berita)}}" /><span>Selanjutnya</span>{{ $next->judul_berita }}</a>
                    </li>
                    @endif
                </ul>
                <div class="author-box push_bottom_40">
                    <div class="row author-container">
                        <div class="col-sm-3 author-image">
                            <div class="author-main-image">
                                <img alt='' src='https://secure.gravatar.com/avatar/3b91ac39312c204004ec207c40230d96?s=180&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/3b91ac39312c204004ec207c40230d96?s=360&#038;d=mm&#038;r=g 2x' class='img-responsive avatar-180 photo' height='180' width='180' />
                            </div>
                        </div>
                        <div class="col-sm-9 author-name">
                            <h3><span>Penulis : </span><a href="#" title="{{$berita->user->name}}" rel="author">{{$berita->user->name}}</a></h3>
                        </div>
                        <div class="col-sm-9 author-bio">
                            <p>Jordanian, 27 years, I design and develop WordPress themes , founder of PixellabDotNet</p>
                        </div>
                    </div>
                </div>
                <section class="category-box related-posts push_bottom_40 small-related">
                    <h4 class="box-title"><span>Related Posts</span></h4>
                    <div class="row box-content">
                        <div class="article col-md-4 col-sm-4 post-394 post type-post status-publish format-standard has-post-thumbnail hentry category-transportation">
                            <div class="article-image">
                                <a href="https://pixellab-themes.com/bayan/2019/02/17/traffic-a-lot-of-cars-driving-across-the-golden-gate-bridge/" title="Traffic: a Lot of Cars Driving Across The Golden Gate Bridge" class="img-bg">
                                    <img width="216" height="130" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive aligncenter pixel-scroll-size lazy-img" alt="Traffic: a Lot of Cars Driving Across The Golden Gate Bridge" title="Traffic: a Lot of Cars Driving Across The Golden Gate Bridge" data-src="https://pixellab-themes.com/bayan/wp-content/uploads/2019/02/traffic-a-lot-of-cars-driving-across-the-golden-gate-bridge_free_stock_photos_picjumbo_HNCK2899-2210x1474-216x130.jpg" />
                                </a>
                            </div> 
                            <ul class="article-meta">
                                <li class="article-date"><span>Feb 17, 2019</span></li>
                            </ul>  
                            <h4 class="article-title">
                                <a href="https://pixellab-themes.com/bayan/2019/02/17/traffic-a-lot-of-cars-driving-across-the-golden-gate-bridge/" title="Traffic: a Lot of Cars Driving Across The Golden Gate Bridge" class="img-bg">
                                    Traffic: a Lot of Cars Driving Across The Golden Gate Bridge
                                </a>
                            </h4>
                        </div>
                    </div>
                </section>
                <div id="comments">
                    <h3 class="box-title"><span>Komentar</span></h3>
                    @foreach($berita->komentar()->get() as $komen)
                    <ul class="list-unstyled">
                        <li id="comment-76" class="comment even thread-even depth-1 media">
                            <div class="media-left">
                                <a href="" class="media-object">
                                    <img alt='' src='https://secure.gravatar.com/avatar/0f70dd738b4f3498f12c9dc2493918b5?s=64&#038;d=mm&#038;r=g' class='img-responsive avatar-64 photo' height='64' width='64' />
                                </a>
                            </div>
                            <div class="media-body" id="div-comment-76">
                                <h4 class="media-heading">{{$komen->nama}}</h4>               
                                <div class="comment-metadata">
                                    <a href="https://pixellab-themes.com/bayan/2019/02/17/airplane-wing-through-window-during-take-off/#comment-76">
                                        <time datetime="2019-10-17T01:56:06+00:00">{{$komen->created_at->diffForHumans()}}</time>
                                    </a>
                                </div>
                                <div class="comment-content"><p>{{$komen->isi_komentar}}</p></div>                
                                <ul class="list-inline">
                                    <li class="reply-link"><a rel='nofollow' class='comment-reply-link' href='/bayan/2019/02/17/airplane-wing-through-window-during-take-off/?replytocom=76#respond' data-commentid="76" data-postid="391" data-belowelement="div-comment-76" data-respondelement="respond" aria-label='Reply to sadsad'>Reply</a></li>
                                </ul>
                            </div>      
                        </li>
                    </ul>
                    @endforeach
                    <div id="respond" class="comment-respond">
                        <h3 class="box-title"><span>Tulis Komentar<small><a rel="nofollow" id="cancel-comment-reply-link" href="/bayan/2019/02/17/airplane-wing-through-window-during-take-off/#respond" style="display:none;">Cancel reply</a></small></span></h3>
                        <form action="{{route('berita.komentar.store', $berita)}}" method="post" id="commentform" class="comment-form" name="commentForm" onsubmit="return validateForm();" novalidate>
                            @csrf
                            <p class="comment-notes">E-Mail Anda Tidak Akan Ditampilkan</p>
                            <div class="form-group">
                                <label for="comment">Komentar</label>
                                <textarea id="isi_komentar" class="form-control" name="isi_komentar" rows="3" aria-required="true"></textarea><span id="d3" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="author">Nama</label>
                                <input id="nama" name="nama" class="form-control" type="text" value="" size="30" aria-required='true' /><span id="d1" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" name="email" class="form-control" type="email" value="" size="30" aria-required='true' /><span id="d2" class="text-danger"></span>
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="btn btn-default" value="Post Comment" />
                                <input type='hidden' name='comment_post_ID' value='391' id='comment_post_ID' />
                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                            </p>
                        </form>
                    </div>
                </div>
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
                <div class="widget popular_widget push_bottom_40" id="popular_widget-5">
                    <h3 class="widget-title"><span>Berita Terbaru</span></h3>
                    <div class="widget-content box-content row">
                        @foreach($ber as $b)
                        <article class="article other-article side-article col-md-12">
                            <div class="article-image">
                                <a href="{{route('berita.show', $b->slug)}}" title="Fearless Man Challenge Everything Pose">
                                    <img width="90" height="90" src="https://pixellab-themes.com/bayan/wp-content/themes/bayan/assets/img/empty.gif" class="img-responsive aligncenter pixel-home-small lazy-img" alt="Fearless Man Challenge Everything Pose" title="Fearless Man Challenge Everything Pose" data-src="{{asset($b->foto_berita)}}" />
                                </a>
                            </div>
                            <ul class="article-meta">
                                <li class="article-date"><span>{{$b->created_at}}</span></li>
                            </ul>
                            <h4 class="article-title">
                                <a href="{{route('berita.show', $b->slug)}}" title="Fearless Man Challenge Everything Pose">
                                    {{$b->judul_berita}}
                                </a>
                            </h4>
                        </article>
                        @endforeach
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
@endsection