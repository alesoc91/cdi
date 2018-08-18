<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string    ('name');
            $table->string    ('lastname');
            $table->string    ('fiscal_code')->nullable();
            $table->string    ('gender');
            //$table->integer   ('gender_type_id');
            $table->date      ('birth_date')->nullable();
            $table->string    ('city')->nullable();
            $table->string    ('address')->nullable();
            $table->string    ('email')->nullable();
            $table->integer   ('primary_number')->nullable();
            $table->integer   ('secondary_number')->nullable();
            $table->string    ('note')->nullable();
            //$table->integer   ('favourite_collaborator_id'); // TODO: da rivedere, forse è ridondante
            //$table->integer   ('favourite_service_id'); // TODO: da rivedere, forse è ridondante
            //$table->string    ('frequency_reservation'); // TODO: da rivedere, forse è ridondante
            //$table->date      ('first_reservation'); // TODO: da rivedere, forse è ridondante
            $table->boolean   ('from_online')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
