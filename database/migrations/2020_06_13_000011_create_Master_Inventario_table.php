<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterInventarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Master_Inventario';

    /**
     * Run the migrations.
     * @table Master_Inventario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso')->nullable();
            $table->decimal('precio_costo', 8, 2);
            $table->decimal('depreciacion_porcentaje', 2, 2);
            $table->decimal('depreciacion_anual', 8, 2);
            $table->integer('Articulo_id')->unsigned()->index();
            $table->integer('Responsable')->unsigned()->index();
            $table->integer('Estatus_Inventario_id')->unsigned()->index();
            $table->integer('Estado_Inventario_id')->unsigned()->index();
            $table->string('comentario', 150)->nullable();
            $table->string('ubicacion', 45);

            $table->index(["Responsable"], 'fk_Master_Inventario_Empleado1_idx');

            $table->index(["Articulo_id"], 'fk_Master_Inventario_Articulo1_idx');

            $table->index(["Estatus_Inventario_id"], 'fk_Master_Inventario_Estatus_Inventario1_idx');

            $table->index(["Estado_Inventario_id"], 'fk_Master_Inventario_Estado_Inventario1_idx');


            $table->foreign('Articulo_id', 'fk_Master_Inventario_Articulo1_idx')
                ->references('id')->on('Articulo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Responsable', 'fk_Master_Inventario_Empleado1_idx')
                ->references('id')->on('Empleado')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Estatus_Inventario_id', 'fk_Master_Inventario_Estatus_Inventario1_idx')
                ->references('id')->on('Estatus_Inventario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Estado_Inventario_id', 'fk_Master_Inventario_Estado_Inventario1_idx')
                ->references('id')->on('Estado_Inventario')
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
