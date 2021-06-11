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

            $table->string('course-id');
            $table->string('nombre');
            $table->string('date-start');
            $table->string('date-end');
            $table->string('time-start');
            $table->string('time-end');
            $table->string('temario');//Ruta al archivo
            $table->string('lugar');
            $table->string('cupo');            
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
