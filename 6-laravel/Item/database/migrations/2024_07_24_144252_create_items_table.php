<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->integer('stock');
            $table->text('description');
            $table->enum('status', ['available', 'unavailable']);
            // $table->enum('status', ['yes', 'no']);
            $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on($table)->onDelete('cascade');
            // MIGRATION will run first-come-first-serve, FCFS on time-basic.
            // So if you use the second syntax on first migrating database, it will throw an error
            // telling it can't find the second table in database( because it has't built that table yet ).

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
