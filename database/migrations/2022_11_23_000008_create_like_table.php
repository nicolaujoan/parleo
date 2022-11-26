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
        Schema::create('like', function (Blueprint $table) {
            $table->id();
            $table->string('type');

            $table->foreignId('user_id')
                ->constrained('users')
                ->nullOnDelete();


            $table->foreignId('community_id')
                ->constrained('communities')
                ->nullOnDelete();


            $table->foreignId('tag_id')
                ->constrained('tags')
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
        Schema::dropIfExists('likes');
    }
};
