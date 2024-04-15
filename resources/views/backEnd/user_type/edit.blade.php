@extends('backEnd.master')
@section('title','Update User Type')
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">@yield('title')</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted " href="{{route('admin.index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">User Type</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="{{asset('back')}}/assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-content searchable-container list">
            <!-- --------------------- start Contact ---------------- -->
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <h4>User Tpe </h4>
                    </div>
                    <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a href="{{route('category.index')}}" class="btn btn-info d-flex align-items-center">
                            <i class="ti ti-list text-white me-1 fs-5"></i> User Type List
                        </a>
                    </div>
                </div>
            </div>
            <!-- ---------------------
                            end Contact
                        ---------------- -->
            <div class="card card-body">
                <form method="post" action="{{route('user-type.update',$type->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label fw-semibold">User Tpe title </label>
                                <input type="text" name="title" class="form-control" id="exampleInputtext" placeholder="User Tpe title" value="{{$type->title}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label fw-semibold">Status</label>
                                <select name="status" id="" class="form-select">
                                    <option value="1" @if($type->status == 1)@endif>Publish</option>
                                    <option value="2" @if($type->status == 2)@endif>Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="ms-auto mt-3 mt-md-0">
                                <button
                                    type="submit"
                                    class="btn btn-info font-medium rounded-pill px-4"
                                >
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-send me-2 fs-4"></i>
                                        Save
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
