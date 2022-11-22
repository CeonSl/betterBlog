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
        Schema::create('ropas', function (Blueprint $table) {
            $table->id();
            $table->string('prenda',100);
            $table->integer('stock');
            $table->float('precio');
            $table->string('talla',4);
            $table->string('estado',20);
            $table->string('imagenRef');

            $table->unsignedBigInteger('tipoColor_id')->nullable();
            $table->foreign('tipoColor_id')->references('id')->on('nivel_parametros')
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
        Schema::dropIfExists('ropas');
    }
};
