@extends('layouts.admin')

@section('content')


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
                                <h4 class="card-title" id="basic-layout-form"> تعديل  وسيلة التوصيل </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            @include('Dashboard.includes.alerts.success')
                            @include('Dashboard.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ route('updateShippingSetting',$shipping->id) }}"
                                          method="PUT"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                         <input type="hidden" name="id" value="{{ $shipping->id }}">

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> بيانات المتجر </h4>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> القيمة </label>
                                                        <input type="text" value="{{ $shipping->value }}" id="value"
                                                               class="form-control"
                                                               placeholder="{{ $shipping->value }}  "
                                                               name="value">
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> المالك </label>
                                                        <input type="text" value="{{ $shipping->value }}" id="name"
                                                               class="form-control"
                                                               placeholder=" {{ $shipping->value }} "
                                                               name="name">
                                                        
                                                    </div>
                                                </div>
                                            </div>


                                            


                                            <div class="row">
                                                <div class="class col-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">كلمة المرور  </label>
                                                        <input type="text" id="password"
                                                               class="form-control"
                                                               placeholder="{{ $shipping->value }}" name="password">

                                                        @error("password")
                                                        <span class="text-danger"> </span>
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