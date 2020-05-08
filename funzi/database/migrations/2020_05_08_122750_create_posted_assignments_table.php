<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostedAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posted_assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('assignment');
            $table->string('uniqid');
            $table->bigInteger('student_id');
            $table->bigInteger('assignment_id');
            $table->bigInteger('subject_id');
            $table->bigInteger('class_id');
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
        Schema::dropIfExists('posted_assignments');
    }
}
