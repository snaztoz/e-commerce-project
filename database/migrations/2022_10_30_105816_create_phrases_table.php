<?php

use App\Models\Bibliography;
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
        Schema::create(
            'phrases',
            function (Blueprint $table) {
                $table->id();
                $table->timestamps();

                $table
                    ->foreignIdFor(Bibliography::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

                $table->text('phrase');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phrases');
    }
};
