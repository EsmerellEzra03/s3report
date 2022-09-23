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
        Schema::create('schedulings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assign_id')->nullable();
            $table->unsignedBigInteger('boq_id')->nullable();
            $table->integer('quantity');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();

            $table->foreign('assign_id')->references('id')->on('assigns')->onDelete('cascade');
            $table->foreign('boq_id')->references('id')->on('boqs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedulings', function (Blueprint $table) {
            $table->dropForeign(['assign_id']);
            $table->dropForeign(['boq_id']);
        });
    }
};
