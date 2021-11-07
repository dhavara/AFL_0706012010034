<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodis')->insert([
            'name' => 'IMT',
            'head_department' => 'Stephanus Eko Wahyudi, S.T., M.Mm.',
            'total_sks' => '144',
            'total_student' => '500',
            'date_founded' => '2006',
            'description' => 'Information Multimedia and Technology',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('prodis')->insert([
            'name' => 'ANM',
            'head_department' => 'Kaedehara Kazuha',
            'total_sks' => '150',
            'total_student' => '1000',
            'date_founded' => '2020',
            'description' => 'Anemo',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('prodis')->insert([
            'name' => 'ELC',
            'head_department' => 'Raiden Ei',
            'total_sks' => '200',
            'total_student' => '1000',
            'date_founded' => '2005',
            'description' => 'Electro',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('prodis')->insert([
            'name' => 'PYR',
            'head_department' => 'Thoma',
            'total_sks' => '200',
            'total_student' => '2000',
            'date_founded' => '2011',
            'description' => 'Fire',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('prodis')->insert([
            'name' => 'HDR',
            'head_department' => 'Mona Megistus',
            'total_sks' => '200',
            'total_student' => '2000',
            'date_founded' => '2011',
            'description' => 'Water',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
