<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('registration_number',100)->nullable()->default(null);
            $table->string('bachelor',100)->nullable()->default(null);
            $table->string('student_status',20)->nullable()->default(null);
            $table->string('name',100)->nullable()->default(null);
            $table->string('parental_surname',100)->nullable()->default(null);
            $table->string('maternal_surname',100)->nullable()->default(null);
            $table->string('gender',3)->nullable()->default(null);
            $table->integer('generation')->nullable()->default(null);
            $table->string('municipality_residence',100)->nullable()->default(null);
            $table->string('country',100)->nullable()->default(null);
            $table->date('born_date')->nullable()->default(null);
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
};
