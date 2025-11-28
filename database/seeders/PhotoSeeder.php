<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    public function run(): void
    {
        Photo::insert([
            ['position' => 1, 'filename' => 'default1.jpg'],
            ['position' => 2, 'filename' => 'default2.jpg'],
            ['position' => 3, 'filename' => 'default3.jpg'],
            ['position' => 4, 'filename' => 'default4.jpg'],
        ]);
    }
}
