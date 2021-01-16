@extends('layouts.admin')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
        
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> انشاء قسم فرعي جديد  </h4>
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
                                    <form class="form" action="{{ route('MainCategoriesStore')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                      

                                          <input type="hidden" name="id" value="">
                                          
                                
                                    
                                
                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> بيانات القسم الفرعي الجديد  </h4>

                                            
                                              <div class="form-group">
                                                  <label >صورة القسم </label>
                                                  <label id="projectinput7" class="file center-block">
                                                      <input type="file" id="file" name="photo">
                                                      <span class="file-custom"></span>
                                                
                                                  </label>
                                                  @error('photo')
                                                      <span class="text-danger">{{ $message }}</span>
                                                  @enderror
                                              </div>
                                             
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   الاسم </label>
                                                        <input type="text" value="{{ old('name') }}" id="name"
                                                               class="form-control"
                                                               placeholder="الاسم  "
                                                               name="name">
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}<span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                              
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   اسم الفرع الاصلي  </label>
                                                        <br>
                                                    <select name="parent" id="parent">
                                                        @foreach ($categories as $item)
                                                            <option>{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                       
                                                    </div>
                                                </div>
                                              </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1">  الاسم بالرابط  </label>
                                                    <input type="text" value="{{ old('slug') }} " id="slug"
                                                           class="form-control"
                                                           placeholder="  بالرابط"
                                                           name="slug">
                                                           @error('slug')
                                                        <span class="text-danger">{{ $message }}<span>
                                                    @enderror
                                                    
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mt-1">
                                                    <div class="form-group">
                                                        <label for="projectinput1">   الحالة </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <input type="checkbox" value="1" id="is_active"
                                                               class="switchery" data-color="success"
                                                                 name="is_active"
                                                                
                                                                 >
                                                        @error('is_active')
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