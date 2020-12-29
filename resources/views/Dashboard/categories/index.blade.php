@extends('layouts.admin')

@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          

            <!-- Sell Orders & Buy Order -->
            <div class="row match-height">
                
                <div class="col-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">قائمة التصنيفات</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                        <div class="center card-content">
                            <div class="table-responsive">
                               
                                <table class="table table-de mb-0">
                                    <thead>
                                    <tr>
                                        <th>الاسم</th>
                                        <th>الاسم بالرابط </th>
                                        <th>الحالة </th>
                                        <th>صورة القسم</th>
                                        <th>الاجراءات</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($categories)
                                    @foreach ($categories as $category)
                                    <tr class="bg-danger bg-lighten-5">
                                    
                                        <th>{{ $category->name }}</th>
                                        <th>{{ $category->slug }}</th>
                                        <th>{{ $category->getActive() }}</th>
                                        <th><img style="width: 150px; height: 100px;" src="{{ url("public\\images\\".$category->image) }}"/></th>
                                        <th>
                                            <div class="btn-group" role="group" aria-label="Basic Example">
                                                <a href="{{ route('MainCategoriesEdit',$category->id) }}"
                                                    class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">
                                                    تعديل
                                                </a>
                                                <a href="{{ route('MainCategoriesDelete',$category->id) }}"
                                                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">
                                                    حذف
                                                </a>

                                            </div>
                                        </th>
                                        
                                    </tr> 
                                    @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sell Orders & Buy Order -->
           
        </div>
                    
</div>

@endsection