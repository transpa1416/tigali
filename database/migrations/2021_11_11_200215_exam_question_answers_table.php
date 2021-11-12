<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExamQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ExamQuestionAnswers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('examQuestions_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla ExamQuestions');
            $table->string('answer',500)->unique()->comment('Respuesta de la pregunta');
            $table->integer('position')->comment("Orden de la respuesta");
            $table->string('value', 1)->comment("Valor de la respuesta");
            $table->boolean('isActive')->default(1);
            $table->timestamps();
            $table->foreign('examQuestions_id')->references('id')->on('ExamQuestions')->onUpdate('cascade')->onDelete('cascade');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ExamQuestionAnswers');
    }
}
