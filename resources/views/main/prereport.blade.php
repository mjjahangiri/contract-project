@extends('layouts.main')
@section('title','جستجو در قولنامه ها')
@section('content')
    <div class="container py-5">
        <div class="row w-75 mx-auto my-5">
            <h3 class="text-white text-center mb-4">جستجو در قولنامه ها</h3>
        </div>

        <form action="{{route('show')}}" method="get">
            @csrf

            <div class="row w-50 p-0 my-4 mx-auto">
                <div class="col-12 col-md-8 mx-auto">
                    <input type="text" class="form-control @error('NationalCode') is-invalid @enderror" placeholder="کد ملی"
                                           aria-label="Last name" name="NationalCode">
                </div>
                @error('NationalCode')
                <small class="alert alert-danger mx-0 d-block my-2 w-75 py-1 mx-auto text-center">{{ $message }}</small>
                @enderror
            </div>
            <div class="row w-50 p-0 mx-auto">
                <div class="col-6 text-start">
                    <button class="btn btn-outline-light ">جستوجو</button>
                </div>
                <div class="col-6 text-end">
                    <a href="{{route('home')}}" class="btn btn-outline-light">بازگشت</a>
                </div>
            </div>
        </form>
    </div>
@endsection
