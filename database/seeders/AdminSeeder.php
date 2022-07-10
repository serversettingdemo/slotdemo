<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
            'email_verified_at' => now(),
            'password' => bcrypt('AdminMentari123'),
            'remember_token' => Str::random(10)
        ]);
        $admin->assignRole('admin');

        $editor = User::create([
            'name' => 'Editor',
            'username' => 'editor',
            'email' => 'editor@mail.com',
            'is_admin' => false,
            'email_verified_at' => now(),
            'password' => bcrypt('editor123'),
            'remember_token' => Str::random(10)
        ]);
        $editor->assignRole('editor');

        $hrd = User::create([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@mail.com',
            'is_admin' => false,
            'email_verified_at' => now(),
            'password' => bcrypt('user123'),
            'remember_token' => Str::random(10)
        ]);
        $hrd->assignRole('user');
    }
}
