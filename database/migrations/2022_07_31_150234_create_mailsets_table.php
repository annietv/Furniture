<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailsets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('smtp');
            $table->string('host');
            $table->string('port');
            $table->string('username');
            $table->string('psw');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mailsets');
    }
}