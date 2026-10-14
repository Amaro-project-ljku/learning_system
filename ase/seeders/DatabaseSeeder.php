<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::updateOrCreate(['email' => 'admin@gmail.com'], [
            'name'     => 'Admin',
            'password' => Hash::make('admin'),
            'role'     => 'admin',
        ]);

        // Sample courses seeding removed to prevent fake data.
    }
}
