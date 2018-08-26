<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments  ('id');
            $table->string      ('name');
            $table->string      ('lastname');
            $table->string      ('company');
            $table->string      ('address');
            $table->string      ('city');
            $table->string      ('phone');
            $table->string      ('business_name'); // Ragione Sociale
            $table->string      ('vat_number'); // Partita IVA
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
        Schema::dropIfExists('suppliers');
    }
}
