<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('deposits', function (Blueprint $table) {
            $table->decimal('plan_interest_rate', 5, 2)->after('amount');
            $table->decimal('plan_referral_bonus', 5, 2)->default()->after('amount');;
            $table->integer('plan_duration')->default(1)->after('amount');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('deposits', function (Blueprint $table) {
            //
        });
    }
};
