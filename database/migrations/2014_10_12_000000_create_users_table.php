<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('user_name_sei', 30)->nullable();
            $table->string('user_name_mei', 30)->nullable();
            $table->string('user_hurigana_sei', 30)->nullable();
            $table->string('user_hurigana_mei', 30)->nullable();
            $table->integer('user_name_public')->nullable();
                                                
            $table->string('user_prefectures', 20)->nullable();
            $table->string('user_exp_business', 30)->nullable();
            $table->string('user_exp_job', 30)->nullable();
            $table->string('user_exp_company', 30)->nullable();
            $table->string('user_exp_department', 30)->nullable();
            $table->string('user_exp_position', 30)->nullable();
            $table->date('user_exp_start')->nullable();
            $table->date('user_exp_end')->nullable();
            $table->string('user_exp_text', 10000)->nullable();
                        
            $table->softDeletes();

            $table->string('email')->unique();
            $table->string('password');
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
