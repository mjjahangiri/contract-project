<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class year extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->delete();
        $defaultRoles = array(
            ['year'=>'1350'],
            ['year'=>'1351'],
            ['year'=>'1352'],
            ['year'=>'1353'],
            ['year'=>'1354'],
            ['year'=>'1355'],
            ['year'=>'1356'],
            ['year'=>'1357'],
            ['year'=>'1358'],
            ['year'=>'1359'],
            ['year'=>'1360'],
            ['year'=>'1361'],
            ['year'=>'1362'],
            ['year'=>'1363'],
            ['year'=>'1364'],
            ['year'=>'1365'],
            ['year'=>'1366'],
            ['year'=>'1367'],
            ['year'=>'1368'],
            ['year'=>'1369'],
            ['year'=>'1370'],
            ['year'=>'1371'],
            ['year'=>'1372'],
            ['year'=>'1373'],
            ['year'=>'1374'],
            ['year'=>'1375'],
            ['year'=>'1376'],
            ['year'=>'1377'],
            ['year'=>'1378'],
            ['year'=>'1379'],
            ['year'=>'1380'],
            ['year'=>'1381'],
            ['year'=>'1382'],
            ['year'=>'1383'],
            ['year'=>'1384'],
            ['year'=>'1385'],
            ['year'=>'1386'],
            ['year'=>'1387'],
            ['year'=>'1388'],
            ['year'=>'1389'],
            ['year'=>'1390'],
            ['year'=>'1391'],
            ['year'=>'1392'],
            ['year'=>'1393'],
            ['year'=>'1394'],
            ['year'=>'1395'],
            ['year'=>'1396'],
            ['year'=>'1397'],
            ['year'=>'1398'],
            ['year'=>'1399'],
            ['year'=>'1400'],
        );
        foreach ($defaultRoles as $row){
            \App\Models\year::create(array(
                'year'=>$row['year'],
            ));
        }
    }
}
