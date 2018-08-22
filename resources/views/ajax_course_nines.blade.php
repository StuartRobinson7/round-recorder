
@if($selected_size === 'half' && $course_info->holes === 18)

    <label>Nine Played</label><br />

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="nine" id="first-nine" value="first-nine" checked>
        <label class="form-check-label" for="first-nine">Front 9</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="nine" id="second-nine" value="second-nine">
        <label class="form-check-label" for="second-nine">Back 9</label>
    </div>  

@elseif($selected_size === 'half' && $course_info->holes === 27)

    <label>Nine Played</label><br />

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="nine" id="first-nine" value="first-nine" checked>
        <label class="form-check-label" for="first-nine">First 9</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="nine" id="second-nine" value="second-nine">
        <label class="form-check-label" for="second-nine">second 9</label>
    </div>  

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="nine" id="third-nine" value="third-nine">
        <label class="form-check-label" for="third-nine">third 9</label>
    </div>  


@elseif($selected_size === 'full' && $course_info->holes === 27)    

    <label>Nines Played</label><br />

    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="nine" id="first-nine" value="first-nine-second-nine" checked>
    <label class="form-check-label" for="first-nine">First 9 &amp; second 9</label>
    </div>

    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="nine" id="second-nine" value="second-nine-third-nine">
    <label class="form-check-label" for="second-nine">second 9 &amp; third 9</label>
    </div>  

    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="nine" id="third-nine" value="first-nine-third-nine">
    <label class="form-check-label" for="third-nine">first 9 &amp; third 9</label>
    </div>
    

@else

    <input class="form-check-input hidden d-none" type="radio" name="nine" id="first-nine" value="first-nine-second-nine" checked>

@endif   

