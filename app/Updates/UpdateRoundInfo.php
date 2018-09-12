<?php

namespace App\Updates;
 
class UpdateRoundInfo {
 
    /**
     * Update Round data
     */

    public function updateRound($id){
 
        $request = request();     

        $round = \App\Round::find($id);

        $round->round_date = $request->round_date;
     
        $round->hole_1_score = $request->hole_1_score;
        $round->hole_1_putts = $request->hole_1_putts;
        $round->hole_1_drops = $request->hole_1_drops;
        $round->hole_1_fir = $request->hole_1_fir;
        $round->hole_1_gir = $request->hole_1_gir;

        $round->hole_2_score = $request->hole_2_score;
        $round->hole_2_putts = $request->hole_2_putts;
        $round->hole_2_drops = $request->hole_2_drops;
        $round->hole_2_fir = $request->hole_2_fir;
        $round->hole_2_gir = $request->hole_2_gir;        

        $round->hole_3_score = $request->hole_3_score;
        $round->hole_3_putts = $request->hole_3_putts;
        $round->hole_3_drops = $request->hole_3_drops;
        $round->hole_3_fir = $request->hole_3_fir;
        $round->hole_3_gir = $request->hole_3_gir;      
        
        $round->hole_4_score = $request->hole_4_score;
        $round->hole_4_putts = $request->hole_4_putts;
        $round->hole_4_drops = $request->hole_4_drops;
        $round->hole_4_fir = $request->hole_4_fir;
        $round->hole_4_gir = $request->hole_4_gir;        

        $round->hole_5_score = $request->hole_5_score;
        $round->hole_5_putts = $request->hole_5_putts;
        $round->hole_5_drops = $request->hole_5_drops;
        $round->hole_5_fir = $request->hole_5_fir;
        $round->hole_5_gir = $request->hole_5_gir;  
        
        $round->hole_6_score = $request->hole_6_score;
        $round->hole_6_putts = $request->hole_6_putts;
        $round->hole_6_drops = $request->hole_6_drops;
        $round->hole_6_fir = $request->hole_6_fir;
        $round->hole_6_gir = $request->hole_6_gir;  
        
        $round->hole_7_score = $request->hole_7_score;
        $round->hole_7_putts = $request->hole_7_putts;
        $round->hole_7_drops = $request->hole_7_drops;
        $round->hole_7_fir = $request->hole_7_fir;
        $round->hole_7_gir = $request->hole_7_gir;   
        
        $round->hole_8_score = $request->hole_8_score;
        $round->hole_8_putts = $request->hole_8_putts;
        $round->hole_8_drops = $request->hole_8_drops;
        $round->hole_8_fir = $request->hole_8_fir;
        $round->hole_8_gir = $request->hole_8_gir;      
        
        $round->hole_9_score = $request->hole_9_score;
        $round->hole_9_putts = $request->hole_9_putts;
        $round->hole_9_drops = $request->hole_9_drops;
        $round->hole_9_fir = $request->hole_9_fir;
        $round->hole_9_gir = $request->hole_9_gir;        

        $round->hole_10_score = $request->hole_10_score;
        $round->hole_10_putts = $request->hole_10_putts;
        $round->hole_10_drops = $request->hole_10_drops;
        $round->hole_10_fir = $request->hole_10_fir;
        $round->hole_10_gir = $request->hole_10_gir;  
        
        $round->hole_11_score = $request->hole_11_score;
        $round->hole_11_putts = $request->hole_11_putts;
        $round->hole_11_drops = $request->hole_11_drops;
        $round->hole_11_fir = $request->hole_11_fir;
        $round->hole_11_gir = $request->hole_11_gir;         
        
        $round->hole_12_score = $request->hole_12_score;
        $round->hole_12_putts = $request->hole_12_putts;
        $round->hole_12_drops = $request->hole_12_drops;
        $round->hole_12_fir = $request->hole_12_fir;
        $round->hole_12_gir = $request->hole_12_gir;     
        
        $round->hole_12_score = $request->hole_12_score;
        $round->hole_12_putts = $request->hole_12_putts;
        $round->hole_12_drops = $request->hole_12_drops;
        $round->hole_12_fir = $request->hole_12_fir;
        $round->hole_12_gir = $request->hole_12_gir;          

        $round->hole_13_score = $request->hole_13_score;
        $round->hole_13_putts = $request->hole_13_putts;
        $round->hole_13_drops = $request->hole_13_drops;
        $round->hole_13_fir = $request->hole_13_fir;
        $round->hole_13_gir = $request->hole_13_gir;      
        
        $round->hole_14_score = $request->hole_14_score;
        $round->hole_14_putts = $request->hole_14_putts;
        $round->hole_14_drops = $request->hole_14_drops;
        $round->hole_14_fir = $request->hole_14_fir;
        $round->hole_14_gir = $request->hole_14_gir;     
        
        $round->hole_15_score = $request->hole_15_score;
        $round->hole_15_putts = $request->hole_15_putts;
        $round->hole_15_drops = $request->hole_15_drops;
        $round->hole_15_fir = $request->hole_15_fir;
        $round->hole_15_gir = $request->hole_15_gir;   
        
        $round->hole_16_score = $request->hole_16_score;
        $round->hole_16_putts = $request->hole_16_putts;
        $round->hole_16_drops = $request->hole_16_drops;
        $round->hole_16_fir = $request->hole_16_fir;
        $round->hole_16_gir = $request->hole_16_gir;    
        
        $round->hole_17_score = $request->hole_17_score;
        $round->hole_17_putts = $request->hole_17_putts;
        $round->hole_17_drops = $request->hole_17_drops;
        $round->hole_17_fir = $request->hole_17_fir;
        $round->hole_17_gir = $request->hole_17_gir;    
        
        $round->hole_18_score = $request->hole_18_score;
        $round->hole_18_putts = $request->hole_18_putts;
        $round->hole_18_drops = $request->hole_18_drops;
        $round->hole_18_fir = $request->hole_18_fir;
        $round->hole_18_gir = $request->hole_18_gir;    
        
        $round->hole_19_score = $request->hole_19_score;
        $round->hole_19_putts = $request->hole_19_putts;
        $round->hole_19_drops = $request->hole_19_drops;
        $round->hole_19_fir = $request->hole_19_fir;
        $round->hole_19_gir = $request->hole_19_gir;  
        
        $round->hole_20_score = $request->hole_20_score;
        $round->hole_20_putts = $request->hole_20_putts;
        $round->hole_20_drops = $request->hole_20_drops;
        $round->hole_20_fir = $request->hole_20_fir;
        $round->hole_20_gir = $request->hole_20_gir;      
        
        $round->hole_21_score = $request->hole_21_score;
        $round->hole_21_putts = $request->hole_21_putts;
        $round->hole_21_drops = $request->hole_21_drops;
        $round->hole_21_fir = $request->hole_21_fir;
        $round->hole_21_gir = $request->hole_21_gir;      
        
        $round->hole_22_score = $request->hole_22_score;
        $round->hole_22_putts = $request->hole_22_putts;
        $round->hole_22_drops = $request->hole_22_drops;
        $round->hole_22_fir = $request->hole_22_fir;
        $round->hole_22_gir = $request->hole_22_gir;    
        
        $round->hole_23_score = $request->hole_23_score;
        $round->hole_23_putts = $request->hole_23_putts;
        $round->hole_23_drops = $request->hole_23_drops;
        $round->hole_23_fir = $request->hole_23_fir;
        $round->hole_23_gir = $request->hole_23_gir;    
        
        $round->hole_24_score = $request->hole_24_score;
        $round->hole_24_putts = $request->hole_24_putts;
        $round->hole_24_drops = $request->hole_24_drops;
        $round->hole_24_fir = $request->hole_24_fir;
        $round->hole_24_gir = $request->hole_24_gir;   
        
        $round->hole_25_score = $request->hole_25_score;
        $round->hole_25_putts = $request->hole_25_putts;
        $round->hole_25_drops = $request->hole_25_drops;
        $round->hole_25_fir = $request->hole_25_fir;
        $round->hole_25_gir = $request->hole_25_gir;    
        
        $round->hole_26_score = $request->hole_26_score;
        $round->hole_26_putts = $request->hole_26_putts;
        $round->hole_26_drops = $request->hole_26_drops;
        $round->hole_26_fir = $request->hole_26_fir;
        $round->hole_26_gir = $request->hole_26_gir;        
        
        $round->hole_27_score = $request->hole_27_score;
        $round->hole_27_putts = $request->hole_27_putts;
        $round->hole_27_drops = $request->hole_27_drops;
        $round->hole_27_fir = $request->hole_27_fir;
        $round->hole_27_gir = $request->hole_27_gir;          

        $round->round_notes = $request->round_notes;

        $round->save();

    }
 
}