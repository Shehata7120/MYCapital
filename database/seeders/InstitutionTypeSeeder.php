<?php

namespace Database\Seeders;

use App\Models\InstitutionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            InstitutionType::create([
                'name' => 'schools & collages' ,
            ]);
            InstitutionType::create([
                'name' => 'malls' ,
            ]);
            InstitutionType::create([
                'name' => 'hotels' ,
            ]);

            InstitutionType::create([
                'name' => 'hospitals' ,
            ]);
            InstitutionType::create([
                'name' => 'Ministries' ,
            ]);
            InstitutionType::create([
                'name' => 'Embassy' ,
            ]);
            InstitutionType::create([
                'name' => 'privat jobs ' ,
            ]);
    }
}
