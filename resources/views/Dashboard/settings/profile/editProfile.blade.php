@extends('layouts.admin')

@section('content')
{{-- <style>
    ::placeholder{
        color : red;
        font-size : 1.5rem;
        text-transform : lowercase
        
    }
</style> --}}

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">الرئيسية </a>
                            </li>
                            
                            <li class="breadcrumb-item active">وسائل التوصيل
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> تعديل  بيانات  المستخدم </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            @include('Dashboard.includes.alerts.success')
                            @include('Dashboard.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ route('admin.updateProfile') }}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                         <input type="hidden" name="id" value="{{ $user->id }}">

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i>بيانات المستخدم </h4>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   الاسم </label>
                                                        <input type="text" value="{{old('name') }}" id="key"
                                                               class="form-control"
                                                               placeholder="{{ $user->name  }}  "
                                                               name="name">
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  الايميل </label>
                                                        <input type="email" value="{{ $user->email }}" id="email"
                                                               class="form-control"
                                                               placeholder=" {{ $user->email  }} "
                                                               name="email">
                                                               @error('email')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   كلمة السر الجديدة</label>
                                                        <input type="password" value="" id="password"
                                                               class="form-control"
                                                               placeholder=" كلمة السر الجديدة "
                                                               name="password">
                                                               @error('password')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">  تاكيد كلمة السر </label>
                                                        <input type="password" value="" id="repassword"
                                                               class="form-control"
                                                               placeholder="تاكيد كلمة السر  "
                                                               name="repassword">
                                                               @error('repassword')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
@stop