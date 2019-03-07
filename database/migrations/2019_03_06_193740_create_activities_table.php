<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('of_parent_percent')->nullable();
            $table->integer('semi_idle')->nullable();
            $table->integer('keys')->nullable();
            $table->integer('lmb')->nullable();
            $table->integer('rmb')->nullable();
            $table->integer('scrollwheel')->nullable();
            $table->string('start_on')->nullable();
            $table->text('details')->nullable();
            $table->string('time')->nullable();
            $table->timestamps();
            $table->nestedSet();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');        
    }
}
