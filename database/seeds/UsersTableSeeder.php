<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '森本一馬',
            'address' => '奈良県橿原市',
            'tel' => '090-0000-0000'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '松本舞花',
            'address' => '奈良県桜井市',
            'tel' => '090-1111-1111'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '奥園明菜',
            'address' => '奈良県高田市',
            'tel' => '090-2222-2222'
        ];
        DB::table('users')->insert($param);
    }
}
