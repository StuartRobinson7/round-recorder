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




                    <form>

                        @csrf

                        <input id="player_id" type="hidden" class="hidden" name="player_id" value="{{ Auth::user()->id }}">

                        <label>Course</label>

                        <select id="course_id" name="course_id" class="form-control">
                            <option value="" disabled selected>Please Select</option>
                        @foreach($course as $key => $data)

                            <option value="{{$data->id}}" {{ (old("course_id") == $data->id ? "selected":"") }}>{{$data->property_name}} - {{$data->course_name}}</option>

                        @endforeach
                        </select>


                        <label>Date</label>

                        <div class="input-group date">
                            <input type="text" class="form-control{{ $errors->has('round_date') ? ' is-invalid' : '' }}" id="round_date" placeholder="DD/MM/YYYY" name="round_date" value="{{ old('round_date') }}">
                        </div>


                        <div id="add_round_form"></div>
                        <!-- /.add_round_form -->




                        <label>Round Notes</label>
                        <textarea id="round_notes" type="textarea" rows="4" class="form-control" name="round_notes" value="{{ old('round_notes') }}"> </textarea>                         

                        <button id="submit" type="submit" class="btn btn-primary">
                            {{ __('Add Round') }}
                        </button>

                    </form>

            </div>
            <!--/.container -->




<script>

$(document).ready(function(){
    
    $('#course_id').on('change', function() {

        var selected_course_id=$(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $.ajax({         
            url: '/ajax_getcourse',
            dataType: "json",
            method: 'get',
            data: {selected_course_id: selected_course_id},      
            success: function (response) {
                //console.log(response)
                //alert(response)
                $("#add_round_form").html(response)  
            },
            error:function(error){ 
                console.log(error)
            }            
        });       

    }); 
    
    /*
    $('#course_id').each(function() {

        var selected_course_id=$(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $.ajax({         
            url: '/ajax_getcourse',
            dataType: "json",
            method: 'get',
            data: {selected_course_id: selected_course_id},      
            success: function (response) {
                //console.log(response)
                //alert(response)
                $("#add_round_form").html(response)  
            },
            error: function (request, status, error) {
                json = $.parseJSON(request.responseText);
                
                $.each(json.errors, function(key, value){
                    $('.alert-danger').show();
                    $('.alert-danger').append('<p>'+value+'</p>');
                });
                $("#result").html(''); 
            }           
        });       

    });     
    */

            $('#submit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: '/add_round',
                  method: 'post',
                  data: {
                     course_id: $('#course_id').val(),      
                     round_date: $('#round_date').val(),
                     player_id: $('#player_id').val(),    
                     hole_1_score: $('#hole_1_score').val(),
                     hole_2_score: $('#hole_2_score').val(),
                     hole_3_score: $('#hole_3_score').val(),
                     hole_4_score: $('#hole_4_score').val(),
                     hole_5_score: $('#hole_5_score').val(),
                     hole_6_score: $('#hole_6_score').val(),
                     hole_7_score: $('#hole_7_score').val(),
                     hole_8_score: $('#hole_8_score').val(),
                     hole_9_score: $('#hole_9_score').val(),
                     hole_10_score: $('#hole_10_score').val(),
                     hole_11_score: $('#hole_11_score').val(),
                     hole_12_score: $('#hole_12_score').val(),
                     hole_13_score: $('#hole_13_score').val(),
                     hole_14_score: $('#hole_14_score').val(),
                     hole_15_score: $('#hole_15_score').val(),
                     hole_16_score: $('#hole_16_score').val(),
                     hole_17_score: $('#hole_17_score').val(),
                     hole_18_score: $('#hole_18_score').val()                     
                  },
                  success: function(data){

                        if(data == "success")                        
                            window.location.href = '/profile';
                        else

                  		$.each(data.errors, function(key, value){
                  			$('.alert-danger').show();
                            $('.alert-danger').append('<p>'+value+'</p>');
                            //var msg = '<label class="error" for="'+key+'">'+value+'</label>';
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
        //$('label.error').remove();
    }               

});

</script>


@endsection
