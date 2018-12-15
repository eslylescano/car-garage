<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });


        DB::table('services')->insert(
            array(
                'name' => 'battery',
                'image' => 'battery.png'));
*/

Schema::create('services', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('user_id');
    $table->integer('data_service_id');
    $table->string('description')->nullable();
    $table->timestamps();
});


DB::table('services')->insert(
    array(
        'id' => '1',
        'user_id' => '1',
        'data_service_id' => '1',
        'description' => 'description 1'));




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
