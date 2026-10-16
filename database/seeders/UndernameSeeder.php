<?php

namespace Database\Seeders;

use App\Models\Undername;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UndernameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Undername::factory(20)->create();
    }
}
