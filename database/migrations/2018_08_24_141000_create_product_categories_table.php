<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments  ('id');
            $table->string      ('code');
            $table->string      ('description');
            $table->string      ('utilization');
            $table->string      ('color_label');
            $table->timestamps  ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::dropIfExists('product_categories');
    }
}
