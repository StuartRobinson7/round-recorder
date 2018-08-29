<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class CourseComposer
{
    
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(CourseRepository $course_info)
    {

        $this->$course = $course_info->getCourseInfo();

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('course', $course);
    }
}