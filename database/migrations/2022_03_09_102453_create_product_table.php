<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('brand_id')->length(255)->nullable();
            $table->string('images')->length(255)->nullable();
            $table->string('product_name')->length(255)->nullable();
            $table->text('information')->length(255)->nullable();
            $table->text('description')->length(255)->nullable();
            $table->string('color_id')->length(255)->nullable();
            $table->string('price')->length(255)->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
