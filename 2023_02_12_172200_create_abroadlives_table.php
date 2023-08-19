<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abroadlives', function (Blueprint $table) {
            $table->id();
            $table->integer('section_id');
            $table->integer('category_id');
            $table->integer('topic_id');
            $table->string('auth_name');
            $table->string('special_title');
            $table->string('title');
            $table->text('description');
            $table->string('time');
            $table->string('image');
            $table->string('thumbnail')->nullable();
            $table->text('meta_description');
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->enum('is_featured',['No','Yes']);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('abroadlives');
    }
};
