<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtchetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otchets', function (Blueprint $table) {
            $table->id();
            $table->string('ima');
            $table->string('surname');
            $table->string('name');
            $table->string('issue_id');
            $table->string('timestart');
            $table->string('timeend');
            $table->string('price');
            $table->string('manager');
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
        Schema::dropIfExists('otchets');
    }
}
