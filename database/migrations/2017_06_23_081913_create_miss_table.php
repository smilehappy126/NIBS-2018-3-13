<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class');
            $table->string('name');
            $table->date('date')->nullable();            
            $table->string('item')->nullable();
            $table->integer('itemnum')->nullable();
            $table->string('license')->nullable();
            $table->string('classroom')->nullable();
            $table->string('teacher')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('miss');
    }
}
