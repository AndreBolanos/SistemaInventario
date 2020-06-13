<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Empleado';

    /**
     * Run the migrations.
     * @table Empleado
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('primer_nombre', 45);
            $table->string('segundo_nombre', 45)->nullable();
            $table->string('primer_apellido', 45);
            $table->string('segundo_apellido', 45)->nullable();
            $table->date('fecha_nac');
            $table->integer('dpi')->nullable();
            $table->integer('tel');
            $table->string('email', 100)->nullable();
            $table->string('direccion', 150);
            $table->date('fecha_ingreso');
            $table->integer('Puesto_id')->unsigned()->index();

            $table->index(["Puesto_id"], 'fk_Empleado_Puesto1_idx');


            $table->foreign('Puesto_id', 'fk_Empleado_Puesto1_idx')
                ->references('id')->on('Puesto')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
