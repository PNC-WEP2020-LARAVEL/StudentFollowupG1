<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->String('firstName');
            $table->String('lastName');
            $table->String('gender');
            $table->String('class');
            $table->integer('years');
            $table->String('picture');
            $table->String('province');
            $table->integer('studentStatus');
            $table->unsignedBigInteger('user_id')
                ->refferences('users')
                ->on('id')
                ->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
