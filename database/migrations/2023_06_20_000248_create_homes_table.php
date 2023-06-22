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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->constrained();
            $table->unsignedBigInteger('todo_id')->nullable()->constrained();
            $table->unsignedBigInteger('content')->nullable()->constrained();
            $table->unsignedBigInteger('calender_id')->nullable()->constrained();
            $table->unsignedBigInteger('plan_id')->nullable()->constrained();
            $table->unsignedBigInteger('month')->nullable()->constrained();
            $table->unsignedBigInteger('time')->nullable()->constrained();
            $table->unsignedBigInteger('schedule')->nullable()->constrained();
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
        Schema::dropIfExists('homes');
    }
};
