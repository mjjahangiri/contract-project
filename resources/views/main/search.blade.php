@extends('layouts.insert')
@section('title','ویرایش قولنامه')
@section('content')
    <div class="container py-5">
        <div class="row w-75 mx-auto my-5">
            <h3 class="text-white text-center mb-4">جستوجو در قولنامه ها</h3>
        </div>

        <div class="row w-100 p-0 my-4 mx-auto">
            <form action="{{route('searchContractNumber')}}" class="col-12 col-lg-4" method="get">
                @csrf
                <div class="p-5">
                    <div class="p-4 py-5 border rounded border-light">
                        <div class="col-12 mx-auto">
                            <label class="text-white-50 mb-2 pe-1">شماره قولنامه را وارد کنید :</label>
                            <input type="text" class="form-control @error('contractNo') is-invalid @enderror"
                                   placeholder="123456"
                                   aria-label="Last name" name="contractNo">
                        </div>
                        @error('contractNo')
                        <small
                            class="alert alert-danger mx-0 d-block my-2 w-75 py-1 mx-auto text-center">{{ $message }}</small>
                        @enderror
                        <div class="row w-100 p-0 mt-5 mx-auto">
                            <div class="col-6 text-start">
                                <button class="btn btn-outline-light  px-3 py-1">جستوجو</button>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{route('home')}}" class="btn btn-outline-light px-3 py-1">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{route('searchMachineNumber')}}" class="col-12 col-lg-4" method="get">
                @csrf
                <div class="p-5">
                    <div class="p-4 py-5 border rounded border-light">
                        <div class="col-12 mx-auto">
                            <label class="text-white-50 mb-2 pe-1">شماره پلاک را وارد کنید :</label>
                            <div class="form-control p-0">
                                <div class="row p-0 m-0">
                                    <div class="input-group p-0">
                                        <span class="input-group-text d-inline col-2 text-center" id="basic-addon1">ایران</span>
                                        <input type="text" class="col-2 text-center @error('machineNumber1') is-invalid @enderror"
                                               value="{{ old('machineNumber1') }}" placeholder="74"
                                               name="machineNumber1" aria-describedby="basic-addon1">
                                        <span class="input-group-text d-inline text-center col-1" id="basic-addon1">-</span>
                                        <input type="text" class="col-3 text-center @error('machineNumber2') is-invalid @enderror"
                                               value="{{ old('machineNumber2') }}" placeholder="565"
                                               name="machineNumber2">
                                        <input type="text" class="col-2 text-center @error('machineNumber3') is-invalid @enderror"
                                               value="{{ old('machineNumber3') }}" placeholder="ب"
                                               name="machineNumber3">
                                        <input type="text" class="col-2 text-center @error('machineNumber4') is-invalid @enderror"
                                               value="{{ old('machineNumber4') }}" placeholder="18"
                                               name="machineNumber4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @error('machineNumber1')
                        <small
                            class="alert alert-danger mx-0 d-block my-2 w-75 py-1 mx-auto text-center">{{ $message }}</small>
                        @enderror
                        @error('machineNumber2')
                        <small
                            class="alert alert-danger mx-0 d-block my-2 w-75 py-1 mx-auto text-center">{{ $message }}</small>
                        @enderror
                        @error('machineNumber3')
                        <small
                            class="alert alert-danger mx-0 d-block my-2 w-75 py-1 mx-auto text-center">{{ $message }}</small>
                        @enderror
                        @error('machineNumber4')
                        <small
                            class="alert alert-danger mx-0 d-block my-2 w-75 py-1 mx-auto text-center">{{ $message }}</small>
                        @enderror
                        <div class="row w-100 p-0 mt-5 mx-auto">
                            <div class="col-6 text-start">
                                <button class="btn btn-outline-light  px-3 py-1">جستوجو</button>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{route('home')}}" class="btn btn-outline-light px-3 py-1">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{route('searchMachineType')}}" class="col-12 col-lg-4" method="get">
                @csrf
                <div class="p-5">
                    <div class="p-4 py-5 border rounded border-light">
                        <div class="col-12 mx-auto">
                            <label class="text-white-50 mb-2 pe-1">نوع ماشین را انتخاب کنید :</label>
                            <select name="machineType" class="form-select machineType @error('machineType') is-invalid @enderror">
                                <option disabled hidden selected>انتخاب کنید</option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->machineType}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('machineType')
                        <small
                            class="alert alert-danger mx-0 d-block my-2 w-75 py-1 mx-auto text-center">{{ $message }}</small>
                        @enderror
                        <div class="row w-100 p-0 mt-5 mx-auto">
                            <div class="col-6 text-center text-md-start">
                                <button class="btn btn-outline-light px-3 py-1">جستوجو</button>
                            </div>
                            <div class="col-6 text-md-end text-center">
                                <a href="{{route('home')}}" class="btn btn-outline-light px-3 py-1">بازگشت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
