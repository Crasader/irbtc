<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'admin', 'fa_name' => 'مدیر'],
            ['id' => 2, 'name' => 'user', 'fa_name' => 'کاربر']
        ]);
    }
}