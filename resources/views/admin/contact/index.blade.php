@extends('admin.layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>{{__(' Contacts')}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item active">{{__('Contacts')}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>{{__('Contacts')}}</h5>
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

                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('lang.Name') }}</th>
                                    <th>{{ __('lang.Phone') }}</th>
                                    <th>{{ __('lang.Email') }}</th>
                                    <th>{{ __('lang.Service') }}</th>
                                    <th>{{ __('lang.Message') }}</th>
                                    <th>{{ __('lang.Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->service }}</td>
                                        <td>{{ substr($contact->message,0,30) }}...</td>
                                        <td>
                                            <form action="{{ route('contact.destroy', $contact->id) }}" method="post">
                                                @csrf
                                                @method('delete')
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
