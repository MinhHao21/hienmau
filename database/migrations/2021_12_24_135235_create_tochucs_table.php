<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTochucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tochucs', function (Blueprint $table) {
            $table->id();
            $table->string('phongban_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('email');
            $table->string('dienthoai');
            $table->string('chucvu');
            $table->string('chucdanh');
            $table->integer('thutu')->default(100);
            $table->boolean('hienthi')->default(1);
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
        Schema::dropIfExists('tochucs');
    }
}
