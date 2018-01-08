@extends('layouts.app')

@section('title')

Subscribers List

@endsection

@section('content')
<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Subscriber
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subscribe</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($subscriber))
                                        @foreach ($subscriber as $counter => $sbc)
                                        <tr class="odd gradeX">
                                            <td>{{ $counter+1 }}</td>
                                            <td>{{ $sbc->name }}</td>
                                            <td>{{ $sbc->email }}</td>
                                            <td>{{ $sbc->subscribe }}</td>
                                            <td class="center">{{ date('g:ia \o\n l jS F Y', strtotime($sbc->created_at)) }}</td>
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
