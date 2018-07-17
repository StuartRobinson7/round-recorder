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

                    <form id="add_course" @submit="checkForm" method="POST" action="{{ route('add_round') }}" aria-label="{{ __('Add Round') }}">
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


                        <div id="add_round_form"></div>
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

</script>


@endsection
