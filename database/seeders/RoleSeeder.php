<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['name' => 'super','description' => 'Super user']);
        DB::table('roles')->insert(['name' => 'admin','description' => 'Admin user']);
        DB::table('roles')->insert(['name' => 'hr_admin','description' => 'HR Admin user']);
        DB::table('roles')->insert(['name' => 'hr_senior','description' => 'Senior HR user']);
        DB::table('roles')->insert(['name' => 'hr_junior','description' => 'Junior HR user']);
        DB::table('roles')->insert(['name' => 'acc_admin','description' => 'Accounts admin user']);
        DB::table('roles')->insert(['name' => 'acc_senior','description' => 'Senior accounts user']);
        DB::table('roles')->insert(['name' => 'acc_junior','description' => 'Junior accounts user']);
        DB::table('roles')->insert(['name' => 'team_manager','description' => 'Team manager user']);
        DB::table('roles')->insert(['name' => 'team_leader','description' => 'Team leader user']);
        DB::table('roles')->insert(['name' => 'team_member','description' => 'Team member user']);
        DB::table('roles')->insert(['name' => 'buyer_client','description' => 'Buyer client user']);
        DB::table('roles')->insert(['name' => 'factory_client','description' => 'Factory client user']);
        DB::table('roles')->insert(['name' => 'report_admin','description' => 'Report admin user']);
        DB::table('roles')->insert(['name' => 'report_team','description' => 'Report team user']);
        DB::table('roles')->insert(['name' => 'wh_admin','description' => 'WH admin user']);
        DB::table('roles')->insert(['name' => 'wh_report_admin','description' => 'WH report admin user']);
        DB::table('roles')->insert(['name' => 'wh_report_team','description' => 'WH report team user']);
        DB::table('roles')->insert(['name' => 'wh_team','description' => 'WH team user']);
        DB::table('roles')->insert(['name' => 'user','description' => 'Normal user']);
    }
}
