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
        Schema::create('type_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->constrained();
            $table->unsignedBigInteger('tutorial_id')->nullable()->constrained();
            $table->unsignedBigInteger('step_id')->nullable()->constrained();
            $table->unsignedBigInteger('edit_goal')->nullable()->constrained();
            $table->unsignedBigInteger('edit_current')->nullable()->constrained();
            $table->unsignedBigInteger('edit_content')->nullable()->constrained();
            $table->unsignedBigInteger('type_id')->nullable()->constrained();
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
        Schema::dropIfExists('type_users');
    }
};
