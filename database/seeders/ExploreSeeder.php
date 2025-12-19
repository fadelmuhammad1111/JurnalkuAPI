<?php

namespace Database\Seeders;

use App\Models\Explore;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExploreSeeder extends Seeder
{

    public function run(): void
    {
        //
    Explore::create([
        'nis' => 123,
        'nama' => 'John Doe',
        'rayon' => 'Rayon 1',
        'rombel' => 'Rombel A',
        'porto' => 'null',
        'sertifikat' => 'null'
    ]);

    Explore::create([
        'nis' => 124,
        'nama' => 'Jane Doe',
        'rayon' => 'Rayon 2',
        'rombel' => 'Rombel B',
        'porto' => 'null',
        'sertifikat' => 'null'
    ]);

    Explore::create([
        'nis' => 125,
        'nama' => 'Bob Smith',
        'rayon' => 'Rayon 3',
        'rombel' => 'Rombel C',
        'porto' => 'null',
        'sertifikat' => 'null'
    ]);

    }
}
