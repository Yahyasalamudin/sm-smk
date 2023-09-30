<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$eIVu6PVMRuOy7Ekcnkf.oOdkuAONWhkzut65B.Nq3BQaQVjn4yAtO',
        ]);

        $this->call(RoleSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(HariSeeder::class);
    }
}
