<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEndowmentsProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endowments_projects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('endowment_id')->unsigned();
            $table->bigInteger('project_id')->unsigned();
            $table->double('donation');
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
        Schema::dropIfExists('endowments_projects');
    }
}
