<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('products', function (Blueprint $table) {
            $table->increments  ('id');
            $table->string      ('code'); // TODO: controllare, forse non necessario
            $table->string      ('description');
            $table->integer     ('category_id');
            $table->integer     ('quantity_available');
            $table->integer     ('min_stock');
            $table->integer     ('min_reorder');
            $table->float       ('price_supplier');
            $table->float       ('price_customer');
            $table->string      ('product_barcode');
            $table->string      ('product_code');
            $table->string      ('note');
            $table->string      ('brand');
            $table->integer     ('supplier_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('products');
    }
}
