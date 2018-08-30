<?php

namespace App\Validation;

use Validator;
 
class ValidateCourse {
 
    /**
     * Validate Course data
     */

    public function courseValidation(){

        $request = request();
 
        $validator = Validator::make($request->all(), [      
            'property_name' => 'required|string',
            'course_name' => 'required|string',
            'holes' => 'required|integer',          
        ]);

        if ( $validator->fails() ) {
            return $validator->messages();
        }

        return true;

    }
 
}