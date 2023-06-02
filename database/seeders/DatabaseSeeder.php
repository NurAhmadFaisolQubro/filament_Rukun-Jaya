<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $User1 = User::factory()->create([
            'name' => 'Admin Pusat',
            'cabang' => 'Probolinggo',
            'email' => 'probolinggo@gmail.com',
            'password' => '12345678',
        ]);
        $User2 = User::factory()->create([
            'name' => 'Admin Cabang',
            'cabang' => 'Jember',
            'email' => 'jember@test.com',
            'password' => '12345678',
        ]);
        $role =Role::create(['name' => 'Admin Pusat Probolinggo']);
        $User1->assignRole($role);
        $role =Role::create(['name' => 'Admin Cabang Jember']);
        $User2->assignRole($role);
    }
}
