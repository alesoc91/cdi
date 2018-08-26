<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaboratorServiceTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('services', function (Blueprint $table) {
            $table->increments  ('id');
            $table->integer     ('collaborator_id');
            $table->integer     ('service_id');
            $table->boolean     ('online_visibility'); // TODO: forse da spostare su services (alcuni servizi non sono visibili online)
            $table->timestamps  ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::dropIfExists('collaborator_service');
    }
}
