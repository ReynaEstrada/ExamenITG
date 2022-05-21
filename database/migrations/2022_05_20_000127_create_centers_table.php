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
        Schema::create('centers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key',100)->unique();
            $table->string('bachelor',100)->nullable()->default(null);
            $table->string('key_of_center',100)->unique();
            $table->string('municipality',100)->nullable()->default(null);
            $table->string('incharged',100)->nullable()->default(null);
            $table->string('incharged_email',100)->unique();
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
        Schema::dropIfExists('centers');
    }
};
