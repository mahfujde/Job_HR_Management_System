<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applieds', function (Blueprint $table) {
            $table->increments('applied_id');
            $table->integer('job_id')->nullable();
            $table->string('identification_no');
            $table->string('candidate_name');
            $table->string('candidate_email');
            $table->string('candidate_contact');
            $table->integer('is_applied')->length(2);
            $table->integer('expected_salary')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('applieds');
    }
}
