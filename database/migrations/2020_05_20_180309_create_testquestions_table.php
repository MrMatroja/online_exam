<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testquestions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('question_template_id')->nullable()->unsigned();
            $table->bigInteger('subject_id')->nullable()->unsigned();
            $table->bigInteger('question_type_id')->unsigned();
            $table->string('question');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('right_ans');
            $table->tinyInteger('is_active')->nullable()->default(1);
            $table->tinyInteger('is_deleted')->nullable()->default(0);
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
        Schema::dropIfExists('testquestions');
    }
}
