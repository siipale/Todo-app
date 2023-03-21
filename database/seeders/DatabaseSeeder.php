<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Task::create([
                'title' => 'Job application',
                'description' => 'Apply for a job',
                'check' => '0'
        ]);

        Task::create([
                'title' => 'Do research',
                'description' => 'Investigate available data',
                'check' => '0'
        ]);

        Task::create([
                'title' => 'Design dashboard',
                'description' => 'Design better dashboard',
                'check' => '0'
        ]);

        Task::create([
                'title' => 'Install and migrate database',
                'description' => 'Install sql database and run the migrations',
                'check' => '1'
        ]);
    }
}
