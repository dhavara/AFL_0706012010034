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
            'image' => 'budi.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('mahasiswas')->insert([
            'name' => 'Lumine',
            'gender' => 'Female',
            'email' => 'lumine@gmail.com',
            'religion' => 'Anemo',
            'birth_date' => '28/09/2002',
            'birth_city' => 'Mondstadt',
            'city' => 'Mondstadt',
            'telephone' => '123456789',
            'prodi' => 'VCD',
            'image' => 'lumine.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
