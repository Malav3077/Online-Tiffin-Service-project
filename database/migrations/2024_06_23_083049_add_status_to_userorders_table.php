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
    Schema::table('userorders', function (Blueprint $table) {
        $table->string('status')->default('Pending'); // Adjust the data type as per your requirement
    });
}

public function down()
{
    Schema::table('userorders', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}

};
