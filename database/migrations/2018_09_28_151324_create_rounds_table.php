<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id');
            $table->decimal('player_handicap', 3, 1);
            $table->decimal('handicap_differential', 3, 1);            
            $table->date('round_date');
            $table->string('size');
	        $table->string('yards');
            $table->integer('course_id');        
            $table->string('nine');            
            $table->boolean('handicap_round');
            $table->boolean('stats_round'); 
            $table->integer('total_points');                       
            
            $table->integer('hole_1_score');
            $table->integer('hole_1_putts');
            $table->integer('hole_1_drops');
            $table->boolean('hole_1_fir');
            $table->boolean('hole_1_gir');
            $table->integer('hole_1_par');
            $table->integer('hole_1_points');

            $table->integer('hole_2_score');
            $table->integer('hole_2_putts');
            $table->integer('hole_2_drops');
            $table->boolean('hole_2_fir');
            $table->boolean('hole_2_gir');
            $table->integer('hole_2_par');
            $table->integer('hole_2_points');
        
            $table->integer('hole_3_score');
            $table->integer('hole_3_putts');
            $table->integer('hole_3_drops');
            $table->boolean('hole_3_fir');
            $table->boolean('hole_3_gir');
            $table->integer('hole_3_par');
            $table->integer('hole_3_points');

            $table->integer('hole_4_score');
            $table->integer('hole_4_putts');
            $table->integer('hole_4_drops');
            $table->boolean('hole_4_fir');
            $table->boolean('hole_4_gir');
            $table->integer('hole_4_par');
            $table->integer('hole_4_points');            
            
            $table->integer('hole_5_score');
            $table->integer('hole_5_putts');
            $table->integer('hole_5_drops');
            $table->boolean('hole_5_fir');
            $table->boolean('hole_5_gir');
            $table->integer('hole_5_par');
            $table->integer('hole_5_points');

            $table->integer('hole_6_score');
            $table->integer('hole_6_putts');
            $table->integer('hole_6_drops');
            $table->boolean('hole_6_fir');
            $table->boolean('hole_6_gir');
            $table->integer('hole_6_par'); 
            $table->integer('hole_6_points');           
            
            $table->integer('hole_7_score');
            $table->integer('hole_7_putts');
            $table->integer('hole_7_drops');
            $table->boolean('hole_7_fir');
            $table->boolean('hole_7_gir');
            $table->integer('hole_7_par');
            $table->integer('hole_7_points');

            $table->integer('hole_8_score');
            $table->integer('hole_8_putts');
            $table->integer('hole_8_drops');
            $table->boolean('hole_8_fir');
            $table->boolean('hole_8_gir');
            $table->integer('hole_8_par');
            $table->integer('hole_8_points');

            $table->integer('hole_9_score');
            $table->integer('hole_9_putts');
            $table->integer('hole_9_drops');
            $table->boolean('hole_9_fir');
            $table->boolean('hole_9_gir');
            $table->integer('hole_9_par');
            $table->integer('hole_9_points');

            $table->integer('hole_10_score');
            $table->integer('hole_10_putts');
            $table->integer('hole_10_drops');
            $table->boolean('hole_10_fir');
            $table->boolean('hole_10_gir');
            $table->integer('hole_10_par');
            $table->integer('hole_10_points');

            $table->integer('hole_11_score');
            $table->integer('hole_11_putts');
            $table->integer('hole_11_drops');
            $table->boolean('hole_11_fir');
            $table->boolean('hole_11_gir');
            $table->integer('hole_11_par');
            $table->integer('hole_11_points');

            $table->integer('hole_12_score');
            $table->integer('hole_12_putts');
            $table->integer('hole_12_drops');
            $table->boolean('hole_12_fir');
            $table->boolean('hole_12_gir');
            $table->integer('hole_12_par');
            $table->integer('hole_12_points');

            $table->integer('hole_13_score');
            $table->integer('hole_13_putts');
            $table->integer('hole_13_drops');
            $table->boolean('hole_13_fir');
            $table->boolean('hole_13_gir'); 
            $table->integer('hole_13_par');
            $table->integer('hole_13_points');

            $table->integer('hole_14_score');
            $table->integer('hole_14_putts');
            $table->integer('hole_14_drops');
            $table->boolean('hole_14_fir');
            $table->boolean('hole_14_gir'); 
            $table->integer('hole_14_par');
            $table->integer('hole_14_points');

            $table->integer('hole_15_score');
            $table->integer('hole_15_putts');
            $table->integer('hole_15_drops');
            $table->boolean('hole_15_fir');
            $table->boolean('hole_15_gir'); 
            $table->integer('hole_15_par');
            $table->integer('hole_15_points');

            $table->integer('hole_16_score');
            $table->integer('hole_16_putts');
            $table->integer('hole_16_drops');
            $table->boolean('hole_16_fir');
            $table->boolean('hole_16_gir');
            $table->integer('hole_16_par');
            $table->integer('hole_16_points');

            $table->integer('hole_17_score');
            $table->integer('hole_17_putts');
            $table->integer('hole_17_drops');
            $table->boolean('hole_17_fir');
            $table->boolean('hole_17_gir');
            $table->integer('hole_17_par');
            $table->integer('hole_17_points');

            $table->integer('hole_18_score');
            $table->integer('hole_18_putts');
            $table->integer('hole_18_drops');
            $table->boolean('hole_18_fir');
            $table->boolean('hole_18_gir');
            $table->integer('hole_18_par');
            $table->integer('hole_18_points');

            $table->integer('hole_19_score');
            $table->integer('hole_19_putts');
            $table->integer('hole_19_drops');
            $table->boolean('hole_19_fir');
            $table->boolean('hole_19_gir');

            $table->integer('hole_20_score');
            $table->integer('hole_20_putts');
            $table->integer('hole_20_drops');
            $table->boolean('hole_20_fir');
            $table->boolean('hole_20_gir');             
            
            $table->integer('hole_21_score');
            $table->integer('hole_21_putts');
            $table->integer('hole_21_drops');
            $table->boolean('hole_21_fir');
            $table->boolean('hole_21_gir');            
            
            $table->integer('hole_22_score');
            $table->integer('hole_22_putts');
            $table->integer('hole_22_drops');
            $table->boolean('hole_22_fir');
            $table->boolean('hole_22_gir');            
            
            $table->integer('hole_23_score');
            $table->integer('hole_23_putts');
            $table->integer('hole_23_drops');
            $table->boolean('hole_23_fir');
            $table->boolean('hole_23_gir');             
            
            $table->integer('hole_24_score');
            $table->integer('hole_24_putts');
            $table->integer('hole_24_drops');
            $table->boolean('hole_24_fir');
            $table->boolean('hole_24_gir');           
            
            $table->integer('hole_25_score');
            $table->integer('hole_25_putts');
            $table->integer('hole_25_drops');
            $table->boolean('hole_25_fir');
            $table->boolean('hole_25_gir');            
            
            $table->integer('hole_26_score');
            $table->integer('hole_26_putts');
            $table->integer('hole_26_drops');
            $table->boolean('hole_26_fir');
            $table->boolean('hole_26_gir');            
            
            $table->integer('hole_27_score');
            $table->integer('hole_27_putts');
            $table->integer('hole_27_drops');
            $table->boolean('hole_27_fir');
            $table->boolean('hole_27_gir');            
            
            $table->text('round_notes');
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
        Schema::dropIfExists('rounds');
    }
}
