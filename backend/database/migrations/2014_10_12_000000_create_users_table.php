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
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('post_code')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                'name' => 'Esly',
                'last_name' => 'Lescano',
                'email' => 'eslylescano@gmail.com',
                'password' => '$2y$10$HVujfEBBVS9pPO2yeXVJYu3pcZMLe8JFRmu2wMGsmvV6aQYrp7Clu',
                'address' => '11 Crag View Staveley',
                'phone' => '07463360235',
                'facebook' => 'https://www.facebook.com/esly.lescano',
                'twitter' => '',
                'youtube' => '',
                'country' => 'UK',
                'city' => 'Kendal',
                'photo' => 'esly.jpg'));

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
