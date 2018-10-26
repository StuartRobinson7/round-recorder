@if($selected_size === 'half' && $course_info->holes === 18)

<h3 class="title"><span>Which holes did you play?</span></h3>

<div class="row">

    <div class="col-12 col-md-8 offset-md-4">

        <label>Nine Played</label><br />

        <div class="radio-group">

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="nine" id="first-nine" value="first-nine" checked>
                <label class="custom-control-label" for="first-nine">Front 9</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="nine" id="second-nine" value="second-nine">
                <label class="custom-control-label" for="second-nine">Back 9</label>
            </div>  

        </div>

    </div>

</div>


@elseif($selected_size === 'half' && $course_info->holes === 27)

<h3 class="title"><span>Which holes did you play?</span></h3>

<div class="row">

    <div class="col-12 col-md-8 offset-md-4">

        <label>Nine Played</label><br />

        <div class="radio-group">    

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="nine" id="first-nine" value="first-nine" checked>
                <label class="custom-control-label" for="first-nine">First 9</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="nine" id="second-nine" value="second-nine">
                <label class="custom-control-label" for="second-nine">second 9</label>
            </div>  

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="nine" id="third-nine" value="third-nine">
                <label class="custom-control-label" for="third-nine">third 9</label>
            </div>  

        </div>

    </div>

</div>  

@elseif($selected_size === 'full' && $course_info->holes === 27)    

    <h3 class="title"><span>Which holes did you play?</span></h3>

<div class="row">

    <div class="col-12 col-md-8 offset-md-4">

        <label>Nines Played</label><br />

        <div class="radio-group">    

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="nine" id="first-nine" value="first-nine-second-nine" checked>
                <label class="custom-control-label" for="first-nine">First 9 &amp; second 9</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="nine" id="second-nine" value="second-nine-third-nine">
                <label class="custom-control-label" for="second-nine">second 9 &amp; third 9</label>
            </div>  

            <div class="custom-control custom-radio custom-control-inline">
                <input class="custom-control-input" type="radio" name="nine" id="third-nine" value="first-nine-third-nine">
                <label class="custom-control-label" for="third-nine">first 9 &amp; third 9</label>
            </div>
            
        </div>

     </div>

</div>     

@else

    <input class="form-check-input hidden d-none" type="radio" name="nine" id="first-nine" value="first-nine-second-nine" checked>

@endif   
