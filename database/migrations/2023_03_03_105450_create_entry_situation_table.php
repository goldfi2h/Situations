<?php

use App\Models\Entry;
use App\Models\Situation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entry_situation', function (Blueprint $table) {
            $table->foreignIdFor(Situation::class, 'situation_id')
                ->constrained('situations')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignIdFor(Entry::class, 'entry_id')
                ->constrained('entries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entry_situations');
    }
};
