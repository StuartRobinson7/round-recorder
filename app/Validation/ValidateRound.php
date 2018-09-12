<?php

namespace App\Validation;

use Validator;
 
class ValidateRound {
 
    /**
     * Validate Course data
     */

    public function roundValidation(){

        $request = request();
 
        $validator = Validator::make($request->all(), [      
         
        ]);

        if ( $validator->fails() ) {
            return $validator->messages();
        }

        return true;

    }
 
}