@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Tag</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Tag</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Tag</h3>
                        </div>
                        <form action="{{route('tag.update', $tag->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="label">Label</label>
                                    <input type="text" class="form-control" id="label" name="label" value="{{$tag->label}}">
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