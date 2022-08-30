<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->unsignedBigInteger('user_id')->increments(); 
            $table->id(); 
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('password');
            // $table->enum('user_type', ['super','admin','hr_admin','senior_hr','junior_hr',
            //                             'accounts_admin','senior_accounts','junior_accounts',
            //                             'team_manager','team_leader','team_member','buyer_client',
            //                             'factory_client','report_admin','report_team','wh_admin',
            //                             'wh_report_admin','wh_report_team','wh_team','user'])
            //         ->default('user')
            //         ->comment('super','admin','hr_admin','senior_hr','junior_hr',
            //                     'accounts_admin','senior_accounts','junior_accounts',
            //                     'team_manager','team_leader','team_member','buyer_client',
            //                     'factory_client','report_admin','report_team','wh_admin',
            //                     'wh_report_admin','wh_report_team','wh_team','user');
            $table->tinyInteger('status')->default('1')->comment('0-inactive, 1-active, 2-suspend');
            $table->tinyInteger('is_user_banned')->default('0')->comment('0-unban, 1-ban');
            // $table->bigInteger('role_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
