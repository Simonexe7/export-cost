<?php

namespace Database\Seeders;

use App\Models\Forwarder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForwarderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Forwarder::factory(20)->create();
    }
}
