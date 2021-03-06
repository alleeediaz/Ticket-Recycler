<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Debemos considerar para el catalogo de Estados
         * id
         * cve
         * name
         * latlong
         * abbreviation1
         * abbreviation2
         */
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',5);
            $table->string('name');
            $table->string('latlong',100)->nullable();
            $table->string('abbreviation1',5)->nullable();
            $table->string('abbreviation2',5)->nullable();
            $table->timestamps(); # Adds created_at and updated_at columns.
            $table->softDeletes(); # Adds deleted_at column for soft deletes.

            $table->index('name');
            $table->index('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('states');
    }
}
