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
            'prodi' => 'PYR',
            'image' => 'budi.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('mahasiswas')->insert([
            'name' => 'Lumine',
            'gender' => 'Female',
            'email' => 'lumine@gmail.com',
            'religion' => 'yes',
            'birth_date' => '28/09/2002',
            'birth_city' => 'Mondstadt',
            'city' => 'Mondstadt',
            'telephone' => '123456789',
            'prodi' => 'ANM',
            'image' => 'lumine.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('mahasiswas')->insert([
            'name' => 'Lisa Minci',
            'gender' => 'Female',
            'email' => 'lisa@gmail.com',
            'religion' => 'yes',
            'birth_date' => '09/06/1999',
            'birth_city' => 'Mondstadt',
            'city' => 'Mondstadt',
            'telephone' => '123456789',
            'prodi' => 'ELC',
            'image' => 'lisa.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('mahasiswas')->insert([
            'name' => 'Ajax',
            'gender' => 'Male',
            'email' => 'ajax@gmail.com',
            'religion' => 'yes',
            'birth_date' => '20/07/1999',
            'birth_city' => 'Snezhnaya',
            'city' => 'Liyue',
            'telephone' => '123456789',
            'prodi' => 'HDR',
            'image' => 'ajax.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('mahasiswas')->insert([
            'name' => 'Anakin Skywalker',
            'gender' => 'Male',
            'email' => 'anakin@gmail.com',
            'religion' => 'Jedi',
            'birth_date' => '20/07/1995',
            'birth_city' => 'Tatooine',
            'city' => 'Death Star',
            'telephone' => '123456789',
            'prodi' => 'ELC',
            'image' => 'darthvader.jpg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
