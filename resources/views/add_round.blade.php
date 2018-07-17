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



                    <form method="POST" action="{{ route('add_round') }}" aria-label="{{ __('Add Round') }}">
                        @csrf


                        <input id="player_id" type="hidden" class="hidden" name="player_id" value="{{ Auth::user()->id }}">

                        <label>Course</label>

                        <select id="course_id" name="course_id" class="form-control">
                        @foreach($course as $key => $data)
                            <option value="{{$data->id}}">{{$data->property_name}} - {{$data->course_name}}</option>
                        @endforeach
                        </select>


                        <label>Date</label>

                        <div class="input-group date">
                            <input type="text" class="form-control{{ $errors->has('round_date') ? ' is-invalid' : '' }}" id="round_date" placeholder="DD/MM/YYYY" name="round_date" value="{{ old('round_date') }}">
                        </div>

                       <!-- <input id="round_date" type="text" class="form-control{{ $errors->has('round_date') ? ' is-invalid' : '' }}" name="round_date" value="{{ old('round_date') }}"> -->




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
