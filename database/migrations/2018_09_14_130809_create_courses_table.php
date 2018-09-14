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
            $table->string('first_nine_name');
            $table->string('second_nine_name');
            $table->string('third_nine_name');

            $table->integer('holes');

            $table->integer('white_sss');
            $table->integer('yellow_sss');
            $table->integer('red_sss');

            $table->integer('white_half_sss');
            $table->integer('yellow_half_sss');
            $table->integer('red_half_sss');            

            $table->integer('white_first_second_sss');
            $table->integer('white_second_third_sss');
            $table->integer('white_first_third_sss');

            $table->integer('yellow_first_second_sss');
            $table->integer('yellow_second_third_sss');
            $table->integer('yellow_first_third_sss');
            
            $table->integer('red_first_second_sss');
            $table->integer('red_second_third_sss');
            $table->integer('red_first_third_sss');            

            $table->integer('hole_1_white');
            $table->integer('hole_1_white_par');
            $table->integer('hole_1_white_stroke_index');
            $table->integer('hole_1_yellow');
            $table->integer('hole_1_yellow_par');
            $table->integer('hole_1_yellow_stroke_index');
            $table->integer('hole_1_red');
            $table->integer('hole_1_red_par');
            $table->integer('hole_1_red_stroke_index');            

            $table->integer('hole_2_white');
            $table->integer('hole_2_white_par');
            $table->integer('hole_2_white_stroke_index');
            $table->integer('hole_2_yellow');
            $table->integer('hole_2_yellow_par');
            $table->integer('hole_2_yellow_stroke_index');
            $table->integer('hole_2_red');
            $table->integer('hole_2_red_par');
            $table->integer('hole_2_red_stroke_index'); 
            
            $table->integer('hole_3_white');
            $table->integer('hole_3_white_par');
            $table->integer('hole_3_white_stroke_index');
            $table->integer('hole_3_yellow');
            $table->integer('hole_3_yellow_par');
            $table->integer('hole_3_yellow_stroke_index');
            $table->integer('hole_3_red');
            $table->integer('hole_3_red_par');
            $table->integer('hole_3_red_stroke_index');      
            
            $table->integer('hole_4_white');
            $table->integer('hole_4_white_par');
            $table->integer('hole_4_white_stroke_index');
            $table->integer('hole_4_yellow');
            $table->integer('hole_4_yellow_par');
            $table->integer('hole_4_yellow_stroke_index');
            $table->integer('hole_4_red');
            $table->integer('hole_4_red_par');
            $table->integer('hole_4_red_stroke_index');   
            
            $table->integer('hole_5_white');
            $table->integer('hole_5_white_par');
            $table->integer('hole_5_white_stroke_index');
            $table->integer('hole_5_yellow');
            $table->integer('hole_5_yellow_par');
            $table->integer('hole_5_yellow_stroke_index');
            $table->integer('hole_5_red');
            $table->integer('hole_5_red_par');
            $table->integer('hole_5_red_stroke_index');     
            
            $table->integer('hole_6_white');
            $table->integer('hole_6_white_par');
            $table->integer('hole_6_white_stroke_index');
            $table->integer('hole_6_yellow');
            $table->integer('hole_6_yellow_par');
            $table->integer('hole_6_yellow_stroke_index');
            $table->integer('hole_6_red');
            $table->integer('hole_6_red_par');
            $table->integer('hole_6_red_stroke_index');     
            
            $table->integer('hole_7_white');
            $table->integer('hole_7_white_par');
            $table->integer('hole_7_white_stroke_index');
            $table->integer('hole_7_yellow');
            $table->integer('hole_7_yellow_par');
            $table->integer('hole_7_yellow_stroke_index');
            $table->integer('hole_7_red');
            $table->integer('hole_7_red_par');
            $table->integer('hole_7_red_stroke_index');  
            
            $table->integer('hole_8_white');
            $table->integer('hole_8_white_par');
            $table->integer('hole_8_white_stroke_index');
            $table->integer('hole_8_yellow');
            $table->integer('hole_8_yellow_par');
            $table->integer('hole_8_yellow_stroke_index');
            $table->integer('hole_8_red');
            $table->integer('hole_8_red_par');
            $table->integer('hole_8_red_stroke_index');        
            
            $table->integer('hole_9_white');
            $table->integer('hole_9_white_par');
            $table->integer('hole_9_white_stroke_index');
            $table->integer('hole_9_yellow');
            $table->integer('hole_9_yellow_par');
            $table->integer('hole_9_yellow_stroke_index');
            $table->integer('hole_9_red');
            $table->integer('hole_9_red_par');
            $table->integer('hole_9_red_stroke_index');            
            
            $table->integer('hole_10_white');
            $table->integer('hole_10_white_par');
            $table->integer('hole_10_white_stroke_index');
            $table->integer('hole_10_yellow');
            $table->integer('hole_10_yellow_par');
            $table->integer('hole_10_yellow_stroke_index');
            $table->integer('hole_10_red');
            $table->integer('hole_10_red_par');
            $table->integer('hole_10_red_stroke_index'); 
            
            $table->integer('hole_11_white');
            $table->integer('hole_11_white_par');
            $table->integer('hole_11_white_stroke_index');
            $table->integer('hole_11_yellow');
            $table->integer('hole_11_yellow_par');
            $table->integer('hole_11_yellow_stroke_index');
            $table->integer('hole_11_red');
            $table->integer('hole_11_red_par');
            $table->integer('hole_11_red_stroke_index');    
            
            $table->integer('hole_12_white');
            $table->integer('hole_12_white_par');
            $table->integer('hole_12_white_stroke_index');
            $table->integer('hole_12_yellow');
            $table->integer('hole_12_yellow_par');
            $table->integer('hole_12_yellow_stroke_index');
            $table->integer('hole_12_red');
            $table->integer('hole_12_red_par');
            $table->integer('hole_12_red_stroke_index');   
            
            $table->integer('hole_13_white');
            $table->integer('hole_13_white_par');
            $table->integer('hole_13_white_stroke_index');
            $table->integer('hole_13_yellow');
            $table->integer('hole_13_yellow_par');
            $table->integer('hole_13_yellow_stroke_index');
            $table->integer('hole_13_red');
            $table->integer('hole_13_red_par');
            $table->integer('hole_13_red_stroke_index');    
            
            $table->integer('hole_14_white');
            $table->integer('hole_14_white_par');
            $table->integer('hole_14_white_stroke_index');
            $table->integer('hole_14_yellow');
            $table->integer('hole_14_yellow_par');
            $table->integer('hole_14_yellow_stroke_index');
            $table->integer('hole_14_red');
            $table->integer('hole_14_red_par');
            $table->integer('hole_14_red_stroke_index');   
            
            $table->integer('hole_15_white');
            $table->integer('hole_15_white_par');
            $table->integer('hole_15_white_stroke_index');
            $table->integer('hole_15_yellow');
            $table->integer('hole_15_yellow_par');
            $table->integer('hole_15_yellow_stroke_index');
            $table->integer('hole_15_red');
            $table->integer('hole_15_red_par');
            $table->integer('hole_15_red_stroke_index'); 
            
            $table->integer('hole_16_white');
            $table->integer('hole_16_white_par');
            $table->integer('hole_16_white_stroke_index');
            $table->integer('hole_16_yellow');
            $table->integer('hole_16_yellow_par');
            $table->integer('hole_16_yellow_stroke_index');
            $table->integer('hole_16_red');
            $table->integer('hole_16_red_par');
            $table->integer('hole_16_red_stroke_index');  
            
            $table->integer('hole_17_white');
            $table->integer('hole_17_white_par');
            $table->integer('hole_17_white_stroke_index');
            $table->integer('hole_17_yellow');
            $table->integer('hole_17_yellow_par');
            $table->integer('hole_17_yellow_stroke_index');
            $table->integer('hole_17_red');
            $table->integer('hole_17_red_par');
            $table->integer('hole_17_red_stroke_index');      
            
            $table->integer('hole_18_white');
            $table->integer('hole_18_white_par');
            $table->integer('hole_18_white_stroke_index');
            $table->integer('hole_18_yellow');
            $table->integer('hole_18_yellow_par');
            $table->integer('hole_18_yellow_stroke_index');
            $table->integer('hole_18_red');
            $table->integer('hole_18_red_par');
            $table->integer('hole_18_red_stroke_index'); 
            
            $table->integer('hole_19_white');
            $table->integer('hole_19_white_par');
            $table->integer('hole_19_white_stroke_index_front');
            $table->integer('hole_19_white_stroke_index_back');
            $table->integer('hole_19_yellow');
            $table->integer('hole_19_yellow_par');
            $table->integer('hole_19_yellow_stroke_index_front');
            $table->integer('hole_19_yellow_stroke_index_back');
            $table->integer('hole_19_red');
            $table->integer('hole_19_red_par');
            $table->integer('hole_19_red_stroke_index_front'); 
            $table->integer('hole_19_red_stroke_index_back'); 
            
            $table->integer('hole_20_white');
            $table->integer('hole_20_white_par');
            $table->integer('hole_20_white_stroke_index_front');
            $table->integer('hole_20_white_stroke_index_back');
            $table->integer('hole_20_yellow');
            $table->integer('hole_20_yellow_par');
            $table->integer('hole_20_yellow_stroke_index_front');
            $table->integer('hole_20_yellow_stroke_index_back');
            $table->integer('hole_20_red');
            $table->integer('hole_20_red_par');
            $table->integer('hole_20_red_stroke_index_front'); 
            $table->integer('hole_20_red_stroke_index_back');             

            $table->integer('hole_21_white');
            $table->integer('hole_21_white_par');
            $table->integer('hole_21_white_stroke_index_front');
            $table->integer('hole_21_white_stroke_index_back');
            $table->integer('hole_21_yellow');
            $table->integer('hole_21_yellow_par');
            $table->integer('hole_21_yellow_stroke_index_front');
            $table->integer('hole_21_yellow_stroke_index_back');
            $table->integer('hole_21_red');
            $table->integer('hole_21_red_par');
            $table->integer('hole_21_red_stroke_index_front'); 
            $table->integer('hole_21_red_stroke_index_back');     
            
            $table->integer('hole_22_white');
            $table->integer('hole_22_white_par');
            $table->integer('hole_22_white_stroke_index_front');
            $table->integer('hole_22_white_stroke_index_back');
            $table->integer('hole_22_yellow');
            $table->integer('hole_22_yellow_par');
            $table->integer('hole_22_yellow_stroke_index_front');
            $table->integer('hole_22_yellow_stroke_index_back');
            $table->integer('hole_22_red');
            $table->integer('hole_22_red_par');
            $table->integer('hole_22_red_stroke_index_front'); 
            $table->integer('hole_22_red_stroke_index_back');          
            
            $table->integer('hole_23_white');
            $table->integer('hole_23_white_par');
            $table->integer('hole_23_white_stroke_index_front');
            $table->integer('hole_23_white_stroke_index_back');
            $table->integer('hole_23_yellow');
            $table->integer('hole_23_yellow_par');
            $table->integer('hole_23_yellow_stroke_index_front');
            $table->integer('hole_23_yellow_stroke_index_back');
            $table->integer('hole_23_red');
            $table->integer('hole_23_red_par');
            $table->integer('hole_23_red_stroke_index_front'); 
            $table->integer('hole_23_red_stroke_index_back');    
            
            $table->integer('hole_24_white');
            $table->integer('hole_24_white_par');
            $table->integer('hole_24_white_stroke_index_front');
            $table->integer('hole_24_white_stroke_index_back');
            $table->integer('hole_24_yellow');
            $table->integer('hole_24_yellow_par');
            $table->integer('hole_24_yellow_stroke_index_front');
            $table->integer('hole_24_yellow_stroke_index_back');
            $table->integer('hole_24_red');
            $table->integer('hole_24_red_par');
            $table->integer('hole_24_red_stroke_index_front'); 
            $table->integer('hole_24_red_stroke_index_back');       
            
            $table->integer('hole_25_white');
            $table->integer('hole_25_white_par');
            $table->integer('hole_25_white_stroke_index_front');
            $table->integer('hole_25_white_stroke_index_back');
            $table->integer('hole_25_yellow');
            $table->integer('hole_25_yellow_par');
            $table->integer('hole_25_yellow_stroke_index_front');
            $table->integer('hole_25_yellow_stroke_index_back');
            $table->integer('hole_25_red');
            $table->integer('hole_25_red_par');
            $table->integer('hole_25_red_stroke_index_front'); 
            $table->integer('hole_25_red_stroke_index_back');     
            
            $table->integer('hole_26_white');
            $table->integer('hole_26_white_par');
            $table->integer('hole_26_white_stroke_index_front');
            $table->integer('hole_26_white_stroke_index_back');
            $table->integer('hole_26_yellow');
            $table->integer('hole_26_yellow_par');
            $table->integer('hole_26_yellow_stroke_index_front');
            $table->integer('hole_26_yellow_stroke_index_back');
            $table->integer('hole_26_red');
            $table->integer('hole_26_red_par');
            $table->integer('hole_26_red_stroke_index_front'); 
            $table->integer('hole_26_red_stroke_index_back');   
            
            $table->integer('hole_27_white');
            $table->integer('hole_27_white_par');
            $table->integer('hole_27_white_stroke_index_front');
            $table->integer('hole_27_white_stroke_index_back');
            $table->integer('hole_27_yellow');
            $table->integer('hole_27_yellow_par');
            $table->integer('hole_27_yellow_stroke_index_front');
            $table->integer('hole_27_yellow_stroke_index_back');
            $table->integer('hole_27_red');
            $table->integer('hole_27_red_par');
            $table->integer('hole_27_red_stroke_index_front'); 
            $table->integer('hole_27_red_stroke_index_back');
            
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
