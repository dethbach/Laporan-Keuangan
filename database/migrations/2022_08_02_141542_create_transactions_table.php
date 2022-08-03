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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('slug')->nullable();
            $table->string('flow')->nullable();
            $table->string('type')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->string('date')->nullable();
            $table->string('wallet')->nullable();
            $table->string('noservice')->nullable();
            $table->string('nonota')->nullable();
            $table->string('receipt')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('transactions');
    }
};
