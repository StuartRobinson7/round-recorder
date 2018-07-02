<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_name');
            $table->string('course_name');
            $table->integer('course_rating');
            $table->integer('course_slope');
            $table->integer('hole_1_par');
            $table->integer('hole_1_stroke_index');
            $table->integer('hole_1_whites');
            $table->integer('hole_1_yellows');
            $table->integer('hole_1_reds');
            $table->integer('hole_1_ladies_par');
            $table->integer('hole_1_ladies_stroke_index');
            $table->integer('hole_2_par');
            $table->integer('hole_2_stroke_index');
            $table->integer('hole_2_whites');
            $table->integer('hole_2_yellows');
            $table->integer('hole_2_reds');
            $table->integer('hole_2_ladies_par');
            $table->integer('hole_2_ladies_stroke_index'); 
            $table->integer('hole_3_par');
            $table->integer('hole_3_stroke_index');
            $table->integer('hole_3_whites');
            $table->integer('hole_3_yellows');
            $table->integer('hole_3_reds');
            $table->integer('hole_3_ladies_par');
            $table->integer('hole_3_ladies_stroke_index'); 
            $table->integer('hole_4_par');
            $table->integer('hole_4_stroke_index');
            $table->integer('hole_4_whites');
            $table->integer('hole_4_yellows');
            $table->integer('hole_4_reds');
            $table->integer('hole_4_ladies_par');
            $table->integer('hole_4_ladies_stroke_index');  
            $table->integer('hole_5_par');
            $table->integer('hole_5_stroke_index');
            $table->integer('hole_5_whites');
            $table->integer('hole_5_yellows');
            $table->integer('hole_5_reds');
            $table->integer('hole_5_ladies_par');
            $table->integer('hole_5_ladies_stroke_index');
            $table->integer('hole_6_par');
            $table->integer('hole_6_stroke_index');
            $table->integer('hole_6_whites');
            $table->integer('hole_6_yellows');
            $table->integer('hole_6_reds');
            $table->integer('hole_6_ladies_par');
            $table->integer('hole_6_ladies_stroke_index'); 
            $table->integer('hole_7_par');
            $table->integer('hole_7_stroke_index');
            $table->integer('hole_7_whites');
            $table->integer('hole_7_yellows');
            $table->integer('hole_7_reds');
            $table->integer('hole_7_ladies_par');
            $table->integer('hole_7_ladies_stroke_index');  
            $table->integer('hole_8_par');
            $table->integer('hole_8_stroke_index');
            $table->integer('hole_8_whites');
            $table->integer('hole_8_yellows');
            $table->integer('hole_8_reds');
            $table->integer('hole_8_ladies_par');
            $table->integer('hole_8_ladies_stroke_index');
            $table->integer('hole_9_par');
            $table->integer('hole_9_stroke_index');
            $table->integer('hole_9_whites');
            $table->integer('hole_9_yellows');
            $table->integer('hole_9_reds');
            $table->integer('hole_9_ladies_par');
            $table->integer('hole_9_ladies_stroke_index');  
            $table->integer('hole_10_par');
            $table->integer('hole_10_stroke_index');
            $table->integer('hole_10_whites');
            $table->integer('hole_10_yellows');
            $table->integer('hole_10_reds');
            $table->integer('hole_10_ladies_par');
            $table->integer('hole_10_ladies_stroke_index');
            $table->integer('hole_11_par');
            $table->integer('hole_11_stroke_index');
            $table->integer('hole_11_whites');
            $table->integer('hole_11_yellows');
            $table->integer('hole_11_reds');
            $table->integer('hole_11_ladies_par');
            $table->integer('hole_11_ladies_stroke_index'); 
            $table->integer('hole_12_par');
            $table->integer('hole_12_stroke_index');
            $table->integer('hole_12_whites');
            $table->integer('hole_12_yellows');
            $table->integer('hole_12_reds');
            $table->integer('hole_12_ladies_par');
            $table->integer('hole_12_ladies_stroke_index'); 
            $table->integer('hole_13_par');
            $table->integer('hole_13_stroke_index');
            $table->integer('hole_13_whites');
            $table->integer('hole_13_yellows');
            $table->integer('hole_13_reds');
            $table->integer('hole_13_ladies_par');
            $table->integer('hole_13_ladies_stroke_index'); 
            $table->integer('hole_14_par');
            $table->integer('hole_14_stroke_index');
            $table->integer('hole_14_whites');
            $table->integer('hole_14_yellows');
            $table->integer('hole_14_reds');
            $table->integer('hole_14_ladies_par');
            $table->integer('hole_14_ladies_stroke_index');
            $table->integer('hole_15_par');
            $table->integer('hole_15_stroke_index');
            $table->integer('hole_15_whites');
            $table->integer('hole_15_yellows');
            $table->integer('hole_15_reds');
            $table->integer('hole_15_ladies_par');
            $table->integer('hole_15_ladies_stroke_index');
            $table->integer('hole_16_par');
            $table->integer('hole_16_stroke_index');
            $table->integer('hole_16_whites');
            $table->integer('hole_16_yellows');
            $table->integer('hole_16_reds');
            $table->integer('hole_16_ladies_par');
            $table->integer('hole_16_ladies_stroke_index');
            $table->integer('hole_17_par');
            $table->integer('hole_17_stroke_index');
            $table->integer('hole_17_whites');
            $table->integer('hole_17_yellows');
            $table->integer('hole_17_reds');
            $table->integer('hole_17_ladies_par');
            $table->integer('hole_17_ladies_stroke_index'); 
            $table->integer('hole_18_par');
            $table->integer('hole_18_stroke_index');
            $table->integer('hole_18_whites');
            $table->integer('hole_18_yellows');
            $table->integer('hole_18_reds');
            $table->integer('hole_18_ladies_par');
            $table->integer('hole_18_ladies_stroke_index');                                                                                                                                                                                            
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
        Schema::dropIfExists('courses');
    }
}
