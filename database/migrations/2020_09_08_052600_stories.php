<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Stories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the stories table
        Schema::create('stories', function(Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            //$table->integer('order');
            $table->string('author');
            $table->string('title');
            $table->string('abstract');
            $table->text('content');
            $table->string('url')->nullable();
            $table->string('slug')->nullable();
            $table->string('keywords')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_sponsored')->default(0);
            //$table->integer('issue_id')->nullable();
            $table->integer('status_id');
            $table->integer('image_id')->nullable();
            $table->integer('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
