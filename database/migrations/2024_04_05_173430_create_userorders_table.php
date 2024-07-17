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
        Schema::create('userorders', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('customername');
            $table->string('email');
            $table->string('contact');
            $table->string('tiffintype');
            $table->decimal('cost', 8, 2);
            $table->integer('quantity'); 
            $table->integer('total'); 
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('totalovercost');
            $table->time('time');
            $table->string('address',255);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userorders');
    }
};
