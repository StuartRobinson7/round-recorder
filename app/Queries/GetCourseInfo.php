<?php

namespace App\Queries;

use App\Course;
 
class GetCourseInfo {
 
    /**
     * Get Course data and totals
     */

    public function courseInfo($id){

        $course = \App\Course::where('id', $id)->first();

        return $course;

    }
 
}