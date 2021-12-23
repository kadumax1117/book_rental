<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'book_name' => 'Laravel入門',
            'author' => '掌田　津耶乃',
            'price' => '3000'
        ];
        DB::table('books')->insert($param);

        $param = [
            'book_name' => 'Vue.js3 超入門',
            'author' => '掌田　津耶乃',
            'price' => '3200'
        ];
        DB::table('books')->insert($param);

        $param = [
            'book_name' => 'PHP基礎入門',
            'author' => '柏岡　秀男',
            'price' => '2500'
        ];
        DB::table('books')->insert($param);
    }
}
