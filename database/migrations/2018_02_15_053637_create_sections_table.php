<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('course_id');
            $table->dateTimeTz('start')->nullable($value = true);
            $table->dateTimeTz('end')->nullable($value = true);
            $table->dateTimeTz('open')->nullable($value = true);
            $table->dateTimeTz('close')->nullable($value = true);
            $table->string('status');
            $table->boolean('publish')->default(false);
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
        Schema::dropIfExists('sections');
    }
}
