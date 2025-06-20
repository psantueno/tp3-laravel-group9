<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('poster');
        $table->boolean('habilitated')->default(false);
        $table->text('content');
        $table->foreignId('user_id');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
   public function down()
{
    Schema::dropIfExists('posts');
}
};
