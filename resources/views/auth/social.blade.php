@extends('layouts.app')

@section('title')

Social links List

@endsection

@section('content')
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Social
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Link</th>
                                        <th>Icon</th>
                                        <th>Edit</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($socialList))
                                        @foreach ($socialList as $counter => $social)
                                        <tr class="odd gradeX">
                                            <td>{{ $counter+1 }}</td>
                                            <td>{{ $social->link }}</td>
                                            <td><img style="width: 100px; height: 100px" src="{{ $social->icon }}"></td>
                                            <td><a href="/adminpanel/editsocial/{{ $social->id }}"><span class="btn btn-primary glyphicon glyphicon-edit btn-xs">Edit</span></a></td>
                                            <td class="center">{{ date('g:ia \o\n l jS F Y', strtotime($social->created_at)) }}</td>
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
