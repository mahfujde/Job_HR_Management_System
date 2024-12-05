<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->increments('job_id');
            $table->integer('company_id')->nullable();
            $table->string('job_title');
            $table->text('job_description');
            $table->string('company_name');
            $table->text('address');
            $table->text('job_responsibilities');
            $table->text('job_location');
            $table->string('salary');
            $table->string('employment_status');
            $table->text('educational_requirements');
            $table->text('experience_requirements');
            $table->text('key_skills');
            $table->string('vacancy_no');
            $table->string('curcular_date');
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
        Schema::dropIfExists('job_posts');
    }
}
