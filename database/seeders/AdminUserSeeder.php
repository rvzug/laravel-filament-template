<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => env('ADMIN_USER_FIRST_NAME').' '.env('ADMIN_USER_LAST_NAME'),
            'email' => env('ADMIN_USER_EMAIL'),
            'password' => bcrypt(env('ADMIN_USER_PASSWORD')),
        ]);
    }
}
