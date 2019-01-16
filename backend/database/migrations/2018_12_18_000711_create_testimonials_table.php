<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('status');
            $table->string('name');
            $table->string('email');
            $table->string('message');
            $table->string('image')->nullable();
            $table->timestamps();
        });


        DB::table('testimonials')->insert(
            array(
                'id' => '1',
                'user_id' => '1',
                'status' => '0',
                'name' => 'name',
                'email' => 'email',
                'message' => 'message 1',
                'image' => 'image'
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}
