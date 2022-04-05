<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMermaProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merma_products', function (Blueprint $table) {
            $table->id();

            // Foreing Key product register
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            // Foreing Key mermas register
            $table->unsignedBigInteger('merma_id');
            $table->foreign('merma_id')->references('id')->on('mermas');

            // Foreing Key categorys register
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categorys');

            // Foreing Key groups register
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups');

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
        Schema::dropIfExists('merma_products');
    }
}
