<?php

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
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('estado',20);

            $table->unsignedBigInteger('venta_id')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            
            $table->foreign('venta_id')->references('id')->on('ventas')
            ->onDelete('set null');
            $table->foreign('cliente_id')->references('id')->on('clientes')
            ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('envios');
    }
};
