<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTrabajadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('detalle_trabajadors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trabajador_id')->unsigned();
            $table->string('fecha_nac',10);
            $table->decimal('sueldo', 10, 2);
            $table->timestamps();
            $table->foreign('trabajador_id')->references('id')->on('trabajadors');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_trabajadors');
    }
}
