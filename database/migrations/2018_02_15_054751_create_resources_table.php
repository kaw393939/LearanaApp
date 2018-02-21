<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            //rest of fields then...
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('course_id')->unsigned();
            //rest of fields then...
            $table->foreign('course_id')->references('id')->on('courses');
            $table->boolean('publish')->default(false);
            $table->string('title');
            $table->string('url')->default('none');
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
        Schema::dropIfExists('resources');
    }
}
