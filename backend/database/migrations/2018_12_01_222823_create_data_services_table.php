<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
/*
        DB::table('data_services')->insert(
            array(
                'id' => '1',
                'name' => 'tyre',
                'image' => 'tyre-png'
            ));
        DB::table('data_services')->insert(
            array(
                'id' => '2',
                'name' => 'brakes',
                'image' => 'brakes.png-png'
            ));
        DB::table('data_services')->insert(
            array(
                'id' => '3',
                'name' => 'seats',
                'image' => 'seats.png-png'
            ));
*/
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
