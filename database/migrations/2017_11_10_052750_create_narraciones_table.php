<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNarracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narracion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('narracion',2000);
            $table->integer('idVatiablesPersona')->unsigned()->index()->nullable();
            $table->foreign('idVatiablesPersona')->references('id')->on('variables_persona')->ondelete('cascade');
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
        Schema::dropIfExists('narracion');
    }
}
