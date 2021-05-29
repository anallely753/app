<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->text('nombre');
            $table->date('fecha-inicio');
            $table->date('fechafin');
            $table->time('hora-inicio');
            $table->time('hora-fin');
            $table->text('temario');//Ruta al archivo
            $table->text('antecedentes');
            $table->text('material');
            $table->text('lugar');
            $table->text('cupo');
            $table->text('dias');
            $table->text('costo-unam');
            $table->text('costo-externo');
            $table->text('costo-general');

            $table->id();
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
        Schema::dropIfExists('courses');
    }
}
