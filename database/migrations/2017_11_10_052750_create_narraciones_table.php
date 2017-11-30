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
            $table->integer('idVariablesPersona')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idVariablesPersona')->references('id')->on('variables_persona')->onDelete('cascade');
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
