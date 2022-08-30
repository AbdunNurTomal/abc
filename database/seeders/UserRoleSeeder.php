<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert(array(
            array('user_id' => 1, 'role_id' => 1),
            array('user_id' => 2, 'role_id' => 2),
            array('user_id' => 3, 'role_id' => 3),
            array('user_id' => 4, 'role_id' => 4),
            array('user_id' => 5, 'role_id' => 5),
            array('user_id' => 6, 'role_id' => 6),
            array('user_id' => 7, 'role_id' => 7),
            array('user_id' => 8, 'role_id' => 8),
            array('user_id' => 9, 'role_id' => 9),
            array('user_id' => 10, 'role_id' => 10),
            array('user_id' => 11, 'role_id' => 11),
            array('user_id' => 12, 'role_id' => 12),
            array('user_id' => 13, 'role_id' => 13),
            array('user_id' => 14, 'role_id' => 14),
            array('user_id' => 15, 'role_id' => 15),
            array('user_id' => 16, 'role_id' => 16),
            array('user_id' => 17, 'role_id' => 17),
            array('user_id' => 18, 'role_id' => 18),
            array('user_id' => 19, 'role_id' => 19),
            array('user_id' => 20, 'role_id' => 20),
        ));
    }
}
