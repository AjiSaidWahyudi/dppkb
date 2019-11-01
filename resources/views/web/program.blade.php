@extends('layouts.web')
@section('webcss')
    <style type="text/css">
    	.card {
		  	position: relative;
		  	display: flex;
		  	flex-direction: column;
		  	min-width: 0;
		  	word-wrap: break-word;
		  	background-color: #fff;
		  	background-clip: border-box;
		  	border: 1px solid rgba(0, 0, 0, 0.125);
		  	border-radius: 0.25rem;
		}

		.card > hr {
		  	margin-right: 0;
		  	margin-left: 0;
		}

		.card > .list-group:first-child .list-group-item:first-child {
		  	border-top-left-radius: 0.25rem;
		  	border-top-right-radius: 0.25rem;
		}

		.card > .list-group:last-child .list-group-item:last-child {
		  	border-bottom-right-radius: 0.25rem;
		  	border-bottom-left-radius: 0.25rem;
		}

		.card-body {
		  	flex: 1 1 auto;
		  	padding: 1.25rem;
		}

		.card-title {
		  	margin-bottom: 0.75rem;
		}

		.card-subtitle {
		  	margin-top: -0.375rem;
		  	margin-bottom: 0;
		}

		.card-text:last-child {
		  	margin-bottom: 0;
		}

		.card-link:hover {
		  	text-decoration: none;
		}

		.card-link + .card-link {
		  	margin-left: 1.25rem;
		}

		.card-header {
		  	padding: 0.75rem 1.25rem;
		  	margin-bottom: 0;
		  	background-color: rgba(0, 0, 0, 0.03);
		  	border-bottom: 1px solid rgba(0, 0, 0, 0.125);
		}

		.card-header:first-child {
		  	border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
		}

		.card-header + .list-group .list-group-item:first-child {
		  	border-top: 0;
		}

		.card-footer {
		  	padding: 0.75rem 1.25rem;
		  	background-color: rgba(0, 0, 0, 0.03);
		  	border-top: 1px solid rgba(0, 0, 0, 0.125);
		}

		.card-footer:last-child {
		  	border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
		}

		.card-header-tabs {
		  	margin-right: -0.625rem;
		  	margin-bottom: -0.75rem;
		  	margin-left: -0.625rem;
		  	border-bottom: 0;
		}

		.card-header-pills {
		  	margin-right: -0.625rem;
		  	margin-left: -0.625rem;
		}

		.card-img-overlay {
		  	position: absolute;
		  	top: 0;
		  	right: 0;
		  	bottom: 0;
		  	left: 0;
		  	padding: 1.25rem;
		}

		.card-img {
		  	width: 100%;
		  	border-radius: calc(0.25rem - 1px);
		}

		.card-img-top {
		  	width: 100%;
		  	border-top-left-radius: calc(0.25rem - 1px);
		  	border-top-right-radius: calc(0.25rem - 1px);
		}

		.card-img-bottom {
		  	width: 100%;
		  	border-bottom-right-radius: calc(0.25rem - 1px);
		  	border-bottom-left-radius: calc(0.25rem - 1px);
		}

		.card-deck {
		  	display: flex;
		  	flex-direction: column;
		}

		.card-deck .card {
		  	margin-bottom: 15px;
		}

		@media (min-width: 576px) {
		  	.card-deck {
			    flex-flow: row wrap;
			    margin-right: -15px;
			    margin-left: -15px;
		  	}

		  	.card-deck .card {
			    display: flex;
			    flex: 1 0 0%;
			    flex-direction: column;
			    margin-right: 15px;
			    margin-bottom: 0;
			    margin-left: 15px;
		  	}
		}

		.card-group {
		  	display: flex;
		  	flex-direction: column;
		}

		.card-group > .card {
		  	margin-bottom: 15px;
		}

		@media (min-width: 576px) {
		  	.card-group {
		    	flex-flow: row wrap;
		  	}

		  	.card-group > .card {
			    flex: 1 0 0%;
			    margin-bottom: 0;
		  	}

		  	.card-group > .card + .card {
			    margin-left: 0;
			    border-left: 0;
		  	}

		  	.card-group > .card:not(:last-child) {
			    border-top-right-radius: 0;
			    border-bottom-right-radius: 0;
		  	}

			.card-group > .card:not(:last-child) .card-img-top,
			.card-group > .card:not(:last-child) .card-header {
				border-top-right-radius: 0;
			}

		  	.card-group > .card:not(:last-child) .card-img-bottom,
		  	.card-group > .card:not(:last-child) .card-footer {
		    	border-bottom-right-radius: 0;
		  	}

		  	.card-group > .card:not(:first-child) {
		    	border-top-left-radius: 0;
		    	border-bottom-left-radius: 0;
		  	}

		  	.card-group > .card:not(:first-child) .card-img-top,
		  	.card-group > .card:not(:first-child) .card-header {
		    	border-top-left-radius: 0;
		  	}

		  	.card-group > .card:not(:first-child) .card-img-bottom,
		  	.card-group > .card:not(:first-child) .card-footer {
		    	border-bottom-left-radius: 0;
		  	}
		}

		.card-columns .card {
		  	margin-bottom: 0.75rem;
		}

		@media (min-width: 576px) {
		  	.card-columns {
		    	-moz-column-count: 3;
		        column-count: 3;
		    	-moz-column-gap: 1.25rem;
		        column-gap: 1.25rem;
		    	orphans: 1;
		    	widows: 1;
		  	}

		  	.card-columns .card {
		    	display: inline-block;
		    	width: 100%;
		  	}
		}

        .accordion > .card {
            overflow: hidden;
        }

        .accordion > .card:not(:first-of-type) .card-header:first-child {
            border-radius: 0;
        }

        .accordion > .card:not(:first-of-type):not(:last-of-type) {
            border-bottom: 0;
            border-radius: 0;
        }

        .accordion > .card:first-of-type {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .accordion > .card:last-of-type {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .accordion > .card .card-header {
            margin-bottom: -1px;
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important;
        }
    </style>
@endsection
@section('content')
    <div class="widget widget-tabbed push_bottom_40" id="widget_tabs-2">
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
                    <div class="accordion" id="accordionExample">
		                <div class="card">
		                    <div class="card-header" id="headingOne">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		                                Unit
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($bid->unit as $un)
		                            <p>
		                                <a href="">{{$un->nama}}</a>
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingTwo">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		                                Program
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($program as $pro)
		                            <p>
		                                <a href="">{{$pro->nama}}</a>
		                                @if($pro->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$pro->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$pro->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingThree">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		                                Kegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($kegiatan as $keg)
		                            <p>
		                                {{$keg->nama}}
		                                @if($keg->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$keg->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$keg->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingFour">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		                                Subkegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($subkeg as $sub)
		                            <p>
		                                {{$sub->nama}}
		                                @if($sub->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$sub->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$sub->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		            </div>
                    @endif
                    @endforeach
                </div>
                <div class="tab-pane box-content row" id="popular_widget_tabs-2">
                    @foreach($bidang as $bid)
                    @if($bid->nama == 'Bidang I')
                    <div class="accordion" id="accordionExample">
		                <div class="card">
		                    <div class="card-header" id="headingOne">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		                                Unit
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($bid->unit as $un)
		                            <p>
		                                <a href="">{{$un->nama}}</a>
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingTwo">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		                                Program
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($program as $pro)
		                            <p>
		                                <a href="">{{$pro->nama}}</a>
		                                @if($pro->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$pro->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$pro->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingThree">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		                                Kegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($kegiatan as $keg)
		                            <p>
		                                {{$keg->nama}}
		                                @if($keg->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$keg->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$keg->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingFour">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		                                Subkegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($subkeg as $sub)
		                            <p>
		                                {{$sub->nama}}
		                                @if($sub->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$sub->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$sub->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		            </div>
                    @endif
                    @endforeach
                </div>
                <div class="tab-pane box-content row" id="comments_widget_tabs-2">
                    @foreach($bidang as $bid)
                    @if($bid->nama == 'Bidang II')
                    <div class="accordion" id="accordionExample">
		                <div class="card">
		                    <div class="card-header" id="headingOne">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		                                Unit
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($bid->unit as $un)
		                            <p>
		                                <a href="">{{$un->nama}}</a>
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingTwo">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		                                Program
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($program as $pro)
		                            <p>
		                                <a href="">{{$pro->nama}}</a>
		                                @if($pro->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$pro->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$pro->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingThree">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		                                Kegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($kegiatan as $keg)
		                            <p>
		                                {{$keg->nama}}
		                                @if($keg->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$keg->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$keg->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingFour">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		                                Subkegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($subkeg as $sub)
		                            <p>
		                                {{$sub->nama}}
		                                @if($sub->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$sub->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$sub->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		            </div>
                    @endif
                    @endforeach
                </div>
                <div class="tab-pane box-content" id="tags_widget_tabs-2">
                    @foreach($bidang as $bid)
                    @if($bid->nama == 'Bidang III')
                    <div class="accordion" id="accordionExample">
		                <div class="card">
		                    <div class="card-header" id="headingOne">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		                                Unit
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($bid->unit as $un)
		                            <p>
		                                <a href="">{{$un->nama}}</a>
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingTwo">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		                                Program
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($program as $pro)
		                            <p>
		                                <a href="">{{$pro->nama}}</a>
		                                @if($pro->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$pro->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$pro->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingThree">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		                                Kegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($kegiatan as $keg)
		                            <p>
		                                {{$keg->nama}}
		                                @if($keg->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$keg->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$keg->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingFour">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		                                Subkegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($subkeg as $sub)
		                            <p>
		                                {{$sub->nama}}
		                                @if($sub->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$sub->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$sub->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		            </div>
                    @endif
                    @endforeach
                </div>
                <div class="tab-pane box-content" id="tambah_widget_tabs-2">
                    @foreach($bidang as $bid)
                    @if($bid->nama == 'Bidang IV')
                    <div class="accordion" id="accordionExample">
		                <div class="card">
		                    <div class="card-header" id="headingOne">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
		                                Unit
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($bid->unit as $un)
		                            <p>
		                                <a href="">{{$un->nama}}</a>
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingTwo">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		                                Program
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($program as $pro)
		                            <p>
		                                <a href="">{{$pro->nama}}</a>
		                                @if($pro->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$pro->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$pro->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingThree">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		                                Kegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($kegiatan as $keg)
		                            <p>
		                                {{$keg->nama}}
		                                @if($keg->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$keg->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$keg->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		                <div class="card">
		                    <div class="card-header" id="headingFour">
		                        <h2 class="mb-0">
		                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		                                Subkegiatan
		                            </button>
		                        </h2>
		                    </div>
		                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
		                        <div class="card-body">
		                            @foreach($subkeg as $sub)
		                            <p>
		                                {{$sub->nama}}
		                                @if($sub->status == "Sudah_terlaksana")
		                                <span class="label label-success pull-right" value="{{$sub->status}}">Sudah Terlaksana</span>
		                                @else
		                                <span class="label label-danger pull-right" value="{{$sub->status}}">Belum Terlaksana</span>
		                                @endif
		                            </p>
		                            @endforeach
		                        </div>
		                    </div>
		                </div>
		            </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection