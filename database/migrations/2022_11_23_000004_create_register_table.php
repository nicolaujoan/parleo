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
        Schema::create('registers', function (Blueprint $table) {
            $table->id('register_id');

            $table->foreignId('user_id')
                ->references('user_id')
                ->on('users')
                ->nullOnDelete();

            $table->foreignId('community_id')
                ->references('community_id')
                ->on('communities')
                ->nullOnDelete();

            $table->foreignId('role_id')
                ->references('role_id')
                ->on('roles')
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
        Schema::dropIfExists('registers');
    }
};
