<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypeTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CategoryTopicsType', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->unique()->comment('Nombre de la categoría de tema');
            $table->string('description',250)->nullable()->default(null)->comment('Descripción de la categoría de tema');
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
        Schema::dropIfExists('CategoryTopicsType');
    }
}
