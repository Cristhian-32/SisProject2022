<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name'=>'Eddy Daniel',
            'code'=>'20200312',
            'school'=>'Ingenieria de Sistemas'
        ]);
        
    }
}
