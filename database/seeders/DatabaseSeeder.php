<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Subject;
use App\Models\Guardian;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Classroom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Student::factory(20)->create();
        Guardian::factory(20)->create();
        Classroom::factory(7)->hasStudents(3)->create();
        Subject::factory(7)->hasTeacher(1)->create();

        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
        ]);
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'user',
        ]);
    }
}
