<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Usuario';

    /**
     * Run the migrations.
     * @table Usuario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('password', 45);
            $table->integer('Empleado_id')->nullable()->unsigned()->index();
            $table->integer('Rol_id')->unsigned()->index();
            $table->integer('Estado_Usuario_id')->unsigned()->index();

            $table->index(["Estado_Usuario_id"], 'fk_Usuario_Estado_Usuario1_idx');

            $table->index(["Empleado_id"], 'fk_Usuario_Empleado_idx');

            $table->index(["Rol_id"], 'fk_Usuario_Rol1_idx');


            $table->foreign('Empleado_id', 'fk_Usuario_Empleado_idx')
                ->references('id')->on('Empleado')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Rol_id', 'fk_Usuario_Rol1_idx')
                ->references('id')->on('Rol')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('Estado_Usuario_id', 'fk_Usuario_Estado_Usuario1_idx')
                ->references('id')->on('Estado_Usuario')
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
