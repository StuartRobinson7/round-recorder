@extends('layouts.app')

@section('title', 'Add Round')

@section('content')

            <div class="container">

                <h1>{{ __('Add Round') }}</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="alert alert-danger" style="display:none;">
                    
                    </div>




                    <form id="add_round">

                        @csrf

                        <input id="player_id" type="hidden" class="hidden" name="player_id" value="{{ Auth::user()->id }}">

                        <label>Course</label>

                        <select id="course_id" name="course_id" class="form-control">
                            <option value="" disabled selected>Please Select</option>
                        @foreach($course as $key => $data)

                            <option value="{{$data->id}}" {{ (old("course_id") == $data->id ? "selected":"") }}>{{$data->property_name}} - {{$data->course_name}}</option>

                        @endforeach
                        </select>


                        <br />

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="yards" id="yards-white" value="white">
                            <label class="form-check-label" for="yards-white">Whites</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="yards" id="yards-yellow" value="yellow" checked>
                            <label class="form-check-label" for="yards-yellow">Yellows</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="yards" id="yards-red" value="red">
                            <label class="form-check-label" for="yards-reds">Reds</label>
                        </div>

                        <div class="clearfix"></div>

                        <br />

                        <label>Date</label>

                        <div class="input-group date">
                            <input type="text" class="form-control{{ $errors->has('round_date') ? ' is-invalid' : '' }}" id="round_date" placeholder="DD/MM/YYYY" name="round_date" value="{{ old('round_date') }}">
                        </div>


                        <div id="add_round_form"></div>
                        <!-- /.add_round_form -->




                        <label>Round Notes</label>
                        <textarea id="round_notes" type="textarea" rows="4" class="form-control" name="round_notes" value="{{ old('round_notes') }}"> </textarea>                         

                        <button id="submit" type="submit" class="btn btn-cta">
                            <span>{{ __('Add Round') }}</span>
                        </button>

                    </form>

            </div>
            <!--/.container -->




<script>


$(document).ready(function(){
    
    
    var url = "<?php echo route('rounds.store')?>";

    $('#course_id').on('change', function() {

        var selected_yards = $('input:radio[name=yards]:checked').val();
        var selected_course_id = $(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $.ajax({         
            url: '/ajax_getcourse',
            dataType: "json",
            method: 'get',
            data: {selected_course_id: selected_course_id, selected_yards: selected_yards},      
            success: function (response) {
                $("#add_round_form").html(response)  
            },
            error:function(error){ 
                console.log(error)
            }            
        });       

    }); 

    $('input:radio[name=yards]').on('change', function() {

        var selected_yards = $(this).val();
        var selected_course_id = $('#course_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $.ajax({         
            url: '/ajax_getcourse',
            dataType: "json",
            method: 'get',
            data: {selected_course_id: selected_course_id, selected_yards: selected_yards},      
            success: function (response) {
                $("#add_round_form").html(response)  
            },
            error:function(error){ 
                console.log(error)
            }            
        });       

    });     
    

            $('#add_round').on('submit',function(e){

               e.preventDefault();

               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

               $.ajax({
                  url: url,
                  method: 'post',
                  data: $(this).serialize(),
                  success: function(data){

                        if(data == "success")                        
                            window.location.href = '/profile';
                        else

                  		$.each(data.errors, function(key, value){
                  			$('.alert-danger').show();
                            $('.alert-danger').append('<p>'+value+'</p>');
                            $('input[name="' + key + '"], select[name="' + key + '"]').addClass('is-invalid');                            
                            
                  		});
                    },
                    error:function(error){ 
                        console.log(error)
                    }                       
                            
                  });
               }); 
               
    function resetErrors() {
        $('form input, form select').removeClass('is-invalid');
    }               

});

</script>


@endsection
