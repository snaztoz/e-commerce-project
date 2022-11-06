<?php

use App\Models\ProjectStructure;
use App\Models\Workspace;
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
            'workspace_details',
            function (Blueprint $table) {
                $table->id();
                $table->timestamps();

                $table
                    ->foreignIdFor(ProjectStructure::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table
                    ->foreignIdFor(Workspace::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

                $table->text('content');
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
        Schema::dropIfExists('workspace_details');
    }
};
