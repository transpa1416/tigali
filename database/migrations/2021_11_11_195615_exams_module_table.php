<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExamsModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ExamsModule', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('categoryExamType_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla CategoryTopicsType');
            $table->bigInteger('modulesCourse_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla CategoryTopicsType');
            $table->string('name',150)->unique()->comment('Nombre del tipo de examen');
            $table->string('description',200)->nullable()->default(null)->comment('Descripción del tipo de examen');
            $table->boolean('isActive')->default(1);
            $table->timestamps();
            $table->foreign('categoryExamType_id')->references('id')->on('CategoryExamType')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('modulesCourse_id')->references('id')->on('ModulesCourse')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('ExamsModule');
    }
}
