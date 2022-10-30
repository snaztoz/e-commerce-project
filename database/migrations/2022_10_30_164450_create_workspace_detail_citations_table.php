<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Phrase;
use App\Models\WorkspaceDetail;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workspace_detail_citations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Phrase::class);
            $table->foreignIdFor(WorkspaceDetail::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workspace_detail_citations');
    }
};
