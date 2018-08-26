<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('promotions', function (Blueprint $table) {
            $table->increments  ('id');
            $table->string      ('code');
            $table->string      ('description');
            $table->integer     ('n_services');
            $table->integer     ('n_products');
            $table->integer     ('n_sitting_services');
            $table->float       ('total_amount');
            $table->float       ('deposit_amount');
            $table->integer     ('customer_id');
            $table->timestamps  ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
