<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Modules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('courses_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla COURSE');
            $table->string('title',150)->nullable()->comment('Título del modulo');
            $table->boolean('isActive')->default(0)->comment('0 Inactivo/ 1 Activo');
            $table->boolean('hasIcon')->default(0)->comment('0 No tiene ícono/ 1 tiene ícono');
            $table->string('icon',150)->nullable()->comment('Fontawesome Icon');
            $table->foreign('courses_id')->references('id')->on('Courses')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('Modules');
    }
}
