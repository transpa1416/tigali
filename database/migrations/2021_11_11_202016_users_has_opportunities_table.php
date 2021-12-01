<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersHasOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsersHasOpportunities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla usuarios');
            $table->bigInteger('examsModule_id')->unsigned()->index()->nullable()->comment('Llave foranea con tabla ExamsModule');
            $table->integer('countOpportunities')->default(0)->comment("Cuenta de oportunidades");
            $table->float('score')->default(0)->comment("calificación del examen");
            $table->boolean('isActive')->default(1);
            $table->timestamps();
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('UsersHasOpportunities');
    }
}
