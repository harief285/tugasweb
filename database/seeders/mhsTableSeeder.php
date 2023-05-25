<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mhs')->insert(array(['nim' => '2030001','nama' => 'nadia', 'prodi' => 'D3TI', 'angkatan' => '2022'],
        ['nim' => '2030002','nama' => 'zahra', 'prodi' => 'D3TI', 'angkatan' => '2022'],['nim' => '2030003','nama' => 'Adelia', 'prodi' => 'D3TI', 'angkatan' => '2022']));
    }
}
