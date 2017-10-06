<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('class_name');
            $table->string('class_date');
            $table->string('text_one')->nullable();
            $table->string('text_two')->nullable();

            $table->string('text_three')->nullable();

            $table->string('text_four')->nullable();

            $table->string('text_five')->nullable();

            $table->string('text_six')->nullable();
            $table->string('text_seven')->nullable();
            $table->string('text_eight')->nullable();

            $table->string('text_nine')->nullable();
            $table->string('text_ten')->nullable();





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_classes');
    }
}
