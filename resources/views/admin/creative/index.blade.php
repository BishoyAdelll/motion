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
    <h3>{{__('Section - Creative')}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">{{__('Dashboard')}}</a></li>
    <li class="breadcrumb-item active">{{__(' Creative')}}</li>
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
                        <form action="{{route('creative.update',$creativeSection->id)}}" method="post" class="needs-validation was-validated" novalidate="">
                            @csrf
                            @method('PUT')

                            <h1>Basic</h1>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Title')}}</label>
                                    <textarea name="content" class="form-control" id="" rows="5">{{$creativeSection->content}}</textarea>
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Video Title')}}</label>
                                    <input value="{{ $creativeSection->video_title }}" class="form-control" name="video_title" id="validationCustom01" type="text" placeholder="{{__('lang.Video Title')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Video URL')}}</label>
                                    <input value="{{ $creativeSection->video_id }}" class="form-control" name="video_id" id="validationCustom01" type="text" placeholder="{{__('lang.Video URL')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <hr />
                            <h1>First Card</h1>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Title')}}</label>
                                    <input value="{{ $creativeSection->first_card_title }}" class="form-control" name="first_card_title" id="validationCustom01" type="text" placeholder="{{__('lang.Title')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Subtitle')}}</label>
                                    <input value="{{ $creativeSection->first_card_subtitle }}" class="form-control" name="first_card_subtitle" id="validationCustom01" type="text" placeholder="{{__('lang.Subtitle')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Icon')}}</label>
                                    <input value="{{ $creativeSection->first_card_icon }}" class="form-control" name="first_card_icon" id="validationCustom01" type="text" placeholder="{{__('lang.Icon')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <hr />
                            <h1>Second Card</h1>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Title')}}</label>
                                    <input value="{{ $creativeSection->second_card_title }}" class="form-control" name="second_card_title" id="validationCustom01" type="text" placeholder="{{__('lang.Title')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Subtitle')}}</label>
                                    <input value="{{ $creativeSection->second_card_subtitle }}" class="form-control" name="second_card_subtitle" id="validationCustom01" type="text" placeholder="{{__('lang.Subtitle')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Icon')}}</label>
                                    <input value="{{ $creativeSection->second_card_icon }}" class="form-control" name="second_card_icon" id="validationCustom01" type="text" placeholder="{{__('lang.Icon')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <hr>
                            <h1>Third Card</h1>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Title')}}</label>
                                    <input value="{{ $creativeSection->third_card_title }}" class="form-control" name="third_card_title" id="validationCustom01" type="text" placeholder="{{__('lang.Title')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Subtitle')}}</label>
                                    <input value="{{ $creativeSection->third_card_subtitle }}" class="form-control" name="third_card_subtitle" id="validationCustom01" type="text" placeholder="{{__('lang.Subtitle')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">{{__('lang.Icon')}}</label>
                                    <input value="{{ $creativeSection->third_card_icon }}" class="form-control" name="third_card_icon" id="validationCustom01" type="text" placeholder="{{__('lang.Icon')}}" required="" data-bs-original-title="" title="">
                                    <div class="valid-feedback">{{__('lang.Looks good!')}}</div>
                                    <div class="invalid-feedback">{{__('lang.Please fill out this field.')}}</div>
                                </div>
                            </div>


                            <button class="btn btn-primary create"  disabled type="submit" data-bs-original-title="" title="">{{__('lang.Submit')}}</button>
                            </form>
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
