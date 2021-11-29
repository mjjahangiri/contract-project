@extends('layouts.insert')
@section('title','جستجو در قولنامه ها')
@section('content')

    <div class="row pb-3 pb-0 m-0 position-absolute  h-100">
        <div class="py-3 mb-5 overflow-auto"
             style="border-radius: 10px!important;background-color: rgba(255,255,255,0.4);z-index: 999999;">
                <table class="table table-light  table-hover table-bordered">
                    <thead class="table-secondary">
                    <tr>
                        <th scope="col" class="text-center vazir-bold">ردیف</th>
                        <th scope="col" class="text-center vazir-bold">نوع معامله</th>
                        <th scope="col" class="text-center vazir-bold">تاریخ قولنامه</th>
                        <th scope="col" class="text-center vazir-bold">شماره قولنامه</th>
                        <th scope="col" class="text-center vazir-bold">مشخصات خریدار</th>
                        <th scope="col" class="text-center vazir-bold">مشخصات فروشنده</th>
                        <th scope="col" class="text-center vazir-bold">مورد معامله</th>
                        <th scope="col" class="text-center vazir-bold">پلاک</th>
                        <th scope="col" class="text-center vazir-bold">مبلغ کل</th>
                        <th scope="col" class="text-center vazir-bold">مبلغ جریمه</th>
                        <th scope="col" class="text-center vazir-bold">مبلغ عوارض</th>
                        <th scope="col" class="text-center vazir-bold">هزینه سند</th>
                        <th scope="col" class="text-center vazir-bold">تاریخ سند</th>
                        <th scope="col" class="text-center vazir-bold">تصویر قولنامه</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $num = 1;
                    ?>
                    @foreach($contracts as $contract)

                        <tr>

                            <td class="text-center vazir-light">{{$num}}</td>
                            <td class="text-center vazir-light">
                                @if($contract->transaction=="buy")
                                    {{"خرید"}}
                                @else
                                    {{"فروش"}}
                                @endif
                            </td>
                            <td class="text-center vazir-light">{{$contract->transactionDate}}</td>
                            <td class="text-center vazir-light"><a
                                    href="{{route('edit',['request'=>$contract->contractNo,'contractNo'=>$contract->contractNo])}}">{{$contract->contractNo}}</a>
                            </td>
                            <td class="text-center vazir-light">{{$contract->buyerName}}</td>
                            <td class="text-center vazir-light">{{$contract->sellerName}}</td>
                            <td class="text-center vazir-light">{{$contract->machineType." مدل ".$contract->YearOfConstruction." به رنگ ".$contract->machineColor}}</td>
                            <td class="text-center vazir-light">{{"ایران".$contract->machineNumber1." ".$contract->machineNumber2.$contract->machineNumber3.$contract->machineNumber4}}</td>
                            <td class="text-center vazir-light">{{$contract->totalAmount}}</td>
                            <td class="text-center vazir-light">{{$contract->penalty}}</td>
                            <td class="text-center vazir-light">{{$contract->avarez}}</td>
                            <td class="text-center vazir-light">
                                @if($contract->licenseCost == "0")
                                    {{"فروشنده"}}
                                @else
                                    {{"خریدار"}}
                                @endif
                            </td>
                            <td class="text-center vazir-light">{{$contract->documentDate}}</td>
                            <td class="text-center vazir-light"><a href="{{$contract->contractImage}}"
                                                                   target="_blank">ضمیمه</a>
                            </td>
                        </tr>

                        <?php
                        $num++;
                        ?>
                    @endforeach
                    </tbody>
                </table>
        </div>
        <div class="row p-3 position-absolute bottom-0">
            <div class="col text-start">
                <a href="{{route('home')}}"
                   class="btn btn-outline-danger text-white border-light">بازگشت</a>
            </div>
        </div>
    </div>
@endsection
