<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFidelityCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('fidelity_cards', function (Blueprint $table) {
            $table->increments  ('id');
            $table->integer     ('customer_id');
            $table->boolean     ('f_solar_shower');
            $table->string      ('n_solar_shower');
            $table->boolean     ('f_trifacial');
            $table->string      ('n_trifacial');
            $table->boolean     ('f_esthetics');
            $table->float       ('amount_estetichs');
            $table->string      ('note');
            $table->timestamps  ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('fidelity_cards');
    }
}
