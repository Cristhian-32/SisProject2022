<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'name'=>'Eddy Daniel',
            'male_lastname'=>'Choquepata',
            'female_lastname'=>'Pineda',
            'code'=>'20200312',

        ]);

        Person::create([
            'name'=>'Andre Paolo',
            'male_lastname'=>'Luque',
            'female_lastname'=>'Alfaro',
            'code'=>'20200314',

        ]);

        Person::create([
            'name'=>'Aldhair',
            'male_lastname'=>'Huaquisto',
            'female_lastname'=>'Coila',
            'code'=>'20200356',

        ]);
    }
}
