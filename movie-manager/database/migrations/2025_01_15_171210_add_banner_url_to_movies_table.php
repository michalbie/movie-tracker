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
    Schema::table('movies', function (Blueprint $table) {
        $table->string('banner_url')->nullable(); // Allow null values for existing data
    });
}

public function down()
{
    Schema::table('movies', function (Blueprint $table) {
        $table->dropColumn('banner_url');
    });
}
};
