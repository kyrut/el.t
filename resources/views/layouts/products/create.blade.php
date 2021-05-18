@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{route('posts.store')}}" method="post" class="w-100" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <div class="w-100">
                            @if ($errors->any())
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{$errors->first()}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session()->get('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row align-items-stretch">
                        <div class="col-9">
                            @include('layouts.products.includes._form_product_main_column')
                        </div>
                        <div class="col-3">
                            @include('layouts.products.includes._form_product_sub_column')
                        </div>
                    </div>
                </div>
            </form>
            <div class="m-3 p-1 w-100" ></div>
        </div>
    </div>
@endsection
