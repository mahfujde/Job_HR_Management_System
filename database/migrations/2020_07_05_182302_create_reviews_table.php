<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('review_id');
            $table->string('company_email')->nullable();
            $table->string('candidate_name');
            $table->string('candidate_email');
            $table->string('sub_knowledge');
            $table->string('pre_skill');
            $table->string('com_skill');
            $table->string('remarks')->nullable();
            $table->integer('is_published')->lenght(2);
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
        Schema::dropIfExists('reviews');
    }
}
