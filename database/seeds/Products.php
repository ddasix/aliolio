<?php

use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	DB::table('tb_products')->insert([
            	['PCODE'=>'32558878920',	'PNAME'=>'스타워즈 스마트볼'],
		['PCODE'=>'32507711519',	'PNAME'=>'아이패드 미니4 가죽케이스'],
		['PCODE'=>'32468589498',	'PNAME'=>'테클라스트 X98 Pro'],
		['PCODE'=>'32417337543',	'PNAME'=>'Chuwi Hi8'],
		['PCODE'=>'32515061230',	'PNAME'=>'Chuwi hi8 pro'],
		['PCODE'=>'32517469156',	'PNAME'=>'Chuwi hi10'],
		['PCODE'=>'32364494327',	'PNAME'=>'Chuwi Vi10'],
		['PCODE'=>'32572542426',	'PNAME'=>'Chuwi Hi10 9H 필름'],
		['PCODE'=>'32534197597',	'PNAME'=>'Chuwi vi10 ultimate'],
		['PCODE'=>'32468589498',	'PNAME'=>'테클라스트 X98 Plus'],
		['PCODE'=>'2024442787','PNAME'=>'아이폰 투명 케이스'],
		['PCODE'=>'2043117135','PNAME'=>'아이폰 5 액정필름'],
		['PCODE'=>'32470659404',	'PNAME'=>'스마트폰 충전 케이블']
	]);
    }
}
