<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaboratorsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up(){
        Schema::create('collaborators', function (Blueprint $table) {
            $table->increments      ('id');
            $table->string          ('name');
            $table->string          ('lastname');
            $table->integer         ('role_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('collaborators');
    }
}
