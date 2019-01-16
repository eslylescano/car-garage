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

        DB::table('data_services')->insert(
                    array(
        'id'=>1,
        'name'=>'air conditioning',
        'image'=>'/img/svg/air-conditioning.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>2,
        'name'=>'alloy wheel',
        'image'=>'/img/svg/alloy-wheel.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>3,
        'name'=>'battery',
        'image'=>'/img/svg/battery.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>4,
        'name'=>'car repair',
        'image'=>'/img/svg/car-repair.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>5,
        'name'=>'car wash',
        'image'=>'/img/svg/car-wash.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>6,
        'name'=>'diagnostic',
        'image'=>'/img/svg/diagnostic.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>7,
        'name'=>'disc brake',
        'image'=>'/img/svg/disc-brake.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>8,
        'name'=>'electrical service',
        'image'=>'/img/svg/electrical-service.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>9,
        'name'=>'engine',
        'image'=>'/img/svg/engine.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>10,
        'name'=>'exhaust pipe',
        'image'=>'/img/svg/exhaust-pipe.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>11,
        'name'=>'gas station',
        'image'=>'/img/svg/gas-station.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>12,
        'name'=>'gearstick',
        'image'=>'/img/svg/gearstick.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>13,
        'name'=>'ignition',
        'image'=>'/img/svg/ignition.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>14,
        'name'=>'inspection',
        'image'=>'/img/svg/inspection.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>15,
        'name'=>'key',
        'image'=>'/img/svg/key.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>16,
        'name'=>'maintenance',
        'image'=>'/img/svg/maintenance.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>17,
        'name'=>'mechanic',
        'image'=>'/img/svg/mechanic.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>18,
        'name'=>'oil',
        'image'=>'/img/svg/oil.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>19,
        'name'=>'painting',
        'image'=>'/img/svg/painting.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>20,
        'name'=>'piston',
        'image'=>'/img/svg/piston.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>21,
        'name'=>'radiator',
        'image'=>'/img/svg/radiator.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>22,
        'name'=>'reparation',
        'image'=>'/img/svg/reparation.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>23,
        'name'=>'speedometer',
        'image'=>'/img/svg/speedometer.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>24,
        'name'=>'steering wheel',
        'image'=>'/img/svg/steering-wheel.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>25,
        'name'=>'suspension',
        'image'=>'/img/svg/suspension.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>26,
        'name'=>'tire 1',
        'image'=>'/img/svg/tire-1.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>27,
        'name'=>'tire',
        'image'=>'/img/svg/tire.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>28,
        'name'=>'trailer',
        'image'=>'/img/svg/trailer.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));

        DB::table('data_services')->insert(
                    array(
        'id'=>29,
        'name'=>'wheel alignment',
        'image'=>'/img/svg/wheel-alignment.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
        ));



        DB::table('data_services')->insert(
                    array(
        'id'=>30,
        'name'=>'windshield',
        'image'=>'/img/svg/windshield.svg',
        'created_at'=>NULL,
        'updated_at'=>NULL
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
