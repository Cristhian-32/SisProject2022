<?php

namespace Database\Seeders;

use App\Models\Members;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Members::create([
            'name'=>'Eddy Daniel',
            'male_lastname'=>'Choquepata',
            'female_lastname'=>'Pineda',
            'code'=>'20200312',
        ]);

        Members::create([
            'name'=>'Andre Paolo',
            'male_lastname'=>'Luque',
            'female_lastname'=>'Alfaro',
            'code'=>'20200314',
        ]);

        Members::create([
            'name'=>'Aldhair',
            'male_lastname'=>'Huaquisto',
            'female_lastname'=>'Coila',
            'code'=>'20200356',
        ]);
    }
}
