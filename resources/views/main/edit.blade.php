@extends('layouts.insert')
@section('title','ویرایش قولنامه')
@section('content')
    <div class="col-11 col-md-9 mx-auto my-5">
        <div class="row mx-auto">
            <h3 class="text-white text-center mb-4">ویرایش اطلاعات قولنامه</h3>
        </div>
        <form action="{{route('update',['id'=>$contract->id])}}" enctype="multipart/form-data" method="post"
              class="mt-5">
            @csrf
            <div class="row p-4 m-0 border-1 border-light border rounded-3 mb-3">
                <div class="row mx-auto">
                    <h4 class="text-white text-end my-4">اطلاعات معامله</h4>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">نوع معامله</label>
                        <select class="form-select" aria-label="Default select example" name="transaction">
                            @if($contract->transaction=="buy")
                                <option style="font-size: 1.3rem;" selected value="buy">خرید</option>
                                <option style="font-size: 1.3rem;" value="sale">فروش</option>
                            @else
                                <option style="font-size: 1.3rem;" value="buy">خرید</option>
                                <option style="font-size: 1.3rem;" selected value="sale">فروش</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ معامله</label>
                        <input type="text" class="form-control date @error('transactionDate') is-invalid @enderror"
                               value="{{$contract->transactionDate}}"
                               aria-label="Last name"
                               name="transactionDate">
                        @error('transactionDate')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره قولنامه</label>
                        <input type="text" class="form-control @error('contractNo') is-invalid @enderror"
                               value="{{$contract->contractNo}}" aria-label="Last name"
                               name="contractNo">
                        @error('contractNo')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row p-4 m-0 border-1 border-light border rounded-3 mb-3">
                <div class="row mx-auto">
                    <h4 class="text-white text-end my-4">اطلاعات خریدار</h4>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg-6 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">کد ملی</label>
                        <input type="text" class="form-control @error('buyerNationalCode') is-invalid @enderror"
                               value="{{$contract->buyerNationalCode}}"
                               aria-label="Last name"
                               name="buyerNationalCode">
                        @error('buyerNationalCode')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">اسم و فامیل</label>
                        <input type="text" class="form-control @error('buyerName') is-invalid @enderror"
                               value="{{$contract->buyerName}}" aria-label="Last name"
                               name="buyerName">
                        @error('buyerName')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره همراه</label>
                        <input type="text" class="form-control @error('buyerMobile') is-invalid @enderror"
                               value="{{$contract->buyerMobile}}"
                               aria-label="Last name"
                               name="buyerMobile">
                        @error('buyerMobile')
                        <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره ثابت</label>
                        <input type="text" class="form-control @error('buyerPhone') is-invalid @enderror"
                               value="{{$contract->buyerPhone}}" aria-label="Last name"
                               name="buyerPhone">
                        @error('buyerPhone')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">کد پستی</label>
                        <input type="text" class="form-control @error('buyerPostalCode') is-invalid @enderror"
                               value="{{$contract->buyerPostalCode}}"
                               name="buyerPostalCode">
                        @error('buyerPostalCode')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 mb-1 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">آدرس</label>
                        <textarea class="form-control @error('buyerAddress') is-invalid @enderror" rows="1"
                                  aria-label="Last name"
                                  name="buyerAddress">{{$contract->buyerAddress}}</textarea>
                        @error('buyerAddress')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mx-auto mt-4">
                    <h4 class="text-white text-end my-4">اطلاعات فروشنده</h4>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg-6 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">کد ملی</label>
                        <input type="text" class="form-control @error('sellerNationalCode') is-invalid @enderror"
                               value="{{$contract->sellerNationalCode}}"
                               aria-label="Last name"
                               name="sellerNationalCode">
                        @error('sellerNationalCode')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">اسم و فامیل</label>
                        <input type="text" class="form-control @error('sellerName') is-invalid @enderror"
                               value="{{$contract->sellerName}}" aria-label="Last name"
                               name="sellerName">
                        @error('sellerName')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره همراه</label>
                        <input type="text" class="form-control @error('sellerMobile') is-invalid @enderror"
                               value="{{$contract->sellerMobile}}"
                               aria-label="Last name"
                               name="sellerMobile">
                        @error('sellerMobile')
                        <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره ثابت</label>
                        <input type="text" class="form-control @error('sellerPhone') is-invalid @enderror"
                               value="{{$contract->sellerPhone}}"
                               aria-label="Last name"
                               name="sellerPhone">
                        @error('sellerPhone')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">کد پستی</label>
                        <input type="text" class="form-control @error('sellerPostalCode') is-invalid @enderror"
                               value="{{$contract->sellerPostalCode}}"
                               name="sellerPostalCode">
                        @error('sellerPostalCode')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto mb-3 p-0">
                    <div class="col-12 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">آدرس</label>
                        <textarea class="form-control @error('sellerAddress') is-invalid @enderror" rows="1"
                                  aria-label="Last name"
                                  name="sellerAddress">{{$contract->sellerAddress}}</textarea>
                        @error('sellerAddress')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row p-4 m-0 border-1 border-light border rounded-3 mb-3">
                <div class="row mx-auto">
                    <h4 class="text-white text-end my-4">اطلاعات مورد معامله</h4>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">مدل ماشین</label>
                        <select name="machineType"
                                class="form-select machineType @error('machineType') is-invalid @enderror">
                            @foreach($types as $type)

                                @if($type->id === $kind->id)
                                    <option value="{{$type->id}}" selected>{{$type->machineType}}</option>
                                @else
                                    <option value="{{$type->id}}">{{$type->machineType}}</option>
                                @endif
                            @endforeach
                            @error('machineType')
                            <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                            @enderror
                        </select>
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">پلاک ماشین</label>
                        <div class="form-control p-0">
                            <div class="row p-0 m-0">
                                <div class="input-group p-0">
                                    <span class="input-group-text d-inline col-2 text-center"
                                          id="basic-addon1">ایران</span>
                                    <input type="text"
                                           class="col-2 text-center @error('machineNumber1') is-invalid @enderror"
                                           value="{{$contract->machineNumber1}}"
                                           name="machineNumber1" aria-describedby="basic-addon1">
                                    <span class="input-group-text d-inline text-center col-1" id="basic-addon1">-</span>
                                    <input type="text"
                                           class="col-3 text-center @error('machineNumber2') is-invalid @enderror"
                                           value="{{$contract->machineNumber2}}"
                                           name="machineNumber2">
                                    <input type="text"
                                           class="col-2 text-center @error('machineNumber3') is-invalid @enderror"
                                           value="{{$contract->machineNumber3}}"
                                           name="machineNumber3">
                                    <input type="text"
                                           class="col-2 text-center @error('machineNumber4') is-invalid @enderror"
                                           value="{{$contract->machineNumber4}}"
                                           name="machineNumber4">
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('machineNumber1'))
                            <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ "فیلد پلاک ماشین اجباری است." }}</small>
                        @elseif($errors->has('machineNumber2'))
                            <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ "فیلد پلاک ماشین اجباری است." }}</small>
                        @elseif($errors->has('machineNumber3'))
                            <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ "فیلد پلاک ماشین اجباری است." }}</small>
                        @elseif($errors->has('machineNumber4'))
                            <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ "فیلد پلاک ماشین اجباری است." }}</small>
                        @endif
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">سال ساخت</label>
                        <select name="YearOfConstruction"
                                class="form-select machineType @error('YearOfConstruction') is-invalid @enderror">
                            @foreach($years as $year)
                                @if($year->id == $product->id)
                                    <option value="{{$year->id}}" selected>{{$year->year}}</option>
                                @else
                                    <option value="{{$year->id}}">{{$year->year}}</option>
                                @endif
                            @endforeach
                            @error('YearOfConstruction')
                            <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                            @enderror
                        </select>
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">رنگ ماشین</label>
                        <select name="machineColor" class="form-select @error('machineColor') is-invalid @enderror">
                            @foreach($colors as $color)
                                @if($color->id == $machineColor->id)
                                    <option style="font-size: 1.3rem;" value="{{$color->id}}"
                                            selected>{{$color->colorName}}</option>
                                @else
                                    <option style="font-size: 1.3rem;"
                                            value="{{$color->id}}">{{$color->colorName}}</option>
                                @endif
                            @endforeach
                            @error('machineColor')
                            <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ $message }}</small>
                            @enderror
                        </select>
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">کارت سوخت</label>
                        <select class="form-select @error('fuelCart') is-invalid @enderror"
                                aria-label="Default select example" name="fuelCart">
                            @if($contract->fuelCart=="1")
                                <option style="font-size: 1.3rem;" selected value="1">دارد</option>
                                <option style="font-size: 1.3rem;" value="0">ندارد</option>
                            @else
                                <option style="font-size: 1.3rem;" selected value="0">ندارد</option>
                                <option style="font-size: 1.3rem;" value="1">دارد</option>
                            @endif
                            @error('fuelCart')
                            <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">رنگ شدگی</label>
                        <select class="form-select @error('discoloration') is-invalid @enderror"
                                aria-label="Default select example" name="discoloration">
                            @if($contract->discoloration=="yes")
                                <option style="font-size: 1.3rem;" selected value="yes">دارد</option>
                                <option style="font-size: 1.3rem;" value="no">ندارد</option>
                            @else
                                <option style="font-size: 1.3rem;" selected value="no">ندارد</option>
                                <option style="font-size: 1.3rem;" value="yes">دارد</option>
                            @endif
                        </select>
                        @error('discoloration')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">وضعیت شاسی</label>
                        <select class="form-select @error('hurt') is-invalid @enderror"
                                aria-label="Default select example" name="hurt">
                            @if($contract->hurt=="fix")
                                <option style="font-size: 1.3rem;" selected value="fix">سالم</option>
                                <option style="font-size: 1.3rem;" value="impact">ضربه خورده</option>
                            @else
                                <option style="font-size: 1.3rem;" selected value="impact">ضربه خورده</option>
                                <option style="font-size: 1.3rem;" value="fix">سالم</option>
                            @endif
                        </select>
                        @error('hurt')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">بیمه</label>
                        <select class="form-select @error('insurance') is-invalid @enderror"
                                aria-label="Default select example" name="insurance">
                            @if($contract->insurance=="1")
                                <option style="font-size: 1.3rem;" selected value="1">دارد</option>
                                <option style="font-size: 1.3rem;" value="0">ندارد</option>
                            @else
                                <option style="font-size: 1.3rem;" selected value="0">ندارد</option>
                                <option style="font-size: 1.3rem;" value="1">دارد</option>
                            @endif
                        </select>
                        @error('insurance')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">مدت بیمه</label>
                        <input type="text" class="form-control @error('insuranceDate') is-invalid @enderror"
                               value="{{$contract->insuranceDate}}"
                               aria-label="Last name"
                               name="insuranceDate">
                        @error('insuranceDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">عوارض</label>
                        <input type="text" class="form-control @error('avarez') is-invalid @enderror"
                               value="{{$contract->avarez}}"
                               aria-label="Last name"
                               name="avarez">
                        @error('avarez')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پرداخت عوارض</label>
                        <input type="text" class="form-control date @error('avarezDate') is-invalid @enderror"
                               value="{{$contract->avarezDate}}"
                               aria-label="Last name"
                               name="avarezDate">
                        @error('avarezDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">جریمه</label>
                        <input type="text" class="form-control @error('penalty') is-invalid @enderror"
                               value="{{$contract->penalty}}"
                               aria-label="Last name"
                               name="penalty">
                        @error('penalty')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پرداخت جریمه</label>
                        <input type="text" class="form-control date @error('penaltyDate') is-invalid @enderror"
                               value="{{$contract->penaltyDate}}"
                               aria-label="Last name"
                               name="penaltyDate">
                        @error('penaltyDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره سند</label>
                        <input type="text" class="form-control @error('documentNumber') is-invalid @enderror"
                               value="{{$contract->documentNumber}}"
                               aria-label="Last name"
                               name="documentNumber">
                        @error('documentNumber')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ سند</label>
                        <input type="text" class="form-control date @error('documentDate') is-invalid @enderror"
                               value="{{$contract->documentDate}}"
                               aria-label="Last name"
                               name="documentDate">
                        @error('documentDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">هزینه سند</label>
                        <select class="form-select @error('licenseCost') is-invalid @enderror"
                                aria-label="Default select example" name="licenseCost">
                            @if($contract->licenseCost=="1")
                                <option style="font-size: 1.3rem;" selected value="1">خریدار</option>
                                <option style="font-size: 1.3rem;" value="0">فروشنده</option>
                            @else
                                <option style="font-size: 1.3rem;" selected value="0">فروشنده</option>
                                <option style="font-size: 1.3rem;" value="1">خریدار</option>
                            @endif
                        </select>
                        @error('licenseCost')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تصویر قولنامه</label>
                        <input type="file" class="form-control @error('contractImage') is-invalid @enderror"
                               name="contractImage" value="{{$contract->contractImage}}">
                        @error('contractImage')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto mb-3 p-0">
                    <div class="col-12 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">توضیحات</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" rows="5"
                                  aria-label="Last name"
                                  name="description">{{$contract->description}}</textarea>
                        @error('description')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row p-4 m-0 border-1 border-light border rounded-3">
                <div class="row mx-auto">
                    <h4 class="text-white text-end my-4">اطلاعات مالی</h4>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">مبلغ کل</label>
                        <input type="text" class="form-control @error('totalAmount') is-invalid @enderror"
                               value="{{$contract->totalAmount}}"
                               aria-label="Last name"
                               name="totalAmount">
                        @error('totalAmount')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">پیش پرداخت</label>
                        <input type="text" class="form-control @error('prepayment') is-invalid @enderror"
                               value="{{$contract->prepayment}}" aria-label="Last name"
                               name="prepayment">
                        @error('prepayment')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پیش پرداخت</label>
                        <input type="text" class="form-control date @error('prepaymentDate') is-invalid @enderror"
                               value="{{$contract->prepaymentDate}}"
                               aria-label="Last name"
                               name="prepaymentDate">
                        @error('prepaymentDate')
                        <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">پرداختی تسویه</label>
                        <input type="text" class="form-control @error('clearing') is-invalid @enderror"
                               value="{{$contract->clearing}}" aria-label="Last name"
                               name="clearing">
                        @error('clearing')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ تسویه</label>
                        <input type="text" class="form-control date @error('clearingDate') is-invalid @enderror"
                               value="{{$contract->clearingDate}}"
                               aria-label="Last name"
                               name="clearingDate">
                        @error('clearingDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">پرداختی اول</label>
                        <input type="text" class="form-control" value="{{$contract->firstPay}}" aria-label="Last name"
                               name="firstPay">
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پرداختی اول</label>
                        <input type="text" class="form-control date" value="{{$contract->firstPayDate}}"
                               aria-label="Last name"
                               name="firstPayDate">
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">پرداختی دوم</label>
                        <input type="text" class="form-control" value="{{$contract->secondPay}}" aria-label="Last name"
                               name="secondPay">
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پرداختی دوم</label>
                        <input type="text" class="form-control date" value="{{$contract->secondPayDate}}"
                               aria-label="Last name"
                               name="secondPayDate">
                    </div>
                </div>

                <div class="row mx-auto my-5">
                    <div class="col text-start">
                        <a href="{{route('home')}}"
                           class="btn btn-outline-danger text-white border-light">بازگشت</a>
                        <button class="btn btn-outline-success text-white me-2 border-light">ویرایش</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
