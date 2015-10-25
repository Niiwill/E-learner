<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessontypes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('color');

        });

        Schema::create('lessons', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('id_lessontype');
            $table->string('name');
            $table->text('text');
            $table->text('url1');
            $table->text('url2');
            $table->timestamps();
        });

        Schema::create('statuses', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lessontypes');
        Schema::drop('lessons');
        Schema::drop('statuses');
    }
}
