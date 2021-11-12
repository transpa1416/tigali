<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Courses', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->unique()->comment('Nombre del curso');
            $table->string('description',250)->nullable()->default(null)->comment('Descripción del curso');
            $table->boolean('isActive')->default(0)->comment('0 Inactivo/ 1 Activo');
            $table->boolean('allowRegistration')->default(0)->comment('0 No permitir/ 1 Permitir');
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
        Schema::dropIfExists('Courses');
    }
}
