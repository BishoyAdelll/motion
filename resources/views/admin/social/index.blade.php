@extends('admin.layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>{{__(' Social')}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item active">{{__(' Social')}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>All Socials</h5>
                    </div>
                    <div class="card-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{ Session::get('msg') }}</li>
                                </ul>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <a href="{{ route('social.create') }}" class="btn btn-primary mb-3 " type="submit" data-bs-original-title="" title="">{{__('lang.Create')}}</a>

                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('lang.Title') }}</th>
                                    <th>{{ __('lang.Icon') }}</th>
                                    <th>{{ __('lang.URL') }}</th>
                                    <th>{{ __('lang.Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($socials as $social)
                                    <tr>
                                        <td>{{ $social->id }}</td>
                                        <td>{{ $social->title }}</td>
                                        <td>{{ $social->icon }}</td>
                                        <td>{{ $social->url }}</td>
                                        <td>
                                            <form action="{{ route('social.destroy', $social->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('social.edit', $social->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->


        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({

                columnDefs: [{
                    targets: "_all",
                    orderable: false
                }],
                order: [[0, 'asc']],
                initComplete: function () {
                    var excluded_columns = [0,3];
                    this.api().columns().every(function () {
                        var column = this;
                        if(excluded_columns.indexOf(column.index()) == -1) {
                            var select = $(' <select style="margin-left:5px"><option value=""></option></select>')
                                .appendTo($(column.header()))
                                .on('change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );

                                    column
                                        .search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });

                            column.data().unique().sort().each(function (d, j) {

                                select.append('<option value="' + d + '">' + d + '</option>')

                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
