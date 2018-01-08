@extends('layouts.app')

@section('title')

Edit Services Form

@endsection

@section('content')

    
<div class="panel panel-green">
    <div class="panel-heading">
        Edit Services        
    </div>
    @foreach ($service as $srv)
        <form action="/adminpanel/editservices/{{$srv->id}}" enctype="multipart/form-data" method="POST">
    @endforeach            
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
                <label>Upload photo</label>
                    <input type="file" class="form-control" name="image">
            </div>

            @if ($errors->has('image'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('image') }}</strong>
            </span>
            @endif
            
            <div class="panel-footer">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </form>
</div>

@endsection
