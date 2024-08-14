<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
                [
                    'name' => 'admin',
                ], [
                    'name' => 'user',
                ]
            ]
        );

        DB::table('role_user')->insert([
                [
                    'user_id' => DB::table('roles')->where(['name' => 'admin'])->value('id'),
                    'role_id' => DB::table('users')->where(['name' => env('OWNER_NAME','Oleh')])->value('id'),
                ]
            ]
        );
    }
}
