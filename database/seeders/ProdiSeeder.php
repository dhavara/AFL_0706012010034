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
            'name' => 'VCD',
            'head_department' => 'Christian Anggrianto, S.Sn., M.M.',
            'total_sks' => '150',
            'total_student' => '1000',
            'date_founded' => '2010',
            'description' => 'Visual Communication Design',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
