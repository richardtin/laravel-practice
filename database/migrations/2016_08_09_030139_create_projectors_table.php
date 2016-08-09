<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectors', function (Blueprint $table) {
            $table->increments('id');

            $table->string('model_type', 30);
            $table->string('model_name', 30);
            $table->string('lense', 30);
            $table->string('resulation', 30);
            $table->string('aspect_ratio', 10);
            $table->integer('diagonal_min');
            $table->integer('diagonal_max');
            $table->float('throw_ratio_wide');
            $table->float('throw_ratio_tele');
            $table->integer('brightness');
            $table->float('vertical_offset_min');
            $table->float('vertical_offset_default');
            $table->float('vertical_offset_max');
            $table->float('horizontal_offset_min');
            $table->float('horizontal_offset_default');
            $table->float('horizontal_offset_max');
            $table->float('ust_makeup');

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
        Schema::drop('projectors');
    }
}
