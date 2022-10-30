<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\ProjectStructure;
use App\Models\Workspace;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workspace_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(ProjectStructure::class);
            $table->foreignIdFor(Workspace::class);

            $table->text('content');
        });
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
