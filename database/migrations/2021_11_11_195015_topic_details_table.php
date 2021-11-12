<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TopicDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TopicDetails', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Topics_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla CategoryTopicsType');
            $table->string('htmlContent',150)->nullable()->comment('Si es texto, imprime el HTML');
            $table->string('pathContent',150)->nullable()->comment('Guarda la ruta de imagen/video');
            $table->integer('position')->nullable()->comment("Si es presentación, se ocupa para ordenar las diapositivas");
            $table->timestamps();
            $table->foreign('Topics_id')->references('id')->on('Topics')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('TopicDetails');
    }
}
