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

        $phones[] = ['name' => 'Олег', 'phone' => '89213452134'];
        $phones[] = ['name' => 'Анна', 'phone' => '89263352414'];
        $phones[] = ['name' => 'Виктор', 'phone' => '89213459846'];
        $phones[] = ['name' => 'Алиса', 'phone' => '89213487134'];
        $phones[] = ['name' => 'Елена', 'phone' => '89991252134'];

        DB::table('phones')->insert($phones);
    }
}
