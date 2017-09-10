<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('grade')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('first_langauge')->nullable();
            $table->string('second_language')->nullable();
            $table->string('previous_school')->nullable();
            // $table->string('second_language')->nullable();
            $table->enum('seen', [0, 1])->nullable();
            $table->enum('email_sent', [0, 1])->nullable();
            $table->enum('transfer', [0, 1])->nullable();
            $table->integer('sent_by')->nullable();
            $table->dateTime('interview_date')->nulable();
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
        Schema::dropIfExists('admissions');
    }
}
