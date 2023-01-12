<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('sponser_code');
         // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->float('toat_deposite')->default(0);
            $table->bigInteger('direct_group')->default(0);
            $table->bigInteger('total_group')->default(0);
         //  $table->rememberToken();
            $table->tinyInteger('is_active')->default(0);
            $table->string('active_date')->nullable();
            $table->float('total_income')->default(0);
            $table->float('total_withdraw')->default(0);
            $table->float('current_withdraw_request')->default(0);
            $table->bigInteger('total_group_active')->default(0);
            $table->float('total_group_deposit')->default(0);
            $table->tinyInteger('status')->default(1);
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
};
