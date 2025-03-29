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
        Schema::table('games', function (Blueprint $table) {
            $table->integer('home_goals')->default(0);  
            $table->integer('away_goals')->default(0);  
            $table->integer('home_yellow_cards')->default(0);  
            $table->integer('away_yellow_cards')->default(0);  
            $table->integer('home_red_cards')->default(0);  
            $table->integer('away_red_cards')->default(0);  
            $table->integer('extra_time')->default(0);  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn([
                'home_goals',
                'away_goals',
                'home_yellow_cards',
                'away_yellow_cards',
                'home_red_cards',
                'away_red_cards',
                'extra_time'
            ]);
        });
    }
};
