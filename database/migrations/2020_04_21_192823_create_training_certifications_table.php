<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_certifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jobseeker_id')->nullable();
            $table->string('training_title')->nullable();
            $table->string('training_institution')->nullable();
            $table->text('training_location')->nullable();
            $table->string('training_duration')->nullable();
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
        Schema::dropIfExists('training_certifications');
    }
}
