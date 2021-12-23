<?php

use Illuminate\Database\Seeder;

class ReserveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'book_id' => '1',
            'loan_date' => '10/7',
            'return_date' => '10/14'
        ];
        DB::table('reserves')->insert($param);
    }
}
