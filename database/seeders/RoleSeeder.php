<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's roles.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin'],
            ['name' => 'landlord'],
            ['name' => 'customer'],
        ];

        DB::table('roles')->upsert($roles, ['name'], []);
    }
}
