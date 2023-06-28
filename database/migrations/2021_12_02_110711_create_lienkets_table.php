<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLienketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienkets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('anh')->nullable();
            $table->string('link')->nullable();
            $table->string('thutu')->nullable();
            $table->string('loai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lienkets');
    }
}
