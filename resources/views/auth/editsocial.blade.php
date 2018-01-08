@extends('layouts.app')

@section('title')

Edit Social Form

@endsection

@section('content')  

<div class="panel panel-green">
    <div class="panel-heading">
        Edit Social        
    </div>
    @foreach ($social as $soc) 
        <form action="/adminpanel/editsocial/{{$soc->id}}" enctype="multipart/form-data" method="POST">
    @endforeach            
            {{ csrf_field() }}
            <div class="form-group col-xs-12">
                <label>Link</label>
                    <input class="form-control" name="link" value="{{ old('link') }}">
            </div>

             @if ($errors->has('link'))
            <span class="help-block">
                <strong class="text-danger" >{{ $errors->first('link') }}</strong>
            </span>
            @endif
            
            <div class="form-group col-xs-12">
                <label>Upload Icon</label>
                    <input type="file" class="form-control" name="icon">
            </div>

            @if ($errors->has('icon'))
            <span class="help-block">
                <strong class="text-danger">{{ $errors->first('icon') }}</strong>
            </span>
            @endif
            
            <div class="panel-footer">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </form>
</div>

@endsection
