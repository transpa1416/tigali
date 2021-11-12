<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExamQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ExamQuestions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('examsModule_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla ExamsModule');
            $table->string('question',500)->unique()->comment('pregunta');
            $table->integer('position')->comment("Orden de la pregunta");
            $table->string('value', 1)->comment("Valor respuesta correcta");
            $table->boolean('isComment')->default(0);
            $table->timestamps();
            $table->foreign('examsModule_id')->references('id')->on('ExamsModule')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('ExamQuestions');
    }
}
