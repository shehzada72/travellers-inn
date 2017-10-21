@extends('travellers-inn.layouts.admin-panel-main')
@section('title', "Users")
@section('stylesheet')
    <link href="{{ asset('admin-panel-assets/libs/jquery-datatables/css/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-panel-assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-panel-assets/css/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="page-heading">
        <h1><i class='fa fa-file' style="margin: 0 10px 0 0"></i> Unique Pages</h1>
        <h3>Unique Pages in Travellers Inn</h3>            	</div>
    <!-- Page Heading End-->				<!-- Your awesome content goes here -->
    <div class="row">
        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header">
                    <h2><strong>Unique Pages</strong></h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <br>
                    <div class="table-responsive">
                        <form class='form-horizontal' role='form'>
                            <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Page Url</th>
                                    <th>Unique Page Views</th>
                                    <th>Country</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($uniquePages as $unique)
                                    <tr>
                                        <td>{{$unique[0]}}</td>
                                        <th>{{$unique[2]}}</th>
                                        <td>{{$unique[1]}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin-panel-assets/libs/jquery-datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-panel-assets/libs/jquery-datatables/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('admin-panel-assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ asset('admin-panel-assets/js/pages/datatables.js') }}"></script>
@endsection