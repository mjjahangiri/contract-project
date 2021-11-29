@extends('layouts.insert')
@section('title','ثبت قولنامه')
@section('content')
    <div class="col-11 col-md-9  mx-auto my-5">
        <div class="row mx-auto">
            <h3 class="text-white text-center mb-4">ثبت اطلاعات معامله</h3>
        </div>
        <form action="{{route('store')}}" enctype="multipart/form-data" method="post" class="mt-5">
            @csrf
            <div class="row p-4 m-0 border-1 border-light border rounded-3 mb-3">
                <div class="row mx-auto">
                    <h4 class="text-white text-md-end text-center my-4">اطلاعات معامله</h4>
                </div>

                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">نوع معامله</label>
                        <select class="form-select" name="transaction">
                            <option disabled hidden selected>انتخاب کنید</option>
                            <option style="font-size: 1.3rem;"
                                    {{ old('transaction') == 'buy' ? "selected" : "" }} value="buy">خرید
                            </option>
                            <option style="font-size: 1.3rem;"
                                    {{ old('transaction') == 'sale' ? "selected" : "" }} value="sale">فروش
                            </option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ معامله</label>
                        <input type="text"
                               class="form-control date @error('transactionDate') is-invalid @enderror"
                               value="{{ old('transactionDate') }}" placeholder="تاریخ را انتخاب کنید" name="transactionDate"/>
                        @error('transactionDate')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره قولنامه</label>
                        <input type="text" class="form-control @error('contractNo') is-invalid @enderror"
                               value="{{ old('contractNo') }}" placeholder="123456" name="contractNo">
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
                               value="{{ old('buyerNationalCode') }}" placeholder="0921112223"
                               name="buyerNationalCode">
                        @error('buyerNationalCode')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">اسم و فامیل</label>
                        <input type="text" class="form-control @error('buyerName') is-invalid @enderror"
                               value="{{ old('buyerName') }}" placeholder="محمد جواد جهانگیری"
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
                               value="{{ old('buyerMobile') }}" placeholder="09385656118"
                               name="buyerMobile">
                        @error('buyerMobile')
                        <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره ثابت</label>
                        <input type="text" class="form-control @error('buyerPhone') is-invalid @enderror"
                               value="{{ old('buyerPhone') }}" placeholder="05138671111"
                               name="buyerPhone">
                        @error('buyerPhone')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">کد پستی</label>
                        <input type="text" class="form-control @error('buyerPostalCode') is-invalid @enderror"
                               value="{{ old('buyerPostalCode') }}" placeholder="919847584"
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
                                  placeholder="بلوار دانشجو کوچه 18 پلاک 23"
                                  name="buyerAddress">{{ old('buyerAddress') }}</textarea>
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
                               value="{{ old('sellerNationalCode') }}" placeholder="0921112223"
                               name="sellerNationalCode">
                        @error('sellerNationalCode')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">اسم و فامیل</label>
                        <input type="text" class="form-control @error('sellerName') is-invalid @enderror"
                               value="{{ old('sellerName') }}" placeholder="محمد جواد جهانگیری"
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
                               value="{{ old('sellerMobile') }}" placeholder="09385656118"
                               name="sellerMobile">
                        @error('sellerMobile')
                        <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره ثابت</label>
                        <input type="text" class="form-control @error('sellerPhone') is-invalid @enderror"
                               value="{{ old('sellerPhone') }}" placeholder="0518671111"
                               name="sellerPhone">
                        @error('sellerPhone')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">کد پستی</label>
                        <input type="text" class="form-control @error('sellerPostalCode') is-invalid @enderror"
                               value="{{ old('sellerPostalCode') }}" placeholder="919847584"
                               name="sellerPostalCode">
                        @error('sellerPostalCode')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">آدرس</label>
                        <textarea class="form-control @error('sellerAddress') is-invalid @enderror" rows="1"
                                  placeholder="بلوار دانشجو کوچه 18 پلاک 23"
                                  name="sellerAddress">{{ old('sellerAddress') }}</textarea>
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
                    <div class="col-12 col-lg-6 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">مدل ماشین</label>
                        <select name="machineType"
                                class="form-control machineType @error('machineType') is-invalid @enderror">
                            <option disabled hidden selected>انتخاب کنید</option>
                            @foreach($types as $type)
                                <option
                                    {{ old('machineType') == $type->id ? "selected" : "" }} value="{{$type->id}}">{{$type->machineType}}</option>
                            @endforeach
                            @error('machineType')
                            <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                            @enderror
                        </select>
                    </div>
                    <div class="col-12 col-lg-6 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">پلاک ماشین</label>
                        <div class="form-control p-0">
                            <div class="row p-0 m-0">
                                <div class="input-group p-0">
                                    <span class="input-group-text d-inline col-2 text-center"
                                          id="basic-addon1">ایران</span>
                                    <input type="text"
                                           class="col-2 text-center @error('machineNumber1') is-invalid @enderror"
                                           value="{{ old('machineNumber1') }}" placeholder="74"
                                           name="machineNumber1" aria-describedby="basic-addon1">
                                    <span class="input-group-text d-inline text-center col-1" id="basic-addon1">-</span>
                                    <input type="text"
                                           class="col-3 text-center @error('machineNumber2') is-invalid @enderror"
                                           value="{{ old('machineNumber2') }}" placeholder="565"
                                           name="machineNumber2">
                                    <input type="text"
                                           class="col-2 text-center @error('machineNumber3') is-invalid @enderror"
                                           value="{{ old('machineNumber3') }}" placeholder="ب"
                                           name="machineNumber3">
                                    <input type="text"
                                           class="col-2 text-center @error('machineNumber4') is-invalid @enderror"
                                           value="{{ old('machineNumber4') }}" placeholder="18"
                                           name="machineNumber4">
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('machineNumber1'))
                            <small
                                class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ "فیلد پلاک ماشین اجباری است." }}</small>
                        @elseif($errors->has('machineNumber2'))
                            <small
                                class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ "فیلد پلاک ماشین اجباری است." }}</small>
                        @elseif($errors->has('machineNumber3'))
                            <small
                                class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ "فیلد پلاک ماشین اجباری است." }}</small>
                        @elseif($errors->has('machineNumber4'))
                            <small
                                class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ "فیلد پلاک ماشین اجباری است." }}</small>
                        @endif
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">سال ساخت</label>
                        <select name="YearOfConstruction"
                                class="form-control machineType @error('YearOfConstruction') is-invalid @enderror">
                            <option disabled hidden selected>انتخاب کنید</option>
                            @foreach($years as $year)
                                <option
                                    {{ old('YearOfConstruction') == $year->id ? "selected" : "" }} value="{{$year->id}}">{{$year->year}}</option>
                            @endforeach
                            @error('YearOfConstruction')
                            <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                            @enderror
                        </select>
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">رنگ ماشین</label>
                        <select name="machineColor" class="form-select @error('machineColor') is-invalid @enderror">
                            <option disabled hidden selected>انتخاب کنید</option>
                            @foreach($colors as $color)
                                <option style="font-size: 1.3rem;"
                                        {{ old('machineColor') == $color->id ? "selected" : "" }} value="{{$color->id}}">{{$color->colorName}}</option>
                            @endforeach
                            @error('machineColor')
                            <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                            @enderror
                        </select>
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">کارت سوخت</label>
                        <select class="form-select @error('fuelCart') is-invalid @enderror" name="fuelCart">
                            <option disabled hidden selected>انتخاب کنید</option>
                            <option style="font-size: 1.3rem;" {{ old('fuelCart') == '1' ? "selected" : "" }} value="1">
                                دارد
                            </option>
                            <option style="font-size: 1.3rem;" {{ old('fuelCart') == '0' ? "selected" : "" }} value="0">
                                ندارد
                            </option>
                        </select>
                        @error('fuelCart')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">رنگ شدگی</label>
                        <select class="form-select @error('discoloration') is-invalid @enderror"
                                name="discoloration">
                            <option disabled hidden selected>انتخاب کنید</option>
                            <option style="font-size: 1.3rem;"
                                    {{ old('discoloration') == 'yes' ? "selected" : "" }} value="yes">دارد
                            </option>
                            <option style="font-size: 1.3rem;"
                                    {{ old('discoloration') == 'no' ? "selected" : "" }} value="no">ندارد
                            </option>
                        </select>
                        @error('discoloration')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">وضعیت شاسی</label>
                        <select class="form-select @error('hurt') is-invalid @enderror" name="hurt">
                            <option disabled hidden selected>انتخاب کنید</option>
                            <option style="font-size: 1.3rem;" {{ old('hurt') == 'fix' ? "selected" : "" }} value="fix">
                                سالم
                            </option>
                            <option style="font-size: 1.3rem;"
                                    {{ old('hurt') == 'impact' ? "selected" : "" }} value="impact">ضربه خورده
                            </option>
                        </select>
                        @error('hurt')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">بیمه</label>
                        <select class="form-select @error('insurance') is-invalid @enderror"
                                name="insurance">
                            <option disabled hidden selected>انتخاب کنید</option>
                            <option style="font-size: 1.3rem;"
                                    {{ old('insurance') == '1' ? "selected" : "" }} value="1">دارد
                            </option>
                            <option style="font-size: 1.3rem;"
                                    {{ old('insurance') == '0' ? "selected" : "" }} value="0">ندارد
                            </option>
                        </select>
                        @error('insurance')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">مدت بیمه</label>
                        <input type="text" class="form-control @error('insuranceDate') is-invalid @enderror"
                               value="{{ old('insuranceDate') }}"
                               placeholder="6 ماه" name="insuranceDate">
                        @error('insuranceDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">عوارض</label>
                        <input type="text" class="form-control @error('avarez') is-invalid @enderror"
                               value="{{ old('avarez') }}" placeholder="55000"
                               name="avarez">
                        @error('avarez')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پرداخت عوارض</label>
                        <input type="text"
                               class="form-control date @error('avarezDate') is-invalid @enderror"
                               value="{{ old('avarezDate') }}" placeholder="تاریخ را انتخاب کنید" name="avarezDate"/>
                        @error('avarezDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">جریمه</label>
                        <input type="text" class="form-control @error('penalty') is-invalid @enderror"
                               value="{{ old('penalty') }}" placeholder="90000"
                               name="penalty">
                        @error('penalty')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پرداخت جریمه</label>
                        <input type="text"
                               class="form-control date @error('penaltyDate') is-invalid @enderror"
                               value="{{ old('penaltyDate') }}" placeholder="تاریخ را انتخاب کنید" name="penaltyDate"/>
                        @error('penaltyDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">شماره سند</label>
                        <input type="text" class="form-control @error('documentNumber') is-invalid @enderror"
                               value="{{ old('documentNumber') }}" placeholder="1234567"
                               name="documentNumber">
                        @error('documentNumber')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ سند</label>
                        <input type="text"
                               class="form-control date @error('documentDate') is-invalid @enderror"
                               value="{{ old('documentDate') }}" placeholder="تاریخ را انتخاب کنید" name="documentDate"/>
                        @error('documentDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">هزینه سند</label>
                        <select class="form-select @error('licenseCost') is-invalid @enderror"
                                name="licenseCost">
                            <option disabled hidden selected>انتخاب کنید</option>
                            <option style="font-size: 1.3rem;"
                                    {{ old('licenseCost') == '1' ? "selected" : "" }} value="1">خریدار
                            </option>
                            <option style="font-size: 1.3rem;"
                                    {{ old('licenseCost') == '0' ? "selected" : "" }} value="0">فروشنده
                            </option>
                        </select>
                        @error('licenseCost')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-4 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تصویر قولنامه</label>
                        <input type="file" class="form-control @error('contractImage') is-invalid @enderror"
                               value="{{ old('contractImage') }}"
                               placeholder="تصویر قولنامه" name="contractImage">
                        @error('contractImage')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">توضیحات اضافی</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" rows="5"
                                  placeholder="گاگیر سمت شاگرد رنگ است"
                                  name="description">{{ old('description') }}</textarea>
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
                               value="{{ old('totalAmount') }}" placeholder="120000000 تومان"
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
                               value="{{ old('prepayment') }}" placeholder="70000000 تومان"
                               name="prepayment">
                        @error('prepayment')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پیش پرداخت</label>
                        <input type="text"
                               class="form-control date @error('prepaymentDate') is-invalid @enderror"
                               value="{{ old('prepaymentDate') }}" placeholder="تاریخ را انتخاب کنید" name="prepaymentDate"/>
                        @error('prepaymentDate')
                        <small class="alert d-block alert-danger mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">پرداختی تسویه</label>
                        <input type="text" class="form-control @error('clearing') is-invalid @enderror"
                               value="{{ old('clearing') }}" placeholder="50000000 تومان"
                               name="clearing">
                        @error('clearing')
                        <small class="alert alert-danger d-block mx-0 my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ تسویه</label>
                        <input type="text"
                               class="form-control date @error('clearingDate') is-invalid @enderror"
                               value="{{ old('clearingDate') }}" placeholder="تاریخ را انتخاب کنید" name="clearingDate"/>
                        @error('clearingDate')
                        <small class="alert alert-danger mx-0 d-block my-2 py-1 text-center">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mx-auto p-0">
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">پرداختی اول</label>
                        <input type="text" class="form-control" value="{{ old('firstPay') }}"
                               placeholder="25000000 تومان"
                               name="firstPay">
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پرداختی اول</label>
                        <input type="text"
                               class="form-control date @error('firstPayDate') is-invalid @enderror"
                               value="{{ old('firstPayDate') }}" placeholder="تاریخ را انتخاب کنید" name="firstPayDate"/>
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">پرداختی دوم</label>
                        <input type="text" class="form-control" value="{{ old('secondPay') }}"
                               placeholder="25000000 تومان"
                               name="secondPay">
                    </div>
                    <div class="col-12 col-lg mb-3 p-0 px-md-2">
                        <label class="text-white-50 mb-2 pe-1">تاریخ پرداختی دوم</label>
                        <input type="text"
                               class="form-control date @error('secondPayDate') is-invalid @enderror"
                               value="{{ old('secondPayDate') }}" placeholder="تاریخ را انتخاب کنید" name="secondPayDate"/>
                    </div>
                </div>
                <div class="row mx-auto my-5">
                    <div class="col text-start">
                        <a href="{{route('home')}}"
                           class="btn btn-outline-danger text-white border-light">بازگشت</a>
                        <button class="btn btn-outline-success text-white me-2 border-light">ثبت</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
