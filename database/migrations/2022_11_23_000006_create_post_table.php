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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->string('title');
            $table->string('content');
            $table->string('media')->nullable();

            $table->foreignId('user_id')
                ->references('user_id')
                ->on('users')
                ->nullOnDelete();

            $table->foreignId('community_id')
                ->references('community_id')
                ->on('communities')
                ->nullOnDelete();

            $table->foreignId('tag_id')
                ->references('tag_id')
                ->on('tags')
                ->nullOnDelete();

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
        Schema::dropIfExists('posts');
    }
};
