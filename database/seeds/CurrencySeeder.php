<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$table->string('code');
        // $table->string('symbol')->null;
        // $table->double('rate')->default(0);
        DB::table('currencies')->insert([
            [
                'code' => 'UAH',
                'symbol' => 'UAH',
                'rate' => 1,
            ],
            [
                'code' => 'EUR',
                'symbol' => 'EUR',
                'rate' => 30,
            ],
        ]);
    }
}
