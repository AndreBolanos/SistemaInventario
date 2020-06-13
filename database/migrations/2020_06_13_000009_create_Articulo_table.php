<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuloTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Articulo';

    /**
     * Run the migrations.
     * @table Articulo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('descripcion', 150)->nullable();
            $table->integer('Talla_Articulo_id')->unsigned()->index();
            $table->integer('Tipo_Articulo_id')->unsigned()->index();
            $table->integer('Proveedor_id')->unsigned()->index();
            $table->integer('Marca_Articulo_id')->unsigned()->index();

            $table->index(["Talla_Articulo_id"], 'fk_Articulo_Talla_Articulo1_idx');

            $table->index(["Proveedor_id"], 'fk_Articulo_Proveedor1_idx');

            $table->index(["Marca_Articulo_id"], 'fk_Articulo_Marca_Articulo1_idx');

            $table->index(["Tipo_Articulo_id"], 'fk_Articulo_Tipo_Articulo1_idx');


            $table->foreign('Talla_Articulo_id', 'fk_Articulo_Talla_Articulo1_idx')
                ->references('id')->on('Talla_Articulo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Tipo_Articulo_id', 'fk_Articulo_Tipo_Articulo1_idx')
                ->references('id')->on('Tipo_Articulo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Proveedor_id', 'fk_Articulo_Proveedor1_idx')
                ->references('id')->on('Proveedor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Marca_Articulo_id', 'fk_Articulo_Marca_Articulo1_idx')
                ->references('id')->on('Marca_Articulo')
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
