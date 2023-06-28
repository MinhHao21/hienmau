<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongtinnguoihiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtinnguoihiens', function (Blueprint $table) {
            $table->id();
            $table->string('hoten')->nullable();
            $table->string('namsinh')->nullable();
            $table->string('gioitinh')->nullable();
            $table->string('email')->unique();
            $table->string('dienthoai')->nullable();
            $table->string('cccd')->nullable();
            $table->longText('nhommau')->nullable();
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
        Schema::dropIfExists('thongtinnguoihiens');
    }
}
