<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction',
        'transactionDate',
        'contractNo',
        'buyerNationalCode',
        'buyerName',
        'buyerMobile',
        'buyerPhone',
        'buyerAddress',
        'sellerNationalCode',
        'sellerName',
        'sellerMobile',
        'sellerPhone',
        'sellerAddress',
        'machineType',
        'YearOfConstruction',
        'machineColor',
        'discoloration',
        'hurt',
        'description',
        'totalAmount',
        'prepayment',
        'prepaymentDate',
        'clearing',
        'clearingDate',
        'firstPay',
        'firstPayDate',
        'secondPay',
        'secondPayDate',
        'penalty',
        'penaltyDate',
        'licenseCost',
        'contractImage',
        'sellerPostalCode',
        'buyerPostalCode',
        'machineNumber1',
        'machineNumber2',
        'machineNumber3',
        'machineNumber4',
        'avarez',
        'avarezDate',
        'fuelCart',
        'documentNumber',
        'documentDate',
        'insurance',
        'insuranceDate'
    ];
}
