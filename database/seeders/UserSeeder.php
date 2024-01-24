<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $customer = User::create([
            'username' => 'yosafat',
            'name' => 'Yosafat Tambun',
            'email' => 'yosafat@gmail.com',
            'password' => Hash::make('yosafat123'),
        ]);
        $customer->assignRole('customer');
    }
}
