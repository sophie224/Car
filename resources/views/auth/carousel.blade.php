@extends('layouts.app')

@section('title')

Carousel List

@endsection

@section('content')

<div class="row" >
    <div class="col-lg-12">
        <div class="panel panel-green">
            <div class="panel-heading">
                Carousel
            </div>
                        <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($carousel))
                                @foreach ($carousel as $counter  => $car)
                                <tr class="odd gradeX">
                                    <td>{{ $counter+1 }}</td>
                                    <td>{{ $car->title }}</td>
                                    <td>{{ $car->text }}</td>
                                    <td><img style="width: 100px; height: 100px" src="{{ $car->img }}"></td>
                                    <td><a href="/adminpanel/editcarousel/{{ $car->id }}"><span class="btn btn-primary glyphicon glyphicon-edit btn-xs">Edit</span></a></td>
                                    <td class="center"><a href="/adminpanel/removecarousel/{{$car->id}}" class="removeVacancy"><span class="btn btn-danger glyphicon glyphicon-trash btn-xs">Delete</span></a></td>
                                    <td class="center">{{  date('g:ia \o\n l jS F Y', strtotime($car->created_at))  }}</td>
                                </tr>
                                @endforeach
                            @endif     
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>

@endsection
