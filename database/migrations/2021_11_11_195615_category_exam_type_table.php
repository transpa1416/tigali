<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryExamTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CategoryExamType', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->unique()->comment('Nombre del tipo de examen');
            $table->string('description',200)->nullable()->default(null)->comment('Descripción del tipo de examen');
            $table->boolean('isActive')->default(1);
            $table->timestamps();
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
        Schema::dropIfExists('CategoryExamType');
    }
}
