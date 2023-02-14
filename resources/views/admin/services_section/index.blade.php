@extends('admin.layouts.simple.master')
@section('title', 'Validation Forms')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>{{__('Section - Main')}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item active">{{__(' Main')}}</li>
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
                        <form action="{{route('services_section.update',$section->id)}}" method="post" class="needs-validation was-validated" novalidate="">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Title')}}</label>
                                    <input value="{{ $section->title }}" class="form-control" name="title" id="validationCustom01" type="text" placeholder="{{__('lang.Title')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">{{__('lang.Subtitle')}}</label>
                                    <textarea name="subtitle" id="" cols="30" id="validationCustom01" class="form-control" rows="5" required="" data-bs-original-title="" title="">{{$section->subtitle}}</textarea>
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Button Title')}}</label>
                                    <input value="{{ $section->button_title }}" class="form-control" name="button_title" id="validationCustom01" type="text" placeholder="{{__('lang.Button Title')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Button URL')}}</label>
                                    <input value="{{ $section->button_url }}" class="form-control" name="button_url" id="validationCustom01" type="url" placeholder="{{__('lang.Button URL')}}" required="" data-bs-original-title="" title="">
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
