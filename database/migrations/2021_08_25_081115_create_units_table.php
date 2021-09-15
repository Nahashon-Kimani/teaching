<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('course_id');
            $table->integer('unit_duration');
            $table->longText('unit_outline');
            /*Creating a relationship
             * we use a datatype named foreign
             * references: shows which column is referenced by the forign key
             * on: dictates which table is referenced.
             * onUpdate/onDelete: directs the action to be taken on updating and on deleting respectively
             * */ 
            $table->foreign('course_id')->references('id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('units');
    }
}
