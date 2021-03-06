<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('appointments', function (Blueprint $table) {
            $table->increments  ('id');
            $table->date        ('date');
            $table->integer     ('collaborator_service_id');
            $table->boolean     ('validated');
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

        Schema::dropIfExists('appointments');
    }
}
