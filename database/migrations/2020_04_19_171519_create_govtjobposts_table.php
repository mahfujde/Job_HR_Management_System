<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovtjobpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('govtjobposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agency_name');
            $table->string('job_title');
            $table->string('vacancy_no');
            $table->text('description');
            $table->string('picture');
            $table->string('publish_date');
            $table->string('deadline');
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
        Schema::dropIfExists('govtjobposts');
    }
}
