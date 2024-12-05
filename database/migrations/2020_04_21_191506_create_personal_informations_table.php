<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('bdate');
            $table->string('gender');
            $table->string('religion');
            $table->string('mstatus')->nullable();
            $table->string('nationality');
            $table->string('national_id')->nullable();
            $table->string('bath_id')->nullable();
            $table->string('passport')->nullable();
            $table->string('mobile_number');
            $table->string('email')->nullable();

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
        Schema::dropIfExists('personal_informations');
    }
}
