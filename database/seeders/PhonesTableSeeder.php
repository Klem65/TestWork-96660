<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones = [];

        $phones[] = ['name' => 'Олег', 'number' => '89213452134'];
        $phones[] = ['name' => 'Анна', 'number' => '89263352414'];
        $phones[] = ['name' => 'Виктор', 'number' => '89213459846'];
        $phones[] = ['name' => 'Алиса', 'number' => '89213487134'];
        $phones[] = ['name' => 'Елена', 'number' => '89991252134'];

        DB::table('phones')->insert($phones);
    }
}
