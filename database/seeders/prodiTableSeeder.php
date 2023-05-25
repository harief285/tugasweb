<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodi')->insert(array(['id_prodi' => '10001','nama' => 'TI', 'jursan' => 'D3TI'],
        ['id_prodi' => '10002','nama' => 'Teknik Pendingin', 'jursan' => 'D3TP']));
    }
}
