<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE TRIGGER tr_formato_evaluacion_calificacion 
                BEFORE UPDATE ON formato_clientes
                FOR EACH ROW
                BEGIN
                    DECLARE valor_item DECIMAL(8,2) DEFAULT 0;

                    SELECT valor INTO valor_item 
                    FROM ciclo_item_estandars 
                    WHERE id = NEW.ciclo_item_estandars_id
                    LIMIT 1;

                    IF NEW.cumple = 1 THEN
                        SET NEW.calificacion = valor_item;
                    ELSEIF NEW.cumple = 0 AND NEW.justifica = 1 THEN
                        SET NEW.calificacion = valor_item;
                    ELSE
                        SET NEW.calificacion = 0;
                    END IF;
                END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER `tr_formato_evaluacion_calificacion`');
    }
};
