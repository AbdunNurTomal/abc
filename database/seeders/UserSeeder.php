<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // 'role_id' => 1,
            'name' => 'Abdun Nur Tomal',
            'email' => 'it@abc.com',
            'phone' => '01965824332',
            'password' => bcrypt('123456789'),
            //'user_type' => 'super'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 2,
            'name' => 'Admin User',
            'email' => 'admin@abc.com',
            'phone' => '01965824333',
            'password' => bcrypt('123456789'),
            //'user_type' => 'admin'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 3,
            'name' => 'HR Admin User',
            'email' => 'hr.admin@abc.com',
            'phone' => '01965824334',
            'password' => bcrypt('123456789'),
            //'user_type' => 'hr_admin'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 4,
            'name' => 'Senior HR User',
            'email' => 'senior.hr@abc.com',
            'phone' => '01965824335',
            'password' => bcrypt('123456789'),
            //'user_type' => 'senior_hr'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 5,
            'name' => 'Junior HR User',
            'email' => 'junior.hr@abc.com',
            'phone' => '01965824336',
            'password' => bcrypt('123456789'),
            //'user_type' => 'junior_hr'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 6,
            'name' => 'Accounts Admin User',
            'email' => 'acc.admin@abc.com',
            'phone' => '01965824337',
            'password' => bcrypt('123456789'),
            //'user_type' => 'accounts_admin'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 7,
            'name' => 'Senior Accounts User',
            'email' => 'senior.acc@abc.com',
            'phone' => '01965824338',
            'password' => bcrypt('123456789'),
            //'user_type' => 'senior_accounts'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 8,
            'name' => 'Junior Accounts User',
            'email' => 'junior.acc@abc.com',
            'phone' => '01965824339',
            'password' => bcrypt('123456789'),
            //'user_type' => 'junior_accounts'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 9,
            'name' => 'Team Manager User',
            'email' => 'team.manager@abc.com',
            'phone' => '01965824310',
            'password' => bcrypt('123456789'),
            //'user_type' => 'team_manager'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 10,
            'name' => 'Team Leader User',
            'email' => 'team.leader@abc.com',
            'phone' => '01965824311',
            'password' => bcrypt('123456789'),
            //'user_type' => 'team_leader'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 11,
            'name' => 'Team Member User',
            'email' => 'team.member@abc.com',
            'phone' => '01965824312',
            'password' => bcrypt('123456789'),
            //'user_type' => 'team_member'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 12,
            'name' => 'Buyer Client',
            'email' => 'buyer.client@abc.com',
            'phone' => '01965824313',
            'password' => bcrypt('123456789'),
            //'user_type' => 'buyer_client'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 13,
            'name' => 'Factory Client',
            'email' => 'factory.client@abc.com',
            'phone' => '01965824314',
            'password' => bcrypt('123456789'),
            //'user_type' => 'factory_client'
        ]); 
        DB::table('users')->insert([
            // 'role_id' => 14,
            'name' => 'Admin Report',
            'email' => 'report.admin@abc.com',
            'phone' => '01965824315',
            'password' => bcrypt('123456789'),
            //'user_type' => 'report_admin'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 15,
            'name' => 'Team Report',
            'email' => 'report.team@abc.com',
            'phone' => '01965824316',
            'password' => bcrypt('123456789'),
            //'user_type' => 'report_team'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 16,
            'name' => 'Warehouse Admin',
            'email' => 'wh.admin@abc.com',
            'phone' => '01965824317',
            'password' => bcrypt('123456789'),
            //'user_type' => 'wh_admin'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 17,
            'name' => 'Warehouse Report Admin',
            'email' => 'wh.report.admin@abc.com',
            'phone' => '01965824318',
            'password' => bcrypt('123456789'),
            //'user_type' => 'wh_report_admin'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 18,
            'name' => 'Warehouse Report Team',
            'email' => 'wh.report.team@abc.com',
            'phone' => '01965824319',
            'password' => bcrypt('123456789'),
            //'user_type' => 'wh_report_team'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 19,
            'name' => 'Warehouse Team',
            'email' => 'wh.team@abc.com',
            'phone' => '01965824320',
            'password' => bcrypt('123456789'),
            //'user_type' => 'wh_team'
        ]);
        DB::table('users')->insert([
            // 'role_id' => 20,
            'name' => 'Only User',
            'email' => 'user@user.com',
            'phone' => '01965824331',
            'password' => bcrypt('123456789'),
            //'user_type' => 'user'
        ]);
    }
}
