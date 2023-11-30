<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('article_id')->constrained();
            $table->integer('order');
            $table->enum('type', ['text', 'image', 'video', 'music']);
            $table->string('title');
            $table->text('image');
            $table->text('desc');
            $table->text('data');
            $table->timestamps();
            $table->unique(['article_id', 'order']);
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
