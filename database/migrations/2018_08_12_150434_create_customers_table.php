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
    public function up() {

        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string    ('name');
            $table->string    ('lastname');
            $table->string    ('fiscal_code')->nullable();
            $table->string    ('gender');
            $table->date      ('birth_date')->nullable();
            $table->string    ('city')->nullable();
            $table->string    ('address')->nullable();
            $table->string    ('email')->nullable();
            $table->integer   ('primary_number')->nullable();
            $table->integer   ('secondary_number')->nullable();
            $table->string    ('note')->nullable();
            $table->boolean   ('from_online')->nullable();
            $table->date      ('registration_date');
            $table->integer   ('facebook_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::dropIfExists('customers');

    }
}
