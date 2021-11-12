<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Topics', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('modules_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla modules');
            $table->bigInteger('categoryTopicsType_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla CategoryTopicsType');
            $table->string('title',150)->unique()->comment('Título del modulo');
            $table->boolean('isActive')->default(0)->comment('0 Inactivo/ 1 Activo');
            $table->timestamps();
            $table->foreign('modules_id')->references('id')->on('ModulesCourse')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('categoryTopicsType_id')->references('id')->on('CategoryTopicsType')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('Topics');
    }
}
