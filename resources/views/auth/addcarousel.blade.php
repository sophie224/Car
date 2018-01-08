@extends('layouts.app')

@section('title')

Add Carousel Form

@endsection

@section('content')

<div class="panel panel-green">
    <div class="panel-heading">
        Add Carousel        
    </div>
    <form action="addedcarousel" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group col-xs-12">
            <label>Title</label>
                <input class="form-control" name="title" value="{{ old('title') }}">
        </div>

        @if ($errors->has('title'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('title') }}</strong>
            </span>
        @endif

        <div class="form-group col-xs-12">
            <label>Date</label>
                <input class="form-control" name="text" value="{{ old('text') }}">
        </div>

        @if ($errors->has('text'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('text') }}</strong>
            </span>
        @endif

        <div class="form-group col-xs-12">
            <label>Upload photo</label>
                <input type="file" class="form-control" name="image">
        </div>

        @if ($errors->has('image'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('image') }}</strong>
            </span>
        @endif
                            
        <div class="panel-footer">
            <button type="submit" class="btn btn-success">Add Carousel</button>
        </div>
    </form>
</div>

@endsection