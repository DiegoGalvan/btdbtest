<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Files extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the files table
        Schema::create('files', function(Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('fileable_id')->nullable();
            $table->string('fileable_type')->nullable();
            // morphs('file) will generate fileable_id and fileable_type
            // $table->morphs('file');
            $table->string('filename');
            $table->string('extension');
            $table->string('mime_type')->nullable();
            $table->string('alt_text')->nullable();
            $table->string('type')->nullable();
            $table->string('mime_type_key')->nullable();
            $table->string('path')->nullable();
            $table->string('key')->nullable();
            $table->integer('business_id')->nullable();
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
