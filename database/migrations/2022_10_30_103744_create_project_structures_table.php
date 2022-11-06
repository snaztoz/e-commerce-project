<?php

use App\Models\ProjectType;
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
            'project_structures',
            function (Blueprint $table) {
                $table->id();
                $table->timestamps();

                $table
                    ->foreignIdFor(ProjectType::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

                $table->unsignedInteger('ordering');
                $table->string('part');
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
        Schema::dropIfExists('project_structures');
    }
};
