<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();

            // Foreing Key mermas register
            $table->unsignedBigInteger('mermas_id');
            $table->foreign('mermas_id')->references('id')->on('mermas');

            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->enum('type', ['Asignado', 'Sin asignar']);

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
        Schema::dropIfExists('groups');
    }
}
