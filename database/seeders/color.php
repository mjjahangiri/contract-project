<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class color extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->delete();
        $defaultRoles = array(
            ['colorName'=>'آبی'],
            ['colorName'=>'آلبالویی'],
            ['colorName'=>'اطلسی'],
            ['colorName'=>'بادمجانی'],
            ['colorName'=>'برنز'],
            ['colorName'=>'بژ'],
            ['colorName'=>'بنفش'],
            ['colorName'=>'پوست‌پیازی'],
            ['colorName'=>'تیتانیوم'],
            ['colorName'=>'خاکستری'],
            ['colorName'=>'خاکی'],
            ['colorName'=>'دلفینی'],
            ['colorName'=>'ذغالی'],
            ['colorName'=>'زرد'],
            ['colorName'=>'زرشکی'],
            ['colorName'=>'زیتونی'],
            ['colorName'=>'سبز'],
            ['colorName'=>'سربی'],
            ['colorName'=>'سرمه‌ای'],
            ['colorName'=>'سفید'],
            ['colorName'=>'سفید صدفی'],
            ['colorName'=>'طلایی'],
            ['colorName'=>'طوسی'],
            ['colorName'=>'عدسی'],
            ['colorName'=>'عنابی'],
            ['colorName'=>'قرمز'],
            ['colorName'=>'قهوه‌ای'],
            ['colorName'=>'کربن‌بلک'],
            ['colorName'=>'کرم'],
            ['colorName'=>'گیلاسی'],
            ['colorName'=>'مسی'],
            ['colorName'=>'مشکی'],
            ['colorName'=>'موکا'],
            ['colorName'=>'نارنجی'],
            ['colorName'=>'نقرآبی'],
            ['colorName'=>'نقره‌ای'],
            ['colorName'=>'نوک‌مدادی'],
            ['colorName'=>'یشمی'],
        );
        foreach ($defaultRoles as $row){
            \App\Models\color::create(array(
                'colorName'=>$row['colorName'],
            ));
        }
    }
}
