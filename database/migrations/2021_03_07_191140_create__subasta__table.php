<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubastaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('Subasta', function (Blueprint $table) {
            $table->id();
            $table->timestamp('dataFinalitzacio');
            $table->boolean('estat');

            $table->integer('user_id')->nullable()->unsigned()->index();
            $table->integer('cotxe_id')->nullable()->unsigned()->index();
            $table->integer('licitacio_id')->nullable()->unsigned()->index();

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
        Schema::dropIfExists('Subasta');
    }
}
