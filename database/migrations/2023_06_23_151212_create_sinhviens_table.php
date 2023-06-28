<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhviens', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('hoten')->nullable();
            $table->string('diachi')->nullable();
            $table->string('ngaysinh')->unique();
            $table->string('sodienthoai')->nullable();
            $table->string('cccd')->nullable();
            $table->longText('thumbnail')->nullable();
            $table->longText('filecv')->nullable();
            $table->string('trangthai')->nullable();
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
        Schema::dropIfExists('sinhviens');
    }
}
