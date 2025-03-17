<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'SuperAdmin',
            'email' => 'admin@localhost',
            'telephone' => '+221778889944',
            'password' => Hash::make('adminpassword'),
            'isAdmin' => true,
            'image' => '1742145374.jpg'
        ]);
    }
}
