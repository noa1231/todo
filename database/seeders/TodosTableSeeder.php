<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'content' => 'test1',
            'created_at' => null,
            'updated_at' => null,
        ];
        DB::table('todos')->insert($param);
        $param = [
            'id' => 2,
            'content' => 'test2',
            'created_at' => null,
            'updated_at' => null,
        ];
        DB::table('todos')->insert($param);
        $param = [
            'id' => 3,
            'content' => 'test3',
            'created_at' => null,
            'updated_at' => null,
        ];
        DB::table('todos')->insert($param);
    }
}
