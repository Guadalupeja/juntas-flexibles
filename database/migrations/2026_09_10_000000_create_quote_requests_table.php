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
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();

            // Configuración técnica de la junta (viene de la Herramienta de Selección).
            $table->string('modelo');
            $table->string('materiales')->nullable();
            $table->string('materiales2')->nullable();
            $table->string('refuerzo')->nullable();
            $table->string('tipos_arco')->nullable();
            $table->string('normativas_brida')->nullable();
            $table->string('material_bridas')->nullable();
            $table->string('tipo_brida')->nullable();
            $table->string('temperatura_info')->nullable();
            $table->string('temperatura_info2')->nullable();

            // Datos que pide el punto 6: diámetro, largo total, fluido y temperatura reales de operación.
            $table->string('diametro_tuberia');
            $table->string('largo_total');
            $table->string('fluido_manejar');
            $table->string('temperatura_manejar');

            // Datos comerciales del punto 4.
            $table->string('nombre');
            $table->string('empresa')->nullable();
            $table->string('correo');
            $table->string('whatsapp');

            // Contexto adicional para reconstruir la cotización si hace falta.
            $table->text('resultado')->nullable();
            $table->text('encabezados_tabla')->nullable();

            // Para llevar seguimiento en tus campañas de mailing semanales.
            $table->timestamp('contactado_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};
