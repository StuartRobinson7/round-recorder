@extends('layouts.app')

@section('title', 'Add Round')

@section('content')

            <div class="container">

                <h1>{{ __('Add Round') }}</h1>

                    <form method="POST" action="{{ route('add_round') }}" aria-label="{{ __('Add Round') }}">
                        @csrf


                        <label>Course</label>

                        <select id="course_id" name="course_id" class="form-control">
                        @foreach($course as $key => $data)
                            <option value="{{$data->id}}">{{$data->property_name}} - {{$data->course_name}}</option>
                        @endforeach
                        </select>


                        <label>Date</label>
                        <input id="round_date" type="text" class="form-control{{ $errors->has('round_date') ? ' is-invalid' : '' }}" name="round_date" value="{{ old('round_date') }}">




                        <div id="add_round_form">
                                                
                            
                        
                        </div>
                        <!-- /.add_round_form -->




                        <label>Round Notes</label>
                        <textarea id="round_notes" type="textarea" rows="4" class="form-control" name="round_notes" value="{{ old('round_notes') }}"> </textarea>                         

                        <button type="submit" class="btn btn-primary">
                            {{ __('Add Round') }}
                        </button>

                    </form>

            </div>
            <!--/.container -->


<script>

$(document).ready(function(){

    

    $('#course_id').on('change', function() {

        var id=$(this).val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $.ajax({          
            url: '/ajax_getcourse',
            method: 'get',
            data: { id:id },
            cache: false,          
            success: function (data) {
                alert(id);
                $("#add_round_form").innerHTML=response; 
            },
            error:function(error)
                {
                    console.log(error);
                }           
        });       

    });


});

/*
    $.ajax({
        url:'/ajax/get_course',
        data:{id:$cur},
        cache:false,
        type:'POST',
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        success:function(data){ // this is view data returned by controller 
            console.log(data);
            $('#add_round_form').html(data); // use it to fill your results
        }
    };

      var id = $(this).val();
      var token = $("input[name='_course_id']").val();
      $.ajax({
          url: '/ajax/get_course',
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='id_state'").html('');
            $("select[name='id_state'").html(data.options);
          }
      }); 
*/

</script>


@endsection
