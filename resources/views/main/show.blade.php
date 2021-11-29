@extends('layouts.insert')
@section('title','نمایش قولنامه')
@section('content')
    <div class="col-10 col-md-7 mx-auto my-5">
        <div class="row mx-auto">
            <h3 class="text-white text-center mb-4">نمایش اطلاعات قولنامه</h3>
        </div>
        <form action=""  class="mt-4">
            <div class="row mx-auto">
                <h4 class="text-white-50 text-end mb-4">اطلاعات معامله</h4>
            </div>
            <div class="row mx-auto">
                <div class="col-12 col-lg-4 mb-3">
                    <select class="form-select" aria-label="Default select example" name="transaction">
                        @if($contract->transaction=="buy")
                            <option selected value="buy">خرید</option>
                        @else
                            <option selected value="sale">فروش</option>
                        @endif
                    </select>
                </div>
                <div class="col-12 col-lg-4 mb-3">
                    <input type="text" class="form-control" value="{{$contract->transactionDate}}"
                           aria-label="Last name"
                           name="transactionDate">
                </div>
                <div class="col-12 col-lg-4 mb-3">
                    <input type="text" class="form-control" value="{{$contract->contractNo}}" aria-label="Last name"
                           name="contractNo">
                </div>
            </div>

            <div class="row mx-auto mt-5">
                <h4 class="text-white-50 text-end mb-4">اطلاعات خریدار</h4>
            </div>
            <div class="row mx-auto">
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" value="{{$contract->buyerNationalCode}}"
                           aria-label="Last name"
                           name="buyerNationalCode">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" value="{{$contract->buyerName}}" aria-label="Last name"
                           name="buyerName">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" value="{{$contract->buyerMobile}}" aria-label="Last name"
                           name="buyerMobile">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" value="{{$contract->buyerPhone}}" aria-label="Last name"
                           name="buyerPhone">
                </div>
            </div>
            <div class="row mx-auto mb-3">
                <div class="col">
                    <input type="text" class="form-control" value="{{$contract->buyerAddress}}" aria-label="Last name"
                           name="buyerAddress">
                </div>
            </div>

            <div class="row mx-auto mt-5">
                <h4 class="text-white-50 text-end mb-4">اطلاعات فروشنده</h4>
            </div>
            <div class="row mx-auto">
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" value="{{$contract->sellerNationalCode}}"
                           aria-label="Last name"
                           name="sellerNationalCode">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" value="{{$contract->sellerName}}" aria-label="Last name"
                           name="sellerName">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" value="{{$contract->sellerMobile}}" aria-label="Last name"
                           name="sellerMobile">
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-3">
                    <input type="text" class="form-control" value="{{$contract->sellerPhone}}" aria-label="Last name"
                           name="sellerPhone">
                </div>
            </div>
            <div class="row mx-auto mb-3">
                <div class="col">
                    <input type="text" class="form-control" value="{{$contract->sellerAddress}}" aria-label="Last name"
                           name="sellerAddress">
                </div>
            </div>

            <div class="row mx-auto mt-5">
                <h4 class="text-white-50 text-end mb-4">اطلاعات مورد معامله</h4>
            </div>
            <div class="row mx-auto">
                <div class="col-12 col-md-4 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->machineType}}" aria-label="Last name"
                           name="machineType">
                </div>
                <div class="col-12 col-md-4 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->YearOfConstruction}}"
                           aria-label="Last name"
                           name="YearOfConstruction">
                </div>
                <div class="col-12 col-md-4 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->machineColor}}" aria-label="Last name"
                           name="machineColor">
                </div>
                <div class="col-12 col-md-5 col-lg mb-3">
                    <select class="form-select" aria-label="Default select example" name="discoloration">
                        @if($contract->discoloration=="yes")
                            <option selected value="yes">رنگ دارد</option>
                            <option  value="no">رنگ ندارد</option>
                        @else
                            <option selected value="no">رنگ ندارد</option>
                            <option  value="yes">رنگ دارد</option>
                        @endif
                    </select>
                </div>
                <div class="col-12 col-md-7 col-lg mb-3">
                    <select class="form-select" aria-label="Default select example" name="hurt">
                        @if($contract->hurt=="fix")
                            <option selected value="fix">شاسی سالم</option>
                            <option value="impact">شاسی خورده</option>
                        @else
                            <option selected value="impact">شاسی خورده</option>
                            <option value="fix">شاسی سالم</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="row mx-auto mb-3">
                <div class="col">
                    <input type="text" class="form-control" value="{{$contract->description}}" aria-label="Last name"
                           name="description">
                </div>
            </div>

            <div class="row mx-auto mt-5">
                <h4 class="text-white-50 text-end mb-4">اطلاعات مالی</h4>
            </div>
            <div class="row mx-auto">
                <div class="col-12 mb-3">
                    <input type="text" class="form-control" value="{{$contract->totalAmount}}" aria-label="Last name"
                           name="totalAmount">
                </div>
            </div>
            <div class="row mx-auto my-3">
                <div class="col-12 col-md-6 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->prepayment}}" aria-label="Last name"
                           name="prepayment">
                </div>
                <div class="col-12 col-md-6 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->prepaymentDate}}" aria-label="Last name"
                           name="prepaymentDate">
                </div>
                <div class="col-12 col-md-6 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->clearing}}" aria-label="Last name"
                           name="clearing">
                </div>
                <div class="col-12 col-md-6 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->clearingDate}}" aria-label="Last name"
                           name="clearingDate">
                </div>
            </div>
            <div class="row mx-auto my-3">
                <div class="col-12 col-md-6 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->firstPay}}" aria-label="Last name"
                           name="firstPay">
                </div>
                <div class="col-12 col-md-6 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->firstPayDate}}" aria-label="Last name"
                           name="firstPayDate">
                </div>
                <div class="col-12 col-md-6 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->secondPay}}" aria-label="Last name"
                           name="secondPay">
                </div>
                <div class="col-12 col-md-6 col-lg mb-3">
                    <input type="text" class="form-control" value="{{$contract->secondPayDate}}" aria-label="Last name"
                           name="secondPayDate">
                </div>
            </div>

            <div class="row mx-auto my-5">
                <div class="col text-start">
                    <a href="{{route('home')}}"
                       class="btn btn-outline-danger text-white w-25 border-light">بازگشت</a>
                </div>
            </div>
        </form>
    </div>
@endsection
