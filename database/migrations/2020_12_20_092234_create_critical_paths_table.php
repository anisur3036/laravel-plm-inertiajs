<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriticalPathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critical_paths', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_no', 10);
            $table->date('fri_date');
            $table->foreignId('buyer_id');
            $table->string('order_no');
            $table->string('style');
            $table->string('file_no', 10);
            $table->foreignId('unit_id');
            $table->integer('qty');
            $table->double('unit_price', 5, 4);
            $table->foreignId('product_type_id');
            $table->integer('duration');
            $table->string('remarks')->nullable();
            $table->foreignId('merchandiser_id');
            $table->string('fabrication')->nullable();
            $table->double('cad_consump_1', 5, 4)->nullable();
            $table->double('cad_consump_2', 5, 4)->nullable();
            $table->double('cad_consump_3', 5, 4)->nullable();
            $table->string('lc_number')->nullable();
            $table->date('lc_date')->nullable();
            $table->date('order_receive')->nullable();
            $table->double('total_value', 8, 4)->nullable();
            $table->string('season', 30)->nullable();
            $table->integer('weight')->nullable();
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
        Schema::dropIfExists('critical_paths');
    }
}
