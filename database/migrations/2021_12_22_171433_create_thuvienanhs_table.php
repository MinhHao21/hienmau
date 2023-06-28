<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThuvienanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuvienanhs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('danhmuc_id')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('nghesynghenhan_id')->nullable(); // liên kết bảng
            $table->foreignId('disannghethuat_id')->nullable(); // liên kết bảng
            $table->foreignId('caulacbo_id')->nullable(); // liên kết bảng
            $table->string('luotxem')->nullable();
            $table->string('uuid')->nullable();
            $table->foreignId('published_by')->nullable();
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('thuvienanhs');
    }
}
