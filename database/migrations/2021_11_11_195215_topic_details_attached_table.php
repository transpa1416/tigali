<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TopicDetailsAttachedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TopicDetailsAttached', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('TopicDetails_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla TopicDetails');
            $table->string('pathAttached',150)->nullable()->comment('Guarda la ruta del recurso compartido');
            $table->boolean('allowDownload')->default(0)->comment('0 No permite/ 1 permite descarga');
            $table->timestamps();
            $table->foreign('TopicDetails_id')->references('id')->on('TopicDetails')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('TopicDetailsAttached');
    }
}
