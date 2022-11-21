<?php

use App\Models\ProjectType;
use App\Models\User;
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
            'workspaces',
            function (Blueprint $table) {
                $table->id();
                $table->timestamps();

                $table
                    ->foreignIdFor(ProjectType::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table
                    ->foreignIdFor(User::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

                $table->string('title', 1024);
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
        Schema::dropIfExists('workspaces');
    }
};
