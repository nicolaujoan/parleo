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
        Schema::create('role_pivots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('community_id') // UNSIGNED BIG INT
            ->references('id')
            ->on('communities');
            $table->foreignId('user_id') // UNSIGNED BIG INT
            ->references('id')
            ->on('users');
            $table->foreignId('role_id') // UNSIGNED BIG INT
            ->references('id')
            ->on('roles');   
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
        Schema::dropIfExists('role_pivots');
    }
};
