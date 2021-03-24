<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotxeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('Cotxe', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('nom');
            $table->string('tipus');
            $table->string('motor');
            $table->string('pathImage');
            $table->string('marca');

            $table->integer('user_id')->nullable()->unsigned()->index();

            //$table->integer('user_id')->nullable()->unsigned();

            //$table->foreign('user_id')->references('id')->on('User');

        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('Cotxe');
    }
}
