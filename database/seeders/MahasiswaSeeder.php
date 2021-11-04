<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'name' => 'Budi',
            'gender' => 'Male',
            'email' => 'budi@gmail.com',
            'religion' => 'Christian',
            'birth_date' => '07/11/2000',
            'birth_city' => 'Malang',
            'city' => 'Surabaya',
            'telephone' => '123456789',
            'prodi' => 'IMT',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('mahasiswas')->insert([
            'name' => 'Putri',
            'gender' => 'Female',
            'email' => 'alisa@gmail.com',
            'religion' => 'Moslem',
            'birth_date' => '17/03/2002',
            'birth_city' => 'Surabaya',
            'city' => 'Surabaya',
            'telephone' => '123456789',
            'prodi' => 'IBM',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
