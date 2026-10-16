<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
        ]);

        $admin->assignRole('admin');

        $operasional = User::factory()->create([
            'name' => 'operasional',
            'email' => 'operasional@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $operasional->assignRole('operasional');

        $sales = User::factory()->create([
            'name' => 'sales',
            'email' => 'sales@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $sales->assignRole('sales');
    }
}
