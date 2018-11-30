<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('service_id');
            $table->string('description')->nullable();

            $table->timestamps();
        });

        DB::table('service_user')->insert(
            array(
                'user_id' => '1',
                'service_id' => '1',
                'description' => 'description'
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_service');
    }
}
