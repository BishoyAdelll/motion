@extends('admin.layouts.simple.master')
@section('title', 'Validation Forms')

@section('css')
@endsection

@section('style')
    <style>
        hr{
            margin: auto;
            margin-top: 150px;
            margin-bottom: 50px;
            width: 50%;
        }
        button{
            margin-top: 50px;
        }
    </style>
@endsection

@section('breadcrumb-title')
    <h3>{{__('Settings')}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item active">{{__(' Settings')}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <h5>{{__('lang.Edit')}}</h5>


                    </div>
                    <div class="card-body">
                        @if (Session::has('msg'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{ Session::get('msg') }}</li>
                                </ul>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('settings.update',$setting->id)}}" method="post" class="needs-validation was-validated" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Site Name')}}</label>
                                    <input class="form-control" name="site_name" id="validationCustom01" type="text" value="{{$setting->site_name}}" placeholder="{{__('lang.Site Name')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom02">{{__('lang.Site Email')}}</label>
                                    <input class="form-control" name="site_email" id="validationCustom02" type="email" value="{{$setting->site_email}}" placeholder="{{__('lang.Site Email')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">{{__('lang.Site Address')}}</label>
                                    <input class="form-control" name="site_address" id="validationCustom03" type="text" value="{{$setting->site_address}}" placeholder="{{__('lang.Site Address')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">{{__('lang.Site Phone')}}</label>
                                    <input class="form-control" name="site_phone" id="validationCustom04" type="text" value="{{$setting->site_phone}}" placeholder="{{__('lang.Site Phone')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">{{__('lang.Logo')}}</label>
                                    <input class="form-control" name="logo" id="validationCustom05" type="file" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    @if (!empty($setting->logo))
                                        <img src="{{asset('front/assets/img/motion round')}}/{{$setting->logo}}" alt="{{$setting->logo}}" style="max-width: 300px">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom06">{{__('lang.Footer Title')}}</label>
                                    <input class="form-control" name="footer_title" id="validationCustom06" type="text" value="{{$setting->footer_title}}" placeholder="{{__('lang.Footer Title')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom07">{{__('lang.Footer Button Title')}}</label>
                                    <input class="form-control" name="footer_btn_title" id="validationCustom07" type="text" value="{{$setting->footer_btn_title}}" placeholder="{{__('lang.Footer Button Title')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom08">{{__('lang.Footer Button URL')}}</label>
                                    <input class="form-control" name="footer_btn_url" id="validationCustom08" type="url" value="{{$setting->footer_btn_url}}" placeholder="{{__('lang.Footer Button URL')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom09">{{__('lang.Terms URL')}}</label>
                                    <input class="form-control" name="terms_url" id="validationCustom09" type="url" value="{{$setting->terms_url}}" placeholder="{{__('lang.Terms URL')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom010">{{__('lang.Policy URL')}}</label>
                                    <input class="form-control" name="policy_url" id="validationCustom010" type="url" value="{{$setting->policy_url}}" placeholder="{{__('lang.Policy URL')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>


                            <button class="btn btn-primary create"  disabled type="submit" data-bs-original-title="" title="">{{__('lang.Submit')}}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endsection

        @section('script')
            <script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
            <script >
                $(document).ready(function (){
                    $('.create').prop("disabled", false)
                })
            </script>
@endsection
