<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichcongtacsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichcongtacs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('thoigian')->nullable();
            $table->text('noidung')->nullable();
            $table->boolean('coquan')->default(true);
            $table->boolean('hienthi')->default(true);
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
        Schema::dropIfExists('lichcongtacs');
    }
}


                                                    






