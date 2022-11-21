<?php

use App\Models\SubscriptionPlan;
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
            'subscriptions',
            function (Blueprint $table) {
                $table->id();
                $table->timestamps();

                $table
                    ->foreignIdFor(User::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table
                    ->foreignIdFor(SubscriptionPlan::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

                $table->date('start_date')->nullable();
                $table->date('end_date')->nullable();

                $table->dateTime('payment_datetime')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
};
