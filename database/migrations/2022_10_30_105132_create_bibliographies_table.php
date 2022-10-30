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
        Schema::create('bibliographies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->enum('type', [
                'journal',
                'book',
                'newspaper',
                'website',
                'proceeding',
            ]);

            $table->string('title');
            $table->year('year');
            $table->string('doi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bibliographies');
    }
};
