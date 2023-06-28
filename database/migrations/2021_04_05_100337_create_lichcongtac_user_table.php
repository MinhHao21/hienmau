<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichcongtacUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichcongtac_user', function (Blueprint $table) {
            $table->unsignedBigInteger('lichcongtac_id');
            $table->unsignedBigInteger('user_id');
            $table->unique(['lichcongtac_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lichcongtac_user');
    }
}
