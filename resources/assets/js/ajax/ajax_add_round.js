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