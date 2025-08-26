<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');              // nama event
            $table->text('description')->nullable();
            $table->dateTime('date');            // tanggal & waktu event
            $table->string('location');
            $table->decimal('ticket_price', 10, 2)->default(0); // harga tiket
            $table->unsignedBigInteger('user_id'); // pemilik event
            $table->timestamps();

            // relasi ke user
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
