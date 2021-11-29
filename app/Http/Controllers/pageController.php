<?php

namespace App\Http\Controllers;

use App\Models\color;
use App\Models\contract;
use App\Models\Type;
use App\Models\year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index(): \Illuminate\Http\Response
//    {
//        //
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create(): \Illuminate\Http\Response
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'transactionDate' => 'required',
            'contractNo' => 'required|unique:contracts|max:100|min:5',
            'buyerNationalCode' => 'required|min:10|max:10',
            'buyerName' => 'required|string|max:255',
            'buyerMobile' => 'required|min:11|max:11',
            'buyerPhone' => 'required|min:11|max:11',
            'buyerAddress' => 'required|max:999',
            'sellerNationalCode' => 'required|min:10|max:10',
            'sellerName' => 'required|string|max:255',
            'sellerMobile' => 'required|min:11|max:11',
            'sellerPhone' => 'required|min:11|max:11',
            'sellerAddress' => 'required|max:999',
            'machineType' => 'required',
            'YearOfConstruction' => 'required',
            'machineColor' => 'required',
            'discoloration' => 'required',
            'hurt' => 'required',
            'totalAmount' => 'required',
            'clearing' => 'required',
            'clearingDate' => 'required',
            'machineNumber1' => 'required',
            'machineNumber2' => 'required',
            'machineNumber3' => 'required',
            'machineNumber4' => 'required',
            'insurance' => 'required',
            'fuelCart' => 'required',
            'contractImage' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:30720',

        ]);
        $destination = 'Asayesh/public/contract/' . date('Y') . '/' . date('m');
        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }
        $destination = $destination . '/';
        $filename = rand(1111111, 99999999);
        $file = $request->file('contractImage');
        $file->move($destination, $filename . $request->file . "." . $file->getClientOriginalname());
        $url = $destination . $filename . $request->file . "." . $file->getClientOriginalname();
        $type = Type::where('id', '=', $request->machineType)->first();
        $color = color::where('id', '=', $request->machineColor)->first();
        $year = year::where('id', '=', $request->YearOfConstruction)->first();
        contract::create([
            'transaction' => $request->transaction,
            'transactionDate' => $request->transactionDate,
            'contractNo' => $request->contractNo,
            'buyerNationalCode' => $request->buyerNationalCode,
            'buyerName' => $request->buyerName,
            'buyerMobile' => $request->buyerMobile,
            'buyerPhone' => $request->buyerPhone,
            'buyerAddress' => $request->buyerAddress,
            'sellerNationalCode' => $request->sellerNationalCode,
            'sellerName' => $request->sellerName,
            'sellerMobile' => $request->sellerMobile,
            'sellerPhone' => $request->sellerPhone,
            'sellerAddress' => $request->sellerAddress,
            'machineType' => $type->machineType,
            'YearOfConstruction' => $year->year,
            'machineColor' => $color->colorName,
            'discoloration' => $request->discoloration,
            'hurt' => $request->hurt,
            'description' => $request->description,
            'totalAmount' => $request->totalAmount,
            'prepayment' => $request->prepayment,
            'prepaymentDate' => $request->prepaymentDate,
            'clearing' => $request->clearing,
            'clearingDate' => $request->clearingDate,
            'firstPay' => $request->firstPay,
            'firstPayDate' => $request->firstPayDate,
            'secondPay' => $request->secondPay,
            'secondPayDate' => $request->secondPayDate,
            'penalty' => $request->penalty,
            'penaltyDate' => $request->penaltyDate,
            'licenseCost' => $request->licenseCost,
            'buyerPostalCode' => $request->buyerPostalCode,
            'sellerPostalCode' => $request->sellerPostalCode,
            'machineNumber1' => $request->machineNumber1,
            'machineNumber2' => $request->machineNumber2,
            'machineNumber3' => $request->machineNumber3,
            'machineNumber4' => $request->machineNumber4,
            'avarez' => $request->avarez,
            'avarezDate' => $request->avarezDate,
            'fuelCart' => $request->fuelCart,
            'documentNumber' => $request->documentNumber,
            'documentDate' => $request->documentDate,
            'insurance' => $request->insurance,
            'insuranceDate' => $request->insuranceDate,
            'contractImage' => $url,
        ]);
        return back()->with('success', 'با موفقیت ثبت شد');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show()
    {
        //
        $contracts = DB::table('contracts')->orderBy('documentDate', 'asc')->get();
        return view('main.report', compact('contracts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $contract = contract::where('contractNo', '=', $request->contractNo)->first();
        $kind = Type::where('machineType', '=', $contract->machineType)->first();
        $types = DB::table('types')->get();
        $colors = DB::table('colors')->get();
        $years = DB::table('years')->get();
        $product = year::where('year', '=', $contract->YearOfConstruction)->first();
        $machineColor = color::where('colorName', '=', $contract->machineColor)->first();
        return view('main.edit', compact(['contract', 'types', 'years', 'product', 'kind', 'colors', 'machineColor']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, int $id)
    {
        //
        $record=contract::where('id','=',$id)->first();
        if ($record->contractNo != $request->contractNo)
            $request->validate(['contractNo' => 'required|unique:contracts|max:100|min:5',]);
        else
            $request->validate([
                'transactionDate' => 'required',
                'buyerNationalCode' => 'required|min:10|max:10',
                'buyerName' => 'required|string|max:255',
                'buyerMobile' => 'required|min:11|max:11',
                'buyerPhone' => 'required|min:11|max:11',
                'buyerAddress' => 'required|max:999',
                'sellerNationalCode' => 'required|min:10|max:10',
                'sellerName' => 'required|string|max:255',
                'sellerMobile' => 'required|min:11|max:11',
                'sellerPhone' => 'required|min:11|max:11',
                'sellerAddress' => 'required|max:999',
                'YearOfConstruction' => 'required',
                'machineColor' => 'required',
                'discoloration' => 'required',
                'hurt' => 'required',
                'totalAmount' => 'required',
                'clearing' => 'required',
                'clearingDate' => 'required',
                'machineNumber1' => 'required',
                'machineNumber2' => 'required',
                'machineNumber3' => 'required',
                'machineNumber4' => 'required',
                'insurance' => 'required',
                'fuelCart' => 'required',
                'contractImage' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:30720',

            ]);


        if ($request->hasFile('contractImage')) {

            $destination = 'Asayesh/public/contract/' . date('Y') . '/' . date('m') . '/';
            $filename = rand(1111111, 99999999);
            $file = $request->file('contractImage');
            $file->move($destination, $filename . $request->file . "." . $file->getClientOriginalname());
            $url = $destination . $filename . $request->file . "." . $file->getClientOriginalname();
            $type = Type::where('id', '=', $request->machineType)->first();
            $color = color::where('id', '=', $request->machineColor)->first();
            $year = year::where('id', '=', $request->YearOfConstruction)->first();
            $contract = contract::where('id', $id)->first();
            $contract->update([
                'transaction' => $request->transaction,
                'transactionDate' => $request->transactionDate,
                'contractNo' => $request->contractNo,
                'buyerNationalCode' => $request->buyerNationalCode,
                'buyerName' => $request->buyerName,
                'buyerMobile' => $request->buyerMobile,
                'buyerPhone' => $request->buyerPhone,
                'buyerAddress' => $request->buyerAddress,
                'sellerNationalCode' => $request->sellerNationalCode,
                'sellerName' => $request->sellerName,
                'sellerMobile' => $request->sellerMobile,
                'sellerPhone' => $request->sellerPhone,
                'sellerAddress' => $request->sellerAddress,
                'machineType' => $type->machineType,
                'YearOfConstruction' => $year->year,
                'machineColor' => $color->colorName,
                'discoloration' => $request->discoloration,
                'hurt' => $request->hurt,
                'description' => $request->description,
                'totalAmount' => $request->totalAmount,
                'prepayment' => $request->prepayment,
                'prepaymentDate' => $request->prepaymentDate,
                'clearing' => $request->clearing,
                'clearingDate' => $request->clearingDate,
                'firstPay' => $request->firstPay,
                'firstPayDate' => $request->firstPayDate,
                'secondPay' => $request->secondPay,
                'secondPayDate' => $request->secondPayDate,
                'penalty' => $request->penalty,
                'penaltyDate' => $request->penaltyDate,
                'licenseCost' => $request->licenseCost,
                'buyerPostalCode' => $request->buyerPostalCode,
                'sellerPostalCode' => $request->sellerPostalCode,
                'machineNumber1' => $request->machineNumber1,
                'machineNumber2' => $request->machineNumber2,
                'machineNumber3' => $request->machineNumber3,
                'machineNumber4' => $request->machineNumber4,
                'avarez' => $request->avarez,
                'avarezDate' => $request->avarezDate,
                'fuelCart' => $request->fuelCart,
                'documentNumber' => $request->documentNumber,
                'documentDate' => $request->documentDate,
                'insurance' => $request->insurance,
                'insuranceDate' => $request->insuranceDate,
                'contractImage' => $url,
            ]);
        } else {
            $contract = contract::where('id', $id)->first();
            $type = Type::where('id', '=', $request->machineType)->first();
            $color = color::where('id', '=', $request->machineColor)->first();
            $year = year::where('id', '=', $request->YearOfConstruction)->first();
            $contract->update([
                'transaction' => $request->transaction,
                'transactionDate' => $request->transactionDate,
                'contractNo' => $request->contractNo,
                'buyerNationalCode' => $request->buyerNationalCode,
                'buyerName' => $request->buyerName,
                'buyerMobile' => $request->buyerMobile,
                'buyerPhone' => $request->buyerPhone,
                'buyerAddress' => $request->buyerAddress,
                'sellerNationalCode' => $request->sellerNationalCode,
                'sellerName' => $request->sellerName,
                'sellerMobile' => $request->sellerMobile,
                'sellerPhone' => $request->sellerPhone,
                'sellerAddress' => $request->sellerAddress,
                'machineType' => $type->machineType,
                'YearOfConstruction' => $year->year,
                'machineColor' => $color->colorName,
                'discoloration' => $request->discoloration,
                'hurt' => $request->hurt,
                'description' => $request->description,
                'totalAmount' => $request->totalAmount,
                'prepayment' => $request->prepayment,
                'prepaymentDate' => $request->prepaymentDate,
                'clearing' => $request->clearing,
                'clearingDate' => $request->clearingDate,
                'firstPay' => $request->firstPay,
                'firstPayDate' => $request->firstPayDate,
                'secondPay' => $request->secondPay,
                'secondPayDate' => $request->secondPayDate,
                'penalty' => $request->penalty,
                'penaltyDate' => $request->penaltyDate,
                'licenseCost' => $request->licenseCost,
                'buyerPostalCode' => $request->buyerPostalCode,
                'sellerPostalCode' => $request->sellerPostalCode,
                'machineNumber1' => $request->machineNumber1,
                'machineNumber2' => $request->machineNumber2,
                'machineNumber3' => $request->machineNumber3,
                'machineNumber4' => $request->machineNumber4,
                'avarez' => $request->avarez,
                'avarezDate' => $request->avarezDate,
                'fuelCart' => $request->fuelCart,
                'documentNumber' => $request->documentNumber,
                'documentDate' => $request->documentDate,
                'insurance' => $request->insurance,
                'insuranceDate' => $request->insuranceDate,
                'contractImage' => $contract->contractImage,
            ]);
        }


        $contract->save();
        return redirect()->route('show')->with('success', 'با موفقیت ثبت شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
//    public function destroy(int $id): \Illuminate\Http\Response
//    {
//        //
//    }

    public function home()
    {
        return view('main.home');
    }

    public function record()
    {
        $types = DB::table('types')->get();
        $years = DB::table('years')->get();
        $colors = DB::table('colors')->get();
        return view('main.record', compact(['types', 'colors', 'years']));
    }

    public function prereport()
    {
        return view('main.prereport');
    }

    public function search()
    {
        $types = DB::table('types')->get();
        return view('main.search', compact('types'));
    }

    public function searchMachineNumber(Request $request)
    {
        $contracts = contract::where('machineNumber1', '=', $request->machineNumber1)
            ->where('machineNumber2', '=', $request->machineNumber2)
            ->where('machineNumber3', '=', $request->machineNumber3)
            ->where('machineNumber4', '=', $request->machineNumber4)->orderBy('documentDate', 'asc')->get();
        return view('main.report', compact("contracts"));
    }

    public function searchContractNumber(Request $request)
    {
        $contracts = contract::where('contractNo', 'like', '%' . $request->contractNo . '%')->orderBy('documentDate', 'asc')->get();
        return view('main.report', compact("contracts"));
    }

    public function searchMachineType(Request $request)
    {
        $type = Type::where('id', '=', $request->machineType)->first();
        $contracts = contract::where('machineType', 'like', '%' . $type->machineType . '%')->orderBy('documentDate', 'asc')->get();
        return view('main.report', compact("contracts"));
    }

    public function result(Request $request)
    {
        $contract = contract::where('contractNo', '=', $request->contractNo)->first();
        return view('main.show', compact('contract'));
    }

    public function print()
    {
        return view('main.print');
    }
}
