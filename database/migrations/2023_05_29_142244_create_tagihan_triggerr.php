<?php

use Illuminate\Support\Facades\DB;
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
        DB::unprepared('
            CREATE TRIGGER stock_trigger AFTER INSERT ON produksis
            FOR EACH ROW
            BEGIN
                UPDATE setorans SET total_tagihan = NEW.produksi * harga_per_Bal
                WHERE cabang = NEW.cabang;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS stock_trigger');
    }
};
