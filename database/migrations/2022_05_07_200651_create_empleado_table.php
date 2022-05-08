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


        Schema::create('sucursals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('direccion');
        });

        Schema::create('administradors', function (Blueprint $table) {
            $table->id();
            $table->string('dui');
            $table->string('direccion');
            $table->string('genero');
            $table->timestamps();
            $table->foreignId('id_usuario')->references('id')->on('users')->comment('Relacion users')->nullable();
           
        });
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
            $table->integer('edad');
            $table->float('sueldo_base');
            $table->string('direccion');
            $table->string('foto')->nullable();
            $table->foreignId('id_administrador')->references('id')->on('administradors')->comment('Relacion admin - empleados')->nullable();
            $table->foreignId('id_sucursal')->references('id')->on('sucursals')->comment('Relacion sucursales')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
        Schema::dropIfExists('administradores');
        Schema::dropIfExists('sucursales');
    }
};
